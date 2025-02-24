<?PHP
/*
=====================================================
 DataLife Engine - by SoftNews Media Group 
-----------------------------------------------------
 http://dle-news.ru/
-----------------------------------------------------
 Copyright (c) 2004-2018 SoftNews Media Group
=====================================================
 This code is protected by copyright
=====================================================
 File: engine.php
=====================================================
*/

if (!defined('DATALIFEENGINE')) {
	die ( "Hacking attempt!" );
}

if ($cstart < 0) $cstart = 0;

$CN_HALT = false;
$allow_add_comment = false;
$allow_active_news = false;
$allow_comments = false;
$allow_userinfo = false;
$active = false;
$disable_index = false;
$social_tags = array();
$canonical = false;
$url_page = false;
$user_query = false;
$news_author = false;
$attachments = array ();
$short_news_cache = false;

switch ( $do ) {
	
	case "register" :
		include (DLEPlugins::Check(ENGINE_DIR . '/modules/register.php'));
		break;
	
	case "lostpassword" :
		include (DLEPlugins::Check(ENGINE_DIR . '/modules/lostpassword.php'));
		break;
	
	case "rules" :
		$_GET['page'] = "dle-rules-page";
		include (DLEPlugins::Check(ENGINE_DIR . '/modules/static.php'));
		break;
	
	case "static" :
		include (DLEPlugins::Check(ENGINE_DIR . '/modules/static.php'));
		break;

	case "auth-social" :
		include_once (DLEPlugins::Check(ENGINE_DIR . '/modules/social.php'));
		break;
	
	default :
        include_once (DLEPlugins::Check(ENGINE_DIR . '/modules/news.php')); // Новости
}

/*
=====================================================
 The output of the page header
=====================================================
*/
$titl_e = '';
$nam_e = '';
$rss_url = '';
$rss_title = '';

if ($do == 'lostpassword') $nam_e = $lang['title_lost'];
elseif ($do == 'static') $titl_e = $static_descr;
elseif ($do == 'rules') {
    $nam_e = $lang['rules_page'];
} 

$page_extra = '';


if ($nam_e) {

	$metatags['title'] = $nam_e . $page_extra . ' &raquo; ' . $metatags['title'];
	$rss_title = $metatags['title'];

} elseif ($titl_e) {

	$metatags['title'] = $titl_e . $page_extra . ' &raquo; ' . $config['home_title'];

} else $metatags['title'] .= $page_extra;

if ( $metatags['header_title'] ) $metatags['title'] = stripslashes($metatags['header_title'].$page_extra);
if ( $disable_index ) $disable_index = "\n<meta name=\"robots\" content=\"noindex,nofollow\" />"; else $disable_index = "";

if (! $rss_url) {
	
	if ($config['allow_alt_url']) {
		$rss_url = $config['http_home_url'] . "rss.xml";
	} else {
		$rss_url = $PHP_SELF . "?mod=rss";
	}
	
	$rss_title = $config['home_title'];
}

$s_meta = "";

if ( count($social_tags) ) {

	foreach ($social_tags as $key => $value) {
		
		$value=str_replace(array("{", "}", "[", "]"),"",$value);

		if( $key == "news_keywords" ) {
			$s_meta .= "<meta name=\"{$key}\" content=\"{$value}\">\n";
		} else {
			$s_meta .= "<meta property=\"og:{$key}\" content=\"{$value}\">\n";
		}

	}
}

if( $config['allow_own_meta'] ) {
	
	if(is_array($custom_metatags['simple']) AND count($custom_metatags['simple']) AND $custom_metatags['simple'][$r_uri] ) {
		if( $custom_metatags['simple'][$r_uri]['title'] ) $metatags['title'] = $custom_metatags['simple'][$r_uri]['title'];
		if( $custom_metatags['simple'][$r_uri]['description'] ) $metatags['description'] = $custom_metatags['simple'][$r_uri]['description'];
		if( $custom_metatags['simple'][$r_uri]['keywords'] ) $metatags['keywords'] = $custom_metatags['simple'][$r_uri]['keywords'];
	}
	
	if(is_array($custom_metatags['regex']) AND count($custom_metatags['regex'])) {	
		foreach ($custom_metatags['regex'] as $key => $value) {
			if(preg_match($key, $r_uri)){
				if( $value['title'] ) $metatags['title'] = $value['title'];
				if( $value['description'] ) $metatags['description'] = $value['description'];
				if( $value['keywords'] ) $metatags['keywords'] = $value['keywords'];
		    }
		}
	}

}

$metatags['title']=str_replace(array("{", "}", "[", "]"), "", $metatags['title']);
$metatags['description']=str_replace(array("{", "}", "[", "]"), "", $metatags['description']);
$metatags['keywords']=str_replace(array("{", "}", "[", "]"), "", $metatags['keywords']);

$metatags = <<<HTML
<meta charset="{$config['charset']}">
<title>{$metatags['title']}</title>
<meta name="description" content="{$metatags['description']}">
<meta name="keywords" content="{$metatags['keywords']}">{$disable_index}
{$s_meta}
HTML;

if ($canonical) {
	
	if (strpos($canonical, "//") === 0) $canonical = "https:".$canonical;
	elseif (strpos($canonical, "/") === 0) $canonical = "http://".$_SERVER['HTTP_HOST'].$canonical;

	$metatags .= <<<HTML

<link rel="canonical" href="{$canonical}">
HTML;

}

if ($config['allow_rss']) $metatags .= <<<HTML

<link rel="alternate" type="application/rss+xml" title="{$rss_title}" href="{$rss_url}">
HTML;


?>