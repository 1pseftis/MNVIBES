//<?php

/* To prevent PHP errors (extending class does not exist) revealing path */
if ( !defined( '\IPS\SUITE_UNIQUE_KEY' ) )
{
	exit;
}

abstract class vkcom_hook_ipsLoginHandler extends _HOOK_CLASS_
{
	/**
	 * Get all handler classes
	 *
	 * @return	array
	 */
	public static function handlerClasses()
	{
		try
		{
			$parent = call_user_func_array( 'parent::handlerClasses', func_get_args() );
	
			return array_merge( $parent, array(
				'IPS\vkcom\Login\Handler\OAuth2\VKontakte'
			) );
		}
		catch ( \RuntimeException $e )
		{
			if ( method_exists( get_parent_class(), __FUNCTION__ ) )
			{
				return call_user_func_array( 'parent::' . __FUNCTION__, func_get_args() );
			}
			else
			{
				throw $e;
			}
		}
	}
}
