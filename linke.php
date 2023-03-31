<!DOCTYPE html>
<html>
<head>
    <title>
</title>
</head>

<body>
<h1>Create link
</h1>
<form action="linke.php" method="POST">
NAME : <input type="text" name="tname" value="ABCDE"><br>
DATE : 
<?php
$datee=date('Y-m-d');
echo($datee);
?><br>ENTER STARTING TIME : 
<input type="time" name="stime"><br>
ENTER ENDING TIME : 
<input type="time" name="etime"><br>
SELECT COURSE
<select name="class">
<option value="FYIT">FYIT</option>
    <option value="SYIT">SYIT</option>
    <option value="TYIT">TYIT</option>
</select><br>SELECT SUBJECT
<select name="subjt">
<option value="OPERATING SYSTEM">OPERATING SYSTEM</option>
    <option value="DATABASE MANAGMENT SYSTEM">DATABASE MANAGMENT SYSTEM</option>
    <option value="DOT NET">DOT NET</option>
</select><br> 
<input type="submit" name="subt">
<?php

if(isset($_POST['subt'])){
    $con=mysqli_connect("localhost","root","","class");
    if(mysqli_connect_errno()){
        die("Failed to connect");
    }
    else{
        echo("connected");
    }

$st=$_POST['stime'];
$st1=date('H:i:s',strtotime($st));

$et=$_POST['etime'];
date_default_timezone_set('Asia/Kolkata');
$st2=date('H:i:s',strtotime($et));
$timee=date('G:i:s');
$subj=mysqli_real_escape_string($con,$_POST['subjt']);
$class1=mysqli_real_escape_string($con,$_POST['class']);
$tech1=mysqli_real_escape_string($con,$_POST['tname']);

$s1="INSERT INTO linke (ldate,lstime,lendtime,lsub,lcourse,lteach,lctime) VALUES ('$datee','$st1','$st2','$subj','$class1','$tech1','$timee')";
if(mysqli_query($con,$s1)){
    echo"<script>alert('Link is created');</script>";
}
else{
    echo"<script>alert('Link not created');</script>";
}
}

$con=mysqli_connect("localhost","root","","class");
    if(mysqli_connect_errno()){
        die("Failed to connect");
    }
    else{
        echo("connected");
    }
    $st=$_POST['stime'];
    $st1=date('H:i:s',strtotime($st));
    
    $et=$_POST['etime'];
    date_default_timezone_set('Asia/Kolkata');
    $st2=date('H:i:s',strtotime($et));
    $timee=date('G:i:s');    
$et=$_POST['etime'];
date_default_timezone_set('Asia/Kolkata');
$st2=date('H:i:s',strtotime($et));
$timee=date('G:i:s');
$subj=mysqli_real_escape_string($con,$_POST['subjt']);
$class1=mysqli_real_escape_string($con,$_POST['class']);
$tech1=mysqli_real_escape_string($con,$_POST['tname']);
$class2=mysqli_real_escape_string($con,$_POST['class']);
$sql="SELECT * FROM Register WHERE classs='$class2'";
$result2=mysqli_query($con,$sql);
echo(mysqli_num_rows($result2));
if(mysqli_num_rows($result2)>0){
    while($row=mysqli_fetch_assoc($result2)){
        $new=$row['cid']; //ctrl will be given to new
        $new1=$row['classs']; //class will be given to new1
        echo($new);
        $sql3="INSERT INTO attend (ctrlid,datee,starttime,endtime,subjectt,Teacher,pa,course,atime) VALUES ('$new','$datee','$st1','$st2','$subj','$tech1','Absent','$class2','$timee')";
        if(mysqli_query($con,$sql3)){
            echo("Added");
        }
        echo("<br>");
    }
}
?>
</form>

</body>
</html>