<?php
/**
 * @brief		Support Wizard
 * @author		<a href='https://www.invisioncommunity.com'>Invision Power Services, Inc.</a>
 * @copyright	(c) Invision Power Services, Inc.
 * @license		https://www.invisioncommunity.com/legal/standards/
 * @package		Invision Community
 * @since		21 May 2014
 */

namespace IPS\core\modules\admin\support;

/* To prevent PHP errors (extending class does not exist) revealing path */
if ( !\defined( '\IPS\SUITE_UNIQUE_KEY' ) )
{
	header( ( isset( $_SERVER['SERVER_PROTOCOL'] ) ? $_SERVER['SERVER_PROTOCOL'] : 'HTTP/1.0' ) . ' 403 Forbidden' );
	exit;
}

/**
 * Support Wizard
 */
class _support extends \IPS\Dispatcher\Controller
{
	/**
	 * Execute
	 *
	 * @return	void
	 */
	public function execute()
	{
		\IPS\Dispatcher::i()->checkAcpPermission( 'get_support' );
		parent::execute();
	}

	/**
	 * Support Wizard
	 *
	 * @return	void
	 */
	protected function manage()
	{
		$redis = NULL;
		
		if ( \IPS\CACHE_METHOD == 'Redis' or \IPS\STORE_METHOD == 'Redis' )
		{
			$redis = \IPS\Redis::i()->info();
		}
		
		\IPS\Output::i()->title = \IPS\Member::loggedIn()->language()->addToStack('get_support');
		\IPS\Output::i()->jsFiles	= array_merge( \IPS\Output::i()->jsFiles, \IPS\Output::i()->js('admin_support.js', 'core', 'admin') );
		\IPS\Output::i()->output = \IPS\Output::i()->output = \IPS\Theme::i()->getTemplate( 'support' )->support( (string) new \IPS\Helpers\Wizard( array( 'type_of_problem' => array( $this, '_typeOfProblem' ), 'self_service' => array( $this, '_selfService' ), 'contact_support' => array( $this, '_contactSupport' ) ), \IPS\Http\Url::internal('app=core&module=support&controller=support') ), \IPS\Db::i()->select( 'COUNT(*)', 'core_hooks' )->first(), $redis );

		if( !\IPS\CIC )
		{
			\IPS\Output::i()->sidebar['actions']['systemcheck'] = array(
				'icon' => 'search',
				'link' => \IPS\Http\Url::internal( 'app=core&module=support&controller=support&do=systemCheck' ),
				'title' => 'requirements_checker',
			);
		}
	}
	
	/**
	 * phpinfo
	 *
	 * @return	void
	 */
	protected function phpinfo()
	{
		phpinfo();
		exit;
	}
	
	/**
	 * System Check
	 *
	 * @return	void
	 */
	protected function systemCheck()
	{
		\IPS\Output::i()->title		= \IPS\Member::loggedIn()->language()->addToStack('requirements_checker');
		\IPS\Output::i()->output	= \IPS\Theme::i()->getTemplate( 'support' )->healthcheck( \IPS\core\Setup\Upgrade::systemRequirements() );
	}
	
	/**
	 * Step 1: Type of problem
	 *
	 * @param	mixed	$data	Wizard data
	 * @return	string|array
	 */
	public function _typeOfProblem( $data )
	{
		$form = new \IPS\Helpers\Form( 'form', 'continue' );
		$form->class = 'ipsForm_horizontal';
		$form->add( new \IPS\Helpers\Form\Radio( 'type_of_problem_select', NULL, TRUE, array(
			'options' 	=> array( 'advice' => 'type_of_problem_advice', 'issue' => 'type_of_problem_issue' ),
			'toggles'	=> array( 'advice' => array( 'support_advice_search' ) )
		) ) );
		$form->add( new \IPS\Helpers\Form\Text( 'support_advice_search', NULL, NULL, array(), function( $val )
		{
			if ( !$val and \IPS\Request::i()->type_of_problem_select === 'advice' )
			{
				throw new \DomainException('form_required');
			}
		}, NULL, NULL, 'support_advice_search' ) );
		if ( $values = $form->values() )
		{
			return array( 'type' => $values['type_of_problem_select'], 'keyword' => $values['support_advice_search'] );
		}
		return (string) $form;
	}
	
