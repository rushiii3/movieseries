<?php 
$con=mysqli_connect("localhost","root","","anime");
if(mysqli_connect_errno()){
    die("not connected");
}
?>
<!DOCTYPE html>
<html>
    <head>
</head>
<body>
    
<form method="POST" action="new.php" id="wb">
<IFRAME SRC="<?php      ?>" FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO  allowfullscreen></IFRAME>
<input type="submit" value="1" name="one" >
<input type="submit" value="2" name="one" >
<input type="submit" value="3" name="one" >
<?php 
    if(isset($_POST['one'])){
        
        $one=$_POST['one'];
        
        
        $sql="SELECT * FROM movies WHERE id='$one'";
        $result=mysqli_query($con,$sql);
        if(mysqli_num_rows($result)>0){
            while($rr=mysqli_fetch_assoc($result)){
                ?>

                <IFRAME SRC="<?php   echo($rr['link']);   ?>" FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO  HEIGHT=360px width=360px allowfullscreen></IFRAME>
                <?php
            }
        }
    }
    
    
    ?>
</form>

<?php mysqli_close($con); ?>
</body>
</html>

