<?php
$to = "yu.hydrangea.24@gmail.com";
$title = "テスト送信";
$body="メールのテストです";
$head="From:sender@gmail.com";
mb_send_mail($to,$title,$body,$head);