	/**
	 * Step 2: Self Service
	 *
	 * @param	mixed	$data	Wizard data
	 * @return	string|array
	 */
	public function _selfService( $data )
	{
		if ( isset( \IPS\Request::i()->next ) )
		{
			return $data;
		}

		/* Advice */
		if ( $data['type'] === 'advice' )
		{			
			$searchResults = array();
			if ( $data['keyword'] )
			{
				$search = new \IPS\core\extensions\core\LiveSearch\Settings;
				$searchResults = $search->getResults( $data['keyword'] );
			}
			
			$guides = array();
			
			
			if ( \count( $searchResults ) or \count( $guides ) )
			{
				return \IPS\Theme::i()->getTemplate( 'support' )->advice( $searchResults, $guides );
			}
			else
			{
				return $data;
			}
		}
		
		/* Issue */
		else
		{
			/* Log that the support tool has been run */
			\IPS\Session::i()->log( 'acplog__support_tool_ran' );
			
			/* Get requirements and suggestions */
			$requirementsCheck	= \IPS\core\Setup\Upgrade::systemRequirements();

			$this->_clearCaches();
			
			return \IPS\Theme::i()->getTemplate( 'support' )->diagnostics(
				(bool) $this->_requirementsChecker( $requirementsCheck ),
				$this->_upgradeCheck(),
				(bool) $this->_md5sumChecker(),
				(bool) $this->_databaseChecker(),
				$this->_connectionChecker(),
				$this->_thirdPartyCustomizations(),
				$this->_adviceChecker( $requirementsCheck ),
				$requirementsCheck
			);			
		}
	}
	
	/**
	 * Step 2: Self Service - Clear Caches
	 *
	 * @return	NULL
	 */
	protected function _clearCaches()
	{
		/* Don't clear CSS/JS when we click "check again" or the page will be broken - it's unnecessary anyways */
		if( !isset( \IPS\Request::i()->checkAgain ) )
		{
			/* Clear JS Maps first */
			\IPS\Output::clearJsFiles();
			
			/* Reset theme maps to make sure bad data hasn't been cached by visits mid-setup */
			\IPS\Theme::deleteCompiledCss();
			
			foreach( \IPS\Theme::themes() as $id => $set )
			{
				/* Invalidate template disk cache */
				$set->cache_key = md5( microtime() . mt_rand( 0, 1000 ) );
				$set->save();
			}
		}
		
		\IPS\Data\Store::i()->clearAll();
		\IPS\Data\Cache::i()->clearAll();

		\IPS\Member::clearCreateMenu();
	}
	
	/**
	 * Step 2: Self Service - Database Checker
	 *
	 * @return	array	Changes necessary
	 */
	protected function _databaseChecker()
	{
		$changesToMake = array();

		foreach ( \IPS\Application::applications() as $app )
		{
			$changesToMake = array_merge( $changesToMake, $app->databaseCheck() );
		}
		
		return $changesToMake;
	}
	
	/**
	 * Step 2: Self Service - Check for Uprade / known issues
	 *
	 * @return	bool|array
	 */
	protected function _upgradeCheck()
	{
		return FALSE;
	}
	
	/**
	 * Step 2: "Help me fix this" for database check fail
	 *
	 * @return	void
	 */
	protected function databasefail()
	{
		$changesToMake = $this->_databaseChecker();
				
		\IPS\Output::i()->httpHeaders['X-IPS-FormNoSubmit'] = "true";
		
		if ( isset( \IPS\Request::i()->run ) )
		{
			$erroredQueries = array();
			$errors = array();
			foreach ( $changesToMake as $query )
			{
				try
				{
					\IPS\Db::i()->query( $query['query'] );
				}
				catch ( \Exception $e )
				{
					$erroredQueries[] = $query['query'];
					$errors[] = $e->getMessage();
				}
			}
			if ( \count( $erroredQueries ) )
			{
				\IPS\Output::i()->output = \IPS\Theme::i()->getTemplate( 'support' )->fixDatabase( $erroredQueries, $errors );
			}
			else
			{
				\IPS\Output::i()->redirect( \IPS\Http\Url::internal('app=core&module=support&controller=support') );
			}
		}
		else
		{
			$queries = array();
			foreach ( $changesToMake as $query )
			{
				$queries[] = $query['query'];
			}
			
			if ( \count( $queries ) )
			{
				\IPS\Output::i()->output = \IPS\Theme::i()->getTemplate( 'support' )->fixDatabase( $queries, NULL );
			}
			else
			{
				\IPS\Output::i()->redirect( \IPS\Http\Url::internal('app=core&module=support&controller=support') );
			}
		}
	}
	
