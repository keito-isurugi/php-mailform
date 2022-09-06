<?php 

$menu = $_POST['menu'];
$num_people = implode('、',$_POST['num_people']);
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
        <div class="ly_bgGreen conf">
            <div class="bl_cont">
                <h2 class="el_lv2Heading">お申込み内容確認</h2>
                <p class="hp_txtCenter">内容をご確認のうえ、送信してください。</p>
                
                <form>
                    <table class="bl_form">
                        <tr>
                            <th>お申込みメニュー<span class="hp_fcRed">*</span></th>
                            <td><?= $menu ?></td>
                        </tr>
                        <tr>
                            <th>お申込み人数<span class="hp_fcRed">*</span></th>
                            <td><?= $num_people ?></td>
                        </tr>
                        <tr>
                            <th>お申込みメニュー週<span class="hp_fcRed">*</span></th>
                            <td><?= $menu_week ?></td>
                        </tr>
                        <tr>
                            <th>氏名<span class="hp_fcRed">*</span></th>
                            <td><?= $name ?></td>
                        </tr>
                        <tr>
                            <th>フリガナ<span class="hp_fcRed">*</span></th>
                            <td><?= $furigana ?></td>
                        </tr>
                        <tr>
                            <th>住所<span class="hp_fcRed">*</span></th>
                            <td class="el_address"><?= $post_code ?><br><?= $prefectures.$city.$town_name.$building ?></td>
                        </tr>
                        <tr>
                            <th>電話番号<span class="hp_fcRed">*</span></th>
                            <td><?= $tel ?></td>
                        </tr>
                        <tr>
                            <th>メールアドレス<span class="hp_fcRed">*</span></th>
                            <td><?= $email ?></td>
                        </tr>
                        <tr>
                            <th>生年月日<span class="hp_fcRed">*</span></th>
                            <td><?= $birth_year.'年'.$birth_month.'月'.$birth_day.'日' ?></td>
                        </tr>
                        <tr>
                            <th>ご要望</th>
                            <td><?= $message ?></td>
                        </tr>
                    </table>
                    <div class="bl_btnCont hp_mt3rem form">
                        <input class="el_btn" onclick="document.form_back.submit();" type="reset" value="修正する">
                        <button type="button" id="send" class="el_btn active">送信する</button>
                    </div><!-- bl_tabBtnCont -->
                    <input type="hidden" name="menu" class="menu" value="<?= $menu ?>">
                    <input type="hidden" name="num_people" class="num_people" value="<?= $num_people ?>">
                    <input type="hidden" name="menu_week" class="menu_week" value="<?= $menu_week ?>">
                    <input type="hidden" name="name" class="name" value="<?= $name ?>">
                    <input type="hidden" name="furigana" class="furigana" value="<?= $furigana ?>">
                    <input type="hidden" name="post_code" class="post_code" value="<?= $post_code ?>">
                    <input type="hidden" name="prefectures" class="prefectures" value="<?= $prefectures ?>">
                    <input type="hidden" name="city" class="city" value="<?= $city ?>">
                    <input type="hidden" name="town_name" class="town_name" value="<?= $town_name ?>">
                    <input type="hidden" name="building" class="building" value="<?= $building ?>">
                    <input type="hidden" name="tel" class="tel" value="<?= $tel ?>">
                    <input type="hidden" name="email" class="email" value="<?= $email ?>">
                    <input type="hidden" name="birth_year" class="birth_year" value="<?= $birth_year ?>">
                    <input type="hidden" name="birth_month" class="birth_month" value="<?= $birth_month ?>">
                    <input type="hidden" name="birth_day" class="birth_day" value="<?= $birth_day ?>">
                    <input type="hidden" name="message" class="message" value="<?= $message ?>">
                </form>

                <form action="./#form" method="POST" name="form_back">
                    <input type="hidden" name="menu" value="<?= $menu ?>">
                    <input type="hidden" name="num_people" value="<?= $num_people ?>">
                    <input type="hidden" name="menu_week" value="<?= $menu_week ?>">
                    <input type="hidden" name="name" value="<?= $name ?>">
                    <input type="hidden" name="furigana" value="<?= $furigana ?>">
                    <input type="hidden" name="post_code" value="<?= $post_code ?>">
                    <input type="hidden" name="prefectures" value="<?= $prefectures ?>">
                    <input type="hidden" name="city" value="<?= $city ?>">
                    <input type="hidden" name="town_name" value="<?= $town_name ?>">
                    <input type="hidden" name="building" value="<?= $building ?>">
                    <input type="hidden" name="tel" value="<?= $tel ?>">
                    <input type="hidden" name="email" value="<?= $email ?>">
                    <input type="hidden" name="email_confirm" value="<?= $email_confirm ?>">
                    <input type="hidden" name="birth_year" value="<?= $birth_year ?>">
                    <input type="hidden" name="birth_month" value="<?= $birth_month ?>">
                    <input type="hidden" name="birth_day" value="<?= $birth_day ?>">
                    <input type="hidden" name="message" value="<?= $message ?>">
                </form>
            </div><!-- bl_cont -->
        </div><!-- ly_bgGreen -->
    </div><!-- ly_cont -->
        
    <a class="bl_pageTop" href="#top">PAGE TOP</a>
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/motion.js"></script>
    <script>
        $(function(){
            $('#send').on('click', function(e) {
                $.ajax({
                    url: 'sendMail.php',
                    type:'POST',
                    dataType: 'json',
                    data: {
                        menu: $('.menu').val(),
                        num_people: $('.num_people').val(),
                        menu_week: $('.menu_week').val(),
                        name: $('.name').val(),
                        furigana: $('.furigana').val(),
                        post_code: $('.post_code').val(),
                        prefectures: $('.prefectures').val(),
                        city: $('.city').val(),
                        town_name: $('.town_name').val(),
                        building: $('.building').val(),
                        tel: $('.tel').val(),
                        email: $('.email').val(),
                        birth_year: $('.birth_year').val(),
                        birth_month: $('.birth_month').val(),
                        birth_day: $('.birth_day').val(),
                        message: $('.message').val(),
                    },
                }).done(function(data){
                    console.log(data.text);
                    window.location.href= 'url'
                }).fail(function(msg, XMLHttpRequest, textStatus, errorThrown){
                    alert(msg);
                    console.log(XMLHttpRequest.status);
                    console.log(textStatus);
                    console.log(errorThrown);
                });
            });
        });

    </script>
</body>
</html>