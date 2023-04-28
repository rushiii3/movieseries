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
        <h1 style="color:white;">Add Episode</h1>
    <div class="container" style="color:white;margin-block:4rem;" >
    <form method="POST" action="addepisode.php">
        <div class="row" style="padding:1rem;">
            <div class="col-lg-6 ">
                <h3>Enter Show Title</h3>
            </div>
            <div class="col-lg-6 " style="padding:0.5rem;">
                <input type="text" name="title" id="inputle" oninput="search()" style="padding:0.5rem;width:100%;color:black;">
            </div>
        </div>
        
        <div id="showme">
            
        </div>
        <div id="showepi">
            
        </div>
        <div class="row" style="padding:1rem;">
            <div class="col-lg-12 " style="text-align:center;">
                <input type="submit" value="Submit" name="submit" style="padding-block:1rem;padding-inline:4rem;background-color:red;border-radius:20px;">
            </div>
        </div>
        
    </form>
    </div>

    <?php
    

    if(isset($_POST['submit']))
    {
        $season_id = mysqli_real_escape_string($con,$_POST['seasonid']);
        $episode = mysqli_real_escape_string($con,$_POST['numepi']);
    for($i=1;$i<=$episode;$i++)
    {
        ${"ep$i"} = mysqli_real_escape_string($con,$_POST['ep'.$i]);
        ${"wlink$i"} = mysqli_real_escape_string($con,$_POST['wlink'.$i]);
        ${"dlink$i"} = mysqli_real_escape_string($con,$_POST['dlink'.$i]);
    }

for($i=1;$i<=$episode;$i++)
    {
    $sql = "INSERT INTO episodes(season_ids,episode_no,w_link,d_link) VALUES('$season_id','${"ep$i"}','${"wlink$i"}','${"dlink$i"}')";
    if(mysqli_query($con,$sql))
    {
        echo '<script>alert("Added Successfully")</script>';
    }
    else{
        echo '<script>alert("NOt Added Successfully")</script>';
    }
}}
    ?>
    <script>
            function search()
            {
            
                $.ajax({
                    type: 'POST',
                    url: 'm&sajax.php',
                    data: 'shh=' + $('#inputle').val(),
                    success: function(data) {
                        $('#showme').html(data);
                    },
                    error: function() {
                        console.log(response.status);
                    },
                })
            }
            function add()
            {
            
                $.ajax({
                    type: 'POST',
                    url: 'm&sajax.php',
                    data: 'epii=' + $('#episode').val(),
                    success: function(data) {
                        $('#showepi').html(data);
                    },
                    error: function() {
                        console.log(response.status);
                    },
                })
            }
            
        </script>
    </body>
    </html>

    