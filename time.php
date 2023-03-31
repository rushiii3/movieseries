<?php

echo("Hello");
date_default_timezone_set('Asia/Kolkata');
$date=date('Y-m-d');
$time=date('G:i:s');
echo("<br>");
echo($date);
echo("<br>");
echo($time);
echo("<br>");
echo($_SESSION['crtlid']);
echo("<br>");
$subjet="DBMS";
$teach="ABCDE";
session_start();
$ctrl=$_SESSION['user'];
echo($_SESSION['user']);


$con=mysqli_connect("localhost","root","","class");
if(mysqli_connect_errno()){
    die("Failed to connect");
}
else{
    echo("connected");
}

$ctr=mysqli_real_escape_string($con,($_SESSION['crtlid']));
$sql="INSERT INTO attend (ctrlid,datee,timee,subjectt,Teacher,pa) VALUES ('$ctr','$date','$time','$subjett','$teachh','Present')";
if(mysqli_query($con,$sql)){
   echo"<script>alert('MArked Present');</script>";
}else{
   echo"<script>alert('MArkednot');</script>";
    die(mysqli_error($con));
}



?>