<?php
include('Header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>send mail</title>
</head>
<body>
<form method="post" action="send_mail">
        Who to:<br>
        <input type="email" name="to"><br>
        From email (not required):<Br>
        <input type="email" name="header"><br>
        Subject:<br>
        <input type="text" name="subject"><br>
        Message:<br>
        <textarea rows="4" cols="40" name="message"></textarea><br>
        <input type="submit" name="sendout">
    </form>
</body>
</html>