<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="movieseries.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  </head>
  <body style="background-color: #1f2823">
  <div class="page-loader">
      <img src="https://i.pinimg.com/originals/b8/71/76/b8717641f46cdfdced2c86e984f07c11.gif" style="height: 100vh;width: 100%;">
    </div>    
    <script>
      $(window).on('load',function(){
	setTimeout(function(){ // allowing 3 secs to fade out loader
	$('.page-loader').fadeOut('slow');
	},2000);
});
    </script>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button
            type="button"
            class="navbar-toggle"
            data-toggle="collapse"
            data-target="#myNavbar"
          >
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Movies00</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li >
              <a href="#" id="nav">Home</a>
            </li>
            <li style="background-color: #c3073f"><a href="#" id="nav">Movies</a></li>
            <li ><a href="#" id="nav">Series</a></li>
            <li><a href="#" id="nav">Search</a></li>
            <li><a href="#" id="nav">Request us</a></li>
            <li><a href="#" id="nav">About us</a></li>
          </ul>
        </div>
      </div>
    </nav>
<?php
include "connect.php";
$id = $_GET['id'];
?>


    <div class="container">
      <div class="row mx-auto">
        <?php
        $query = "SELECT * FROM movies WHERE movie_id = $id";
        $result = mysqli_query($con,$query);
        if(mysqli_num_rows($result)==1)
        {
            while($row=mysqli_fetch_assoc($result))
            {
                
            
        
        ?>
        <div class="col-lg-6" style="height: 60rem;">
            <img src="<?php echo($row['poster_link']);?>" width="100%" height="100%" alt="<?php echo($row['movie_title']); ?>">
        </div>
        <div class="col-lg-6" style="color: white;">
            <h1 style="text-align: center;margin-block:2rem ;">
                <?php echo($row['movie_title']); ?>
            </h1>
            <div style="margin-block:2rem ;">
              <h5>
                Description
            </h5>
            <h4>
                <?php echo($row['movie_descrip']); ?>
            </h4>
            </div>
            
            <h4 style="margin-block:2rem ;">
                Release date : <b><?php echo($row['release_date']); ?></b>
            </h4>

            <h4 style="margin-block:2rem ;">
                Runtime : <b><?php echo($row['runtime']); ?></b>
            </h4>

            <p style="text-align: center;margin-block:2rem ;">
              <a class="btn btn-danger" href="#wo" role="button" style="margin-block: 1rem;font-size: 2rem;">Watch Online</a>
              <br>
                <a class="btn btn-danger" href="#dn" role="button" style="margin-block: 1rem;font-size: 2rem;">Download</a>
            </p>
              
        </div>
      </div>
    </div>

  <div class="container" style="padding: 1rem;margin-block: 2rem;">
    <div class="col-lg-12">
      <h1 style="color: white;" id="wo" class="wo">
        Watch Online
      </h1>
    </div>   
    <div class="embed-responsive embed-responsive-16by9 col-lg-12" style="margin-block: 2rem;">
      <iframe class="embed-responsive-item" src="
      <?php echo($row['wlink']);?>
      
      " allowfullscreen ></iframe>
    </div>
  </div>    
    

  <div class="container" style="padding: 1rem;margin-block: 2rem;">
    <div class="col-lg-12">
      <h1 style="color: white;" id="dn" class="dn">
        Download
      </h1>
    </div>
    
    <div class="col-lg-12" style="text-align: center;margin-block: 5rem;">
      <a href="<?php echo($row['dlink']);?>" target="_blank" id="downloadlink">Download Movie</a>
    </div>
   
    
  </div>    
  <?php
            }
        }
        ?>
  </body>
</html>
