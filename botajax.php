<?php
include 'connect.php';
if(!empty($_POST['value']))
{
    $value = $getMesg = mysqli_real_escape_string($con, $_POST['value']);;
    $sql = "SELECT * FROM chatbot WHERE qts LIKE '%$value%'";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_assoc($result))
        {
            echo "<a href='https://animeloverss2.000webhostapp.com/map.html' target='_blank' style='color:white'>Click here to visit Google</a> "; 
        }
    }
    else{
        echo("Not able to understand");
    }
}

    //

?>