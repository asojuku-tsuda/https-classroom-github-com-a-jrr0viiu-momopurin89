<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body class="cyberpunk-bg">
    <div class="login-box">
      <h2>
      <?php


// 入力欄に無理やり配列が入っていないか確認する 
$indata = filter_input(INPUT_GET,'indata');

//正規表現を使って文字をチェック
if(mb_ereg('^[0-9]+$',$indata) == false){
  die("数字を入力してください。");
}
echo "入力された数字は： " . $indata;
?>
    </h2>
    </div>
  </body>
</html>
