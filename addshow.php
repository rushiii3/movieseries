<!DOCTYPE HTML>
<html>
    <head>
    <title>Add Show</title>
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
        <h1 style="color:white;">Add Show</h1>
    <div class="container" style="color:white;margin-block:4rem;">
    <form method="POST" action="addshow.php">
        <div class="row" style="padding:1rem;">
            <div class="col-lg-6 ">
                <h3>Enter Show Title</h3>
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
                <h3>Enter Show Description</h3>
            </div>
            <div class="col-lg-6 " style="padding:0.5rem;">
                <input type="text" name="descrip" style="padding:0.5rem;width:100%;color:black;">
            </div>
        </div>
        <div class="row" style="padding:1rem;">
            <div class="col-lg-6 ">
                <h3>Enter Start Date</h3>
            </div>
            <div class="col-lg-6 " style="padding:0.5rem;">
                <input type="date" name="sdate" style="padding:0.5rem;width:100%;color:black;">
            </div>
        </div>

        <div class="row" style="padding:1rem;">
            <div class="col-lg-6 ">
                <h3>Enter End Date</h3>
            </div>
            <div class="col-lg-6 " style="padding:0.5rem;">
                <input type="date" name="edate" style="padding:0.5rem;width:100%;color:black;">
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
        $datte1 = date('Y-m-d',strtotime($_POST['sdate']));
        $datte2 = date('Y-m-d',strtotime($_POST['edate']));
        $imdblink = mysqli_real_escape_string($con,$_POST['imdblink']);
        $query="INSERT INTO shows (show_title,poster_slink,show_descrip,startdate,enddate,show_gif) VALUES ('$title','$poster','$descrip','$datte1','$datte2','$imdblink')";
        if(mysqli_query($con,$query))
        {
            echo '<script>alert("Series Added Successfully")</script>';

        }
        else{
            echo '<script>alert("Series NOt Added Successfully")</script>';

        }
        }
    ?>
    </div>

    </body>
    </html>

