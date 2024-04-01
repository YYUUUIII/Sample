<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form action="confirm.php" method="POST">
        <div>名前<input name="username" type="text" class="inputarea name"></div>
        <div>メール<input name="usermail" type="email" class="inputarea"></div>
        <div class="color">
            <p>選択色</p>
            <div class="sel">
            赤<input type="checkbox" name="usercolor[]" value="赤">
            青<input type="checkbox" name="usercolor[]" value="青">
            黄<input type="checkbox" name="usercolor[]" value="黄">
            緑<input type="checkbox" name="usercolor[]" value="緑">
            </div>
        </div>
        <div class="ask">お問合せ内容<textarea name="message" id="" cols="30" rows="10" class="messe"></textarea></div>
        <div><input type="submit" value="確認" class="btn"></div>
    </form>
</body>
</html>