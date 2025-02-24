<?php
/**
 * @brief		VKontakte Login Handler
 * @author		<a href='https://www.invisioncommunity.com'>Invision Power Services, Inc.</a>
 * @copyright	(c) Invision Power Services, Inc.
 * @license		https://www.invisioncommunity.com/legal/standards/
 * @package		Invision Community
 * @since		31 May 2017
 */

namespace IPS\vkcom\Login\Handler\OAuth2;

/* To prevent PHP errors (extending class does not exist) revealing path */
if ( !defined( '\IPS\SUITE_UNIQUE_KEY' ) )
{
	header( ( isset( $_SERVER['SERVER_PROTOCOL'] ) ? $_SERVER['SERVER_PROTOCOL'] : 'HTTP/1.0' ) . ' 403 Forbidden' );
	exit;
}

/**
 * VKontakte Login Handler
 */
class _VKontakte extends \IPS\Login\Handler\OAuth2
{
	/**
	 * @brief	Share Service
	 */
	public static $shareService = 'VKontakte';

	/**
	 * @brief	Share Service
	 */
	public static $apiVersion = '5.73';

	/**
	 * @brief	Email Address 
	 */
	protected $email = NULL;

	/**
	 * Get title
	 *
	 * @return	string
	 */
	public static function getTitle()
	{
		return 'login_handler_VKontakte';
	}

	/**
	 * ACP Settings Form
	 *
	 * @return	array	List of settings to save - settings will be stored to core_login_methods.login_settings DB field
	 * @code
	 	return array( 'savekey'	=> new \IPS\Helpers\Form\[Type]( ... ), ... );
	 * @endcode
	 */
	public function acpForm()
	{
		\IPS\Member::loggedIn()->language()->words['oauth_client_id'] = \IPS\Member::loggedIn()->language()->addToStack('login_vkontakte_app');
		\IPS\Member::loggedIn()->language()->words['oauth_client_client_secret'] = \IPS\Member::loggedIn()->language()->addToStack('login_vkontakte_secret');

		return array_merge(
			array(
				'real_name'	=> new \IPS\Helpers\Form\Radio( 'login_real_name', isset( $this->settings['real_name'] ) ? $this->settings['real_name'] : 1, FALSE, array(
					'options' => array(
						1			=> 'login_real_name_vkontakte',
						0			=> 'login_real_name_disabled',
					),
					'toggles' => array(
						1			=> array( 'login_update_name_changes_inc_optional' ),
					)
				), NULL, NULL, NULL, 'login_real_name' ),
			),
			parent::acpForm(),
			array(
				'allow_status_import' => new \IPS\Helpers\Form\YesNo( 'login_vkontakte_allow_status_import', ( isset( $this->settings['allow_status_import'] ) ) ? $this->settings['allow_status_import'] : FALSE, FALSE )
			)
		);
	}

	/**
	 * Get the button color
	 *
	 * @return	string
	 */
	public function buttonColor()
	{
		return '#4a76a8';
	}

	/**
	 * Get the button icon
	 *
	 * @return	string
	 */
	public function buttonIcon()
	{
		return 'vk';
	}

	/**
	 * Get button text
	 *
	 * @return	string
	 */
	public function buttonText()
	{
		return 'login_vkontakte';
	}

	/**
	 * Get button class
	 *
	 * @return	string
	 */
	public function buttonClass()
	{
		return 'ipsSocial_vkontakte';
	}

	/**
	 * Get logo to display in information about logins with this method
	 * Returns NULL for methods where it is not necessary to indicate the method, e..g Standard
	 *
	 * @return	\IPS\Http\Url
	 */
	public function logoForDeviceInformation()
	{
		return \IPS\Theme::i()->resource( 'logos/login/VKontakte.png', 'core', 'interface' );
	}

	/**
	 * Exchange authorization code for access token
	 *
	 * @param	string	$code	Authorization code
	 * @return	array
	 * @throws	\IPS\Login\Exception
	 */
	protected function _exchangeAuthorizationCodeForAccessToken( $code )
	{
		/* Call the parent to make a request */
		$response = parent::_exchangeAuthorizationCodeForAccessToken( $code );

		/* Save the email. Note that email address may be not provided */
		if ( isset( $response['email'] ) and $response['email'] )
		{
			$this->email = $response['email'];
		}

		return $response;
	}

	/**
	 * Grant Type
	 *
	 * @return	string
	 */
	protected function grantType()
	{
		return 'authorization_code';
	}

	/**
	 * Get scopes to request
	 *
	 * @param	array|NULL	$additional	Any additional scopes to request
	 * @return	array
	 */
	protected function scopesToRequest( $additional=NULL )
	{
		return array('email', 'wall');
	}

