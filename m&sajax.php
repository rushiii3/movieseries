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
            ?>
            <div
          class="col-lg-2 col-md-3 col-sm-5 col-xs-5 text-center"
          id="maincol"
        >
          <a href="
          <?php
          $category = $row['category'];
          $id = $row['movie_id'];
          if($category=='m')
          {
            echo("movielay2.php?id=$id");
          }
          else{
            echo("serieslay2.php?id=$id");
          }
          ?>
          " id="card">
            <img
              src="<?php echo($row['poster_link']); ?>"
              id="img"
              alt="<?php echo($row['movie_title']); ?>"
            />
            <p id="title"><?php echo($row['movie_title']); ?></p>
          </a>
        </div>
        <?php
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

if(!empty($_POST['inpt']))
{
  $title = $_POST['inpt'];
  $sql = "SELECT show_id FROM shows WHERE show_title LIKE '%$title%'";
  $result = mysqli_query($con,$sql);
  if(mysqli_num_rows($result)>0)
  {
    while($row = mysqli_fetch_assoc($result))
    {
      echo($row['show_id']);
    }
  }
  else{
    echo("NOT FOUND");
  }
}
if(!empty($_POST['seasons']))
{
  $no = $_POST['seasons'];
  for($i=1;$i<=$no;$i++)
  {
    ?>
    <div class="row" style="padding:1rem;">
            <div class="col-lg-6 ">
                <h3> ENTER  SEASONS NUMBER</h3>
            </div>
            <div class="col-lg-6 " style="padding:0.5rem;">
                <input type="text" name="sn<?php echo($i);?>"  style="padding:0.5rem;width:100%;color:black;" >
            </div>
        </div>
        <?php
   

  }
}
if(!empty($_POST['showid']))
{
  $id = $_POST['showid'];
  $sql = "SELECT * FROM seasons WHERE show_id = $id";
  $result = mysqli_query($con,$sql);
  if(mysqli_num_rows($result)>0)
  {
    while($row=mysqli_fetch_assoc($result))
    {
      echo $row['season_no'];
    }
  }
}

if(!empty($_POST['shh']))
{
  $title = $_POST['shh'];
  $sql = "SELECT show_id FROM shows WHERE show_title LIKE '%$title%'";
  $result = mysqli_query($con,$sql);
  if(mysqli_num_rows($result)==1)
  {
    while($row = mysqli_fetch_assoc($result))
    {
      ?>

<div class="row" style="padding:1rem;">
            <div class="col-lg-6 ">
                <h3> Show ID</h3>
            </div>
            <div class="col-lg-6 " style="padding:0.5rem;">
                <input type="text" name="showid" value="<?php  echo($row['show_id']); ?>"  style="padding:0.5rem;width:100%;color:black;" readonly>
            </div>
        </div>

        <?php
      $id = $row['show_id'];
      $sql1 = "SELECT * FROM seasons WHERE show_id = $id";
      $result2=mysqli_query($con,$sql1);
        ?>
        <div class="row" style="padding:1rem;">
        <div class="col-lg-6 ">
            <h3> Select SEASON</h3>
        </div>
        <div class="col-lg-6 " style="padding:0.5rem;">
            <select style="padding:0.5rem;width:100%;color:black;" name="seasonid" id="seasonsw"> 
            <option selected value="">Select Season</option>
            <?php
            if(mysqli_num_rows($result2)>0)
      {  
        while($row=mysqli_fetch_assoc($result2))
        {
        ?>
                <option value="<?php echo($row['season_id']);?>"><?php echo($row['season_no']) ?></option>
        <?php
      }
      ?>
      </select>
        </div>

        </div>
       
       <div class="row" style="padding:1rem;">
       <div class="col-lg-6 ">
           <h3>Enter Number of episode</h3>
       </div>
       <div class="col-lg-6 " style="padding:0.5rem;">
           <input type="text" name="numepi" id="episode" oninput="add()"  style="padding:0.5rem;width:100%;color:black;">
       </div>
   </div>
   <?php
    }else{
      echo("NOT FOUND");
    }
    
  }
  
}else{
  echo("NOT FOUND");
}
}

if(!empty($_POST['epii']))
{
  $no = $_POST['epii'];
  for($i=1;$i<=$no;$i++)
  {
    ?>
    <div style="border:1px solid white;margin-block:2rem;padding:1rem;">
    <div class="row" style="padding:1rem;">
            <div class="col-lg-6 ">
                <h3> ENTER  Episode NUMBER</h3>
            </div>
            <div class="col-lg-6 " style="padding:0.5rem;">
                <input type="text" name="ep<?php echo($i);?>"  style="padding:0.5rem;width:100%;color:black;" >
            </div>
        </div>
        <div class="row" style="padding:1rem;">
            <div class="col-lg-6 ">
                <h3> ENTER Watch Link</h3>
            </div>
            <div class="col-lg-6 " style="padding:0.5rem;">
                <input type="text" name="wlink<?php echo($i);?>"  style="padding:0.5rem;width:100%;color:black;" >
            </div>
        </div>
        <div class="row" style="padding:1rem;">
            <div class="col-lg-6 ">
                <h3> ENTER Download Link</h3>
            </div>
            <div class="col-lg-6 " style="padding:0.5rem;">
                <input type="text" name="dlink<?php echo($i);?>"  style="padding:0.5rem;width:100%;color:black;" >
            </div>
        </div>
  </div>
        <?php
   

  }
}
?>
