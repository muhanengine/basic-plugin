<?php
/** @var array $var */

use function CodeDodamPlugin\Template_function\Template_function\getSelectMenu;

?>

<div class="dodam-wrap">
    <h1><?= $var['title'] ?></h1>

    <div class="dodam-sms-icode">
        <div class="wrap">
            <form name="frmSMSSend" class="frm_sms_send" method="post" enctype="multipart/form-data">

                <input type="hidden" name="send_list" value="">

                <div id="wrap_sms_box" class="wrap_inner">
                    <h4>보낼내용</h4>

                    <label for="text_message" id="text_message_lbl" style="display: none;">내용</label>
                    <textarea name="text_message" id="text_message" class="box_txt box_square" accesskey="m"></textarea>

                    <div id="sms_byte"><span id="sms_bytes">0</span> / <span id="sms_max_bytes">80</span> byte</div>

                    <div id="box_reply">
                        <label for="reply_number">회신번호</label>
                        <input type="text" name="reply_number" value="" id="reply_number" readonly="readonly">
                    </div>
                </div>


                <div id="wrap_recv" class="wrap_inner">
                    <h4>받는사람</h4>

                    <label for="recipient_list">받는사람들</label>
                    <select name="recipient_list" id="recipient_list" size="5"></select>
                    <button type="button" class="recipient_delete_btn">선택삭제</button>

                    <div id="box_recipient_add">
                        <label for="recipient_name">이름</label>
                        <input type="text" name="recipient_name" id="recipient_name" placeholder="이름"><br>
                        <label for="recipient_number">번호</label>
                        <input type="text" name="recipient_number" id="recipient_number" placeholder="번호">
                        <button type="button" class="recipient_add_btn">추가</button>
                        <br>
                    </div>
                </div>

                <div id="wrap_rsv" class="wrap_inner">
                    <h4>예약전송</h4>

                    <div class="wrap_floater">
                        <label for="send_booking"><span>예약전송 </span>사용</label>
                        <input type="checkbox" name="send_booking" id="send_booking" >
                    </div>

	                <?= getSelectMenu('getOptionYear', 'wr_by', $var['wr_by'], 'wr_by' ); ?>
                    <label for="wr_by">년</label>
                    <?= getSelectMenu('getOptionMonth', 'wr_bm', $var['wr_bm'], 'wr_bm' ); ?>
                    <label for="wr_bm">월</label>
	                <?= getSelectMenu('getOptionDay', 'wr_bd', $var['wr_bd'], 'wr_bd' ); ?>
                    <label for="wr_bd">일</label>
	                <?= getSelectMenu('getOptionTime', 'wr_bh', $var['wr_bh'], 'wr_bh' ); ?>
                    <label for="wr_bh">시</label>
	                <?= getSelectMenu('getOptionMinute', 'wr_bi', $var['wr_bi'], 'wr_bi' ); ?>
                    <label for="wr_bi">분</label>
                </div>

				<?php submit_button( 'Message Send' ); ?>
            </form>
        </div>
    </div>
</div>

<div class="clear"></div>