	/**
	 * Authorization Endpoint
	 *
	 * @param	\IPS\Login	$login	The login object
	 * @return	\IPS\Http\Url
	 */
	protected function authorizationEndpoint( \IPS\Login $login )
	{
		return \IPS\Http\Url::external('https://oauth.vk.com/authorize')->setQueryString( 'v', static::$apiVersion );
	}

	/**
	 * Token Endpoint
	 *
	 * @return	\IPS\Http\Url
	 */
	protected function tokenEndpoint()
	{
		return \IPS\Http\Url::external('https://oauth.vk.com/access_token')->setQueryString('v', static::$apiVersion );
	}

	/**
	 * Get authenticated user's identifier (may not be a number)
	 *
	 * @param	string	$accessToken	Access Token
	 * @return	string
	 */
	protected function authenticatedUserId( $accessToken )
	{
		return $this->_userData( $accessToken )['response'][0]['id'];
	}

	/**
	 * Get authenticated user's username
	 * May return NULL if server doesn't support this
	 *
	 * @param	string	$accessToken	Access Token
	 * @return	string|NULL
	 */
	protected function authenticatedUserName( $accessToken )
	{
		if ( isset( $this->settings['real_name'] ) and $this->settings['real_name'] )
		{
			$data = $this->_userData( $accessToken );

			return trim( $data['response'][0]['first_name'] . ' ' . $data['response'][0]['last_name'] );
		}

		return NULL;
	}

	/**
	 * Get authenticated user's email address
	 * May return NULL if server doesn't support this
	 *
	 * @param	string	$accessToken	Access Token
	 * @return	string|NULL
	 */
	protected function authenticatedEmail( $accessToken )
	{
		return $this->email;
	}

	/**
	 * Get user's profile photo
	 * May return NULL if server doesn't support this
	 *
	 * @param	\IPS\Member	$member	Member
	 * @return	\IPS\Http\Url|NULL
	 * @throws	\IPS\Login\Exception	The token is invalid and the user needs to reauthenticate
	 * @throws	\DomainException		General error where it is safe to show a message to the user
	 * @throws	\RuntimeException		Unexpected error from service
	 */
	public function userProfilePhoto( \IPS\Member $member )
	{
		if ( !( $link = $this->_link( $member ) ) )
		{
			throw new \IPS\Login\Exception( $error['message'], \IPS\Login\Exception::INTERNAL_ERROR );
		}

		$photoUrl = $this->_userData( $link['token_access_token'] )['response'][0]['photo_max_orig'];
		
		return \IPS\Http\Url::external( $photoUrl );
	}

	/**
	 * Get user's profile name
	 * May return NULL if server doesn't support this
	 *
	 * @param	\IPS\Member	$member	Member
	 * @return	string|NULL
	 * @throws	\IPS\Login\Exception	The token is invalid and the user needs to reauthenticate
	 * @throws	\DomainException		General error where it is safe to show a message to the user
	 * @throws	\RuntimeException		Unexpected error from service
	 */
	public function userProfileName( \IPS\Member $member )
	{
		if ( !( $link = $this->_link( $member ) ) )
		{
			throw new \IPS\Login\Exception( $error['message'], \IPS\Login\Exception::INTERNAL_ERROR );
		}

		$data = $this->_userData( $link['token_access_token'] );

		return trim( $data['response'][0]['first_name'] . ' ' . $data['response'][0]['last_name'] );
	}

	/**
	 * Get user's statuses since a particular date
	 *
	 * @param	\IPS\Member			$member	Member
	 * @param	\IPS\DateTime|NULL	$since	Date/Time to get statuses since then, or NULL to get the latest one
	 * @return	array
	 * @throws	\IPS\Login\Exception	The token is invalid and the user needs to reauthenticate
	 * @throws	\DomainException		General error where it is safe to show a message to the user
	 * @throws	\RuntimeException		Unexpected error from service
	 */
	public function userStatuses( \IPS\Member $member, \IPS\DateTime $since = NULL )
	{
		if ( !( $link = $this->_link( $member ) ) )
		{
			throw new \IPS\Login\Exception( NULL, \IPS\Login\Exception::INTERNAL_ERROR );
		}

		$data = array( 'count' => $since ? 100 : 1 );
		$response = $this->_authorizedRequest( 'wall.get', $link['token_access_token'], $data, 'get' );

		$return = array();
		foreach ( $response['response']['items'] as $statusData )
		{
			if ( $since and $statusData['date'] < $since->getTimestamp() )
			{
				break;
			}

			$status = \IPS\core\Statuses\Status::createItem( $member, $member->ip_address, \IPS\DateTime::ts( $statusData['date'] ) );
			$status->content = $this->_parseStatusText( $member, nl2br( $statusData['text'], FALSE ) );

			$return[] = $status;
		}

		return $return;
	}

