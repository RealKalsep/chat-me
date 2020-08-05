<!DOCTYPE html>
<html>
<head>
    <title>Chat-Me</title>
</head>

<body>
<h1>Please wait before you can use the chat!</h1>

<p>Processing...<p>
<?php
$chat = fopen("chat.txt", "w") or die("Something went wrong!");
$body = $_POST["body"];
fwrite($chat, $body);
?>

</body>
</html>