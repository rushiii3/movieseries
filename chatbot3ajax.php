<?php
$con=mysqli_connect("localhost","root","","chatbot");
if(mysqli_errno($con)){
    die("not connected");
}
else{
    echo("connected");
}
if(!empty($_POST['value'])){
    $value=$_POST['value'];
    $query="SELECT * FROM chatbot2 WHERE response LIKE '%$value%' ";
    $result=mysqli_query($con,$query);
if(mysqli_num_rows($result)>0)
{
    while($row=mysqli_fetch_assoc($result)){
        echo($row['reply']);
    }
}
}

?>