	/**
	 * Step 2: Self Service - md5sum Checker
	 *
	 * @return	array	Modified files
	 */
	protected function _md5sumChecker()
	{	
		try
		{
			return \IPS\Application::md5Check();
		}
		catch ( \Exception $e )
		{
			return array();
		}
	}
	
	/**
	 * Step 2: "Help me fix this" for md5sum fail
	 *
	 * @return	void
	 */
	protected function md5fail()
	{
		
	}
	
	/**
	 * Step 2: Self Service - Requirements Checker (Includes File Permissions)
	 *
	 * @param	array 	$check		Requirements to check
	 * @return	array	Necessary changes
	 */
	protected function _requirementsChecker( $check )
	{
		$return = array();
		foreach ( $check['requirements'] as $group => $requirements )
		{
			foreach ( $requirements as $requirement )
			{
				if ( !$requirement['success'] )
				{
					$return[] = $requirement['message'];
				}
			}
		}
		
		return $return;
	}

	/**
	 * Step 2: Self Service - Check advice and look for recommendations
	 *
	 * @param	array 	$check		Requirements to check
	 * @return	array	Necessary changes
	 */
	protected function _adviceChecker( $check )
	{
		$return = array();
		if( isset( $check['advice'] ) )
		{
			foreach ( $check['advice'] as $suggestion )
			{
				$return[] = $suggestion;
			}
		}

		if( \IPS\Settings::i()->getFromConfGlobal('sql_utf8mb4') !== TRUE )
		{
			$return[] = \IPS\Member::loggedIn()->language()->addToStack(\IPS\CIC ? 'utf8mb4_generic_explain_cic' : 'utf8mb4_generic_explain' );
		}
		
		return $return;
	}
	
	/**
	 * Step 2: Self Service - Connection and server clock checker
	 *
	 * @return	int or string with error
	 */
	protected function _connectionChecker()
	{	
		return \intval( time() );
	}
	
	/**
	 * Step 2: "Help me fix this" for connection check fail
	 *
	 * @return	void
	 */
	protected function connectionfail()
	{
		\IPS\Output::i()->output = \IPS\Theme::i()->getTemplate( 'support' )->fixConnection( $this->_connectionChecker() );
	}
	
	/**
	 * Step 2: "Help me fix this" for server time fail
	 *
	 * @return	void
	 */
	protected function servertimefail()
	{
		\IPS\Output::i()->output = \IPS\Theme::i()->getTemplate( 'support' )->fixServerTime( new \IPS\DateTime );
	}
	
	/**
	 * Step 2: Self Service - Are there any third party customizations?
	 *
	 * @return	bool
	 */
	protected function _thirdPartyCustomizations()
	{
		return ( \count( $this->_thirdPartyApps() ) or \count( $this->_thirdPartyPlugins() ) or $this->_thirdPartyTheme() or $this->_thirdPartyEditor() or \count( $this->_thirdPartyAds() ) );
	}
	
	/**
	 * Step 2: Self Service - Get third-party applications
	 *
	 * @return	array
	 */
	protected function _thirdPartyApps()
	{	
		if ( \IPS\NO_WRITES )
		{
			return array();
		}
		
		$apps = array();
		
		foreach ( \IPS\Application::applications() as $app )
		{
			if ( $app->enabled and !\in_array( $app->directory, \IPS\Application::$ipsApps ) )
			{
				$apps[] = $app;
			}
		}
		
		return $apps;
	}
	
	/**
	 * Step 2: Self Service - Get third-party plugins
	 *
	 * @return	array
	 */
	protected function _thirdPartyPlugins()
	{	
		if ( \IPS\NO_WRITES )
		{
			return array();
		}
		
		$plugins = array();
		
		foreach ( \IPS\Plugin::plugins() as $plugin )
		{
			if ( $plugin->enabled )
			{
				$plugins[] = $plugin;
			}
		}
		
		return $plugins;
	}
	
