<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php
session_start();
$_SESSION['user'];
echo($_SESSION['user']);
$val = $_GET['value'];
echo($val);
?>



</body>





</html>