<!DOCTYPE html>
<html>
<head>
    <title>Chat-Me</title>
</head>

<body>
<h1>Chat (still very new)</h1>

<form action="processing.php" method="post">
Write a message: <input type="text" name="body">
<input type="submit">
<br>

<?php
include("chat.txt");
?>

</body>
</html>