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
  <?php

    include "connect.php";
?>
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
            <li><a href="movie.html" id="nav">Series</a></li>
            <li><a href="search.html" id="nav">Search</a></li>
            <li><a href="requestuss.html" id="nav">Request us</a></li>
            <li><a href="abootutt.html" id="nav">About us</a></li>
          </ul>
        </div>
      </div>
    </nav>


<?php
    $results_per_page = 15;  
    $query1 = "SELECT * FROM shows";
    $result1=mysqli_query($con,$query1);
    $number_of_result = mysqli_num_rows($result1);
    $number_page = ceil($number_of_result/$results_per_page);
    if(!isset($_GET['page']))
    {
        $page=1;
    }
    else{
        $page=$_GET['page'];
    }
    $page_first_result = ($page-1)*$results_per_page;
    $query2 = "SELECT * FROM shows ORDER BY enddate DESC LIMIT " .$page_first_result. ',' .$results_per_page ;
    $result2=mysqli_query($con,$query2);
    ?>
    <div class="container">
      <div class="row" style="margin-block:2rem;">
      <?php
      if(mysqli_num_rows($result2))
      {
          while($row=mysqli_fetch_assoc($result2))
          {
    ?>  
        <div
          class="col-lg-2 col-md-3 col-sm-5 col-xs-5 text-center"
          id="maincol"
        >
          <a href="" id="card">
            <img
              src="<?php echo($row['poster_slink']); ?>"
              id="img"
              alt="..."
            />
            <p id="title"><?php echo($row['show_title']); ?></p>
          </a>
        </div>
        <?php }}?>
      </div>
    </div>

    <nav aria-label="Page navigation example" style="text-align:center">
  <ul class="pagination">

<?php
  for($page = 1; $page<= $number_page; $page++) {  
    echo ' <li class="page-item"><a class="page-link" <a href = "index2.php?page=' . $page . '">' . $page . ' </a></li>';  
        //echo '<a href = "index2.php?page=' . $page . '">' . $page . ' </a>';  
    }  

?>
    
   
  </ul>
</nav>
  </body>
</html>
