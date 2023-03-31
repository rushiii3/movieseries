<!DOCTYPE HTML>
<html>
    <head>
        <title>
            Practice
</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
<style>
  *{
    font-family: 'Abril Fatface', cursive;
  }
  </style>
</head>

<body>
<h1>Login</h1>
<form action="loginclas.php" method="POST">
Control id : <input type="text" name="ctrlid" ><br>
Password : <input type="text" name="paass"><br>
<input type="submit" name="sub">

<?php
session_start();
$con=mysqli_connect("localhost","root","","class");
if(mysqli_connect_errno()){
    die("Failed to connect");
}
if(isset($_POST['sub'])){
    $ctr = $_POST['ctrlid'];
    $paass=$_POST['paass'];
    $_SESSION['crtlid']=$ctr;
    $sql="SELECT * FROM Register WHERE cid='$ctr' AND pass='$paass'";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    $countt = mysqli_num_rows($result); 
    echo("hello");
    if($countt==1){
        #echo"<script>alert('Login')</script>";
        $sql="SELECT * FROM Register WHERE cid='$ctr' AND pass='$paass'";
        $result=mysqli_query($con,$sql);
        if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_assoc($result)){
                $new=$row['namee'];
                $new1=$row['classs'];

                $_SESSION['user']=$new;
                $_SESSION['classs']=$new1;
                
        }
        
        }
        header("Location: tt.php");
                die();
        /** 
        while($r=mysqli_fetch_assoc($result)){
               //=$r['namee'];
        }*/
    }
        
    }
    else{
        echo"<script>alert('Login failed')</script>";
   }



?>



</form>

</body>
</html>