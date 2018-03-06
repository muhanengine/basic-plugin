<?php
/**
 * @Description: 문자메시지 메뉴추가 관리
 */

namespace CodeDodamPlugin\Launchs\Admin;

use CodeDodamPlugin\Interfaces\InterfaceLaunch;
use CodeDodamPlugin\Supplys\Admin\SupplyAdminMenu;

class LaunchAdminMenu implements InterfaceLaunch
{
	/** @var $adminMenu SupplyAdminMenu */
	private $adminMenu = null;

	public function __construct()
	{
		$this->init();
		$this->initHooks();
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
	public function initHooks()
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