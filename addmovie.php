<!DOCTYPE HTML>
<html>
    <head>
    <title>Add Movie</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="movieseries.css">
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    </head>
    <body style="background-image:url(https://i.stack.imgur.com/W6Fuk.png);">
    <?php
    include "connect.php";
    ?>
        <h1 style="color:white;">Add Movie</h1>
    <div class="container" style="color:white;margin-block:4rem;">
    <form method="POST" action="addmovie.php">
        <div class="row" style="padding:1rem;">
            <div class="col-lg-6 ">
                <h3>Enter Movie Title</h3>
            </div>
            <div class="col-lg-6 " style="padding:0.5rem;">
                <input type="text" name="title" style="padding:0.5rem;width:100%;color:black;">
            </div>
        </div>
        <div class="row" style="padding:1rem;">
            <div class="col-lg-6 ">
                <h3>Enter Poster Link</h3>
            </div>
            <div class="col-lg-6 " style="padding:0.5rem;">
                <input type="text" name="poster" style="padding:0.5rem;width:100%;color:black;">
            </div>
        </div>
        <div class="row" style="padding:1rem;">
            <div class="col-lg-6 ">
                <h3>Enter Movie Description</h3>
            </div>
            <div class="col-lg-6 " style="padding:0.5rem;">
                <input type="text" name="descrip" style="padding:0.5rem;width:100%;color:black;">
            </div>
        </div>
        <div class="row" style="padding:1rem;">
            <div class="col-lg-6 ">
                <h3>Enter Release Date</h3>
            </div>
            <div class="col-lg-6 " style="padding:0.5rem;">
                <input type="date" name="rdate" style="padding:0.5rem;width:100%;color:black;">
            </div>
        </div>

        <div class="row" style="padding:1rem;">
            <div class="col-lg-6 ">
                <h3>Enter Runtime</h3>
            </div>
            <div class="col-lg-6 " style="padding:0.5rem;">
                <input type="text" name="runtime" style="padding:0.5rem;width:100%;color:black;">
            </div>
        </div>

        <div class="row" style="padding:1rem;">
            <div class="col-lg-6 ">
                <h3>Enter Watch Link</h3>
            </div>
            <div class="col-lg-6 " style="padding:0.5rem;">
                <input type="text" name="wlink" style="padding:0.5rem;width:100%;color:black;">
            </div>
        </div>

        <div class="row" style="padding:1rem;">
            <div class="col-lg-6 ">
                <h3>Enter Download link</h3>
            </div>
            <div class="col-lg-6 " style="padding:0.5rem;">
                <input type="text" name="dlink" style="padding:0.5rem;width:100%;color:black;">
            </div>
        </div>
        <div class="row" style="padding:1rem;">
            <div class="col-lg-6 ">
                <h3>Enter IMDB TRAILER LINK</h3>
            </div>
            <div class="col-lg-6 " style="padding:0.5rem;">
                <input type="text" name="imdblink" style="padding:0.5rem;width:100%;color:black;">
            </div>
        </div>
        <div class="row" style="padding:1rem;">
            <div class="col-lg-12 " style="text-align:center;">
                <input type="submit" value="Submit" name="submit" style="padding-block:1rem;padding-inline:4rem;background-color:red;border-radius:20px;">
            </div>
            
        </div>
    </form>
    <?php
    if(isset($_POST['submit']))
    {
        $title = mysqli_real_escape_string($con,$_POST['title']);
        $poster = mysqli_real_escape_string($con,$_POST['poster']);
        $descrip = mysqli_real_escape_string($con,$_POST['descrip']);
        $datte = date('Y-m-d',strtotime($_POST['rdate']));
        $runtime = mysqli_real_escape_string($con,$_POST['runtime']);
        $wlink = mysqli_real_escape_string($con,$_POST['wlink']);
        $dlink = mysqli_real_escape_string($con,$_POST['dlink']);
        $imdblink = mysqli_real_escape_string($con,$_POST['imdblink']);
        $query="INSERT INTO movies (movie_title,poster_link,movie_descrip,release_date,runtime,wlink,dlink,movie_gif) VALUES ('$title','$poster','$descrip','$datte','$runtime','$wlink','$dlink','$imdblink')";
        if(mysqli_query($con,$query))
        {
            echo '<script>alert("Movie Added Successfully")</script>';

        }
        else{
            echo '<script>alert("Movie NOt Added Successfully")</script>';

        }
        }
    ?>
    </div>

    </body>
    </html>

