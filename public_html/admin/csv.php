<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CSVダウンロード</title>
</head>
<body>
  <a class="csv-button" href="./csv_export">CSVダウンロード</a>
</body>
<style>
.csv-button{
    padding: 20px 100px;
    display: inline-block;
    color: #000;
    font-size: 18px;
    font-weight: bold;
    border-radius: 5px;
    text-decoration :none;
    text-align: center;
    background: #38cf02;
    transition: .4s;
    
    /*--影の複数指定--*/
    box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.12), 0 1px 5px 0 rgba(0, 0, 0, 0.12), 0 3px 1px -2px rgba(0, 0, 0, 0.2);
    
    -webkit-tap-highlight-color: transparent;
    transition: .2s ease-out;
}
.csv-button:hover{
    background: #2ca102;
    transform: translateY(-4px);

    /*--影の複数指定--*/
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.12), 0 3px 10px 0 rgba(0, 0, 0, 0.12), 0 4px 7px -2px rgba(0, 0, 0, 0.2);
}
</style>
</html>