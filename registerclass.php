

<!DOCTYPE HTML>
<html>
    <head>
        <title>
            Practice
</title>
</head>
<body>

<form action="registerclass.php" method="POST" enctype="multipart/form-data">
Control id : <input type="text" name="ctrl_id" id="ctrl_id"><br>
Full Name : <input type="text" name="name" id="name"><br>
Emai : <input type="text" name="email" id="ename"><br>
Class : <select name="class">
<option value="FYIT">FYIT</option>
    <option value="SYIT">SYIT</option>
    <option value="TYIT">TYIT</option>
</select><br>
password : <input type="pass" name="paass"> <br>
<input type="submit" value="Submit" id="reg" name="reg">
<?php
error_reporting(0);
$con=mysqli_connect("localhost","root","","class");
if(mysqli_connect_errno()){
    die("Failed to connect " .mysqli_connect_error());
}
if (isset($_POST['reg'])){
    
    $email= mysqli_real_escape_string($con,$_POST['email']);
    $cntrl_id =mysqli_real_escape_string($con,$_POST['ctrl_id']); 
    $namee = mysqli_real_escape_string($con,strtoupper($_POST['name'])); 
    $class = mysqli_real_escape_string($con,$_POST['class']); 
    $paass = mysqli_real_escape_string($con,$_POST['paass']); 
    $query="INSERT INTO Register (cid,namee,email,pass,classs) VALUES ('$cntrl_id','$namee','$email','$paass','$class')";
    
    if(mysqli_query($con,$query)){
        echo"<script>alert('Registerd')</script>";
    }
    else{
        echo"<script>alert('Not Registerd')</script>";
    }
    mysqli_close($con);
}


?>
</form>


       





</body>
</html>




