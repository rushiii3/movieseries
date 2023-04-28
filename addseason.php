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
    <form method="POST" action="addseason.php">
        <div class="row" style="padding:1rem;">
            <div class="col-lg-6 ">
                <h3>Enter Show Title</h3>
            </div>
            <div class="col-lg-6 " style="padding:0.5rem;">
                <input type="text" name="title" id="inputle" oninput="search()" style="padding:0.5rem;width:100%;color:black;">
            </div>
        </div>
        <div class="row" style="padding:1rem;">
            <div class="col-lg-6 ">
                <h3> Show ID</h3>
            </div>
            <div class="col-lg-6 " style="padding:0.5rem;">
                <input type="text" name="showid" id="showme" style="padding:0.5rem;width:100%;color:black;" readonly>
            </div>
        </div>

        <div class="row" style="padding:1rem;">
            <div class="col-lg-6 ">
                <h3> ENTER NUMBER OF SEASONS</h3>
            </div>
            <div class="col-lg-6 " style="padding:0.5rem;">
                <input type="text" name="seasonno" id="season" oninput="add()"  style="padding:0.5rem;width:100%;color:black;" >
            </div>
        </div>
        <div id="showsn">
            
        </div>
        <div class="row" style="padding:1rem;">
            <div class="col-lg-12 " style="text-align:center;">
                <input type="submit" value="Submit" name="submit" style="padding-block:1rem;padding-inline:4rem;background-color:red;border-radius:20px;">
            </div>
            
        </div>
    </form>
    </div>

    <?php
    $showid = mysqli_real_escape_string($con,$_POST['showid']);
    $season = mysqli_real_escape_string($con,$_POST['seasonno']);
    for($i=1;$i<=$season;$i++)
    {
        ${"sn$i"} = mysqli_real_escape_string($con,$_POST['sn'.$i]);
    }

for($i=1;$i<=$season;$i++)
    {
    $sql = "INSERT INTO seasons(show_id,season_no) VALUES('$showid','${"sn$i"}')";
    if(mysqli_query($con,$sql))
    {
        echo '<script>alert("Added Successfully")</script>';
    }
    else{
        echo '<script>alert("NOt Added Successfully")</script>';
    }
}
    ?>
    <script>
            function search()
            {
            
                $.ajax({
                    type: 'POST',
                    url: 'm&sajax.php',
                    data: 'inpt=' + $('#inputle').val(),
                    success: function(data) {
                        $('#showme').val(data);
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
                    data: 'seasons=' + $('#season').val(),
                    success: function(data) {
                        $('#showsn').html(data);
                    },
                    error: function() {
                        console.log(response.status);
                    },
                })
            }
        </script>
    </body>
    </html>

