

<!DOCTYPE HTML>
<html>
    <head>
        <title>
            Practice
</title>
</head>
<body>

<form action="registerteacher.php" method="POST" >
Full Name : <input type="text" name="name" id="name"><br>
Email : <input type="text" name="email" id="ename"><br>
password : <input type="password" name="paass"> <br>
Confirm Password :  <input type="password" name="p"> <br>
<input type="submit" value="Submit" id="reg" name="reg">
<?php
error_reporting(0);
$con=mysqli_connect("localhost","root","","class");
if(mysqli_connect_errno()){
    die("Failed to connect " .mysqli_connect_error());
}
else{
    echo("connected");
}
if (isset($_POST['reg'])){
    
    $email= mysqli_real_escape_string($con,$_POST['email']);
    $namee = mysqli_real_escape_string($con,strtoupper($_POST['name'])); 
    $paass = mysqli_real_escape_string($con,$_POST['paass']); 
    $query="INSERT INTO registertch (tchemaill,tchname,tchpass) VALUES ('$email','$namee','$paass')";
    
    if(mysqli_query($con,$query)){
        echo"<script>alert('Registerd')</script>";
    }
    else{
        echo"<script>alert('Not Registerd')</script>";
        echo "ERROR: Could not able to execute $query. " . mysqli_error($con);
    }
    mysqli_close($con);
}


?>
</form>







</body>
</html>




