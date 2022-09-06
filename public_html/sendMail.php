<?php

	$menu = $_POST['menu'];
	$num_people = $_POST['num_people'];
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
	$birth_year = $_POST['birth_year'];
	$birth_month = $_POST['birth_month'];
	$birth_day = $_POST['birth_day'];
	$message = $_POST['message'];
	$_POST = [];

	$dsn = "mysql:dbname=".$_ENV['DB_NAMWE']."; host=".$_ENV['DB_HOST']."; charset=utf8";
	$user = $_ENV['DB_USER'];
	$pass = $_ENV['DB_PASS'];

	try{
		$pdo = new PDO($dsn, $user, $pass);
		// echo 'DB接続成功';
		// echo "<br>";
	}catch(Exception $e) {
		// echo "DB接続エラー： {$e->getMessage}";
		die();
	}
	
	$sql = "insert into applications (menu, num_people, menu_week, name, furigana, post_code, prefectures, city, town_name, building, tel, email, birth_year, birth_month, birth_day, message) values (:menu, :num_people, :menu_week, :name, :furigana, :post_code, :prefectures, :city, :town_name, :building, :tel, :email, :birth_year, :birth_month, :birth_day, :message)";
	$stmt = ($pdo->prepare($sql));
	$stmt->bindValue(':menu', $menu);
	$stmt->bindValue(':num_people', $num_people);
	$stmt->bindValue(':menu_week', $menu_week);
	$stmt->bindValue(':name', $name);
	$stmt->bindValue(':furigana', $furigana);
	$stmt->bindValue(':post_code', $post_code);
	$stmt->bindValue(':prefectures', $prefectures);
	$stmt->bindValue(':city', $city);
	$stmt->bindValue(':town_name', $town_name);
	$stmt->bindValue(':building', $building);
	$stmt->bindValue(':tel', $tel);
	$stmt->bindValue(':email', $email);
	$stmt->bindValue(':birth_year', $birth_year);
	$stmt->bindValue(':birth_month', $birth_month);
	$stmt->bindValue(':birth_day', $birth_day);
	$stmt->bindValue(':message', $message);
	$stmt->execute();


	$admin_mail = $_ENV['ADMIN_MAIL'];

	if($admin_mail)
	{// メール送信
		// 管理者宛
		$recipient = $admin_mail;//受信メールアドレス
		$subject = '【hogehoge】お申込みのお知らせ';
		$mailheader = 'From:'.mb_encode_mimeheader('hogehoge').'<'.$admin_mail.'>'."\n";
		$mailheader.= 'Errors-To:'.$admin_mail."\n";
		$mailheader.= 'Content-Type:text/plain;charset=ISO-2022-JP';
		$mailbody = 'hogehogeにお申込みがありました。'."\n";
		$mailbody.= 'お申込み内容は下記の通りです。'."\n";
		$mailbody.= "\n";
		$mailbody.= "----------------------------------------------------------------------\n";
		$mailbody .= "▼ お申込み内容\n";
		$mailbody.= "----------------------------------------------------------------------\n";
		$mailbody.= '受付日時：'.date('Y-m-d H:i:s')."\n";
		$mailbody.= 'ご注文者：'.$name.'様'."\n";
		$mailbody.= "\n";
		$mailbody.= 'ご注文キャンペーン：hogehoge'."\n";
		$mailbody.= 'お申込みメニュー週：'.$menu_week."\n";
		$mailbody.= 'お申込みメニュー：'.$menu."\n";
		$mailbody.= 'お申込み人数：'.$num_people."\n";
		$mailbody.= "\n";
		$mailbody.= 'お名前：'.$name."\n";
		$mailbody.= 'お名前カナ：'.$furigana."\n";
		$mailbody.= '郵便番号：'.$post_code."\n";
		$mailbody.= '住所：'.$prefectures.$city.$town_name.$building."\n";
		$mailbody.= '電話番号：'.$tel."\n";
		$mailbody.= 'E-Mailアドレス：'.$email."\n";
		$mailbody.= '生年月日：'.$birth_year."年".$birth_month."月".$birth_day."日"."\n";
		$mailbody.= 'ご要望：'."\n";
		$mailbody.= "".$message."\n";
		$mailbody.= "----------------------------------------------------------------------\n";
		$mailbody.= '会社名'."\n";
		$mailbody.= '会社URL'."\n";
		$mailbody.= "----------------------------------------------------------------------\n";
		$mailbody = mb_convert_kana($mailbody, "KV");// 半角カナ → 全角カナ
		mb_send_mail($recipient, $subject, $mailbody, $mailheader);

		// ユーザー宛
		$recipient = $email;
		$subject = '【hogehoge】お申込み完了のお知らせ';
		$mailheader = 'From:'.mb_encode_mimeheader('hogehoge').'<'.$admin_mail.'>'."\n";
		$mailheader.= 'Errors-To:'.$admin_mail."\n";
		$mailheader.= 'Content-Type:text/plain;charset=ISO-2022-JP';
		$mailbody = $name.' 様'."\n\n";
		$mailbody.= 'この度は会社名の「hogehoge」をお申込みいただき誠にありがとうございます。'."\n";
		$mailbody.= "----------------------------------------------------------------------\n";
		$mailbody.= '受付日時：'.date('Y-m-d H:i:s')."\n";
		$mailbody.= 'ご注文者：'.$name.'様'."\n";
		$mailbody.= "\n";
		$mailbody.= 'ご注文キャンペーン：hogehoge'."\n";
		$mailbody.= 'お申込みメニュー週：'.$menu_week."\n";
		$mailbody.= 'お申込みメニュー：'.$menu."\n";
		$mailbody.= 'お申込み人数：'.$num_people."\n";
		$mailbody.= "\n";
		$mailbody.= 'お名前：'.$name."\n";
		$mailbody.= 'お名前カナ：'.$furigana."\n";
		$mailbody.= '郵便番号：'.$post_code."\n";
		$mailbody.= '住所：'.$prefectures.$city.$town_name.$building."\n";
		$mailbody.= '電話番号：'.$tel."\n";
		$mailbody.= 'E-Mailアドレス：'.$email."\n";
		$mailbody.= '生年月日：'.$birth_year."年".$birth_month."月".$birth_day."日"."\n";
		$mailbody.= 'ご要望：'."\n";
		$mailbody.= "".$message."\n";
		$mailbody.= "\n";
		$mailbody.= '----------------------------------------------------------------------'."\n";
		$mailbody.= '会社名'."\n";
		$mailbody.= '会社URL'."\n";
		$mailbody.= "----------------------------------------------------------------------\n";
		mb_send_mail($recipient, $subject, $mailbody, $mailheader);
	}
  $msg["text"] = "メールが送信されました";
  echo json_encode($msg);
?>