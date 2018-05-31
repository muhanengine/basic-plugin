<?php
/**
 * @Description: 스타일, 스크립트 파일
 */
namespace CodeDodamPlugin\Traits;

use function CodeDodamPlugin\Libs\Functions\wpRegisterEnqueueStyle;
use function CodeDodamPlugin\Libs\Functions\wpRegisterEnqueueScript;

trait TraitStyleScript
{
	/**
	 * 어드민 스타일 파일 추가
	 */
	public static function addSmsAdminStyle()
	{
		wpRegisterEnqueueStyle( 'icode-sms-admin-style',
			_DODAM_ICODE_URL_ .'/assets/css/smsAdmin.css',
			array(),
			_DODAM_ICODE_VERSION_,
			'all' );
	}

	/**
	 * 어드민 스크립트 파일 추가
	 */
	public static function addSmsAdminScript()
	{
		wpRegisterEnqueueScript( 'icode-sms-admin-script',
			_DODAM_ICODE_URL_ .'/assets/js/smsAdmin.js',
			array (),
			_DODAM_ICODE_VERSION_,
			false );
	}
}