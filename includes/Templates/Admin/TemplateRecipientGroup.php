<?php
/** @var array $var */
?>

<div class="dodam-wrap">
    <h1><?= $var['title'] ?></h1>

    <div class="dodam-sms-icode">
        <div class="wrap">

                <div class="container_wr">

                    <div class="sch_last">
                        <span class="btn_ov01"><span class="ov_txt">건수</span><span class="ov_num"> 12건 </span></span>
                    </div>

                    <form name="frmSMSGroupSearch" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="bg_no" value="">

                        <div>
                            <label for="bg_name" class="sound_only">그룹추가<strong class="sound_only"> 필수</strong></label>
                            <input type="text" id="bg_name" name="bg_name" required="" class="required frm_input">
                            <input type="submit" value="그룹추가" class="btn_submit btn">
                        </div>

                    </form>

                    <div class="local_desc01 local_desc">
                        <p>그룹명순으로 정렬됩니다.</p>
                    </div>

                    <form name="frmSMSGroupList" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="w" value="u">

                        <div class="tbl_head01 tbl_wrap">
                            <table class="wp-list-table widefat fixed striped">
                                <caption>휴대폰번호 그룹 목록</caption>
                                <thead>
                                <tr>
                                    <th scope="col">
                                        <label for="chkall" class="sound_only">그룹 전체</label>
                                        <input type="checkbox" name="chkall" value="1" id="chkall" onclick="">
                                    </th>
                                    <th scope="col">그룹명</th>
                                    <th scope="col">총</th>
                                    <th scope="col">회원</th>
                                    <th scope="col">비회원</th>
                                    <th scope="col">수신</th>
                                    <th scope="col">거부</th>
                                    <th scope="col">이동</th>
                                    <th scope="col">보기</th>
                                </tr>
                                </thead>
                                <tbody>
                                <!-- 미분류 시작 -->
                                <tr>
                                    <td></td>
                                    <td>미분류</td>
                                    <td class="td_num">0</td>
                                    <td class="td_num">0</td>
                                    <td class="td_num">0</td>
                                    <td class="td_num">0</td>
                                    <td class="td_num">0</td>
                                    <td class="td_mng">
                                        <label for="select_bg_no_999" class="sound_only">이동할 그룹</label>
                                        <select name="select_bg_no_999" id="select_bg_no_999" onchange="move(1, '미분류', this);">
                                            <option value=""></option>
                                            <option value="37"> 1반 </option>
                                            <option value="29"> 22232 </option>
                                            <option value="31"> aaa </option>
                                            <option value="33"> aaaaaaaaaaaaaaaaaaaaaaaaaa </option>
                                            <option value="32"> vvv </option>
                                            <option value="30"> ㅅㄷㄴㅅ </option>
                                            <option value="28"> ㅇㄹ </option>
                                            <option value="34"> 신규 </option>
                                            <option value="35"> 테스트 </option>
                                            <option value="36"> 테스트t </option>
                                            <option value="26"> 테스트분류 </option>
                                        </select>
                                    </td>
                                    <td class="td_mng">
                                        <a href="./num_book.php?bg_no=1" class="btn btn_03">보기</a>
                                    </td>
                                </tr>
                                <!-- 미분류 끝 -->
                                <tr class="bg1">
                                    <td class="td_mng">
                                        <input type="hidden" name="bg_no[0]" value="37" id="bg_no_0">
                                        <label for="chk_0" class="sound_only">그룹명</label>
                                        <input type="checkbox" name="chk[]" value="0" id="chk_0">
                                    </td>
                                    <td>
                                        <label for="bg_name_0" class="sound_only">그룹명</label>
                                        <input type="text" name="bg_name[0]" value="1반" id="bg_name_0" class="frm_input">
                                    </td>
                                    <td class="td_num">4</td>
                                    <td class="td_num">0</td>
                                    <td class="td_num">4</td>
                                    <td class="td_num">4</td>
                                    <td class="td_num">0</td>
                                    <td class="td_mbstat">
                                        <label for="select_bg_no_0" class="sound_only">이동할 그룹</label>
                                        <select name="select_bg_no[0]" id="select_bg_no_0" onchange="move(37, '1반', this);">
                                            <option value=""></option>
                                            <option value="1">미분류</option>
                                            <option value="29"> 22232 </option>
                                            <option value="31"> aaa </option>
                                            <option value="33"> aaaaaaaaaaaaaaaaaaaaaaaaaa </option>
                                            <option value="32"> vvv </option>
                                            <option value="30"> ㅅㄷㄴㅅ </option>
                                            <option value="28"> ㅇㄹ </option>
                                            <option value="34"> 신규 </option>
                                            <option value="35"> 테스트 </option>
                                            <option value="36"> 테스트t </option>
                                            <option value="26"> 테스트분류 </option>
                                        </select>
                                    </td>
                                    <td class="td_mng">
                                        <a href="./num_book.php?bg_no=37" class="btn btn_03">보기</a>
                                    </td>
                                </tr>
                                <tr class="bg0">
                                    <td class="td_mng">
                                        <input type="hidden" name="bg_no[1]" value="29" id="bg_no_1">
                                        <label for="chk_1" class="sound_only">그룹명</label>
                                        <input type="checkbox" name="chk[]" value="1" id="chk_1">
                                    </td>
                                    <td>
                                        <label for="bg_name_1" class="sound_only">그룹명</label>
                                        <input type="text" name="bg_name[1]" value="22232" id="bg_name_1" class="frm_input">
                                    </td>
                                    <td class="td_num">0</td>
                                    <td class="td_num">0</td>
                                    <td class="td_num">0</td>
                                    <td class="td_num">0</td>
                                    <td class="td_num">0</td>
                                    <td class="td_mbstat">
                                        <label for="select_bg_no_1" class="sound_only">이동할 그룹</label>
                                        <select name="select_bg_no[1]" id="select_bg_no_1" onchange="move(29, '22232', this);">
                                            <option value=""></option>
                                            <option value="1">미분류</option>
                                            <option value="37"> 1반 </option>
                                            <option value="31"> aaa </option>
                                            <option value="33"> aaaaaaaaaaaaaaaaaaaaaaaaaa </option>
                                            <option value="32"> vvv </option>
                                            <option value="30"> ㅅㄷㄴㅅ </option>
                                            <option value="28"> ㅇㄹ </option>
                                            <option value="34"> 신규 </option>
                                            <option value="35"> 테스트 </option>
                                            <option value="36"> 테스트t </option>
                                            <option value="26"> 테스트분류 </option>
                                        </select>
                                    </td>
                                    <td class="td_mng">
                                        <a href="./num_book.php?bg_no=29" class="btn btn_03">보기</a>
                                    </td>
                                </tr>
                                <tr class="bg1">
                                    <td class="td_mng">
                                        <input type="hidden" name="bg_no[2]" value="31" id="bg_no_2">
                                        <label for="chk_2" class="sound_only">그룹명</label>
                                        <input type="checkbox" name="chk[]" value="2" id="chk_2">
                                    </td>
                                    <td>
                                        <label for="bg_name_2" class="sound_only">그룹명</label>
                                        <input type="text" name="bg_name[2]" value="aaa" id="bg_name_2" class="frm_input">
                                    </td>
                                    <td class="td_num">0</td>
                                    <td class="td_num">0</td>
                                    <td class="td_num">0</td>
                                    <td class="td_num">0</td>
                                    <td class="td_num">0</td>
                                    <td class="td_mbstat">
                                        <label for="select_bg_no_2" class="sound_only">이동할 그룹</label>
                                        <select name="select_bg_no[2]" id="select_bg_no_2" onchange="move(31, 'aaa', this);">
                                            <option value=""></option>
                                            <option value="1">미분류</option>
                                            <option value="37"> 1반 </option>
                                            <option value="29"> 22232 </option>
                                            <option value="33"> aaaaaaaaaaaaaaaaaaaaaaaaaa </option>
                                            <option value="32"> vvv </option>
                                            <option value="30"> ㅅㄷㄴㅅ </option>
                                            <option value="28"> ㅇㄹ </option>
                                            <option value="34"> 신규 </option>
                                            <option value="35"> 테스트 </option>
                                            <option value="36"> 테스트t </option>
                                            <option value="26"> 테스트분류 </option>
                                        </select>
                                    </td>
                                    <td class="td_mng">
                                        <a href="./num_book.php?bg_no=31" class="btn btn_03">보기</a>
                                    </td>
                                </tr>
                                <tr class="bg0">
                                    <td class="td_mng">
                                        <input type="hidden" name="bg_no[3]" value="33" id="bg_no_3">
                                        <label for="chk_3" class="sound_only">그룹명</label>
                                        <input type="checkbox" name="chk[]" value="3" id="chk_3">
                                    </td>
                                    <td>
                                        <label for="bg_name_3" class="sound_only">그룹명</label>
                                        <input type="text" name="bg_name[3]" value="aaaaaaaaaaaaaaaaaaaaaaaaaa" id="bg_name_3" class="frm_input">
                                    </td>
                                    <td class="td_num">1</td>
                                    <td class="td_num">0</td>
                                    <td class="td_num">1</td>
                                    <td class="td_num">1</td>
                                    <td class="td_num">0</td>
                                    <td class="td_mbstat">
                                        <label for="select_bg_no_3" class="sound_only">이동할 그룹</label>
                                        <select name="select_bg_no[3]" id="select_bg_no_3" onchange="move(33, 'aaaaaaaaaaaaaaaaaaaaaaaaaa', this);">
                                            <option value=""></option>
                                            <option value="1">미분류</option>
                                            <option value="37"> 1반 </option>
                                            <option value="29"> 22232 </option>
                                            <option value="31"> aaa </option>
                                            <option value="32"> vvv </option>
                                            <option value="30"> ㅅㄷㄴㅅ </option>
                                            <option value="28"> ㅇㄹ </option>
                                            <option value="34"> 신규 </option>
                                            <option value="35"> 테스트 </option>
                                            <option value="36"> 테스트t </option>
                                            <option value="26"> 테스트분류 </option>
                                        </select>
                                    </td>
                                    <td class="td_mng">
                                        <a href="./num_book.php?bg_no=33" class="btn btn_03">보기</a>
                                    </td>
                                </tr>
                                <tr class="bg1">
                                    <td class="td_mng">
                                        <input type="hidden" name="bg_no[4]" value="32" id="bg_no_4">
                                        <label for="chk_4" class="sound_only">그룹명</label>
                                        <input type="checkbox" name="chk[]" value="4" id="chk_4">
                                    </td>
                                    <td>
                                        <label for="bg_name_4" class="sound_only">그룹명</label>
                                        <input type="text" name="bg_name[4]" value="vvv" id="bg_name_4" class="frm_input">
                                    </td>
                                    <td class="td_num">0</td>
                                    <td class="td_num">0</td>
                                    <td class="td_num">0</td>
                                    <td class="td_num">0</td>
                                    <td class="td_num">0</td>
                                    <td class="td_mbstat">
                                        <label for="select_bg_no_4" class="sound_only">이동할 그룹</label>
                                        <select name="select_bg_no[4]" id="select_bg_no_4" onchange="move(32, 'vvv', this);">
                                            <option value=""></option>
                                            <option value="1">미분류</option>
                                            <option value="37"> 1반 </option>
                                            <option value="29"> 22232 </option>
                                            <option value="31"> aaa </option>
                                            <option value="33"> aaaaaaaaaaaaaaaaaaaaaaaaaa </option>
                                            <option value="30"> ㅅㄷㄴㅅ </option>
                                            <option value="28"> ㅇㄹ </option>
                                            <option value="34"> 신규 </option>
                                            <option value="35"> 테스트 </option>
                                            <option value="36"> 테스트t </option>
                                            <option value="26"> 테스트분류 </option>
                                        </select>
                                    </td>
                                    <td class="td_mng">
                                        <a href="./num_book.php?bg_no=32" class="btn btn_03">보기</a>
                                    </td>
                                </tr>
                                <tr class="bg0">
                                    <td class="td_mng">
                                        <input type="hidden" name="bg_no[5]" value="30" id="bg_no_5">
                                        <label for="chk_5" class="sound_only">그룹명</label>
                                        <input type="checkbox" name="chk[]" value="5" id="chk_5">
                                    </td>
                                    <td>
                                        <label for="bg_name_5" class="sound_only">그룹명</label>
                                        <input type="text" name="bg_name[5]" value="ㅅㄷㄴㅅ" id="bg_name_5" class="frm_input">
                                    </td>
                                    <td class="td_num">3</td>
                                    <td class="td_num">0</td>
                                    <td class="td_num">3</td>
                                    <td class="td_num">3</td>
                                    <td class="td_num">0</td>
                                    <td class="td_mbstat">
                                        <label for="select_bg_no_5" class="sound_only">이동할 그룹</label>
                                        <select name="select_bg_no[5]" id="select_bg_no_5" onchange="move(30, 'ㅅㄷㄴㅅ', this);">
                                            <option value=""></option>
                                            <option value="1">미분류</option>
                                            <option value="37"> 1반 </option>
                                            <option value="29"> 22232 </option>
                                            <option value="31"> aaa </option>
                                            <option value="33"> aaaaaaaaaaaaaaaaaaaaaaaaaa </option>
                                            <option value="32"> vvv </option>
                                            <option value="28"> ㅇㄹ </option>
                                            <option value="34"> 신규 </option>
                                            <option value="35"> 테스트 </option>
                                            <option value="36"> 테스트t </option>
                                            <option value="26"> 테스트분류 </option>
                                        </select>
                                    </td>
                                    <td class="td_mng">
                                        <a href="./num_book.php?bg_no=30" class="btn btn_03">보기</a>
                                    </td>
                                </tr>
                                <tr class="bg1">
                                    <td class="td_mng">
                                        <input type="hidden" name="bg_no[6]" value="28" id="bg_no_6">
                                        <label for="chk_6" class="sound_only">그룹명</label>
                                        <input type="checkbox" name="chk[]" value="6" id="chk_6">
                                    </td>
                                    <td>
                                        <label for="bg_name_6" class="sound_only">그룹명</label>
                                        <input type="text" name="bg_name[6]" value="ㅇㄹ" id="bg_name_6" class="frm_input">
                                    </td>
                                    <td class="td_num">0</td>
                                    <td class="td_num">0</td>
                                    <td class="td_num">0</td>
                                    <td class="td_num">0</td>
                                    <td class="td_num">0</td>
                                    <td class="td_mbstat">
                                        <label for="select_bg_no_6" class="sound_only">이동할 그룹</label>
                                        <select name="select_bg_no[6]" id="select_bg_no_6" onchange="move(28, 'ㅇㄹ', this);">
                                            <option value=""></option>
                                            <option value="1">미분류</option>
                                            <option value="37"> 1반 </option>
                                            <option value="29"> 22232 </option>
                                            <option value="31"> aaa </option>
                                            <option value="33"> aaaaaaaaaaaaaaaaaaaaaaaaaa </option>
                                            <option value="32"> vvv </option>
                                            <option value="30"> ㅅㄷㄴㅅ </option>
                                            <option value="34"> 신규 </option>
                                            <option value="35"> 테스트 </option>
                                            <option value="36"> 테스트t </option>
                                            <option value="26"> 테스트분류 </option>
                                        </select>
                                    </td>
                                    <td class="td_mng">
                                        <a href="./num_book.php?bg_no=28" class="btn btn_03">보기</a>
                                    </td>
                                </tr>
                                <tr class="bg0">
                                    <td class="td_mng">
                                        <input type="hidden" name="bg_no[7]" value="34" id="bg_no_7">
                                        <label for="chk_7" class="sound_only">그룹명</label>
                                        <input type="checkbox" name="chk[]" value="7" id="chk_7">
                                    </td>
                                    <td>
                                        <label for="bg_name_7" class="sound_only">그룹명</label>
                                        <input type="text" name="bg_name[7]" value="신규" id="bg_name_7" class="frm_input">
                                    </td>
                                    <td class="td_num">0</td>
                                    <td class="td_num">0</td>
                                    <td class="td_num">0</td>
                                    <td class="td_num">0</td>
                                    <td class="td_num">0</td>
                                    <td class="td_mbstat">
                                        <label for="select_bg_no_7" class="sound_only">이동할 그룹</label>
                                        <select name="select_bg_no[7]" id="select_bg_no_7" onchange="move(34, '신규', this);">
                                            <option value=""></option>
                                            <option value="1">미분류</option>
                                            <option value="37"> 1반 </option>
                                            <option value="29"> 22232 </option>
                                            <option value="31"> aaa </option>
                                            <option value="33"> aaaaaaaaaaaaaaaaaaaaaaaaaa </option>
                                            <option value="32"> vvv </option>
                                            <option value="30"> ㅅㄷㄴㅅ </option>
                                            <option value="28"> ㅇㄹ </option>
                                            <option value="35"> 테스트 </option>
                                            <option value="36"> 테스트t </option>
                                            <option value="26"> 테스트분류 </option>
                                        </select>
                                    </td>
                                    <td class="td_mng">
                                        <a href="./num_book.php?bg_no=34" class="btn btn_03">보기</a>
                                    </td>
                                </tr>
                                <tr class="bg1">
                                    <td class="td_mng">
                                        <input type="hidden" name="bg_no[8]" value="35" id="bg_no_8">
                                        <label for="chk_8" class="sound_only">그룹명</label>
                                        <input type="checkbox" name="chk[]" value="8" id="chk_8">
                                    </td>
                                    <td>
                                        <label for="bg_name_8" class="sound_only">그룹명</label>
                                        <input type="text" name="bg_name[8]" value="테스트" id="bg_name_8" class="frm_input">
                                    </td>
                                    <td class="td_num">0</td>
                                    <td class="td_num">0</td>
                                    <td class="td_num">0</td>
                                    <td class="td_num">0</td>
                                    <td class="td_num">0</td>
                                    <td class="td_mbstat">
                                        <label for="select_bg_no_8" class="sound_only">이동할 그룹</label>
                                        <select name="select_bg_no[8]" id="select_bg_no_8" onchange="move(35, '테스트', this);">
                                            <option value=""></option>
                                            <option value="1">미분류</option>
                                            <option value="37"> 1반 </option>
                                            <option value="29"> 22232 </option>
                                            <option value="31"> aaa </option>
                                            <option value="33"> aaaaaaaaaaaaaaaaaaaaaaaaaa </option>
                                            <option value="32"> vvv </option>
                                            <option value="30"> ㅅㄷㄴㅅ </option>
                                            <option value="28"> ㅇㄹ </option>
                                            <option value="34"> 신규 </option>
                                            <option value="36"> 테스트t </option>
                                            <option value="26"> 테스트분류 </option>
                                        </select>
                                    </td>
                                    <td class="td_mng">
                                        <a href="./num_book.php?bg_no=35" class="btn btn_03">보기</a>
                                    </td>
                                </tr>
                                <tr class="bg0">
                                    <td class="td_mng">
                                        <input type="hidden" name="bg_no[9]" value="36" id="bg_no_9">
                                        <label for="chk_9" class="sound_only">그룹명</label>
                                        <input type="checkbox" name="chk[]" value="9" id="chk_9">
                                    </td>
                                    <td>
                                        <label for="bg_name_9" class="sound_only">그룹명</label>
                                        <input type="text" name="bg_name[9]" value="테스트t" id="bg_name_9" class="frm_input">
                                    </td>
                                    <td class="td_num">0</td>
                                    <td class="td_num">0</td>
                                    <td class="td_num">0</td>
                                    <td class="td_num">0</td>
                                    <td class="td_num">0</td>
                                    <td class="td_mbstat">
                                        <label for="select_bg_no_9" class="sound_only">이동할 그룹</label>
                                        <select name="select_bg_no[9]" id="select_bg_no_9" onchange="move(36, '테스트t', this);">
                                            <option value=""></option>
                                            <option value="1">미분류</option>
                                            <option value="37"> 1반 </option>
                                            <option value="29"> 22232 </option>
                                            <option value="31"> aaa </option>
                                            <option value="33"> aaaaaaaaaaaaaaaaaaaaaaaaaa </option>
                                            <option value="32"> vvv </option>
                                            <option value="30"> ㅅㄷㄴㅅ </option>
                                            <option value="28"> ㅇㄹ </option>
                                            <option value="34"> 신규 </option>
                                            <option value="35"> 테스트 </option>
                                            <option value="26"> 테스트분류 </option>
                                        </select>
                                    </td>
                                    <td class="td_mng">
                                        <a href="./num_book.php?bg_no=36" class="btn btn_03">보기</a>
                                    </td>
                                </tr>
                                <tr class="bg1">
                                    <td class="td_mng">
                                        <input type="hidden" name="bg_no[10]" value="26" id="bg_no_10">
                                        <label for="chk_10" class="sound_only">그룹명</label>
                                        <input type="checkbox" name="chk[]" value="10" id="chk_10">
                                    </td>
                                    <td>
                                        <label for="bg_name_10" class="sound_only">그룹명</label>
                                        <input type="text" name="bg_name[10]" value="테스트분류" id="bg_name_10" class="frm_input">
                                    </td>
                                    <td class="td_num">0</td>
                                    <td class="td_num">0</td>
                                    <td class="td_num">0</td>
                                    <td class="td_num">0</td>
                                    <td class="td_num">0</td>
                                    <td class="td_mbstat">
                                        <label for="select_bg_no_10" class="sound_only">이동할 그룹</label>
                                        <select name="select_bg_no[10]" id="select_bg_no_10" onchange="move(26, '테스트분류', this);">
                                            <option value=""></option>
                                            <option value="1">미분류</option>
                                            <option value="37"> 1반 </option>
                                            <option value="29"> 22232 </option>
                                            <option value="31"> aaa </option>
                                            <option value="33"> aaaaaaaaaaaaaaaaaaaaaaaaaa </option>
                                            <option value="32"> vvv </option>
                                            <option value="30"> ㅅㄷㄴㅅ </option>
                                            <option value="28"> ㅇㄹ </option>
                                            <option value="34"> 신규 </option>
                                            <option value="35"> 테스트 </option>
                                            <option value="36"> 테스트t </option>
                                        </select>
                                    </td>
                                    <td class="td_mng">
                                        <a href="./num_book.php?bg_no=26" class="btn btn_03">보기</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

	                    <?php submit_button( 'Update' ); ?>

                    </form>

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