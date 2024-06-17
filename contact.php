<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="top.css">
    <title>お問い合わせありがとうございます</title>
</head>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // POSTメソッドで送信された場合の処理
    // ここにフォームデータの処理を記述する
} else {
    // POST以外のメソッドでアクセスされた場合の処理
    // 通常はエラー処理を記述する
    http_response_code(405);
    echo "Method Not Allowed";
    exit;
}

<div class="contact">
    <div class="thanks-message">お問い合わせいただきありがとうございます。<br>下記の内容で送信されました。</div>
    <div contact-list>名前</div>
    <?php echo $_POST["name"]; ?>
    <div contact-list>メールアドレス</div>
    <?php echo $_POST["mail"]; ?>
    <div contact-list>内容</div>
    <?php echo $_POST["body"]; ?>
</div>
?>
