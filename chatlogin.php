<!DOCTYPE html>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <style>
            body{
                background: #41295a;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #2F0743, #41295a);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #2F0743, #41295a); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
color:white;
            }
            h1{
                text-align:center;
                margin-top:8rem;
            }
            input{
                width:100%;
                height:35px;
                padding:0.5rem;
                border-radius:10px;
            }
            .row{
                margin-block:1.5rem;
                margin-inline:2rem;
            }
            #indesp{
                font-weight:bold;
            }
            .col-lg-12{
                padding:0.3rem;
            }
            @media (min-width: 992px) {
                .container{
                    width:40%;;
                }
            }
            

            </style>
    </head>
<body>
<h1>Login</h1>
<div class="alert alert-warning alert-dismissible fade show fixed-top" role="alert" id="alert">
  <strong>Warning!</strong>
  Wrong Email or Password
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<div class="container" >
    <form method="POST" action="chatlogin.php">


    <div class="row">
        <div class="col-lg-12" id="indesp">
            Enter your Email
        </div>
        <div class="col-lg-12">
            <input type="text" id="email" name="email" required="true">
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12" id="indesp">
            Enter Password
        </div>
        <div class="col-lg-12">
            <input type="password" id="password" name="password" required="true">
        </div>
    </div>

   
    <div class="row">
        <div class="col-lg-12" style="text-align:center;">
            <input type="submit" id="submit" name="submit" style="width:10rem;height:40px;padding:0.5rem;border-radius:10px;background-color:white;color:black;font-weight:bold;">
        </div>
    </div>
</div>


        </form>
        <script>
                    $('#alert').hide();
                    </script>
</body>
<?php
session_start();
$con = mysqli_connect('localhost','root','','Movie&Series');
if(mysqli_connect_errno())
{
    die("Not connected");
}
if(isset( $_POST['submit']))
{
$email = mysqli_real_escape_string($con,$_POST['email']);
$password = mysqli_real_escape_string($con,$_POST['password']);
$sql="SELECT * FROM chatuser where email = '$email'";
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0)
{
    while($row=mysqli_fetch_assoc($result))
    {
        $pass = $row['passwordd'];
        $em = $row['uidd'];
        if($password==$pass)
        {
            
            
                    echo'<script>window.location = "https://www.youtube.com/watch?v=Qg6cXk0nhPo"</script>';
                    $_SESSION['user'] = $em;
            
        }
        else{
            ?>
                <script>
                    $('#alert').show();
                    </script>
            <?php
        }
    }
}
}
?>
</html>