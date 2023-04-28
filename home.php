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
            <li style="background-color: #c3073f">
              <a href="#" id="nav">Home</a>
            </li>
            <li><a href="movie.html" id="nav">Movies</a></li>
            <li><a href="series.html" id="nav">Series</a></li>
            <li><a href="search.html" id="nav">Search</a></li>
            <li><a href="requestuss.html" id="nav">Request us</a></li>
            <li><a href="abootutt.html" id="nav">About us</a></li>
          </ul>
        </div>
      </div>
    </nav>

<?php
include "connect.php";
?>
    <div class="container">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <?php 
          for($i=1;$i<=7;$i++)
          {
            ?>
            <li data-target="#carousel-example-generic" data-slide-to="<?php echo($i);?>"></li>
            <?php
             //<li data-target="#carousel-example-generic" data-slide-to="2"></li>
          }
          ?>
         
        </ol>
    
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="https://github.com/rushiii3/Pet-venture/blob/main/Black%20Minimalist%20Simple%20Elegant%20Trend%202022%20Banner.png?raw=true">
          </div>
    <?php
$query = "SELECT movie_title,movie_id,category,movie_gif FROM movies UNION SELECT show_title,show_id,category,show_gif FROM shows ORDER BY RAND () LIMIT 7";
$result = mysqli_query($con,$query);
if(mysqli_num_rows($result)>0)
{
    while($row=mysqli_fetch_assoc($result))
    {
        ?>
        <div class="item">
          <video muted autoplay style="width:100%;"><source src="<?php echo($row['movie_gif']);  ?>" ></video>

                      
            <div class="carousel-caption">
              <h4><?php echo($row['movie_title']); ?></h4>
              <p>
                <a class="btn btn-danger" href="
                <?php
                $category = $row['category'];
                $id = $row['movie_id'];
                if($category=='m')
                {
                  echo("movielay2.php?id=$id#wo");
                }
                else{
                  echo("serieslay2.php?id=$id#wo");
                }
                ?>
                " role="button">Watch Online</a>
                <a class="btn btn-danger" href="
                <?php
                $category = $row['category'];
                $id = $row['movie_id'];
                if($category=='m')
                {
                  echo("movielay2.php?id=$id#dn");
                }
                else{
                  echo("serieslay2.php?id=$id#dn");
                }
                ?>
                " role="button">Download</a>
              </p>
            </div>
          </div>
          <?php
        
    }
}

    ?>
          
          
          
    
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
    
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
      </div>
    </div>



    <?php
    date_default_timezone_set('Asia/Kolkata');
    $dt1 = date('Y-m-d');
    $dt21 = date('Y-m-d',strtotime( date( 'Y-m-01' )." -6 months"));
    $results_per_page = 15;  
    $query1 = "SELECT movie_id FROM movies UNION SELECT show_id FROM shows";
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
    $query2 = " SELECT movie_id,poster_link,movie_title,category FROM movies WHERE release_date BETWEEN '$dt21' AND '$dt1' UNION SELECT show_id,poster_slink,show_title,category FROM shows WHERE enddate BETWEEN '$dt21' AND '$dt1' ORDER BY RAND() LIMIT " .$page_first_result. ',' .$results_per_page;
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
              src="<?php echo($row['poster_link']); ?>"
              id="img"
              alt="..."
            />
            <p id="title"><?php echo($row['movie_title']); ?></p>
          </a>
        </div>
        <?php }}?>
      </div>
    </div>

    <nav aria-label="Page navigation example" style="text-align:center">
  <ul class="pagination">

<?php
  for($page = 1; $page<= $number_page; $page++) {  
    echo ' <li class="page-item"><a class="page-link" <a href = "home.php?page=' . $page . '">' . $page . ' </a></li>';  
        //echo '<a href = "index2.php?page=' . $page . '">' . $page . ' </a>';  
    }  

?>
    
   
  </ul>


  
</body>
</html>
