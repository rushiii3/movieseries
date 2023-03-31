<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php
session_start();
$_SESSION['user']="RUSHI";
$str="zRushi";

?>
<a href="test2.php?value=<?php echo($_SESSION['user']);  ?>">click</a>


</body>





</html>