<?php
/** @var array $var */
?>

<div class="dodam-wrap">
    <h1><?= $var['title'] ?></h1>

    <div class="dodam-sms-icode">
        <div class="wrap">

                <div class="container_wr">

                    <div class="local_ov01 local_ov">
                        <span class="btn_ov01"><span class="ov_txt">건수</span><span class="ov_num">5건</span></span>
                    </div>

                    <div class="local_sch01 local_sch sms_preset_sch">
                        <form name="frmSMSConfigure" method="post" enctype="multipart/form-data">
                            <label for="fg_no" class="sound_only">그룹명</label>
                            <select name="fg_no" id="fg_no" onchange="location.href='/gnuboard5/adm/sms_admin/form_list.php?fg_no='+this.value;">
                                <option value="" selected=""> 전체 </option>
                                <option value="0"> 미분류 (5) </option>
                                <option value="1"> basic! (0) </option>
                            </select>
                        </form>

                        <form name="frmSMSConfigure" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="fg_no" value="">
                            <label for="st" class="sound_only">검색대상</label>
                            <select name="st" id="st">
                                <option value="all">제목 + 이모티콘</option>
                                <option value="name">제목</option>
                                <option value="content">이모티콘</option>
                            </select>
                            <label for="sv" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
                            <input type="text" name="sv" value="" id="sv" required="" class="frm_input required">
                            <input type="submit" value="검색" class="btn_submit">
                        </form>
                    </div>

                    <div id="sms5_preset_sel">
                        <input type="checkbox" id="book_all">
                        <label for="book_all">전체선택</label>
                    </div>


                    <form name="frmSMSConfigure" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="page" value="1">
                        <input type="hidden" name="token" value="46b24ab74f5cbc13830473ab0e1420c3">
                        <input type="hidden" name="sw" value="">
                        <input type="hidden" name="atype" value="del">
                        <ul id="sms5_preset" class="sms5_box">
                            <li class="li_1 sms5_box">
                                <span class="box_ico"></span>
                                <div class="li_chk">
                                    <label for="fo_no_0" class="sound_only">미분류의 글자수</label>
                                    <input type="checkbox" name="fo_no[]" value="30" id="fo_no_0">
                                </div>
                                <div class="li_preview">
                                    <textarea readonly="" class="box_txt box_square" title="">asdfasdfasdfsadfsadfasdfasdfsadfsadasdfasdfsdfasdfasfasdfsadsdafsdafsadfsadfsdfa</textarea>
                                </div>
                                <div class="li_info">
                                    <span class="sound_only">그룹 </span><b>미분류</b><br>
                                    <span class="sound_only">제목 </span>글자수<br>
                                </div>
                                <div class="li_date">
                                    <span class="sound_only">등록 </span>2017-08-29        </div>
                                <div class="li_cmd">
                                    <a href="./form_write.php?w=u&amp;fo_no=30&amp;page=1&amp;fg_no=&amp;st=&amp;sv=">수정</a>
                                    <a href="javascript:void(book_del('30'));">삭제</a>
                                    <a href="./sms_write.php?fo_no=30">보내기</a>
                                </div>
                            </li>
                            <li class="li_2 sms5_box">
                                <span class="box_ico"></span>
                                <div class="li_chk">
                                    <label for="fo_no_1" class="sound_only">미분류의 제목입니다.</label>
                                    <input type="checkbox" name="fo_no[]" value="29" id="fo_no_1">
                                </div>
                                <div class="li_preview">
                                    <textarea readonly="" class="box_txt box_square" title="">테스트입니다.</textarea>
                                </div>
                                <div class="li_info">
                                    <span class="sound_only">그룹 </span><b>미분류</b><br>
                                    <span class="sound_only">제목 </span>제목입니다.<br>
                                </div>
                                <div class="li_date">
                                    <span class="sound_only">등록 </span>2017-07-26        </div>
                                <div class="li_cmd">
                                    <a href="./form_write.php?w=u&amp;fo_no=29&amp;page=1&amp;fg_no=&amp;st=&amp;sv=">수정</a>
                                    <a href="javascript:void(book_del('29'));">삭제</a>
                                    <a href="./sms_write.php?fo_no=29">보내기</a>
                                </div>
                            </li>
                            <li class="li_3 sms5_box">
                                <span class="box_ico"></span>
                                <div class="li_chk">
                                    <label for="fo_no_2" class="sound_only">미분류의 빠른답변 바랍니다.</label>
                                    <input type="checkbox" name="fo_no[]" value="28" id="fo_no_2">
                                </div>
                                <div class="li_preview">
                                    <textarea readonly="" class="box_txt box_square" title="">빠른답변 바랍니다.</textarea>
                                </div>
                                <div class="li_info">
                                    <span class="sound_only">그룹 </span><b>미분류</b><br>
                                    <span class="sound_only">제목 </span>빠른답변 바랍니다.<br>
                                </div>
                                <div class="li_date">
                                    <span class="sound_only">등록 </span>2017-07-26        </div>
                                <div class="li_cmd">
                                    <a href="./form_write.php?w=u&amp;fo_no=28&amp;page=1&amp;fg_no=&amp;st=&amp;sv=">수정</a>
                                    <a href="javascript:void(book_del('28'));">삭제</a>
                                    <a href="./sms_write.php?fo_no=28">보내기</a>
                                </div>
                            </li>
                            <li class="li_4 sms5_box">
                                <span class="box_ico"></span>
                                <div class="li_chk">
                                    <label for="fo_no_3" class="sound_only">미분류의 ㄹㅇㄴ</label>
                                    <input type="checkbox" name="fo_no[]" value="25" id="fo_no_3">
                                </div>
                                <div class="li_preview">
                                    <textarea readonly="" class="box_txt box_square" title="">ㄹㅇㄴㄹㄴㄹㅇㄴ</textarea>
                                </div>
                                <div class="li_info">
                                    <span class="sound_only">그룹 </span><b>미분류</b><br>
                                    <span class="sound_only">제목 </span>ㄹㅇㄴ<br>
                                </div>
                                <div class="li_date">
                                    <span class="sound_only">등록 </span>2017-07-12        </div>
                                <div class="li_cmd">
                                    <a href="./form_write.php?w=u&amp;fo_no=25&amp;page=1&amp;fg_no=&amp;st=&amp;sv=">수정</a>
                                    <a href="javascript:void(book_del('25'));">삭제</a>
                                    <a href="./sms_write.php?fo_no=25">보내기</a>
                                </div>
                            </li>
                            <li class="li_5 sms5_box">
                                <span class="box_ico"></span>
                                <div class="li_chk">
                                    <label for="fo_no_4" class="sound_only">미분류의 3하트</label>
                                    <input type="checkbox" name="fo_no[]" value="24" id="fo_no_4">
                                </div>
                                <div class="li_preview">
                                    <textarea readonly="" class="box_txt box_square" title="">♥♥♥</textarea>
                                </div>
                                <div class="li_info">
                                    <span class="sound_only">그룹 </span><b>미분류</b><br>
                                    <span class="sound_only">제목 </span>3하트<br>
                                </div>
                                <div class="li_date">
                                    <span class="sound_only">등록 </span>2017-06-21        </div>
                                <div class="li_cmd">
                                    <a href="./form_write.php?w=u&amp;fo_no=24&amp;page=1&amp;fg_no=&amp;st=&amp;sv=">수정</a>
                                    <a href="javascript:void(book_del('24'));">삭제</a>
                                    <a href="./sms_write.php?fo_no=24">보내기</a>
                                </div>
                            </li>
                        </ul>

                        <div class="btn_fixed_top">
                            <input type="submit" name="act_button" value="선택이동" onclick="document.pressed=this.value" class="btn btn_02">
                            <input type="submit" name="act_button" value="선택삭제" onclick="document.pressed=this.value" class="btn btn_02">
                            <a href="./form_write.php?page=1&amp;fg_no=" class="btn btn_01">이모티콘 추가</a>
                        </div>

                    </form>

                    <noscript>
                        &lt;p&gt;
                        귀하께서 사용하시는 브라우저는 현재 &lt;strong&gt;자바스크립트를 사용하지 않음&lt;/strong&gt;으로 설정되어 있습니다.&lt;br&gt;
                        &lt;strong&gt;자바스크립트를 사용하지 않음&lt;/strong&gt;으로 설정하신 경우는 수정이나 삭제시 별도의 경고창이 나오지 않으므로 이점 주의하시기 바랍니다.
                        &lt;/p&gt;
                    </noscript>

                </div>
				<?php submit_button( 'Message Send' ); ?>

        </div>
    </div>
</div>

<div class="clear"></div>