<?php
/** @var array $var */
?>

<div class="dodam-wrap">
    <h1><?= $var['title'] ?></h1>

    <div class="dodam-sms-icode">
        <div class="wrap">
            <form name="frmSMSConfigure" method="post" enctype="multipart/form-data">
                <div class="container_wr">
                    <h2>파일 업로드</h2>
                    <div class="local_desc01 local_desc">
                        <p>
                            엑셀에 저장된 휴대폰번호 목록을 데이터베이스에 저장할 수 있습니다.
                        </p>

                        <p>
                            엑셀에는 이름과 휴대폰번호 두개만 저장해주세요. 첫번째 라인부터 저장됩니다.<br>
                            ※ 휴대폰번호에 하이픈(-)은 포함되어도 되고 포함되지 않아도 됩니다.
                        </p>

                        <p>
                            엑셀파일은 XLS( Excel 97 - 2003 통합 문서 ) 또는 CSV형식만 업로드 할수 있습니다. (xlsx 불가)<br>
                            <strong>CSV 저장방법 : 파일 &gt; 다른 이름으로 저장 &gt; 파일형식 : CSV (쉼표로 분리) (*.CSV)</strong>
                        </p>

                        <p>
                            이 작업을 실행하기 전에 <a href="http://demo.sir.kr/gnuboard5/adm/sms_admin/member_update.php"
                                             target="_blank">회원정보업데이트</a>를 먼저 실행해주세요.
                        </p>
                    </div>

                    <form name="upload_form" method="post" enctype="multipart/form-data" id="sms5_fileup_frm">
                        <div>
                            <label for="upload_bg_no">그룹선택</label>
                            <select name="upload_bg_no" id="upload_bg_no">
                                <option value=""></option>
                                <option value="1"> 미분류 (0)</option>
                                <option value="37"> 1반 (4)</option>
                                <option value="29"> 22232 (0)</option>
                                <option value="31"> aaa (0)</option>
                                <option value="33"> aaaaaaaaaaaaaaaaaaaaaaaaaa (1)</option>
                                <option value="32"> vvv (0)</option>
                                <option value="30"> ㅅㄷㄴㅅ (3)</option>
                                <option value="28"> ㅇㄹ (0)</option>
                                <option value="34"> 신규 (0)</option>
                                <option value="35"> 테스트 (0)</option>
                                <option value="36"> 테스트t (0)</option>
                                <option value="26"> 테스트분류 (0)</option>
                            </select>
                        </div>

                        <div id="sms5_fileup">
                            <label for="csv">파일선택</label>
                            <input type="file" name="csv" id="csv" onchange="document.getElementById('upload_info').style.display='none';">
                            <span id="upload_button">
                                <?php submit_button( 'Upload' ); ?>
                            </span>
                            <span id="uploading" class="sms_fileup_hide">
                                파일을 업로드 중입니다. 잠시만 기다려주세요.
                            </span>

                            <div id="upload_info" class="sms_fileup_hide"></div>
                            <div id="register" class="sch_last sms_fileup_hide">
                                휴대폰번호를 DB에 저장중 입니다. 잠시만 기다려주세요.
                            </div>
                        </div>
                    </form>

                    <h2>파일 다운로드</h2>
                    <div class="local_desc01 local_desc">
                        <p>
                            저장된 휴대폰번호 목록을 엑셀(xls) 파일로 다운로드 할 수 있습니다.<br>
                            다운로드 할 휴대폰번호 그룹을 선택해주세요.
                        </p>
                    </div>

                    <div class="local_sch01 local_sch">
                        <p class="sms5_bkfile_p">
                            <input type="checkbox" value="1" id="no_hp">
                            <label for="no_hp">휴대폰 번호 없는 회원 포함</label><br>
                            <input type="checkbox" value="1" id="hyphen">
                            <label for="hyphen">하이픈 '―' 포함</label>
                        </p>

                        <label for="download_bg_no">그룹선택</label>
                        <select name="download_bg_no" id="download_bg_no">
                            <option value=""></option>
                            <option value="all"> 전체</option>
                            <option value="1"> 미분류 (0)</option>
                            <option value="37"> 1반 (4)</option>
                            <option value="29"> 22232 (0)</option>
                            <option value="31"> aaa (0)</option>
                            <option value="33"> aaaaaaaaaaaaaaaaaaaaaaaaaa (1)</option>
                            <option value="32"> vvv (0)</option>
                            <option value="30"> ㅅㄷㄴㅅ (3)</option>
                            <option value="28"> ㅇㄹ (0)</option>
                            <option value="34"> 신규 (0)</option>
                            <option value="35"> 테스트 (0)</option>
                            <option value="36"> 테스트t (0)</option>
                            <option value="26"> 테스트분류 (0)</option>
                        </select>
						<?php submit_button( 'Download' ); ?>
                    </div>

                    <noscript>
                        &lt;p&gt;
                        귀하께서 사용하시는 브라우저는 현재 &lt;strong&gt;자바스크립트를 사용하지 않음&lt;/strong&gt;으로 설정되어 있습니다.&lt;br&gt;
                        &lt;strong&gt;자바스크립트를 사용하지 않음&lt;/strong&gt;으로 설정하신 경우는 수정이나 삭제시 별도의 경고창이 나오지 않으므로 이점 주의하시기
                        바랍니다.
                        &lt;/p&gt;
                    </noscript>

                </div>

            </form>
        </div>
    </div>
</div>

<div class="clear"></div>