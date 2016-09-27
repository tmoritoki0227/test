<?php
session_start();

// ログイン状態のチェック
if (!isset($_SESSION["USERID"])) {
  header("Location: logout.php");
  exit;
}


<!doctype html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>サンプルアプリケーション</title>
  </head>
  <body>
  <h1>ログイン機能　サンプルアプリケーション</h1>
  <p>ようこそ<?php echo $_SESSION["USERID"]; ?>さん</p>
  <ul>
  <li><a href="logout.php">ログアウト</a></li>
  <img src="./inu.jpg">
  </ul>
  </body>
</html>
