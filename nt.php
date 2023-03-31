<?php
$con=mysqli_connect("localhost","root","","class");
if(mysqli_connect_errno()){
    die("Failed to connect");
}
else{
    echo("connected");
}
$dt1=date("Y-m-d");
$dt21=date("Y-m-d",strtotime("-5 days"));
$sql="SELECT * FROM attend WHERE datee='$dt1'";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
    while($rd=mysqli_fetch_assoc($result)){
        echo($rd['ctrlid']);
        echo($rd['pa']);
        echo("<br>");
    }
}

 $ipaddress = getenv("REMOTE_ADDR") ;
 Echo "Your IP Address is " . $ipaddress;
 $ipaddress = $_SERVER['REMOTE_ADDR'];
 Echo "Your IP Address is " . $ipaddress;
 echo("<br>");

echo($dt21);
$sql1="SELECT * FROM attend, Register WHERE (datee BETWEEN '$dt21' AND '$dt1') AND ctrlid=cid AND namee='RUSHIIE'";
$result1=mysqli_query($con,$sql1);
$ct=mysqli_num_rows($result1);
echo($ct);
echo("<br>");
$sql5="SELECT * FROM attend, Register WHERE (datee BETWEEN '$dt21' AND '$dt1') AND ctrlid=cid AND namee='RUSHIIE' AND pa='Present'";
$result5=mysqli_query($con,$sql5);
$dt=mysqli_num_rows($result5);
echo("<br>");
echo($dt);
$md=($dt/$ct)*100;
echo("<br>");
echo(round($md).'%');
if(mysqli_num_rows($result1)>0){
    while($rd=mysqli_fetch_assoc($result1)){
        echo($rd['namee']);
        echo(" ");
        $style = '';
if($rd['pa']=="Present")
{
    $style = 'style="background-color:green"';
    
}
else{
    $style = 'style="background-color:red"';
}
        ?>
        <div <?php echo $style ?> > <?php echo($rd['pa']); ?> </div>
        <?php
        echo("<br>");
    }
}
?>


<?php
/*
date_default_timezone_set('Asia/Kolkata');
$date=date('Y-m-d');
$time=date('G:i:s');
$subjett="DBMS";
$teachh="ABCDE";


$sql3="SELECT * FROM Register WHERE NOT EXISTS (SELECT * FROM attend WHERE datee='$dt1' AND ctrlid=cid )";
$result3=mysqli_query($con,$sql3);
$rr=mysqli_num_rows($result3);
echo($rr);
echo("<br>");
if(mysqli_num_rows($result3)>0){
    while($tfo=mysqli_fetch_assoc($result3)){
        $re=$tfo['cid'];
        echo("<br>");
        ?>
        <input type="text" readonly value="<?php echo($tfo['namee']); ?>" name="addp<?php echo($tfo['cid']); ?>">
        <?php
        $s3="INSERT INTO attend (ctrlid,datee,timee,subjectt,Teacher,pa) VALUES ('$re','$date','$time','$subjett','$teachh','Absent')";
        if(mysqli_query($con,$s3)){
            $c=1;
        }
    }
    if($c==1){
        echo"<script>alert('MArked Absent');</script>";
    }

}
echo("bye");

*/

?>
