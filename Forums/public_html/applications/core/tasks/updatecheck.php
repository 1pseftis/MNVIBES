<?php
/**
 * @brief		updatecheck Task
 * @author		<a href='https://www.invisioncommunity.com'>Invision Power Services, Inc.</a>
 * @copyright	(c) Invision Power Services, Inc.
 * @license		https://www.invisioncommunity.com/legal/standards/
 * @package		Invision Community
 * @since		14 Aug 2013
 */

namespace IPS\core\tasks;

/* To prevent PHP errors (extending class does not exist) revealing path */
if ( !\defined( '\IPS\SUITE_UNIQUE_KEY' ) )
{
	header( ( isset( $_SERVER['SERVER_PROTOCOL'] ) ? $_SERVER['SERVER_PROTOCOL'] : 'HTTP/1.0' ) . ' 403 Forbidden' );
	exit;
}

/**
 * updatecheck Task
 */
class _updatecheck extends \IPS\Task
{
	/**
	 * @brief	Type to send to update server
	 */
	public $type = 'task';
	
	/**
	 * Execute
	 *
	 * @return	mixed	Message to log or NULL
	 */
	public function execute()
	{
		return NULL;
	}
}