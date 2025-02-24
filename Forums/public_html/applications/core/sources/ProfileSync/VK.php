<?php
/**
 * @brief		VK.com Profile Sync
 * @author		<a href='https://ipshelp.ru'>IPSHelp.Ru</a>
 * @copyright	(c) 2016 Adles Technology, Ltd.
 */

namespace IPS\core\ProfileSync;

/* To prevent PHP errors (extending class does not exist) revealing path */
if ( !defined( '\IPS\SUITE_UNIQUE_KEY' ) )
{
	header( ( isset( $_SERVER['SERVER_PROTOCOL'] ) ? $_SERVER['SERVER_PROTOCOL'] : 'HTTP/1.0' ) . ' 403 Forbidden' );
	exit;
}

/**
 * VK.com Profile Sync
 */
class _VK extends ProfileSyncAbstract
{
	/** 
	 * @brief	Login handler key
	 */
	public static $loginKey = 'VK';
	
	/** 
	 * @brief	Icon
	 */
	public static $icon = 'vk';
			
	/**
	 * Is connected?
	 *
	 * @return	bool
	 */
	public function connected()
	{
		return ( $this->member->vk_help_uid and $this->member->vk_help_token );
	}
		
	/**
	 * Get photo
	 *
	 * @return	\IPS\Http\Url|\IPS\File|NULL
	 */
	public function photo()
	{
		try
		{
			$response = \IPS\Http\Url::external( "https://api.vk.com/method/users.get?user_ids={$this->member->vk_help_uid}&fields=photo_max_orig" )->request()->get()->decodeJson();
			$response = $response['response'][0];
			if ( isset( $response['photo_max_orig'] ) )
			{
				$file = \IPS\Http\Url::external( $response['photo_max_orig'] )->import( 'core_Profile' );
				$photo = \IPS\Image::create( $file->contents() );
				
				if ( ( $photo->width > $photo->height ) OR ( $photo->height > $photo->width ) )
				{
					if ( $photo->width > $photo->height )
					{
						$difference = $photo->width - $photo->height;
						$photo->cropToPoints( ceil( $difference / 2 ), 0, ceil( $photo->width - ( $difference / 2 ) ), $photo->height );
						$file->replace( (string) $photo );
					}
					else if ( $photo->height > $photo->width )
					{
						$difference = $photo->height - $photo->width;
						$photo->cropToPoints( 0, ceil( $difference / 2 ), $photo->width, ceil( $photo->height - ( $difference / 2 ) ) );
						$file->replace( (string) $photo );
					}
				}
				
				return $file;
			}
			else
			{
				return NULL;
			}
		}
		catch ( \IPS\Http\Request\Exception $e )
		{
			\IPS\Log::i( LOG_ERR )->write( "VK.com photo sync error: " . $e->getMessage(), 'VK' );

			return NULL;
		}
	}
	
	/**
	 * Get name
	 *
	 * @return	string
	 */
	public function name()
	{
		try
		{
			$response = \IPS\Http\Url::external( "https://api.vk.com/method/users.get?user_ids={$this->member->vk_help_uid}" )->request()->get()->decodeJson();
			$response = $response['response'][0];
			if ( isset( $response['first_name'] ) OR isset( $response['last_name'] ) )
			{
				return $response['first_name'] . ' ' . $response['last_name'];
			}
		}
		catch ( \IPS\Http\Request\Exception $e )
		{
			\IPS\Log::i( LOG_ERR )->write( "VK.com name fetch error: " . $e->getMessage(), 'VK' );

			return NULL;
		}
	}
	
	/**
	 * Member can import statuses?
	 *
	 * @return	array
	 */
	/*public function canImportStatus( \IPS\Member $member )
	{
		if ( parent::canImportStatus( $member ) )
		{
			$loginHandlers = \IPS\Login::handlers( TRUE );
			if ( isset( $loginHandlers['Facebook'] ) AND isset( $loginHandlers['Facebook']->settings['allow_status_import'] ) )
			{
				return $loginHandlers['Facebook']->settings['allow_status_import'];
			}
		}
		return FALSE;
	}*/
	
	/**
	 * Get status
	 *
	 * @return	\IPS\core\Statuses\Status|null
	 */
	/*public function status()
	{
		try
		{
			$response = \IPS\Http\Url::external( "https://api.vk.com/method/status.get?user_id={$this->member->vk_help_uid}&access_token={$this->member->vk_help_token}" )->request()->get()->decodeJson();
			$response = $response['response'][0];
			if ( !empty( $response['text'] ) )
			{

				if( isset( $response['text'] ) AND !isset( $response['status_audio'] ) )
				{
					$status = \IPS\core\Statuses\Status::createItem( $this->member, $this->member->ip_address, new \IPS\DateTime() );
					$status->content = nl2br( \IPS\Text\Parser::utf8mb4SafeDecode( $response['text'] ), FALSE );
					return $status;
				}
			}
		}
		catch ( \IPS\Http\Request\Exception $e )
		{ 
			\IPS\Log::i( LOG_ERR )->write( "VK status import error: " . json_encode( $response ), 'vk' );
		}
		return NULL;
	}*/
	
	/**
	 * Disassociate
	 *
	 * @return	void
	 */
	protected function _disassociate()
	{
		$this->member->vk_help_uid = 0;
		$this->member->vk_help_token = NULL;
		$this->member->save();
	}
}