<?php
/**
 * @Description: 문자메시지 메뉴추가 관리
 */
namespace CodeDodamPlugin\Supplys\Admin;

use CodeDodamPlugin\Models\Admin\SupplyAdminMenuModel;
use CodeDodamPlugin\Traits\TraitStyleScript;
use function CodeDodamPlugin\Libs\Utils\getFuncVar;
use function CodeDodamPlugin\Libs\Functions\getTemplatePart;

class SupplyAdminMenu
{
	use TraitStyleScript;

	public function __construct() {}

	/**
	 * Add a top-level menu, submenu page
	 */
	public function addAdminMenuPage()
	{
		$menuPage = &SupplyAdminMenuModel::getScheme();

		foreach ( $menuPage as $menu ) {
			$callback = array_keys( $menu );
			$paramArr = array_values( $menu );

			$this->_adminMenuPage( $callback[0], $paramArr[0]['parameters'] );
		}
	}

	/**
	 * 설정 페이지
	 */
	public function smsIcodeViewConfigure()
	{
		$args = array();

		$args['var']['tab']     = 'general';
		$args['var']['section'] = '';
		$args['var']['title'] = SupplyAdminMenuModel::getSMSConfigure();

		if ( isset( $_REQUEST['tab'] ) ) {
			$args['var']['tab'] = $_REQUEST['tab'];
		}

		if ( isset( $_REQUEST['section'] ) ) {
			$args['var']['section'] = $_REQUEST['section'];
		}

		getTemplatePart( 'Admin/TemplateSMSConfigure', $args );
	}

	/**
	 * 메시지 보내기 페이지
	 */
	public function smsIcodeViewSend()
	{
		$args = array();
		$args['var']['title'] = SupplyAdminMenuModel::getSMSSend();

		getTemplatePart( 'Admin/TemplateSMSSend', $args );
	}

	/**
	 * 수신자 관리 페이지
	 */
	public function smsIcodeViewReceivers()
	{
		$args = array();
		$args['var']['title'] = SupplyAdminMenuModel::getHPList();

		getTemplatePart( 'Admin/templateRecipientList', $args );
	}

	/**
	 * 수신자 그룹관리 페이지
	 */
	public function smsIcodeViewGroup()
	{
		$args = array();
		$args['var']['title'] = SupplyAdminMenuModel::getHPGroup();

		getTemplatePart( 'Admin/TemplateRecipientGroup', $args );
	}

	/**
	 * 전송 내역 페이지
	 */
	public function smsIcodeViewSendList()
	{
		$args = array();
		$args['var']['title'] = SupplyAdminMenuModel::getSMSSendList();

		getTemplatePart( 'Admin/TemplateSendList', $args );
	}

	/**
	 * 템플릿 관리 페이지
	 */
	public function smsIcodeViewTemplate()
	{
		$args = array();
		$args['var']['title'] = SupplyAdminMenuModel::getSMSMessage();

		getTemplatePart( 'Admin/TemplateSMSTemplates', $args );
	}

	/**
	 * 엑셀 데이터 수신자 관리에 저장 페이지
	 */
	public function smsIcodeViewBookFile()
	{
		$args = array();
		$args['var']['title'] = SupplyAdminMenuModel::getHPFile();

		getTemplatePart( 'Admin/TemplateRecipientFile', $args );
	}

	/**
	 * 스타일 파일 추가
	 */
	public function addAdminStyle()
	{
		$this->addSmsAdminStyle();
	}

	/**
	 * 어드민 메뉴추가
	 *
	 * @param string $callback  [함수]
	 * @param array $paramArr [함수 파라미터]
	 */
	public function _adminMenuPage( $callback, $paramArr )
	{
		switch ( $callback ) {
			case 'add_menu_page':
				$paramArr[4] = array( $this, $paramArr[4] );
				break;
			case 'add_submenu_page':
				$paramArr[5] = array( $this, $paramArr[5] );
				break;
		}

		getFuncVar( $paramArr, $callback );
	}
}
