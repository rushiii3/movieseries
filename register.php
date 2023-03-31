<!DOCTYPE html>
<html>
   <head>
    <title>
        Anime
    </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="icon" type="image/x-icon" href="logo1.png">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        
        
        <style>
            

@media (min-width:576px){
    #label1{
        font-size: 4rem;
    }
    #label2{
        font-size: 4rem;
    }
    #password{
        height:3.5rem;
        font-size:2rem;
        border-radius:10px;
    }
    #email{
        height:3.5rem;
        font-size:2rem;
        border-radius:10px;
    }
    #sub{
        height:4rem;
        font-size:2rem;
        border-radius:20px;
        width:40%
    }
}
@media (min-width: 992px){
    #label1{
        font-size: 2rem;
    }
    #label2{
        font-size: 2rem;
    }
    #password{
        height:2.5rem;
        font-size:1rem;
        border-radius:10px;
    }
    #email{
        height:2.5rem;
        font-size:1rem;
        border-radius:10px;
    }
    #sub{
        height:3rem;
        font-size:1.5rem;
        border-radius:20px;
     
}}
        </style>
   </head>
   <body style="background-color:burlywood ;">

    <div style="background-image:url(img1.png);background-size: cover ;width: 100%;"  >


        <div class="container" > 
            <div class="row">
                <div class="col-xs-8  col-lg-11  p-1 mt-3 text-sm-center text-lg-center">
                    <span style="color:black;font-size: 5rem;color:white ;">
                        Anime Flix
                    </span>
                </div>
            </div>
        </div>
    </div>
    


      <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3  col-sm-10 " style="margin-top: 1rem;margin-left: -1rem;">
                <img src="img502.PNG" class="img-fluid" style="height: 39rem">
            
            </div>

            <div class="col-lg-3  col-sm-8 mx-auto " style="margin-top: 10rem;margin-bottom: 10rem;">
                <p style="font-size: 3rem;font-weight:bold;">
                    Register
                </p>
                <form  action="register.php" method="POST">
                    <div class="mt-3 mb-3">
                        <label for="email" class="form-label">Username :</label>
                        <input type="text" class="form-control" id="email" required placeholder="Enter your username" name="email">
                    </div>
                    <div class="mt-3 mb-3">
                    <label for="password" class="form-label">Password :</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter your Password" name="password">
                    </div>
                    <label for="cpassword" class="form-label">Confirm Password :</label>
                    <input type="password" class="form-control" id="cpassword" placeholder="Enter your Password" name="cpassword">
                    </div>
                    <div class="mt-3 mb-3">
                    <button type="submit" onclick="clk()" name="reg-set" class="btn btn-primary">Submit</button>
                    </div>
                    </form>
                
                
                </div>
                




                <?php 
                
                
                $con = mysqli_connect("localhost", "root", "", "anime");  
                       if(mysqli_connect_errno()) {  
                           die("Failed to connect with MySQL: ". mysqli_connect_error());  
                       } 
                if (isset($_POST['reg-set']))
                {

                    $username=mysqli_real_escape_string($con,$_REQUEST['email']);
                    $password1= mysqli_real_escape_string($con,$_REQUEST['password']);  
                    $password2= mysqli_real_escape_string($con,$_REQUEST['cpassword']);  
                    if($password2!=$password1 )
                    {
                        echo "<script> alert('Password not matched') </script>";
                    }
                    
                    else
                    {
                        $sql = "INSERT INTO login (user,pass) VALUES ('$username','$password1')";
                        
                        if(mysqli_query($con, $sql)){
                            echo "<script> alert('Register Succesfully') </script>";
                            echo "<script> location.href='aa.html'; </script>";
                           
    
                        } else{
                            echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
                        }

                }
                
            }
                            
    
                    mysqli_close($con);
                  
                        
            ?>


    
                <div class="col-lg-4  col-sm-12 text-lg-end text-sm-end" style="margin-top: 1rem;">
                    <img src="img53.PNG"  style="height: 39rem;width: 90%;transform: rotateY(180deg);">
                
                </div>
            </div>
          </div>
    
          
        <img src="https://t4.ftcdn.net/jpg/04/24/64/41/360_F_424644185_IV0VX4ZUz9IwUtPbW1vUGjTsjnC3JOmR.jpg" class="img-fluid" style="width:90%">
        <img src="https://t4.ftcdn.net/jpg/03/03/49/65/360_F_303496589_nT51208OjruFoENDjbrF5DPmWjkq1aAf.jpg" class="img-fluid" style="width:90%">
    </body>
    
    </html>