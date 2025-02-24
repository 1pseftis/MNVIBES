<?php
/**
 * @brief		VK.com Login Handler
 * @author		<a href='https://ipshelp.ru'>IPSHelp.Ru</a>
 * @copyright	(c) 2016 Adles Technology, Ltd.
 */

namespace IPS\Login;

/* To prevent PHP errors (extending class does not exist) revealing path */
if ( !defined( '\IPS\SUITE_UNIQUE_KEY' ) )
{
	header( ( isset( $_SERVER['SERVER_PROTOCOL'] ) ? $_SERVER['SERVER_PROTOCOL'] : 'HTTP/1.0' ) . ' 403 Forbidden' );
	exit;
}

/**
 * VK Login Handler
 */
class _VK extends LoginAbstract
{
	/** 
	 * @brief	Icon
	 */
	public static $icon = 'vk';
	
	/**
	 * Get Form
	 *
	 * @param	\IPS\Http\Url	$url			The URL for the login page
	 * @param	bool			$ucp			Is UCP? (as opposed to login form)
	 * @param	\IPS\Http\Url	$destination	The URL to redirect to after a successful login
	 * @return	string
	 */
	public function loginForm( \IPS\Http\Url $url, $ucp = FALSE, \IPS\Http\Url $destination = NULL )
	{
		$url = \IPS\Http\Url::internal( 'applications/core/interface/vk/auth.php', 'none' );
		if ( $destination )
		{
			$url = $url->setQueryString( 'ref', base64_encode( $destination ) );
		}

		if ( $ucp )
		{
			$state = "ucp-" . \IPS\Session::i()->csrfKey;
		}
		else
		{
			$state = \IPS\Dispatcher::i()->controllerLocation . "-" . \IPS\Session::i()->csrfKey;
		}

		$scope = 'email';

		if ( \IPS\Settings::i()->profile_comments )
		{
			$scope .= ',status';
		}
				
		return \IPS\Theme::i()->getTemplate( 'plugins', 'core', 'global' )->loginVKcom( "https://oauth.vk.com/authorize?client_id={$this->settings['app_id']}&amp;display={$display}&amp;redirect_uri=".urlencode( $url ) . "&amp;scope={$scope}&amp;response_type={$response_type}&amp;state={$state}"  );
	}
	
	/**
	 * Authenticate
	 *
	 * @param	string			$url	The URL for the login page
	 * @param	\IPS\Member		$member	If we want to integrate this login method with an existing member, provide the member object
	 * @return	\IPS\Member
	 * @throws	\IPS\Login\Exception
	 */
	public function authenticate( $url, $member=NULL )
	{
		$url = $url->setQueryString( 'loginProcess', 'vk' );
		
		try
		{
			/* CSRF Check */
			if ( \IPS\Request::i()->state !== \IPS\Session::i()->csrfKey )
			{
				throw new \IPS\Login\Exception( 'CSRF_FAIL', \IPS\Login\Exception::INTERNAL_ERROR );
			}
			
			/* Get a token */
			try
			{
				$redirectUri = \IPS\Http\Url::internal( 'applications/core/interface/vk/auth.php', 'none' );
				if ( isset( \IPS\Request::i()->ref ) )
				{
					$redirectUri = $redirectUri->setQueryString( 'ref', \IPS\Request::i()->ref );
				}				
				
				$response = \IPS\Http\Url::external( "https://oauth.vk.com/access_token" )->request()->post( array(
					'client_id'		=> $this->settings['app_id'],
					'client_secret'	=> $this->settings['app_secret'],
					'redirect_uri'	=> (string) $redirectUri,
					'code'			=> \IPS\Request::i()->code
				) )->decodeJson();
			}
			catch( \RuntimeException $e )
			{
				throw new \IPS\Login\Exception( 'generic_error', \IPS\Login\Exception::INTERNAL_ERROR );
			}

			/* Get the user data */
			$userData = \IPS\Http\Url::external( "https://api.vk.com/method/users.get?user_ids={$response['user_id']}&fields=first_name,last_name,bdate,photo_id,nickname&name_case=nom&lang=ru" )->request()->get()->decodeJson();
			$userData = $userData['response'][0];

			$real_name = $userData['first_name'] . ' ' . $userData['last_name'];

			/* Find or create member */
			$member = $this->createOrUpdateAccount( $member ?: \IPS\Member::load( $userData['uid'], 'vk_help_uid' ), array(
				'vk_help_uid'	=> $userData['uid'],
				'vk_help_token'	=> $response['access_token']
			), $this->settings['real_name'] ? $real_name : NULL, ( isset( $userData['email'] ) AND $response['email'] ) ? $response['email'] : NULL, $response['access_token'], array( 'photo' => TRUE, 'cover' => FALSE, 'status' => '' ) );

			/* Return */
			return $member;
   		}
   		catch ( \IPS\Http\Request\Exception $e )
		{
			throw new \IPS\Login\Exception( 'generic_error', \IPS\Login\Exception::INTERNAL_ERROR );
		}
	}
	
