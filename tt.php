<!DOCTYPE html>
<html>

<head>
	<title>Getting Clients IP</title>
	
</head>

<body>
	



<form action="tt.php" method="POST">
	<input type="submit" value="Logout" name="lg">


	<?php
	session_start();
	echo($_SESSION['user']);
	echo($_SESSION['crtlid']);
	$ctrl=$_SESSION['crtlid'];
	?>
	<?php
if(isset($_POST['lg'])){
	session_unset();
	session_destroy();
	header("Location: loginclas.php");
}
?>
<?php error_reporting(0); ?>
<form method="POST" action="tt.php">
<h1>Update </h1>
<p><?php echo($_SESSION['user']);?> </p>  
<br>
<select name="cond">
	<option value="name1">Name</option>
	<option value="email1">email</option>
	<option value="class1">class</option>
</select>
<input type="text" name="chng">
<input type="submit" name="sub1">
<?php
$conn=mysqli_connect("localhost","root","","class");
if(mysqli_connect_errno()){
	die("Connection failed");
}
$cntid=mysqli_real_escape_string($conn,$_SESSION['crtlid']);
$chng=mysqli_real_escape_string($conn,$_POST['chng']);
$cond=$_POST['cond'];
if(isset($_POST['sub1'])){
	if($cond=="class1"){
		$sql="UPDATE Register SET classs='$chng' WHERE cid='$cntid'";
		if(mysqli_query($conn,$sql)){
			echo("<script>alert('Class change');</script>");
		}
		else{
			echo("<script>alert('Class NOT change');</script>");
		}
		
	}
	if($cond=="name1"){
		$sql="UPDATE Register SET namee='$chng' WHERE cid='$cntid'";
		if(mysqli_query($conn,$sql)){
			echo("<script>alert('Name change');</script>");
		}
		else{
			echo("<script>alert('Name NOT change');</script>");
		}
		
	}
	if($cond=="email1"){
		$sql="UPDATE Register SET email='$chng' WHERE cid='$cntid'";
		if(mysqli_query($conn,$sql)){
			echo("<script>alert('Name change');</script>");
		}
		else{
			echo("<script>alert('Name NOT change');</script>");
		}
		
	}
}

?>

<h1>Attendance </h1>
<form method="POST" action="tt.php">
<?php
date_default_timezone_set('Asia/Kolkata');
$timee=date('G:i:s'); //curent time 

$time1=substr($timee,0,7); //converted to hour minutes seconds
echo($time1);

$datee=date('Y-m-d');//current date

$coursee=mysqli_real_escape_string($conn,$_SESSION['classs']);

$sql2="SELECT * FROM linke WHERE lcourse='$coursee' AND ldate='$datee' AND ('$time1' BETWEEN lstime AND lendtime)";
$result2=mysqli_query($conn,$sql2);
if(mysqli_num_rows($result2)>0){
	while($dt=mysqli_fetch_assoc($result2)){
		echo("SUBJECT : ");
		echo($dt['lsub']);
		$sub1=$dt['lsub'];//subject name
		echo("<br>");
		echo("course : ");
		echo($dt['lcourse']);
		echo("<br>");
		$tesr=$dt['lteach'];//teacher name
		echo("Teacher/Sir : ");
		echo($dt['lteach']);
		echo("<br>");
		echo("Date : ");
		echo($dt['ldate']);
		echo("<br>");
		$sttime=$dt['lstime'];//lecture start time
		echo("Starting Lecture Time : ");
		echo($dt['lstime']);
		$edtime=$dt['lendtime']; //lecture end time
		echo("  End Lecture Time : ");
		echo($dt['lendtime']);
	}
}

if(isset($_POST['sub2'])){
	$sql3="UPDATE attend SET atime='$time1' , pa='Present' WHERE ctrlid='$cntid' AND datee='$datee' AND starttime='$sttime' AND endtime='$edtime' AND subjectt='$sub1' AND Teacher='$tesr' AND course='$coursee'";
	if(mysqli_query($conn,$sql3)){
		echo("<script>alert('Marked Present');</script>");
	}
	else{
		echo("<script>alert('Not Marked Present');</script>");
	}
}

?>
<input type="submit" value="Click to mark Present" name="sub2">

</form>

<?php
/*
echo("<br>");
$dt1=date("Y-m-01");
echo($dt1);echo("<br>");
echo($datee);
echo("<br>");
$dt21=date("Y-m-d",strtotime("-5 days"));

$sql="SELECT * FROM attend WHERE datee='$datee' AND ctrlid='$ctrl'";
$result=mysqli_query($conn,$sql);
echo(mysqli_num_rows($result));echo("<br>");
if(mysqli_num_rows($result)>0){
    while($rd=mysqli_fetch_assoc($result)){
        echo($rd['ctrlid']);
        echo($rd['pa']);
        echo("<br>");
    }
}

$sql1="SELECT * FROM attend, Register WHERE (datee BETWEEN '$dt1' AND '$datee') AND ctrlid='$ctrl' AND course='$coursee'";
$result1=mysqli_query($conn,$sql1);
$ct=mysqli_num_rows($result1);
echo($ct);
echo("<br>");
$sql5="SELECT * FROM attend WHERE (datee BETWEEN '$dt1' AND '$datee') AND ctrlid='$ctrl'  AND pa='Present' AND course='$coursee'";
$result5=mysqli_query($conn,$sql5);
$dt=mysqli_num_rows($result5);
echo("<br>");
echo($dt);
$md=($dt/$ct)*100;
echo("<br>");
echo(round($md).'%');
if(mysqli_num_rows($result1)>0){
    while($rd=mysqli_fetch_assoc($result1)){
       
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

*/



?>
</body>

</html>
