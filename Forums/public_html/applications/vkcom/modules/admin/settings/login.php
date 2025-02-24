<?php

namespace IPS\vkcom\modules\admin\settings;

/* To prevent PHP errors (extending class does not exist) revealing path */
if ( !defined( '\IPS\SUITE_UNIQUE_KEY' ) )
{
	header( ( isset( $_SERVER['SERVER_PROTOCOL'] ) ? $_SERVER['SERVER_PROTOCOL'] : 'HTTP/1.0' ) . ' 403 Forbidden' );
	exit;
}

/**
 * login
 */
class _login extends \IPS\Dispatcher\Controller
{
	/**
	 * Execute
	 *
	 * @return	void
	 */
	public function execute()
	{
		\IPS\Dispatcher::i()->checkAcpPermission( 'login_manage' );
		parent::execute();
	}

	/**
	 * Upgrade
	 *
	 * @return	void
	 */
	protected function upgrade()
	{
		\IPS\Output::i()->output = new \IPS\Helpers\MultipleRedirect(
			\IPS\Http\Url::internal( 'app=vkcom&module=settings&controller=login&do=upgrade&id=' . \IPS\Request::i()->id ),
			function( $data )
			{
				$where = array();
				$needsConverting = \IPS\vkcom\Login\Handler\OAuth2\VKontakte::needsConverting();

				foreach ( $needsConverting as $columns )
				{
					$where[] = "( " . $columns[0] . " IS NOT NULL AND " . $columns[0] . " != '' AND " . $columns[0] . " > 0 AND " . $columns[1] . " IS NOT NULL AND " . $columns[1] . " != '' )";
				}

				$where = implode( ' OR ', $where );

				/* Is this the first cycle? */
				if ( !is_array( $data ) )
				{
					$max = (int) \IPS\Db::i()->select( 'COUNT(*)', 'core_members', $where )->first();

					$data = array( 'offset' => 0, 'max' => $max );
				}
				else
				{
					foreach( \IPS\Db::i()->select( '*', 'core_members', $where, 'member_id ASC', array( $data['offset'], 100 ) ) as $member )
					{
						foreach ( $needsConverting as $columns )
						{
							if ( $member[ $columns[0] ] and $member[ $columns[0] ] != '' and $member[ $columns[0] ] > 0 )
							{
								$linkedAccount = array(
									'token_login_method'	=> \IPS\Request::i()->id,
									'token_member'			=> $member['member_id'],
									'token_identifier'		=> $member[ $columns[0] ],
									'token_linked'			=> TRUE,
									'token_access_token'	=> $member[ $columns[1] ],
								);
							}
						}

						if ( count( $linkedAccount ) > 0 )
						{
							\IPS\Db::i()->insert( 'core_login_links', $linkedAccount, FALSE, TRUE );
						}

						$data['offset']++;
					}
				}

				if ( $data['offset'] >= $data['max'] )
				{
					\IPS\Settings::i()->changeValues( array( 'vkcom_accounts_upgraded' => 1 ) );

					return NULL;
				}

				return array( $data, \IPS\Member::loggedIn()->language()->addToStack( 'login_vkontakte_upgrade_progress', FALSE, array( 'sprintf' => array( $data['offset'], $data['max'] ) ) ), ceil( $data['offset'] / $data['max'] * 100 ) );
			},
			function()
			{
				\IPS\Output::i()->redirect( \IPS\Http\Url::internal( 'app=core&module=settings&controller=login&do=form&id=' . \IPS\Request::i()->id ), 'completed' );
			}
		);
	}
}