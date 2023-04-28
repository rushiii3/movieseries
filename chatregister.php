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
                margin-block:4rem;
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
<h1>Register yourself to chat other</h1>
<div class="alert alert-warning alert-dismissible fade show fixed-top" role="alert" id="alert">
  <strong>Warning!</strong>Inavlid Email
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<div class="container" >
    <form method="POST" action="chatregister.php">
<div class="row" style="text-align:center;">
        <div class="col-lg-12">
            <img src=" " alt="Select Your Avatar" id="profile" style="height:10rem;border-radius:50%;">
        </div>
        <div class="col-lg-12" style="margin-block:1rem;">
            <p style="font-size:1.6rem;font-weight:bold;" id="writename"></p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12" id="indesp">
            Select a profile
        </div>
        <div class="col-lg-12">
            
        <img src="https://github.com/rushiii3/Pet-venture/blob/main/3.png?raw=true" id="img1" style="height:5rem;width:5.5rem;border-radius:50%;margin:1rem;">
        <img src="https://github.com/rushiii3/Pet-venture/blob/main/1.png?raw=true" id="img2" style="height:5rem;width:5.5rem;border-radius:50%;margin:1rem;">
        <img src="https://github.com/rushiii3/Pet-venture/blob/main/6.png?raw=true" id="img3" style="height:5rem;width:5.5rem;border-radius:50%;margin:1rem;">
        <img src="https://github.com/rushiii3/Pet-venture/blob/main/2.png?raw=true" id="img4" style="height:5rem;width:5.5rem;border-radius:50%;margin:1rem;">
        <img src="https://github.com/rushiii3/Pet-venture/blob/main/4.png?raw=true" id="img5" style="height:5rem;width:5.5rem;border-radius:50%;margin:1rem;">
        <img src="https://github.com/rushiii3/Pet-venture/blob/main/5.png?raw=true" id="img6" style="height:5rem;width:5.5rem;border-radius:50%;margin:1rem;">
            <input type="text" id="imglink" name="imglink">

        </div>
    </div>
<div class="row">
        <div class="col-lg-12 text-lg-right" id="indesp">
            Enter your Name 
        </div>
        <div class="col-lg-12">
            <input type="text" id="name" name="namee" required="true">
        </div>
    </div>
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
        <div class="col-lg-12" id="indesp">
            Confirm Password
        </div>
        <div class="col-lg-12">
            <input type="password" id="cpassword"  required="true">
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
$(document).ready(function()
{
    $('#img1').on('click',function()
    {
        $('#profile').attr('src', 'https://github.com/rushiii3/Pet-venture/blob/main/3.png?raw=true');
        $('#imglink').val('https://github.com/rushiii3/Pet-venture/blob/main/3.png?raw=true');
    })

    $('#img2').on('click',function()
    {
        $('#profile').attr('src', 'https://github.com/rushiii3/Pet-venture/blob/main/1.png?raw=true');
        $('#imglink').val('https://github.com/rushiii3/Pet-venture/blob/main/1.png?raw=true');
    })

    $('#img3').on('click',function()
    {
        $('#profile').attr('src', 'https://github.com/rushiii3/Pet-venture/blob/main/6.png?raw=true');
        $('#imglink').val('https://github.com/rushiii3/Pet-venture/blob/main/6.png?raw=true');
    })

    $('#img4').on('click',function()
    {
        $('#profile').attr('src', 'https://github.com/rushiii3/Pet-venture/blob/main/2.png?raw=true');
        $('#imglink').val('https://github.com/rushiii3/Pet-venture/blob/main/2.png?raw=true');
    })

    $('#img5').on('click',function()
    {
        $('#profile').attr('src', 'https://github.com/rushiii3/Pet-venture/blob/main/4.png?raw=true');
        $('#imglink').val('https://github.com/rushiii3/Pet-venture/blob/main/4.png?raw=true');
    })

    $('#img6').on('click',function()
    {
        $('#profile').attr('src', 'https://github.com/rushiii3/Pet-venture/blob/main/5.png?raw=true');
        $('#imglink').val('https://github.com/rushiii3/Pet-venture/blob/main/5.png?raw=true');
    })

    $('#name').on('input',function(){
        $name = $('#name').val();
        document.getElementById('writename').innerHTML = $name;
    })
    $('#alert').hide();
    $("#email").change(function () {    
var inputvalues = $(this).val();    
var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;    
if(!regex.test(inputvalues)){    
    $('#alert').show();
$('#submit').hide();    
return regex.test(inputvalues);    
}
else{
    $('#submit').show(); 
    $('#alert').hide(); 
}    
});  
    $('#cpassword').on('input',function(){
        var pass = $('#password').val();
        var cpass = $('#cpassword').val();
        if(pass==cpass)
        {
            $('#submit').show(); 
        }
        else{
            $('#submit').hide(); 
        }
    })

})


</script>


</body>
<?php
$con = mysqli_connect('localhost','root','','Movie&Series');
if(mysqli_connect_errno())
{
    die("Not connected");
}
if(isset( $_POST['submit']))
{
    $namee = mysqli_real_escape_string($con,$_POST['namee']);
$imglink = mysqli_real_escape_string($con,$_POST['imglink']);
$email = mysqli_real_escape_string($con,$_POST['email']);
$password = mysqli_real_escape_string($con,$_POST['password']);
$sql="INSERT INTO chatuser(namee,imglink,email,passwordd) VALUES ('$namee','$imglink','$email','$password')";
if(mysqli_query($con,$sql))
{
    echo'<script>window.location = "https://www.youtube.com/watch?v=Qg6cXk0nhPo"</script>';
}
}
?>
</html>