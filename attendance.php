<!DOCTYPE html>
<html>
    <head>
</head>
<body>
    <h1> Attendance From Teacher Side</h1>
<?php
date_default_timezone_set('Asia/Kolkata');
$date=date('Y-m-d');
$time=date('G:i:s');
echo("<br>");
echo($date);
echo("<br>");
echo($time);
echo("<br>");
echo("<br>");
$subjet="DBMS";
$teach="ABCDE";
$con=mysqli_connect("localhost","root","","class");
if(mysqli_connect_errno()){
    die("Failed to connect");
}
else{
    echo("connected");
}

$subjett=mysqli_real_escape_string($con,$subjet);
$teachh=mysqli_real_escape_string($con,$teach);
$datee=mysqli_real_escape_string($con,$date);
$timee=mysqli_real_escape_string($con,$time);

$sql1="SELECT * FROM Register";
$result=mysqli_query($con,$sql1);
if(mysqli_num_rows($result)>0){
    while($rq=mysqli_fetch_assoc($result)){
        echo("<br>");
        $td=$rq['cid'];
        ?>
        <form action="time.php" METHOD="POST">
     <input type="text" name="ct<?php echo($td) ?>" value="<?php echo($td) ?>" readonly style="width:100px;"><br>
     Present : <input type="radio" name="status<?php echo($td) ?>" value="Present">
     Absent : <input type="radio" name="status<?php echo($td) ?>" value="Absent" checked>
        <?php
        
}}?>
 <input type="submit" name="rg">
</form>
<?php
if(isset($_POST['rg'])){


$sql1="SELECT * FROM Register";
$result=mysqli_query($con,$sql1);
if(mysqli_num_rows($result)>0){
    while($rq=mysqli_fetch_assoc($result)){
        $td=$rq['cid'];
        echo("<br>");echo("<br>");
        $pd=$_POST['status'.$td];
        $ct=$_POST['ct'.$td];
        echo($ct);
        echo("<br>");
        $sql3="INSERT INTO attend (ctrlid,datee,starttime,endtime,subjectt,Teacher,pa,course,atime) VALUES ('$ct','$datee','$sttime','$edtime','$sub1','$tesr','$pd','$coursee','$timee')";
        if(mysqli_query($con,$sql2)){
            //echo"hii";
         }else{
            echo"<script>alert('MArkednot');</script>";
             die(mysqli_error($con));
         }
    }
}
}



?>
</body>
</html>