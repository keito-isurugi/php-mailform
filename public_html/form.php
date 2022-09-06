<?php 

$menu = $_POST['menu'];
$num_people = explode('、',$_POST['num_people']);
$menu_week = $_POST['menu_week'];
$name = $_POST['name'];
$furigana = $_POST['furigana'];
$post_code = $_POST['post_code'];
$prefectures = $_POST['prefectures'];
$city = $_POST['city'];
$town_name = $_POST['town_name'];
$building = $_POST['building'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$email_confirm = $_POST['email_confirm'];
$birth_year = $_POST['birth_year'];
$birth_month = $_POST['birth_month'];
$birth_day = $_POST['birth_day'];
$message = $_POST['message'];

?>
<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8" />
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="Keywords" content="">
<meta name="Description" content="">
<title>php-mailform</title>
</head>

<body id="top">
    
    <div class="ly_cont">
        <div class="ly_bgGreen">
            <div class="bl_cont hp_mt0">
                <h2 class="el_lv2Heading" id="form">お申込みフォーム</h2>
                <p class="hp_txtCenter"><span class="hp_fcRed">*</span>は必須項目です。</p>
                
                <form action="./form_confirmation" method="POST" id="applications_form">
                    <table class="bl_form">
                        <tr>
                            <th>お申込みメニュー<span class="hp_fcRed">*</span></th>
                            <td>
                                <label for="menu01"><input type="radio" name="menu" id="menu01" required value="5日間(月～金)" data-error_placement="#menu_error">5日間(月～金)</label>
                                <label for="menu02"><input type="radio" name="menu" id="menu02" required value="6日間(月～土)" data-error_placement="#menu_error">6日間(月～土)</label>
                                <p class="error-message" id="menu_error" style="font-size:16px; color:red;"></p>
                            </td>
                        </tr>
                        <tr>
                            <th>お申込み人数<span class="hp_fcRed">*</span></th>
                            <td>
                                <label for="number01"><input type="checkbox" name="num_people[]" id="number01" required value="2人用" data-error_placement="#num_people_error">2人用</label>
                                <label for="number02"><input type="checkbox" name="num_people[]" id="number02" required value="3人用" data-error_placement="#num_people_error">3人用</label>
                                <label for="number03"><input type="checkbox" name="num_people[]" id="number03" required value="4人用" data-error_placement="#num_people_error">4人用</label>
                                <p class="error-message" id="num_people_error" style="font-size:16px; color:red;"></p>
                            </td>
                        </tr>
                        <tr>
                            <th>お申込みメニュー週<span class="hp_fcRed">*</span></th>
                            <td>
                                <p class="hp_fzMd hp_mt0 hp_mb5">9月スペシャルメニュー</p>
                                <label for="week01"><input type="radio" name="menu_week" id="week01" required data-error_placement="#menu_week_error" value="9月12日週　申込締切日:9月7日（水）">9月12日週　申込締切日:9月7日（水）</label>
                                <label for="week02"><input type="radio" name="menu_week" id="week02" required data-error_placement="#menu_week_error" value="9月19日週　申込締切日:9月14日（水）">9月19日週　申込締切日:9月14日（水）</label>
                                <label for="week03"><input type="radio" name="menu_week" id="week03" required data-error_placement="#menu_week_error" value="9月26日週　申込締切日:9月21日（水）">9月26日週　申込締切日:9月21日（水）</label>
                                <p class="hp_fzMd hp_mt1rem hp_mb5">10月スペシャルメニュー</p>
                                <label for="week04"><input type="radio" name="menu_week" id="week04" required data-error_placement="#menu_week_error" value="10月3日週　申込締切日:9月28日（水）">10月3日週　申込締切日:9月28日（水）</label>
                                <label for="week05"><input type="radio" name="menu_week" id="week05" required data-error_placement="#menu_week_error" value="10月10日週　申込締切日:10月5日（水）">10月10日週　申込締切日:10月5日（水）</label>
                                <p>※1週のみのお申込みになります。</p>
                                <p class="error-message" id="menu_week_error" style="font-size:16px; color:red;"></p>
                            </td>
                        </tr>
                        
                        <tr>
                            <th><label for="name">氏名<span class="hp_fcRed">*</span></label></th>
                            <td><input class="el_txt" type="text" id="name" name="name" required value="<?= $name ?>" data-error_placement="#name_error">
                            <p class="error-message" id="name_error" style="font-size:16px; color:red;"></p>
                        </td>
                        </tr>
                        <tr>
                            <th><label for="furigana">フリガナ<span class="hp_fcRed">*</span></label></th>
                            <td><input class="el_txt" type="text" id="furigana" name="furigana" required value="<?= $furigana ?>" data-error_placement="#furigana_error">
                            <p class="error-message" id="furigana_error" style="font-size:16px; color:red;"></p>
                        </td>
                        </tr>
                        <tr>
                            <th>住所<span class="hp_fcRed">*</span></th>
                            <td class="el_address">
                                <label for="address01"><span class="el_label">郵便番号</span><input class="el_txt" type="text" id="address01" name="post_code" required data-error_placement="#post_code_error" value="<?= $post_code ?>"></label>
                                <p class="error-message" id="post_code_error" style="font-size:16px; color:red; margin-bottom: 10px;"></p>
                                <label for="address02"><span class="el_label">都道府県</span><input class="el_txt" type="text" id="address02" name="prefectures" required data-error_placement="#prefectures_error" value="<?= $prefectures ?>"></label>
                                <p class="error-message" id="prefectures_error" style="font-size:16px; color:red; margin-bottom: 10px;"></p>
                                <label for="address03"><span class="el_label">市区町村</span><input class="el_txt" type="text" id="address03" name="city" required data-error_placement="#city_error" value="<?= $city ?>"></label>
                                <p class="error-message" id="city_error" style="font-size:16px; color:red; margin-bottom: 10px;"></p>
                                <label for="address04"><span class="el_label">町名・番地</span><input class="el_txt" type="text" id="address04" name="town_name" required data-error_placement="#town_name_error" value="<?= $town_name ?>"></label>
                                <p class="error-message" id="town_name_error" style="font-size:16px; color:red; margin-bottom: 10px;"></p>
                                <label for="address05"><span class="el_label">ビル・マンション・号数</span><input class="el_txt" type="text" id="address05" name="building" value="<?= $building ?>"></label>
                            </td>
                        </tr>
                        <tr>
                            <th><label for="tel">電話番号<span class="hp_fcRed">*</span></label></th>
                            <td><input class="el_txt" type="tel" id="tel" name="tel" required data-error_placement="#tel_error" value="<?= $tel ?>">
                            <p class="error-message" id="tel_error" style="font-size:16px; color:red;"></p>
                        </td>
                        </tr>
                        <tr>
                            <th><label for="email">メールアドレス<span class="hp_fcRed">*</span></label></th>
                            <td>
                                <input class="el_txt" type="email" id="email" name="email" required value="<?= $email ?>" data-error_placement="#email_error">
                                <p class="error-message" id="email_error" style="font-size:16px; color:red;"></p>
                            </td>
                        </tr>
                        <tr>
                            <th><label for="email">メールアドレス（確認用）<span class="hp_fcRed">*</span></label></th>
                            <td>
                                <input class="el_txt" type="email" id="email_confirm" name="email_confirm" required value="<?= $email ?>" data-error_placement="#email_confirm_error">
                                <p class="error-message" id="email_confirm_error" style="font-size:16px; color:red;"></p>
                            </td>
                        </tr>
                        <tr>
                            <th><label for="furigana">生年月日<span class="hp_fcRed">*</span></label></th>
                            <td>
                                <select class="el_select" name="birth_year" required data-error_placement="#birth_error">
                                    <option value="">-</option>
                                    <option value="1922">1922</option>
                                    <option value="1923">1923</option>
                                    <option value="1924">1924</option>
                                    <option value="1925">1925</option>
                                    <option value="1926">1926</option>
                                    <option value="1927">1927</option>
                                    <option value="1928">1928</option>
                                    <option value="1929">1929</option>
                                    <option value="1930">1930</option>
                                    <option value="1931">1931</option>
                                    <option value="1932">1932</option>
                                    <option value="1933">1933</option>
                                    <option value="1934">1934</option>
                                    <option value="1935">1935</option>
                                    <option value="1936">1936</option>
                                    <option value="1937">1937</option>
                                    <option value="1938">1938</option>
                                    <option value="1939">1939</option>
                                    <option value="1940">1940</option>
                                    <option value="1941">1941</option>
                                    <option value="1942">1942</option>
                                    <option value="1943">1943</option>
                                    <option value="1944">1944</option>
                                    <option value="1945">1945</option>
                                    <option value="1946">1946</option>
                                    <option value="1947">1947</option>
                                    <option value="1948">1948</option>
                                    <option value="1949">1949</option>
                                    <option value="1950">1950</option>
                                    <option value="1951">1951</option>
                                    <option value="1952">1952</option>
                                    <option value="1953">1953</option>
                                    <option value="1954">1954</option>
                                    <option value="1955">1955</option>
                                    <option value="1956">1956</option>
                                    <option value="1957">1957</option>
                                    <option value="1958">1958</option>
                                    <option value="1959">1959</option>
                                    <option value="1960">1960</option>
                                    <option value="1961">1961</option>
                                    <option value="1962">1962</option>
                                    <option value="1963">1963</option>
                                    <option value="1964">1964</option>
                                    <option value="1965">1965</option>
                                    <option value="1966">1966</option>
                                    <option value="1967">1967</option>
                                    <option value="1968">1968</option>
                                    <option value="1969">1969</option>
                                    <option value="1970">1970</option>
                                    <option value="1971">1971</option>
                                    <option value="1972">1972</option>
                                    <option value="1973">1973</option>
                                    <option value="1974">1974</option>
                                    <option value="1975">1975</option>
                                    <option value="1976">1976</option>
                                    <option value="1977">1977</option>
                                    <option value="1978">1978</option>
                                    <option value="1979">1979</option>
                                    <option value="1980">1980</option>
                                    <option value="1981">1981</option>
                                    <option value="1982">1982</option>
                                    <option value="1983">1983</option>
                                    <option value="1984">1984</option>
                                    <option value="1985">1985</option>
                                    <option value="1986">1986</option>
                                    <option value="1987">1987</option>
                                    <option value="1988">1988</option>
                                    <option value="1989">1989</option>
                                    <option value="1990">1990</option>
                                    <option value="1991">1991</option>
                                    <option value="1992">1992</option>
                                    <option value="1993">1993</option>
                                    <option value="1994">1994</option>
                                    <option value="1995">1995</option>
                                    <option value="1996">1996</option>
                                    <option value="1997">1997</option>
                                    <option value="1998">1998</option>
                                    <option value="1999">1999</option>
                                    <option value="2000">2000</option>
                                    <option value="2001">2001</option>
                                    <option value="2002">2002</option>
                                    <option value="2003">2003</option>
                                </select> 年　
                                <select class="el_select" name="birth_month" required data-error_placement="#birth_error">
                                    <option value="">-</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select> 月　
                                <select class="el_select" name="birth_day" required data-error_placement="#birth_error">
                                    <option value="">-</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                </select> 日
                                <p class="error-message" id="birth_error" style="font-size:16px; color:red;"></p>
                            </td>
                        </tr>
                        <tr>
                            <th><label for="message">ご要望</label></th>
                            <td><textarea class="el_txtarea" id="message" name="message"><?= $message ?></textarea></td>
                        </tr>
                    </table>
                    <button type="submit" class="el_btn green">お申込み内容を確認する</button>
                    <input type="hidden" name="state" value="form_confirm">
                </form>
            </div><!-- bl_cont -->
        </div><!-- ly_bgGreen -->
    </div><!-- ly_cont -->
        
    <a class="bl_pageTop" href="#top">PAGE TOP</a>
    
    <input type="hidden" id="form_menu" value="<?= $menu ?>">
    <input type="hidden" id="form_menu_week" value="<?= $menu_week ?>">
    <input type="hidden" class="form_num_people" value="<?= $num_people[0] ?>">
    <input type="hidden" class="form_num_people" value="<?= $num_people[1] ?>">
    <input type="hidden" class="form_num_people" value="<?= $num_people[2] ?>">
    <input type="hidden" id="form_birth_year" value="<?= $birth_year ?>">
    <input type="hidden" id="form_birth_month" value="<?= $birth_month ?>">
    <input type="hidden" id="form_birth_day" value="<?= $birth_day ?>">

    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/motion.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/localization/messages_ja.min.js"></script>
    <script>
    // 確認画面で「修正する」で戻ったとき前に選んだ項目を選択状態にする
    $('input[name="menu"]').each(function() {
        if(this.value === $('#form_menu').val()){
            this.checked = true;
        }
    })
    $('input[name="menu_week"]').each(function() {
        if(this.value === $('#form_menu_week').val()){
            this.checked = true;
        }
    })
    $('input[name="num_people[]"]').each(function() {
        var num_people_elm = this
        $('.form_num_people').each(function() {
            if(num_people_elm.value === this.value){
                num_people_elm.checked = true;
            }
        })
    })
    $('select[name="birth_year"]').val($('#form_birth_year').val() == '' ? 1992 : $('#form_birth_year').val())
    $('select[name="birth_month"]').val($('#form_birth_month').val())
    $('select[name="birth_day"]').val($('#form_birth_day').val())

        
    // 入力欄バリデーション(半角英数字)
    $.validator.addMethod("alphaNum",function (value, element) {
        return this.optional(element) || /^[-]?[0-9]+(\.[0-9]+)?$/.test(value.replace(/\r?\n/g,""));
    },"ハイフンを入れずに半角数字で入力してください。例）9160022",);
    $.validator.addMethod("alphaTel",function (value, element) {
        return this.optional(element) || /^[-]?[0-9]+(\.[0-9]+)?$/.test(value.replace(/\r?\n/g,""));
    },"ハイフンを入れずに半角数字で入力してください。",);
    // $.validator.addMethod("alphaTel",function (value, element) {
    //     return this.optional(element) || /^0\d{2,3}-\d{1,4}-\d{4}$/.test(value.replace(/\r?\n/g,""));
    // },"ハイフンを入れて半角数字で入力してください。例）000-0000-0000",);

    $("#applications_form").validate({
        rules: {
            tel: {
                alphaTel: true,
            },
            post_code: {
                alphaNum: true,
            },
            email_confirm: {
                equalTo:'#email'
            },
        },
        messages: {
            menu: {
                required: 'この項目は必須です。'
            },
            "num_people[]": {
                required: 'この項目は必須です。'
            },
            menu_week: {
                required: 'この項目は必須です。'
            },
            name: {
                required: 'この項目は必須です。'
            },
            furigana: {
                required: 'この項目は必須です。'
            },
            post_code: {
                required: 'この項目は必須です。'
            },
            prefectures: {
                required: 'この項目は必須です。'
            },
            city: {
                required: 'この項目は必須です。'
            },
            town_name: {
                required: 'この項目は必須です。'
            },
            building: {
                required: 'この項目は必須です。'
            },
            tel: {
                required: 'この項目は必須です。'
            },
            email: {
                required: 'この項目は必須です。'
            },
            email_confirm: {
                equalTo: 'メールアドレスが一致しません',
                required: 'この項目は必須です。',
            },
            birth_year: {
                required: 'この項目は必須です。'
            },
            birth_month: {
                required: 'この項目は必須です。'
            },
            birth_day: {
                required: 'この項目は必須です。'
            },
            message: {
                required: 'この項目は必須です。'
            }
        },
        errorPlacement: function(error, element){
            // data-error_placementで指定された要素に追加
            error.appendTo(element.data('error_placement'));
        }
    });

</script> 
</body>
</html>
