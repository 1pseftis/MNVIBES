<?php
/**
 * @brief		VK.com Login Handler Redirect URI Handler
 * @author		<a href='https://ipshelp.ru'>IPSHelp.Ru</a>
 * @copyright	(c) 2016 Adles Technology, Ltd.
 */

require_once str_replace( 'applications/core/interface/vk/auth.php', '', str_replace( '\\', '/', __FILE__ ) ) . 'init.php';
$state = explode( '-', \IPS\Request::i()->state );
if ( $state[0] == 'ucp' )
{
	\IPS\Output::i()->redirect( \IPS\Http\Url::internal( "app=core&module=system&controller=settings&area=profilesync&service=VK&loginProcess=VK&state={$state[1]}&code=" . urlencode( \IPS\Request::i()->code ), 'front', 'settings_VK' ) );
}
else
{
	$destination = \IPS\Http\Url::internal( "app=core&module=system&controller=login&loginProcess=VK&state={$state[1]}&code=" . urlencode( \IPS\Request::i()->code ), $state[0], 'login', NULL, \IPS\Settings::i()->logins_over_https );
	if ( isset( \IPS\Request::i()->ref ) )
	{
		$destination = $destination->setQueryString( 'ref', \IPS\Request::i()->ref );
	}
		
	\IPS\Output::i()->redirect( $destination );
}