<?php
/**
 * @brief		Installer: License
 * @author		<a href='https://www.invisioncommunity.com'>Invision Power Services, Inc.</a>
 * @copyright	(c) Invision Power Services, Inc.
 * @license		https://www.invisioncommunity.com/legal/standards/
 * @package		Invision Community
 * @since		2 Apr 2013
 */
 
namespace IPS\core\modules\setup\install;

/* To prevent PHP errors (extending class does not exist) revealing path */
if ( !\defined( '\IPS\SUITE_UNIQUE_KEY' ) )
{
	header( ( isset( $_SERVER['SERVER_PROTOCOL'] ) ? $_SERVER['SERVER_PROTOCOL'] : 'HTTP/1.0' ) . ' 403 Forbidden' );
	exit;
}

/**
 * Installer: License
 */
class _license extends \IPS\Dispatcher\Controller
{
	/**
	 * Show Form
	 *
	 * @return	void
	 */
	public function manage()
	{
		$data = \IPS\IPS::licenseKey();
		$toWrite = "<?php\n\n" . '$INFO = ' . var_export( array( 'lkey' => $data['key'] ), TRUE ) . ';';
			
			try
			{
				$file = @\file_put_contents( \IPS\ROOT_PATH . '/conf_global.php', $toWrite );
				if ( !$file )
				{
					throw new \Exception;
				}
				else
				{
					/* PHP 5.5 - clear opcode cache or details won't be seen on next page load */
					if ( \function_exists( 'opcache_invalidate' ) )
					{
						@opcache_invalidate( \IPS\ROOT_PATH . '/conf_global.php' );
					}

					\IPS\Output::i()->redirect( \IPS\Http\Url::internal( 'controller=applications' ) );
				}
			}
			catch( \Exception $ex )
			{
				\IPS\Output::i()->title = \IPS\Member::loggedIn()->language()->addToStack( 'error' );
				$errorform = new \IPS\Helpers\Form( 'license', 'continue' );
				$errorform->class = '';
				$errorform->add( new \IPS\Helpers\Form\TextArea( 'conf_global_error', $toWrite, FALSE ) );
				
				foreach( $values as $k => $v )
				{
					$errorform->hiddenValues[ $k ] = $v;
				}
				
				\IPS\Output::i()->output = \IPS\Theme::i()->getTemplate( 'global' )->confWriteError( $errorform, \IPS\ROOT_PATH );
				return;
			}
		}
}