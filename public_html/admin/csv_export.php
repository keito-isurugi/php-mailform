<?php 
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

$sql = "select id, menu, num_people, menu_week, name, furigana, post_code,CONCAT(prefectures, city, town_name, building) as address, tel, email, CONCAT(birth_year, '年', birth_month, '月', birth_day, '日') as birthday, message from applications";
// $sql = "select CONCAT(prefectures, city, town_name, building) as address from applications";
$stmt = ($pdo->prepare($sql));
$stmt->execute();
$ret = $stmt->fetchAll(PDO::FETCH_ASSOC);

// echo "<pre>";
// var_dump($ret);
// var_dump($stmt->errorInfo());
// echo "</pre>";


put_csv($ret);
function put_csv( $data ) {
  try {
      $csvFileName = '/tmp/'.'メニュー申込み一覧.csv';
      $fileName ='メニュー申込み一覧.csv';
      $res = fopen( $csvFileName, 'w' );

      if ( $res === FALSE ) {
          throw new Exception( 'ファイルの書き込みに失敗しました。' );
      }

      $header = [
        "No",
        "お申込みメニュー",
        "お申込み人数",
        "お申込みメニュー週",
        "氏名",
        "フリガナ",
        "郵便番号",
        "住所",
        "電話番号",
        "メールアドレス",
        "生年月日",
        "ご要望"
      ];
      mb_convert_variables( 'SJIS', 'UTF-8', $header );
      fputcsv( $res, $header );

      foreach( $data as $index => $dataInfo) {
          mb_convert_variables( 'SJIS', 'UTF-8', $dataInfo );
          fputcsv( $res, $dataInfo );
      }

      fclose( $res );

      header( 'Content-Type: application/octet-stream' );
      header( 'Content-Disposition: attachment; filename=' . $fileName ); 
      header( 'Content-Length: ' . filesize( $csvFileName ) ); 
      header( 'Content-Transfer-Encoding: binary' );

      readfile( $csvFileName );
  } catch( Exception $e ) {
      echo $e->getMessage();
  }
}

