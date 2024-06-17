<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="top.css">
    <title>お問い合わせありがとうございます</title>
</head>
<div class="contact">
    <div class="thanks-message">お問い合わせいただきありがとうございます。<br>下記の内容で送信されました。</div>
    <div contact-list>名前</div>
    <?php echo $_POST["name"]; ?>
    <div contact-list>メールアドレス</div>
    <?php echo $_POST["mail"]; ?>
    <div contact-list>内容</div>
    <?php echo $_POST["body"]; ?>
</div>
