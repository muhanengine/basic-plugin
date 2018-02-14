<?php
/**
 * @Description: 문자메시지 메뉴추가 관리
 */

namespace CodeDodamPlugin\Launchs\Admin;

use CodeDodamPlugin\Supplys\Admin\SupplyAdminMenu;

class LaunchAdminMenu
{
	/** @var $adminMenu SupplyAdminMenu */
	private $adminMenu = null;

	public function __construct()
	{
		$this->init();
		$this->initAdminMenuHooks();
	}

	/**
	 * this init
	 */
	public function init()
	{
		$this->adminMenu = new SupplyAdminMenu();
	}

	/**
	 * Initializer for setting up action handler
	 */
	public function initAdminMenuHooks()
	{
		add_action( 'admin_init', array($this, 'addAdminStyle') );
		add_action( 'admin_menu', array($this, 'addAdminMenu') );
	}

	/**
	 * Add Admin Menu.
	 */
	public function addAdminMenu()
	{
		$this->adminMenu->addAdminMenuPage();
	}

	/**
	 * Register style and script.
	 */
	public function addAdminStyle()
	{
		$this->adminMenu->addAdminStyle();
	}
}