<!DOCTYPE html>
<html>
   <head>
    <title>
        Movies00
    </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        
        <link rel="icon" type="image/x-icon" href="logo1.png">
   
   <style>
    *{
        padding: 0%;
        margin: 0%;
    }
    #button{
    display: none;
    }
    #imgw{
        height: 20rem;
        width:100%;
    }
    #aa{
        text-decoration: none;    
        color: white;
    }

    #aa:hover{
        background-color: rgba(255, 255, 255, 0.3); 
        border-radius: 10px;
        color: black;
    }
    
    
    #cool:hover{
        background-color: rgba(255, 255, 255, 0.7); 
        border-radius: 10px;
        color: black;
    }

    
    @media (min-width:576px){
        
        #tt{
        color: white;
        font-size: 3rem;
        padding:1rem 2rem 1rem 2rem;
        border-radius: 10px;
        text-decoration: none;
    }
    
    #tt:hover{
    background-color: white;
        color:black;
        border-radius: 10px;
    }
    #tm{
        font-size: 7rem;
        text-align: center;
        padding: 1rem;
    }
    #sg{
        font-size: 4rem;
        color: white;
    } 
    #inp{
        height: 4.4rem;
        padding-left: 2rem;
        padding-right: 2rem;
        border-radius: 10px;
        width: 40rem;
        font-size: 2.5rem;
    }
    #contact-submit{
        height: 4rem;
        width: 16rem;
        border-radius: 20px;
        font-size: 2rem;
    }
    #cool{
        border: 1px solid;
        border-color:white; 
        border-radius: 10px;
        
    
    }
    #sm{
        color: white;
        font-size: 1.8rem;
        text-align: center;
        font-weight: bold;
    }
    
  }
  

    @media (min-width: 992px){
        
        #tt{
        color: white;
        font-size: 2rem;
        padding: 1rem;
        text-decoration: none;
        }
    #tt:hover{
    background-color: white;
        color:black;
        border-radius: 5px;
        
  }
  #ln{
    padding-left: 1rem;
  }
  #tm{
        font-size: 5rem;
        text-align: center;
        padding: 1rem;
    }
    #sg{
        font-size: 2rem;
        color: white;
    }
    #inp{
        height: 2.4rem;
        padding-left: 1rem;
        padding-right: 1rem;
        border-radius: 10px;
        width: 25rem;
        font-size: 1rem;
    }
    #contact-submit{
        height: 3rem;
        width: 14rem;
        border-radius: 20px;
        font-size: 1.5rem;
    }
    #cool{
        border: 1px solid;
        border-color:white; 
        margin-top:3rem; 
        
    }
    #sm{
        color: white;
        font-size: 2rem;
        text-align: center;
        font-weight: bold;
    }
    }
   </style>
   
    </head>
    
   <body>
   <div style="background-image:url(https://i.pinimg.com/originals/fa/c0/5c/fac05c110c458e9bab3a3248bfb3c376.jpg);background-size: cover ;width: 100%;background-attachment: fixed;"  >


        <div class="container-fluid"> 
            <div class="row" >
                <div class="col-xs-8  col-lg-7  p-1 mt-3 text-sm-center text-lg-start">
                    <span style="color:black;font-size: 3rem;color:white ;" id="ln">
                        Movies00
                    </span>
                </div>
                <div class="col-xs-10 col-lg-3   mt-4 text-sm-end text-lg-start " style="font-size: 1.5rem;" >
                    <nav class="navbar navbar-expand-sm ">
                        <div class="container " >
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link " id="tt" href="index.html">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " id="tt" href="movie.html">Movies</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " id="tt" href="series.html">Series</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " id="tt" href="serach1.html">Search</a>
                                </li>
                            </ul>
                        </div>
                        </nav>
                </div>
            </div>
        
        </div>
       </div>
        
<h1 id="tm">
    Trending
</h1>
<?php
    $con = mysqli_connect("localhost","root","","class");
    if(mysqli_connect_errno())
    {
        die("Failed to connect");
    }
    //session_start();
    date_default_timezone_set('Asia/Kolkata');
                    $dt1 = date('Y-m-d');
                    $dt21 = date('2019-01-01');               
