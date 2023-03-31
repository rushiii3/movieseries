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
     
}
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

            <div class="col-lg-3  col-sm-7 mx-auto " style="margin-top: 10rem;margin-bottom: 10rem;">
                <p style="font-weight:bold;font-size:5rem">
                    Login
                </p>
                <form  action="index.php" method="POST">
                    <div class="mt-3 mb-3">
                        <label for="email" id="label1"  class="form-label">Username :</label>
                        <input type="text" class="form-control"  id="email" placeholder="Enter your username" name="email">
                    </div>
                    <div class="mt-3 mb-3">
                    <label for="password" id="label2"  class="form-label">Password :</label>
                    <input type="password" class="form-control"  id="password" placeholder="Enter your Password" name="password">
                    </div>
                    <div class="mt-5 mb-3 text-center">
                    <button type="submit" class="btn btn-primary p-1" style="" id="sub">Submit</button>
                    </div>
                    <?php  
                       $host = "localhost";  
                       $user = "id19773375_web";  
                       $password = "Thisphpex@mple1";  
                       $db_name = "id19773375_webhost";  
                          
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
                            header("Location: https://www.youtube.com/");
                            
                                echo "<script> location.href='home.html'; </script>";
                                    exit;


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