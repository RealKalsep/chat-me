<!DOCTYPE html>
<html>
<head>
    <title>Chat-Me</title>
    <script>
    setTimeout(function () {
        window.location.replace("index.php");
    }, 1000);
    </script>
</head>

<body>
<h1>Please wait before you can use the chat!</h1>

<p>Processing...<p>
<?php
$chat = fopen("chat.txt", "a") or die("Something went wrong!");
$body = (date("(Y/m/d H:i:s) ") . htmlspecialchars($_POST["body"]));
fwrite($chat, $body);
fwrite($chat, "<br>\n");
?>

</body>
</html>