?>

       <div class="container-fluid p-5" style="background-image:url(https://c4.wallpaperflare.com/wallpaper/707/220/899/gradient-blue-pink-abstract-art-wallpaper-preview.jpg) ;background-size:cover;background-attachment:fixed;">
            <div class="row mx-auto" id="rn">
               
                


                <?php

                    $sql1=" SELECT movie_id,poster_id,title,category FROM movies WHERE release_date BETWEEN '$dt21' AND '$dt1' UNION SELECT show_id,poster_id,title,category FROM shows WHERE enddate BETWEEN '$dt21' AND '$dt1' ";
                    $result = mysqli_query($con,$sql1);
                    if(mysqli_num_rows($result)>0)
                    {
                        while($row=mysqli_fetch_assoc($result))
                        {   
                            $category = $row['category'];
                            //echo($row['poster_id']);
                            $id = $row['movie_id'];
                            //echo($row['title']);
                            $pid =  $row['poster_id'];
                            $sql2=" SELECT * from poster WHERE poster_id = '$pid' ";
                            $result2 = mysqli_query($con,$sql2);
                            if(mysqli_num_rows($result2)>0)
                            {
                                while($row1 = mysqli_fetch_assoc($result2))
                                {
                                    ?>
                                    <div class="col-lg-3 p-3 m-2 col-sm-5 mx-lg-5  text-center mx-auto" id="cool" >
                                <a href="<?php 
                                if($category=='m')
                                {
                                    echo("movielay.php?id=$id");
                                }
                                else{
                                    echo("serrieslay.php?id=$id");
                                }
                                ?>" id="aa">
                                    <img src="<?php  echo($row1['img_poster']);  ?>" class="img-thumbnail" id="imgw" >
                                    <h1 style="padding: 1rem;" >
                                     <?php echo($row['title']); ?>
                                    </h1>
                                </a>
                                </div>
                                    <?php
                                }
                            }
                        }
                    }
                ?>




                   

               
                <!----
                <div class="col-lg-3 p-3 m-2 col-sm-5 mx-lg-5  text-center mx-auto" id="cool">
                    <a href="runsweetheartrun.html" id="aa">
                        <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcQtdn2gP64W_95rE7yLj8AztcQxACLKsdAXXWcuYWlAsc8d0FFv" class="img-thumbnail" id="imgw" >
                            <h1 style="padding: 1rem;">
                                Run Sweetheart Run
                            </h1>
                    </a>
                </div>
                <div class="col-lg-3 p-3 m-2 col-sm-5 mx-lg-5  text-center mx-auto" id="cool">
                    <a href="EnolaHolmes2.html" id="aa">
                        <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcQ6LbxemloEsyPQXRWvOUwj9fexSbztvNExqt38KoMZu5Bv2Zf7" class="img-thumbnail" id="imgw" >
                            <h1 style="padding: 1rem;">
                               Enola Holmes 2
                            </h1>
                    </a>
                </div>
                <div class="col-lg-3 p-3 m-2 col-sm-5 mx-lg-5 text-center mx-auto" id="cool">
                    <a href="AllQuietontheWesternFront.html" id="aa">
                        <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcTHrQuF9sH0zTeKhScEcMIFa3fm_mICg_a47IGXmdqJ0rKv7UM-" class="img-thumbnail" id="imgw" >
                            <h1 style="padding: 1rem;">
                                All Quiet on the Western Front
                            </h1>
                    </a>
                </div>

                <div class="col-lg-3 p-3 m-2 col-sm-5 mx-lg-5 text-center mx-auto" id="cool">
                    <a href="ChainsawMan.php" id="aa">
                        <img src="https://www.animesenpai.net/wp-content/uploads/2022/07/20220729_142507_compress86-683x1024.jpg" class="img-thumbnail" id="imgw" >
                            <h1 style="padding: 1rem;">
                                Chainsaw Man
                            </h1>
                    </a>
                </div>
                
                <div class="col-lg-3 p-3 m-2 col-sm-5 mx-lg-5 text-center mx-auto" id="cool">
                    <a href="aftereverhappy.html" id="aa">
                        <img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcS3pYk0JZT8QQ31ib0QiB-mfHfscyPPlYf8m-UY-cSj0W-Badhn" class="img-thumbnail" id="imgw" >
                            <h1 style="padding: 1rem;">
                                After Ever Happy
                            </h1>
                    </a>
                </div>
                <div class="col-lg-3 p-3 m-2 col-sm-5 mx-lg-5  text-center mx-auto" id="cool" >
                    <a href="dark.html" id="aa">
                        <img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcS15WXzJnh5FKZcjV7jwxj57HtPiu-mJyMBPJL7E2rPEFbLRPjA" class="img-thumbnail" id="imgw" >
                        <h1 style="padding: 1rem;" >
                            Dark

                        </h1>
                    </a>

                </div>
                <div class="col-lg-3 p-3 m-2 col-sm-5 mx-lg-5  text-center mx-auto" id="cool">
                    <a href="FourMoreShotsPlease.html" id="aa">
                        <img src="https://pbs.twimg.com/media/FecmqsaacAMtnpN?format=jpg&name=900x900" class="img-thumbnail" id="imgw" >
                            <h1 style="padding: 1rem;">
                                Four More Shots Please!
                            </h1>
                    </a>
                </div>
                <div class="col-lg-3 p-3 m-2 col-sm-5 mx-lg-5  text-center mx-auto" id="cool">
                    <a href="NeverHaveIEver.html" id="aa">
                        <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRVAopbyzvmWfC_9dRYA-UmhY1aqOnKJVf9rVz2gudPghYFUvQq" class="img-thumbnail" id="imgw" >
                            <h1 style="padding: 1rem;">
                                Never Have I Ever
                            </h1>
                    </a>
                </div>
                <div class="col-lg-3 p-3 m-2 col-sm-5 mx-lg-5 text-center mx-auto" id="cool">
                    <a href="blackadam.html" id="aa">
                        <img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcTNSOjcSmrXYIZ517jTKmCDxBwIJU4_ojFweUDLI1Dssn2UfTsx" class="img-thumbnail" id="imgw" >
                            <h1 style="padding: 1rem;">
                                Black Adam
                            </h1>
                    </a>
                </div>

                <div class="col-lg-3 p-3 m-2 col-sm-5 mx-lg-5 text-center mx-auto" id="cool">
                    <a href="laalsinghchaddha.html" id="aa">
                        <img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcTyqdWwFumL0kCVFWTiQcKILzlSjRj9WpGH3uyNTyVSU5YTQzeL" class="img-thumbnail" id="imgw" >
                            <h1 style="padding: 1rem;">
                                Laal Singh Chaddha
                            </h1>
                    </a>
                </div>
                
                <div class="col-lg-3 p-3 m-2 col-sm-5 mx-lg-5 text-center mx-auto" id="cool">
                    <a href="sitaramam.html" id="aa">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRcTR1ecvwQ8cKMPIPPrJBOW77h-Bk0yVdF2f_n0W5BAj-BB622" class="img-thumbnail" id="imgw" >
                            <h1 style="padding: 1rem;">
                                Sita Ramam
                            </h1>
                    </a>
                </div>

--->




            </div>
       </div>
   


    
            
       
       
                




       <div class="container-fluid p-3" style="background-color: black;border-top: 0.4rem solid;border-color: white;"">
            <div class="row p-4 mx-auto" >
                <div class="col-lg-4 text-center mx-auto col-sm-10">
                    <span>
                        <a href="suggestbox.html" id="tt" > Request Us </a>
                    </span>
                </div>
                <div class="col-lg-4  text-center mx-auto col-sm-10">
                    <span>
                        <a href="contactus.html" id="tt" > Contact Us </a>
                    </span>
                </div>
                <div class="col-lg-4 text-center mx-auto col-sm-10">
                    <span>
                        <a href="aboutus.html" id="tt" > About Us </a>
                    </span>
                </div>
            </div>
            <div class="row p-4">
                <div class="col">
                    <p id="sm">
                        Copyright © 2022. Created by ❤️ Movies00 ❤️
                    </p>
                </div>
            </div>
       </div>

       <script src="./removeBanner.js"></script>
       
   </body>
</html>