<?php
var_dump($_POST);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<form action="send.php" method="POST">
        <div>名前<input name="username" type="text" class="inputarea name" value="<?php echo $_POST["username"];?>"></div>
        <div>メール<input name="usermail" type="email" class="inputarea" value="<?php echo $_POST["usermail"];?>"></div>
        <div class="color">
            <p>選択色</p>
            <p class="select"><?php echo implode(",",$_POST["usercolor"]); ?></p>
        </div>
        <div class="ask">お問合せ内容<textarea name="message" id="" cols="30" rows="10" class="messe"><?php echo $_POST["message"];?></textarea></div>
        <div><input type="submit" value="送信" class="btn"></div>
    </form>

    <!-- <p><?php echo $_POST["username"];?></p>
    <p><?php echo $_POST["usermail"];?></p>
    <p><?php echo implode(",",$_POST["usercolor"]); ?></p>
    <p><?php echo $_POST["message"];?></p>
<form action="send.php" method="POST" >
    <input type="hidden" name="username">
    <input type="submit" value="送信"> -->

</form>
</body>
</html>