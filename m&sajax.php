<?php
include "connect.php";
if(!empty($_POST['srch']))
{
    $search = $_POST['srch'];
    $query = "SELECT movie_id,movie_title,category,poster_link FROM movies WHERE movie_title LIKE '%$search%' UNION SELECT show_id,show_title,category,poster_slink FROM shows WHERE show_title LIKE '%$search%'";
    $result = mysqli_query($con,$query);
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_assoc($result))
        {
            
            echo($row['movie_title']);
        }
    }
}
if(!empty($_POST['snsid']))
{
    $id = $_POST['snsid'];
    $query = "SELECT * FROM episodes WHERE season_ids = $id";
    $result = mysqli_query($con,$query);
    if(mysqli_num_rows($result)>0)
    {
        echo '<option value="">Select Episode</option>';
        while($row=mysqli_fetch_assoc($result))
        {
            echo '<option value="'.$row['episode_id'].'">'.$row['episode_no'].'</option>'; 
        }
    }
}
if(!empty($_POST["epid"])){ 
    $epid = $_POST["epid"];
    $query = "SELECT * FROM episodes WHERE episode_id = $epid"; 
    $result = mysqli_query($con,$query); 
if(mysqli_num_rows($result) > 0){ 
    while($row = mysqli_fetch_assoc($result)){  
        echo($row['w_link']);
    } 
}
}
if(!empty($_POST["snssid"])){ 
$sid = $_POST["snssid"];
$query = "SELECT * FROM episodes WHERE season_ids = $sid"; 
$result = mysqli_query($con,$query); 
if(mysqli_num_rows($result) > 0){ 
    while($row = mysqli_fetch_assoc($result)){  
        echo '<a href="'.$row['d_link'].'"  target="_blank" id="downloadlink">Download Episode '.$row['episode_no'].'</a>';
        echo("<br>");
        echo("<br>");
        echo("<br>");
    } 
}
}
?>
