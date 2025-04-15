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

//入力欄に無理やり配列が入っていないか確認する
$username = filter_input(INPUT_GET,'username');
$useraddress = filter_input(INPUT_GET,'useraddress');
$usermail = filter_input(INPUT_GET,'usermail');

//正規表現を使って文字をチェック
if (!preg_match('/^[ぁ-んァ-ヶー一-龠々ー\s]+$/u', $username)) {
  die("名前は日本語で入力してください。");
}
if (!preg_match('/^[ぁ-んァ-ヶー一-龠々ー0-9ー－、。 \s]+$/u', $useraddress)) {
  die("住所は日本語で入力してください。");
}
if (!preg_match('/^[a-z0-9!#$%&\'*+\/=?^_`{|}~.-]+@[a-z0-9-]+(\.[a-z0-9-]+)*$/i', $usermail)) {
  die("正しい形式のメールアドレスを入力してください。");
}
echo "あなたが入力した値<br>";
echo "名前：" . $_GET['username'] . "<br>";
echo "住所：" . $_GET['useraddress']. "<br>";
echo "メールアドレス：" . $_GET['usermail'];
?>
    </h2>
    </div>
  </body>
</html>
