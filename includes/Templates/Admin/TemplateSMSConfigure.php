<?php
/** @var array $var */
?>

<div class="dodam-wrap">
    <h1><?= $var['title'] ?></h1>

    <div class="about-text">
        아이코드의 결제내역조회 및 문자서비스 입금 내역 목록입니다. <a href="http://www.icodekorea.com/?ctl=user_sign_on" target="_blank">아이코드
            회원가입</a><br/>
        아이코드의 요금제는 정액제 서비스와 충전식 서비스가 있습니다. <a href="http://www.icodekorea.com/?ctl=pay_list" target="_blank">사이버머니
            충전</a><br/>
        문자를 발송(전송)하기 위해서는 반드시 발신번호를 사전등록을 하셔야 합니다. <a href="http://www.icodekorea.com/callback_reg/number_register.php"
                                                      target="_blank">발신번호 사전 등록</a>
    </div>
    <div class="dodam-logo"><span class="dodam-version">ICODE Version <?= _DODAM_ICODE_SMS_VERSION_ ?></span></div>
    <h2 class="nav-tab-wrapper">
        <a href="http://local.wc/wp-admin/admin.php?page=smsIcode-configure" class="nav-tab-active nav-tab">SMS 기본설정</a>
        <a href="http://local.wc/wp-admin/admin.php?page=smsIcode-configure&tab=woocommerce" class=" nav-tab">Woocommerce</a>
        <a href="http://local.wc/wp-admin/admin.php?page=smsIcode-configure&tab=shortcode" class=" nav-tab">Short
            Code</a>
    </h2>

    <div class="dodam-sms-icode">
        <div class="wrap">
            <form name="frmSMSConfigure" method="post" enctype="multipart/form-data">
                <input type="hidden" name="icode_server_ip" value="<?= _DODAM_ICODE_SERVER_IP_ ?>">
                <input type="hidden" name="icode_server_port" value="<?= _DODAM_ICODE_SERVER_PORT_ ?>">
                <div class="table-responsive">
                    <table class="dodam-sms-configure widefat striped">
                        <colgroup>
                            <col class="grid_4">
                            <col>
                        </colgroup>
                        <tbody>
                        <tr>
                            <th scope="row"><label for="icode_id">문자메시지 사용</label></th>
                            <td>
                                <select id="icode_sms_use" name="icode_sms_use" title="문자메시지 사용">
                                    <option value="">사용안함</option>
                                    <option value="icode" selected="selected">사용함</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="icode_id">아이코드 회원아이디<strong> 필수</strong></label></th>
                            <td>
                                <input type="text" name="icode_id" value="*****" id="icode_id" required=""
                                       class="frm_input required" title="아이코드 회원아이디">
                                <p class="description">아이코드에서 사용하시는 회원아이디를 입력합니다.</p>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="icode_pw">아이코드 비밀번호<strong> 필수</strong></label></th>
                            <td>
                                <input type="password" name="icode_pw" value="*****@***" id="icode_pw" required=""
                                       class="frm_input required" title="아이코드 비밀번호">
                                <p class="description">아이코드에서 사용하시는 비밀번호를 입력합니다.</p>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">요금제</th>
                            <td>
                                가입해주세요.
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="phone">회신번호<strong> 필수</strong></label></th>
                            <td>
                                <input type="text" name="icode_reply_phone" value="" id="icode_reply_phone" required=""
                                       class="frm_input required" size="13" title="회신번호">
                                <p class="description">회신받을 휴대폰 번호를 입력하세요. 회신번호는 발신번호로 사전등록된 번호와 동일해야 합니다.<br>예)
                                    010-123-4567</p>
                            </td>
                        </tr>
                        </tbody>
                    </table>

                    <p class="description">
                        SMS 80바이트까지, LMS 1500바이트까지 전송됩니다.<br/>
                        요금은 건당 SMS는 25원, LMS는 50원입니다.
                    </p>
                </div>
				<?php submit_button(); ?>
            </form>

        </div>
    </div>
</div>

<div class="clear"></div>