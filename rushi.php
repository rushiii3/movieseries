<!DOCTYPE html>
<html>
   <head>
    <title>
        Anime
    </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="icon" type="image/x-icon" href="logo1.png">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
                    Login
                </p>
                <form  action="rushi.php" method="POST">
                    <div class="mt-3 mb-3">
                        <label for="email" class="form-label">Username :</label>
                        <input type="text" class="form-control" id="email" placeholder="Enter your username" name="email">
                    </div>
                    <div class="mt-3 mb-3">
                    <label for="password" class="form-label">Password :</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter your Password" name="password">
                    </div>
                    <div class="mt-3 mb-3">
                    <button type="submit" onclick="clk()" class="btn btn-primary">Submit</button>
                    </div>
                    <?php  
                       $host = "localhost";  
                       $user = "root";  
                       $password = '';  
                       $db_name = "anime";  
                         
                       $con = mysqli_connect($host, $user, $password, $db_name);  
                       if(mysqli_connect_errno()) {  
                           die("Failed to connect with MySQL: ". mysqli_connect_error());  
                       }  
                        $username=$_POST['email'];
                        $passwords=$_POST['password'];
                        $sql = "select * from login where user='$username' AND pass='$passwords'";
                        $result = mysqli_query($con, $sql);   
                        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                        $count = mysqli_num_rows($result);  

                        if($count==1)
                        {
                            $msg="Loginn Succesful";
                            echo($msg);
                            header('Location: home.html');

                        }
                        else{
                            $msg="Login Failed";
                            echo($msg);
                        }

                    ?>
                    
                </form>
                
                
            </div>
    

            <div class="col-lg-4  col-sm-12 text-lg-end text-sm-end" style="margin-top: 1rem;">
                <img src="img53.PNG"  style="height: 39rem;width: 90%;transform: rotateY(180deg);">
            
            </div>
        </div>
      </div>

      
    
   </body>

</html>