	/**
	 * Link Account
	 *
	 * @param	\IPS\Member	$member		The member
	 * @param	mixed		$details	Details as they were passed to the exception thrown in authenticate()
	 * @return	void
	 */
	public static function link( \IPS\Member $member, $details )
	{
		$userData = \IPS\Http\Url::external( "https://api.vk.com/method/users.get?user_ids={$details}&fields=first_name,last_name,bdate,photo_id,nickname&name_case=nom&lang=ru" )->request()->get()->decodeJson();
		$userData = $userData['response'][0];
		$member->vk_help_uid = $userData['uid'];
		$member->vk_help_token = $details;
		$member->save();
	}
	
	/**
	 * ACP Settings Form
	 *
	 * @param	string	$url	URL to redirect user to after successful submission
	 * @return	array	List of settings to save - settings will be stored to core_login_handlers.login_settings DB field
	 * @code
	 	return array( 'savekey'	=> new \IPS\Helpers\Form\[Type]( ... ), ... );
	 * @endcode
	 */
	public function acpForm()
	{
		\IPS\Output::i()->sidebar['actions'] = array(
			'help'	=> array(
				'title'		=> 'help',
				'icon'		=> 'question-circle',
				'link'		=> \IPS\Http\Url::external( "http://remoteservices.ipshelp.ru/docs/login_vk" ),
				'target'	=> '_blank',
				'class'		=> ''
			),
		);
		
		return array(
			'app_id'		=> new \IPS\Helpers\Form\Text( 'login_vk_app', ( isset( $this->settings['app_id'] ) ) ? $this->settings['app_id'] : '', TRUE ),
			'app_secret'	=> new \IPS\Helpers\Form\Text( 'login_vk_secret', ( isset( $this->settings['app_secret'] ) ) ? $this->settings['app_secret'] : '', TRUE ),
			'real_name'		=> new \IPS\Helpers\Form\YesNo( 'login_real_name', ( isset( $this->settings['real_name'] ) ) ? $this->settings['real_name'] : FALSE, TRUE )
		);
	}
	
	/**
	 * Test Settings
	 *
	 * @return	bool
	 * @throws	\InvalidArgumentException
	 */
	public function testSettings()
	{
		return TRUE;
	}
	
	/**
	 * Can a member sign in with this login handler?
	 * Used to ensure when a user disassociates a social login that they have some other way of logging in
	 *
	 * @param	\IPS\Member	$member	The member
	 * @return	bool
	 */
	public function canProcess( \IPS\Member $member )
	{
		return ( $member->vk_help_uid and $member->vk_help_token );
	}
	
	/**
	 * Can a member change their email/password with this login handler?
	 *
	 * @param	string		$type	'email' or 'password'
	 * @param	\IPS\Member	$member	The member
	 * @return	bool
	 */
	public function canChange( $type, \IPS\Member $member )
	{
		return FALSE;
	}
}