<?php
namespace CodeDodamPlugin\Models\Admin;

use function CodeDodamPlugin\Libs\Utils\_isset;

class SupplyAdminMenuModel
{
	/**
	 * top-level menu, submenu page
	 * @param string $key
	 * @return array|mixed|null
	 */
	public static function &getScheme( $key = '' )
	{
		static $scheme = null;

		if ( is_null( $scheme ) ) {

			$scheme = array();

			$menuSlug   = self::getMenuSlug();
			$capability = self::getCapability();

			$scheme[] = array(
				'add_menu_page' => array(
					'parameters' => array( 'ICODE_DODAM title',
						__( self::getSMSTitle(), _DODAM_ICODE_TEXT_DOMAIN_ ),
						null,
						$menuSlug,
						'smsIcodeViewConfigure',
						'dashicons-smartphone',
						59 ),
					'description' => __('', _DODAM_ICODE_TEXT_DOMAIN_),
				)
			);

			$scheme[] = array(
				'add_submenu_page' => array(
					'parameters' => array( $menuSlug,
						'ICODE_DODAM SET-UP',
						__( self::getSMSConfigure(), _DODAM_ICODE_TEXT_DOMAIN_ ),
						$capability,
						'smsIcode-configure',
						'smsIcodeViewConfigure' ),
					'description' => __('', _DODAM_ICODE_TEXT_DOMAIN_),
				)
			);
			$scheme[] = array(
				'add_submenu_page' => array(
					'parameters' => array( $menuSlug,
						'ICODE_DODAM SEND',
						__( self::getSMSSend(), _DODAM_ICODE_TEXT_DOMAIN_ ),
						$capability,
						'smsIcode-send',
						'smsIcodeViewSend' ),
					'description' => __('', _DODAM_ICODE_TEXT_DOMAIN_),
				)
			);
			$scheme[] = array(
				'add_submenu_page' => array(
					'parameters' => array( $menuSlug,
						'ICODE_DODAM SEND LIST',
						__( self::getSMSSendList(), _DODAM_ICODE_TEXT_DOMAIN_ ),
						$capability,
						'smsIcode-send-list',
						'smsIcodeViewSendList' ),
					'description' => __('', _DODAM_ICODE_TEXT_DOMAIN_),
				)
			);
			$scheme[] = array(
				'add_submenu_page' => array(
					'parameters' => array( $menuSlug,
						'ICODE_DODAM GROUP',
						__( self::getHPGroup(), _DODAM_ICODE_TEXT_DOMAIN_ ),
						$capability,
						'smsIcode-group',
						'smsIcodeViewGroup' ),
					'description' => __('', _DODAM_ICODE_TEXT_DOMAIN_),
				)
			);
			$scheme[] = array(
				'add_submenu_page' => array(
					'parameters' => array( $menuSlug,
						'ICODE_DODAM RECEIVERS',
						__( self::getHPList(), _DODAM_ICODE_TEXT_DOMAIN_ ),
						$capability,
						'smsIcode-receivers',
						'smsIcodeViewReceivers' ),
					'description' => __('', _DODAM_ICODE_TEXT_DOMAIN_),
				)
			);
			$scheme[] = array(
				'add_submenu_page' => array(
					'parameters' => array( $menuSlug,
						'ICODE_DODAM TEMPLATE',
						__( self::getSMSMessage(), _DODAM_ICODE_TEXT_DOMAIN_ ),
						$capability,
						'smsIcode-template',
						'smsIcodeViewTemplate' ),
					'description' => __('', _DODAM_ICODE_TEXT_DOMAIN_),
				)
			);
			$scheme[] = array(
				'add_submenu_page' => array(
					'parameters' => array( $menuSlug,
						'ICODE_DODAM BOOK FILE',
						__( self::getHPFile(), _DODAM_ICODE_TEXT_DOMAIN_ ),
						$capability,
						'smsIcode-book-file',
						'smsIcodeViewBookFile' ),
					'description' => __('', _DODAM_ICODE_TEXT_DOMAIN_),
				)
			);

		}

		if ( ! empty($key) ) {
			$value = _isset( $key, $scheme );
			return $value;
		} else {
			return $scheme;
		}
	}

	public static function getSMSTitle()
	{
		return 'SMS 관리';
	}

	public static function getSMSConfigure()
	{
		return 'SMS 기본설정';
	}

	public static function getSMSSend()
	{
		return '문자 보내기';
	}

	public static function getSMSSendList()
	{
		return '전송 내역';
	}

	public static function getHPGroup()
	{
		return '휴대폰 번호 그룹 관리';
	}

	public static function getHPList()
	{
		return '휴대폰 번호 관리';
	}

	public static function getSMSMessage()
	{
		return '문자 메시지 관리';
	}

	public static function getHPFile()
	{
		return '휴대폰 번호 파일 관리';
	}

	public static function getMenuSlug()
	{
		return 'sms-icode-admin';
	}

	public static function getCapability()
	{
		return 'manage_options';
	}
}