	/**
	 * Get link to user's remote profile
	 * May return NULL if server doesn't support this
	 *
	 * @param	string	$identifier	The ID Nnumber/string from remote service
	 * @param	string	$username	The username from remote service
	 * @return	\IPS\Http\Url|NULL
	 * @throws	\IPS\Login\Exception	The token is invalid and the user needs to reauthenticate
	 * @throws	\DomainException		General error where it is safe to show a message to the user
	 * @throws	\RuntimeException		Unexpected error from service
	 */
	public function userLink( $identifier, $username )
	{
		return \IPS\Http\Url::external( 'https://vk.com/id' . $identifier );
	}

	/**
	 * Syncing Options
	 *
	 * @param	\IPS\Member	$member			The member we're asking for (can be used to not show certain options iof the user didn't grant those scopes)
	 * @param	bool		$defaultOnly	If TRUE, only returns which options should be enabled by default for a new account
	 * @return	array
	 */
	public function syncOptions( \IPS\Member $member, $defaultOnly = FALSE )
	{
		$return = array();
		
		if ( isset( $this->settings['update_name_changes'] ) and $this->settings['update_name_changes'] === 'optional' and isset( $this->settings['real_name'] ) and $this->settings['real_name'] )
		{
			$return[] = 'name';
		}
		
		$return[] = 'photo';
		
		if ( \IPS\Settings::i()->profile_comments and isset( $this->settings['allow_status_import'] ) and $this->settings['allow_status_import'] )
		{
			$return[] = 'status';
		}
		
		return $return;
	}

	/**
	 * @brief	Cached user data
	 */
	protected $_cachedUserData = array();

	/**
	 * Get user data
	 *
	 * @param	string	$accessToken	Access Token
	 * @return	array
	 * @throws	\IPS\Login\Exception	The token is invalid and the user needs to reauthenticate
	 * @throws	\RuntimeException		Unexpected error from service
	 */
	protected function _userData( $accessToken )
	{
		if ( !isset( $this->_cachedUserData[ $accessToken ] ) )
		{
			$response = $this->_authorizedRequest( 'users.get', $accessToken, array(
				'fields'			=> 'first_name,last_name,screen_name,photo_max_orig',
			), 'get' );

			if ( isset( $response['error'] ) )
			{
				throw new \IPS\Login\Exception( $response['error']['message'], \IPS\Login\Exception::INTERNAL_ERROR );
			}
				
			$this->_cachedUserData[ $accessToken ] = $response;
		}
		return $this->_cachedUserData[ $accessToken ];
	}

	/**
	 * Should client credentials be sent as an "Authoriation" header, or as POST data?
	 *
	 * @return	string
	 */
	protected function _authenticationType()
	{
		return static::AUTHENTICATE_POST;
	}

	/**
	 * Make authorized request
	 *
	 * @param	string			$endpoint		Endpoint
	 * @param	string			$accessToken	Access Token
	 * @param	array|NULL		$postData		Data to post
	 * @param	string|NULL		$method			'get' or 'post'
	 * @return	array
	 * @throws	\IPS\Http\Request\Exception
	 */
	protected function _authorizedRequest( $endpoint, $accessToken, $data = array() )
	{
		$data = array_merge( $data ?: array(), array(
			'access_token' => $accessToken,
			'v' => static::$apiVersion
		) );

		$url = \IPS\Http\Url::external( "https://api.vk.com/method/{$endpoint}" )->setQueryString( $data );

		return $url->request()->get()->decodeJson();
	}

	/**
	 * Checks core_members table to see if conversion is available
	 *
	 * @return	boolean
	 */
	public static function needsConverting()
	{
		$table = 'core_members';

		$needsConverting = array();

		if ( \IPS\Db::i()->checkForColumn( $table, 'vk_id' ) and \IPS\Db::i()->checkForColumn( $table, 'vk_token' ) )
		{
			$needsConverting[] = array( 'vk_id', 'vk_token' );
		}

		if ( \IPS\Db::i()->checkForColumn( $table, 'vk_uid' ) and \IPS\Db::i()->checkForColumn( $table, 'vk_token' ) )
		{
			$needsConverting[] = array( 'vk_uid', 'vk_token' );
		}

		if ( \IPS\Db::i()->checkForColumn( $table, 'vk_help_uid' ) and \IPS\Db::i()->checkForColumn( $table, 'vk_help_token' ) )
		{
			$needsConverting[] = array( 'vk_help_uid', 'vk_help_token' );
		}

		return $needsConverting;
	}
}