	/**
	 * Step 2: Self Service - Has the theme been customised?
	 *
	 * @return	bool
	 */
	protected function _thirdPartyTheme()
	{	
		return (bool) \IPS\Db::i()->select( 'COUNT(*)', 'core_theme_templates', 'template_set_id>0' )->first() or \IPS\Db::i()->select( 'COUNT(*)', 'core_theme_css', 'css_set_id>0' )->first();
	}
	
	/**
	 * Step 2: Self Service - Has the editor been customised?
	 *
	 * @return	bool
	 */
	protected function _thirdPartyEditor()
	{	
		return ( \IPS\Settings::i()->ckeditor_extraPlugins or \IPS\Settings::i()->ckeditor_toolbars != \IPS\Db::i()->select( 'conf_default', 'core_sys_conf_settings', array( 'conf_key=?', 'ckeditor_toolbars' ) )->first() );
	}
	
	/**
	 * Step 2: Self Service - Get third-party advertisements
	 *
	 * @return	\IPS\Db\Select
	 */
	protected function _thirdPartyAds()
	{	
		return \IPS\Db::i()->select( '*' ,'core_advertisements', array( 'ad_active=?', 1 ) );
	}
	
	/**
	 * Step 2: Disable Third Party Customizations
	 *
	 * @return	void
	 */
	protected function thirdparty()
	{
		/* Init */
		$disabledApps = array();
		$disabledPlugins = array();
		$disabledAppNames = array();
		$disabledPluginNames = array();
		$restoredDefaultTheme = FALSE;
		$restoredEditor = FALSE;
		$disabledAds = array();

		/* Do we need to disable any third party apps/plugins? */
		if ( !\IPS\NO_WRITES )
		{		
			/* Loop Apps */
			foreach ( $this->_thirdPartyApps() as $app )
			{
				\IPS\Db::i()->update( 'core_applications', array( 'app_enabled' => 0 ), array( 'app_id=?', $app->id ) );
				
				$disabledApps[] = $app->directory;
				$disabledAppNames[ $app->directory ] = $app->_title;
			}
			
			/* Look Plugins */
			foreach ( $this->_thirdPartyPlugins() as $plugin )
			{
				\IPS\Db::i()->update( 'core_plugins', array( 'plugin_enabled' => 0 ), array( 'plugin_id=?', $plugin->id ) );
				
				$disabledPlugins[] = $plugin->id;
				$disabledPluginNames[ $plugin->id ] = $plugin->_title;
			}

			if( \count( $this->_thirdPartyApps() ) )
			{
				\IPS\Application::postToggleEnable();
			}

			if( \count( $this->_thirdPartyPlugins() ) )
			{
				\IPS\Plugin::postToggleEnable( TRUE );
			}
		}
		
		/* Do we need to restore the default theme? */
		if ( $this->_thirdPartyTheme() )
		{
			$newTheme = new \IPS\Theme;
			$newTheme->permissions = \IPS\Member::loggedIn()->member_group_id;
			$newTheme->save();
			$newTheme->installThemeSettings();
			$newTheme->copyResourcesFromSet();
			
			\IPS\Lang::saveCustom( 'core', "core_theme_set_title_" . $newTheme->id, "IPS Default" );
			
			\IPS\Member::loggedIn()->skin = $newTheme->id;

			if( \IPS\Member::loggedIn()->acp_skin !== NULL )
			{
				$_SESSION['old_acp_theme'] = \IPS\Member::loggedIn()->acp_skin;
				\IPS\Member::loggedIn()->acp_skin = $newTheme->id;
			}

			\IPS\Member::loggedIn()->save();
			
			$restoredDefaultTheme = TRUE;
		}
		
		/* Do we need to revert the editor? */
		if ( $this->_thirdPartyEditor() )
		{
			\IPS\Data\Store::i()->editorConfiguationToRestore = array(
				'extraPlugins' 	=> \IPS\Settings::i()->ckeditor_extraPlugins,
				'toolbars'		=> \IPS\Settings::i()->ckeditor_toolbars,
			);
			
			\IPS\Settings::i()->changeValues( array( 'ckeditor_extraPlugins' => '', 'ckeditor_toolbars' => '' ) );
			
			$restoredEditor = TRUE;
		}
		
		/* Do we need to disable any thid party ads? */
		foreach ( $this->_thirdPartyAds() as $ad )
		{
			$ad = \IPS\core\Advertisement::constructFromData( $ad );
			$ad->active = 0;
			$ad->save();
			$disabledAds[] = $ad->id;
		}
		
		/* Clear cache */
		\IPS\Data\Cache::i()->clearAll();
		
		/* Display */
		\IPS\Output::i()->output = \IPS\Theme::i()->getTemplate( 'support' )->thirdPartyDisabled(
			$disabledAppNames,
			$disabledPluginNames,
			$restoredDefaultTheme ? $newTheme->id : 0,
			$restoredEditor,
			$disabledAds,
			\IPS\Http\Url::internal('app=core&module=support&controller=support&do=thirdpartyEnable')->setQueryString( array(
				'enableApps'	=> implode( ',', $disabledApps ),
				'enablePlugins'	=> implode( ',', $disabledPlugins ),
				'deleteTheme'	=> $restoredDefaultTheme ? $newTheme->id : 0,
				'restoreEditor'	=> \intval( $restoredEditor ),
				'enableAds'		=> implode( ',', $disabledAds )
			) )
		);
	}
	
