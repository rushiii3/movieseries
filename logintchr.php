<!DOCTYPE html>
<html>
    <head>
</head>
<body>
    <h1>Hello</h1>
<form action="logintchr.php" method="POST">
Email : <input type="text" name="email" placeholder="your email">
PAssword : <input type="password" name="pass" placeholder="your password">
<input type="submit" name="sub">
</form>



</body>
</html>
<?php
session_start();
$con=mysqli_connect("localhost","root","","Class");
if(mysqli_connect_errno($con)){
    echo("Not connected");
}
else{
    echo("connected");
}
if(isset($_POST['sub'])){
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $passw=mysqli_real_escape_string($con,$_POST['pass']);
    $sql1="SELECT * FROM registertch WHERE tchemaill='$email' AND tchpass='$passw'";
    $result1=mysqli_query($con,$sql1);
    if(mysqli_num_rows($result1)==1){
        while($db=mysqli_fetch_assoc($result1)){
            $_SESSION['user']=$db['tchemaill'];
            $_SESSION['namee']=$db['tchname'];
        }
        header("Location: tt.php");
    }
}



?>