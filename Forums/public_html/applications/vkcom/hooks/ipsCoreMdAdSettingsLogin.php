//<?php

/* To prevent PHP errors (extending class does not exist) revealing path */
if ( !defined( '\IPS\SUITE_UNIQUE_KEY' ) )
{
	exit;
}

class vkcom_hook_ipsCoreMdAdSettingsLogin extends _HOOK_CLASS_
{
	/**
	 * Add/Edit Form
	 *
	 * @return void
	 */
	protected function form()
	{
		try
		{
			$form = parent::form();
	
			/* Init Edit */
			if ( \IPS\Request::i()->id )
			{
				/* Load the node being edited */
				$method = \IPS\Login\Handler::load( \IPS\Request::i()->id );
	
				$classname = '\IPS\vkcom\Login\Handler\OAuth2\VKontakte';
	
				if ( $method->classname == ltrim( $classname, '\\' ) and !empty( $classname::needsConverting() ) and !\IPS\Settings::i()->vkcom_accounts_upgraded )
				{
					$url = \IPS\Http\Url::internal('&app=vkcom&module=settings&controller=login&do=upgrade&id=' . \IPS\Request::i()->id);
	
					\IPS\Output::i()->output = \IPS\Member::loggedIn()->language()->addToStack('login_vkontakte_upgrade', FALSE, array( 'sprintf' => array( $url ) ) ) . "<br>" . \IPS\Output::i()->output;
				}
			}
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