	/**
	 * Step 2: Re-Enable Third Party Customizations
	 *
	 * @return	void
	 */
	protected function thirdpartyEnable()
	{
		/* Theme */
		if ( isset( \IPS\Request::i()->deleteTheme ) and \IPS\Request::i()->deleteTheme )
		{
			try
			{
				\IPS\Theme::load( \IPS\Request::i()->deleteTheme )->delete();
			}
			catch ( \Exception $e ) {}

			if( isset( $_SESSION['old_acp_theme'] ) )
			{
				\IPS\Member::loggedIn()->acp_skin = $_SESSION['old_acp_theme'];
				\IPS\Member::loggedIn()->save();

				unset( $_SESSION['old_acp_theme'] );
			}
		}
		
		/* Apps */
		foreach ( explode( ',', \IPS\Request::i()->enableApps ) as $app )
		{			
			try
			{
				\IPS\Db::i()->update( 'core_applications', array( 'app_enabled' => 1 ), array( 'app_directory=?', $app ) );
			}
			catch ( \Exception $e ) {}
		}
		
		/* Plugins */
		foreach ( explode( ',', \IPS\Request::i()->enablePlugins ) as $plugin )
		{			
			try
			{
				\IPS\Db::i()->update( 'core_plugins', array( 'plugin_enabled' => 1 ), array( 'plugin_id=?', $plugin ) );
			}
			catch ( \Exception $e ) {}
		}

		if( \IPS\Request::i()->enableApps )
		{
			\IPS\Application::postToggleEnable();
		}

		if( \IPS\Request::i()->enablePlugins )
		{
			\IPS\Plugin::postToggleEnable( TRUE );
		}
		
		/* Editor Plugins */
		if ( isset( \IPS\Request::i()->restoreEditor ) and \IPS\Request::i()->restoreEditor )
		{
			$editorConfigutation = \IPS\Data\Store::i()->editorConfiguationToRestore;
			
			\IPS\Settings::i()->changeValues( array( 'ckeditor_extraPlugins' => $editorConfigutation['extraPlugins'], 'ckeditor_toolbars' => $editorConfigutation['toolbars'] ) );
			
			unset( \IPS\Data\Store::i()->editorConfiguationToRestore );
		}
		
		/* Ads Ads */
		foreach ( explode( ',', \IPS\Request::i()->enableAds ) as $ad )
		{			
			try
			{
				$ad = \IPS\core\Advertisement::load( $ad );
				$ad->active = 1;
				$ad->save();
			}
			catch ( \Exception $e ) {}
		}
		
		/* Clear cache */
		\IPS\Data\Cache::i()->clearAll();
		
		/* Output */
		if ( \IPS\Request::i()->isAjax() )
		{
			\IPS\Output::i()->json( 'OK' );
		}
		else
		{
			\IPS\Output::i()->redirect( \IPS\Http\Url::internal('app=core&module=support&controller=support') );
		}
	}
	
	/**
	 * Step 3: Contact Support
	 *
	 * @param	mixed	$data	Wizard data
	 * @return	string|array
	 */
	public function _contactSupport( $data )
	{
					return \IPS\Theme::i()->getTemplate( 'support', 'core', 'admin' )->message( 'get_support_error', 'error' );
			}
	
}