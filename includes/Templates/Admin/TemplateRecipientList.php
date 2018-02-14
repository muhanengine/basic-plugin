<?php
/** @var array $var */
?>

<div class="dodam-wrap">
    <h1><?= $var['title'] ?></h1>

    <div class="dodam-sms-icode">
        <div class="wrap">

                <div class="container_wr">

                    <div class="local_ov01 local_ov">
                        <span class="btn_ov01"><span class="ov_txt">업데이트 </span><span class="ov_num"></span></span>
                        <span class="btn_ov01"><span class="ov_txt"> 건수  </span><span class="ov_num">8명</span></span>
                        <span class="btn_ov01"><span class="ov_txt"> 회원  </span><span class="ov_num"> 0명</span></span>
                        <span class="btn_ov01"><span class="ov_txt"> 비회원  </span><span class="ov_num"> 8명</span></span>
                        <span class="btn_ov01"><span class="ov_txt"> 수신  </span><span class="ov_num"> 8명</span></span>
                        <span class="btn_ov01"><span class="ov_txt"> 거부  </span><span class="ov_num"> 0명</span></span>
                    </div>

                    <form name="frmSMSConfigure" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="bg_no" value="">
                        <label for="st" class="sound_only">검색대상</label>
                        <select name="st" id="st">
                            <option value="all">이름 + 휴대폰번호</option>
                            <option value="name">이름</option>
                            <option value="hp">휴대폰번호</option>
                        </select>
                        <label for="sv" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
                        <input type="text" name="sv" value="" id="sv" required="" class="frm_input required">
                        <input type="submit" value="검색" class="btn_submit">
                    </form>

                    <form name="frmSMSConfigure" method="post" enctype="multipart/form-data">
                        <label for="bg_no" class="sound_only">그룹명</label>
                        <select name="bg_no" id="bg_no" onchange="location.href='/gnuboard5/adm/sms_admin/num_book.php?bg_no='+this.value;">
                            <option value="" selected="selected"> 전체 </option>
                            <option value="1"> 미분류 (0 명) </option>
                            <option value="37"> 1반 (4 명) </option>
                            <option value="29"> 22232 (0 명) </option>
                            <option value="31"> aaa (0 명) </option>
                            <option value="33"> aaaaaaaaaaaaaaaaaaaaaaaaaa (1 명) </option>
                            <option value="32"> vvv (0 명) </option>
                            <option value="30"> ㅅㄷㄴㅅ (3 명) </option>
                            <option value="28"> ㅇㄹ (0 명) </option>
                            <option value="34"> 신규 (0 명) </option>
                            <option value="35"> 테스트 (0 명) </option>
                            <option value="36"> 테스트t (0 명) </option>
                            <option value="26"> 테스트분류 (0 명) </option>
                        </select>
                        <input type="checkbox" name="no_hp" id="no_hp">
                        <label for="no_hp">휴대폰 소유자만 보기</label>
                    </form>



                    <form name="frmSMSConfigure" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="page" value="1">
                        <input type="hidden" name="token" value="84795408d91d5003615f9918cff23969">
                        <input type="hidden" name="sw" value="">
                        <input type="hidden" name="atype" value="del">
                        <input type="hidden" name="str_query" value="">

                        <div class="tbl_head01 tbl_wrap">
                            <table class="wp-list-table widefat fixed striped">
                                <caption>휴대폰번호 관리 목록</caption>
                                <thead>
                                <tr>
                                    <th scope="col">
                                        <label for="chk_all" class="sound_only">현재 페이지 전체</label>
                                        <input type="checkbox" id="chk_all">
                                    </th>
                                    <th scope="col">번호</th>
                                    <th scope="col">그룹</th>
                                    <th scope="col">이름</th>
                                    <th scope="col">휴대폰</th>
                                    <th scope="col">수신</th>
                                    <th scope="col">아이디</th>
                                    <th scope="col">업데이트</th>
                                    <th scope="col">관리</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="bg0">
                                    <td class="td_chk">
                                        <label for="bk_no_11" class="sound_only">1반의 4번</label>
                                        <input type="checkbox" name="bk_no[]" value="79" id="bk_no_11">
                                    </td>
                                    <td class="td_num">8</td>
                                    <td>1반</td>
                                    <td class="td_mbname">4번</td>
                                    <td class="td_numbig">010-1111-4444</td>
                                    <td class="td_boolean"><span style="color: blue; ">수신</span></td>
                                    <td class="td_mbid">비회원</td>
                                    <td class="td_datetime">2017-12-17 22:00:39</td>
                                    <td class="td_mng td_mng_l">
                                        <a href="./num_book_write.php?w=u&amp;bk_no=79&amp;page=1&amp;bg_no=&amp;st=&amp;sv=&amp;ap=0" class="btn btn_03">수정</a>
                                        <a href="./sms_write.php?bk_no=79" class="btn btn_02">보내기</a>
                                        <a href="./history_num.php?st=hs_hp&amp;sv=010-1111-4444" class="btn btn_02">내역</a>
                                    </td>
                                </tr>
                                <tr class="bg1">
                                    <td class="td_chk">
                                        <label for="bk_no_11" class="sound_only">1반의 3번</label>
                                        <input type="checkbox" name="bk_no[]" value="78" id="bk_no_11">
                                    </td>
                                    <td class="td_num">7</td>
                                    <td>1반</td>
                                    <td class="td_mbname">3번</td>
                                    <td class="td_numbig">010-1111-3333</td>
                                    <td class="td_boolean"><span style="color: blue; ">수신</span></td>
                                    <td class="td_mbid">비회원</td>
                                    <td class="td_datetime">2017-12-17 22:00:28</td>
                                    <td class="td_mng td_mng_l">
                                        <a href="./num_book_write.php?w=u&amp;bk_no=78&amp;page=1&amp;bg_no=&amp;st=&amp;sv=&amp;ap=0" class="btn btn_03">수정</a>
                                        <a href="./sms_write.php?bk_no=78" class="btn btn_02">보내기</a>
                                        <a href="./history_num.php?st=hs_hp&amp;sv=010-1111-3333" class="btn btn_02">내역</a>
                                    </td>
                                </tr>
                                <tr class="bg0">
                                    <td class="td_chk">
                                        <label for="bk_no_11" class="sound_only">1반의 2번</label>
                                        <input type="checkbox" name="bk_no[]" value="77" id="bk_no_11">
                                    </td>
                                    <td class="td_num">6</td>
                                    <td>1반</td>
                                    <td class="td_mbname">2번</td>
                                    <td class="td_numbig">010-1111-2221</td>
                                    <td class="td_boolean"><span style="color: blue; ">수신</span></td>
                                    <td class="td_mbid">비회원</td>
                                    <td class="td_datetime">2017-12-17 22:00:16</td>
                                    <td class="td_mng td_mng_l">
                                        <a href="./num_book_write.php?w=u&amp;bk_no=77&amp;page=1&amp;bg_no=&amp;st=&amp;sv=&amp;ap=0" class="btn btn_03">수정</a>
                                        <a href="./sms_write.php?bk_no=77" class="btn btn_02">보내기</a>
                                        <a href="./history_num.php?st=hs_hp&amp;sv=010-1111-2221" class="btn btn_02">내역</a>
                                    </td>
                                </tr>
                                <tr class="bg1">
                                    <td class="td_chk">
                                        <label for="bk_no_11" class="sound_only">1반의 1번</label>
                                        <input type="checkbox" name="bk_no[]" value="76" id="bk_no_11">
                                    </td>
                                    <td class="td_num">5</td>
                                    <td>1반</td>
                                    <td class="td_mbname">1번</td>
                                    <td class="td_numbig">010-1111-1111</td>
                                    <td class="td_boolean"><span style="color: blue; ">수신</span></td>
                                    <td class="td_mbid">비회원</td>
                                    <td class="td_datetime">2017-12-17 21:59:46</td>
                                    <td class="td_mng td_mng_l">
                                        <a href="./num_book_write.php?w=u&amp;bk_no=76&amp;page=1&amp;bg_no=&amp;st=&amp;sv=&amp;ap=0" class="btn btn_03">수정</a>
                                        <a href="./sms_write.php?bk_no=76" class="btn btn_02">보내기</a>
                                        <a href="./history_num.php?st=hs_hp&amp;sv=010-1111-1111" class="btn btn_02">내역</a>
                                    </td>
                                </tr>
                                <tr class="bg0">
                                    <td class="td_chk">
                                        <label for="bk_no_11" class="sound_only">aaaaaaaaaaaaaaaaaaaaaaaaaa의 t</label>
                                        <input type="checkbox" name="bk_no[]" value="75" id="bk_no_11">
                                    </td>
                                    <td class="td_num">4</td>
                                    <td>aaaaaaaaaaaaaaaaaaaaaaaaaa</td>
                                    <td class="td_mbname">t</td>
                                    <td class="td_numbig">010-000-0000</td>
                                    <td class="td_boolean"><span style="color: blue; ">수신</span></td>
                                    <td class="td_mbid">비회원</td>
                                    <td class="td_datetime">2017-12-04 18:03:15</td>
                                    <td class="td_mng td_mng_l">
                                        <a href="./num_book_write.php?w=u&amp;bk_no=75&amp;page=1&amp;bg_no=&amp;st=&amp;sv=&amp;ap=0" class="btn btn_03">수정</a>
                                        <a href="./sms_write.php?bk_no=75" class="btn btn_02">보내기</a>
                                        <a href="./history_num.php?st=hs_hp&amp;sv=010-000-0000" class="btn btn_02">내역</a>
                                    </td>
                                </tr>
                                <tr class="bg1">
                                    <td class="td_chk">
                                        <label for="bk_no_11" class="sound_only">ㅅㄷㄴㅅ의 홍길동</label>
                                        <input type="checkbox" name="bk_no[]" value="73" id="bk_no_11">
                                    </td>
                                    <td class="td_num">3</td>
                                    <td>ㅅㄷㄴㅅ</td>
                                    <td class="td_mbname">홍길동</td>
                                    <td class="td_numbig">010-0231-2334</td>
                                    <td class="td_boolean"><span style="color: blue; ">수신</span></td>
                                    <td class="td_mbid">비회원</td>
                                    <td class="td_datetime">2016-09-12 15:14:53</td>
                                    <td class="td_mng td_mng_l">
                                        <a href="./num_book_write.php?w=u&amp;bk_no=73&amp;page=1&amp;bg_no=&amp;st=&amp;sv=&amp;ap=0" class="btn btn_03">수정</a>
                                        <a href="./sms_write.php?bk_no=73" class="btn btn_02">보내기</a>
                                        <a href="./history_num.php?st=hs_hp&amp;sv=010-0231-2334" class="btn btn_02">내역</a>
                                    </td>
                                </tr>
                                <tr class="bg0">
                                    <td class="td_chk">
                                        <label for="bk_no_11" class="sound_only">ㅅㄷㄴㅅ의 이지경</label>
                                        <input type="checkbox" name="bk_no[]" value="72" id="bk_no_11">
                                    </td>
                                    <td class="td_num">2</td>
                                    <td>ㅅㄷㄴㅅ</td>
                                    <td class="td_mbname">이지경</td>
                                    <td class="td_numbig">010-1111-2222</td>
                                    <td class="td_boolean"><span style="color: blue; ">수신</span></td>
                                    <td class="td_mbid">비회원</td>
                                    <td class="td_datetime">2016-09-12 15:14:30</td>
                                    <td class="td_mng td_mng_l">
                                        <a href="./num_book_write.php?w=u&amp;bk_no=72&amp;page=1&amp;bg_no=&amp;st=&amp;sv=&amp;ap=0" class="btn btn_03">수정</a>
                                        <a href="./sms_write.php?bk_no=72" class="btn btn_02">보내기</a>
                                        <a href="./history_num.php?st=hs_hp&amp;sv=010-1111-2222" class="btn btn_02">내역</a>
                                    </td>
                                </tr>
                                <tr class="bg1">
                                    <td class="td_chk">
                                        <label for="bk_no_11" class="sound_only">ㅅㄷㄴㅅ의 t</label>
                                        <input type="checkbox" name="bk_no[]" value="71" id="bk_no_11">
                                    </td>
                                    <td class="td_num">1</td>
                                    <td>ㅅㄷㄴㅅ</td>
                                    <td class="td_mbname">t</td>
                                    <td class="td_numbig">010-1234-1204</td>
                                    <td class="td_boolean"><span style="color: blue; ">수신</span></td>
                                    <td class="td_mbid">비회원</td>
                                    <td class="td_datetime">2017-12-14 00:42:40</td>
                                    <td class="td_mng td_mng_l">
                                        <a href="./num_book_write.php?w=u&amp;bk_no=71&amp;page=1&amp;bg_no=&amp;st=&amp;sv=&amp;ap=0" class="btn btn_03">수정</a>
                                        <a href="./sms_write.php?bk_no=71" class="btn btn_02">보내기</a>
                                        <a href="./history_num.php?st=hs_hp&amp;sv=010-1234-1204" class="btn btn_02">내역</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="btn_fixed_top">
                            <input type="submit" name="act_button" value="선택삭제" onclick="document.pressed=this.value" class="btn btn_02">
                            <input type="submit" name="act_button" value="수신허용" onclick="document.pressed=this.value" class="btn btn_02">
                            <input type="submit" name="act_button" value="수신거부" onclick="document.pressed=this.value" class="btn btn_02">
                            <input type="submit" name="act_button" value="선택이동" onclick="document.pressed=this.value" class="btn btn_02">
                            <input type="submit" name="act_button" value="선택복사" onclick="document.pressed=this.value" class="btn btn_02">
                            <a href="./num_book_write.php?page=1&amp;bg_no=" class="btn btn_01">번호추가</a>
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