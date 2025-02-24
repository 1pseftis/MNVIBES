//<?php

/* To prevent PHP errors (extending class does not exist) revealing path */
if ( !defined( '\IPS\SUITE_UNIQUE_KEY' ) )
{
	exit;
}

class vkcom_hook_themeCoreAdminApplications extends _HOOK_CLASS_
{

/* !Hook Data - DO NOT REMOVE */
public static function hookData() {
 return array_merge_recursive( array (
  'appRowTitle' => 
  array (
    0 => 
    array (
      'selector' => 'span.ipsType_small.ipsType_unbold.ipsType_light',
      'type' => 'add_after',
      'content' => '{{if $app->directory == \'vkcom\'}}
	<a href="https://adles.co" target="_blank"><span class=\'ipsBadge ipsBadge_style6\'>Adles.co</span></a>
{{endif}}',
    ),
  ),
), parent::hookData() );
}
/* End Hook Data */


}
