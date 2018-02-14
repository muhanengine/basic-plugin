<?php
/**
 * Plugin Name: SMS (ICODE)
 * Plugin URI:
 * Description: ICODE KOREA 모듈을 이용한 문자메시지 보내는 플러그인.
 * Version: 0.5.0
 * Author: codedodam@gmail.com
 * Author URI:
 *
 * @package codedodam
 * @category Core
 * @author CodeDodam
 */

# Busted!
! defined( 'ABSPATH' ) AND exit(
	// Incorrect connection
);

require_once __DIR__ . '/vendor/autoload.php';

final class CodeDodamPlugin
{
	/** var $initiated */
	private static $initiated = null;

	public function __construct()
	{
		if ( is_null(self::$initiated) ) {
			$this->init();
		}
	}

	/**
	 * this init
	 */
	public function init()
	{

		self::$initiated = true;

		$update = new CodeDodamPlugin\Controllers\PluginUpdate();
		$update->initHooks( __FILE__ );

		$Install = new CodeDodamPlugin\Supplys\LaunchSupply();
		$Install->install( __DIR__, __CLASS__ );
	}
}

new CodeDodamPlugin();
