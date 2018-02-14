<?php
/** @var array $var */
?>

<div class="dodam-wrap">
    <h1><?= $var['title'] ?></h1>

    <div class="dodam-sms-icode">
        <div class="wrap">

            <div class="container_wr">
                <form name="frmSMSConfigure" method="post" enctype="multipart/form-data">

                    <label for="st" class="sound_only">검색대상</label>
                    <input type="hidden" name="st" id="st" value="wr_message">
                    <label for="sv" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
                    <input type="text" name="sv" value="" id="sv" required="" class="required frm_input">
                    <input type="submit" id="search-submit" class="button" value="Search">

                </form>

                <div class="tbl_head01 tbl_wrap">
                    <table class="wp-list-table widefat fixed striped">
                        <caption>문자전송 내역 목록</caption>
                        <thead>
                        <tr>
                            <th scope="col">번호</th>
                            <th scope="col">메세지</th>
                            <th scope="col">회신번호</th>
                            <th scope="col">전송일시</th>
                            <th scope="col">예약</th>
                            <th scope="col">총건수</th>
                            <th scope="col">성공</th>
                            <th scope="col">실패</th>
                            <th scope="col">중복</th>
                            <th scope="col">재전송</th>
                            <th scope="col">관리</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td colspan="11" class="empty_table">
                                데이터가 없습니다.
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>


                <noscript>
                    &lt;p&gt;
                    귀하께서 사용하시는 브라우저는 현재 &lt;strong&gt;자바스크립트를 사용하지 않음&lt;/strong&gt;으로 설정되어 있습니다.&lt;br&gt;
                    &lt;strong&gt;자바스크립트를 사용하지 않음&lt;/strong&gt;으로 설정하신 경우는 수정이나 삭제시 별도의 경고창이 나오지 않으므로 이점 주의하시기 바랍니다.
                    &lt;/p&gt;
                </noscript>

            </div>

        </div>
    </div>
</div>

<div class="clear"></div>