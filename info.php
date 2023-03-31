<!DOCTYPE HTML>
<html lang="en">
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
        <title>Home</title>
        <meta charset="utf-8">
        <style>
            .w3-bar-item:hover{
    background-color: #8EC5FC;
    background-image: linear-gradient(62deg, #8EC5FC 0%, #E0C3FC 100%);
    background-repeat: no-repeat;
    background-size: cover;
}
.w3-xlarge:hover{
    background-color: white;
}
@media (min-width: 280px){
    #div1{
    height:auto;
}
#div2{
    height: auto;
    background-color:white;
    border-top-left-radius: 250px 250px;
    border-bottom-left-radius:0px 0px;
}
#h3{
    font-size: 2rem;
    font-weight: bold;
    color: black;
    margin-top: 7rem;
}
#h1{
    font-size: 2.5rem;
    font-weight: bolder;
    color: black;
    margin-bottom:7rem;
    margin-top: 7rem;
}
#div3{
    margin-top: 5rem;
    margin-left:10rem ;
    width: 40%;
}
#div4{
    margin-top: 1rem;
    margin-left:10rem ;
    width: 40%;
}
#img{
    height: 8rem;
    width: 8rem;
}
#sp{
    font-size: 2rem;
    font-weight: 500;
}
#p{
    font-size: 2rem;
    padding: 0.5rem;
    text-align: center;
    font-weight: bold;
}
td{
    font-size:1rem;
}
#hed{
    text-align:right;
    font-weight:bold;
}
table{
    margin-left:2rem;
    margin-right:auto;
    margin-top:7rem;
    margin-bottom:6rem;
}

}
@media (min-width:768px){
#div1{
    height:auto;
    
    
}
#div2{
    height: auto;
    background-color:white;
    border-bottom-left-radius: 350px 350px;
    border-top-left-radius: 350px 350px;
}
#img{
    height: 10rem;
    width: 10rem;
}
#sp{
    font-size: 2.5rem;
    font-weight: 500;
}
#p{
    font-size: 2.5rem;
    padding: 0.5rem;
    text-align: center;
    font-weight:bold;
}
td{
    font-size:1.4rem;
}
#hed{
    text-align:right;
    font-weight:bold;
}
table{
    margin-left:auto;
    margin-right:auto;
    margin-top:4rem;
    margin-bottom:4rem;
}

}
@media (min-width:1024px){
#div1{
    height:70vh;
    
}
#div2{
    height: 100vh;
    background-color:white;
    border-bottom-left-radius: 350px 350px;
    border-top-left-radius: 350px 350px;
}
#h3{
    font-size: 3.5rem;
    font-weight: bold;
    color: black;
    margin-top: 17rem;
    margin-left: 1rem;
}
#h1{
    font-size: 4rem;
    font-weight: bolder;
    color: black;
    margin-left: 1rem;
    margin-top: 17rem;
}
#div3{
    margin-top: 20rem;
    margin-left: 15rem;
}
#div4{
    margin-left: 15rem;
}

#img{
    height: 11rem;
    width: 11rem;
}
#sp{
    font-size: 3rem;
    font-weight: 500;
}
#p{
    font-size: 3rem;
    padding: 0.5rem;
    text-align: center;
    font-weight: bold;
}
td{
    font-size:2rem;
}
#hed{
    text-align:right;
    font-weight:bold;
}
table{
    margin-left:auto;
    margin-right:auto;
    margin-top:6rem;
    margin-bottom:6rem;
}
}
        </style>
    </head>
    <body >
        <script>
            function w3_open() {
              document.getElementById("mySidebar").style.width = "100%";
              document.getElementById("mySidebar").style.display = "block";
            }
            
            function w3_close() {
              document.getElementById("mySidebar").style.display = "none";
            }
            </script>
<!-- Sidebar -->
<div class="w3-sidebar w3-bar-block" style="display:none" id="mySidebar">
    <button onclick="w3_close()" class="w3-bar-item w3-button w3-large">Close &times;</button>
    <a href="index.html" class="w3-bar-item w3-button">Home</a>
    <a href="#" class="w3-bar-item w3-button">Link 2</a>
    <a href="#" class="w3-bar-item w3-button">Link 3</a>
  </div>
  <?php
     $con=mysqli_connect("localhost","root","","class");
     if(mysqli_connect_errno()){
     die("Failed to connect");
     }
     else{
        echo("conneted");
     }


?>
  
        <div class="container-fluid" style="background-color: #8EC5FC;background-image: linear-gradient(62deg, #8EC5FC 0%, #E0C3FC 100%);background-repeat: no-repeat;background-size: cover;">
            <div class="row">
                <div class="col-lg-3 mx-auto col-md-3 col-sm-6 col-xs-6"  id="div1">
                    <button class="w3-button w3-xlarge" onclick="w3_open()"><span class="material-symbols-outlined">
                        menu
                        </span></button>
                    <h1 id="h1">YOUR<br> INFO</h1>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-6"  id="div2">
                    <div>
                        <table cellpadding="10px">
                            <tr>
                                <td id="hed">Control ID </td>
                                <td>:</td>
                                <td>20217490</td>    
                            </tr>
                            <tr>
                                <td id="hed">Name </td>
                                <td>:</td>
                                <td>Hrushikesh Sanjay Shinde</td>    
                            </tr>
                            <tr>
                                <td id="hed">Phone  </td>
                                <td>:</td>
                                <td>8374839202</td>    
                            </tr>
                            <tr>
                                <td id="hed">Email </td>
                                <td>:</td>
                                <td>hrushishinde343@gmail.com</td>    
                            </tr>
                            <tr>
                                <td id="hed">Department </td>
                                <td>:</td>
                                <td>The Bachelor of Science in Biotechnology </td>    
                            </tr>
                            <tr>
                                <td id="hed">Division </td>
                                <td>:</td>
                                <td>A</td>    
                            </tr>
                            <tr>
                                <td id="hed">Roll no </td>
                                <td>:</td>
                                <td>3944A028</td>    
                            </tr>
                        </table>
                        
                    </div>
                   
                    
                </div>
                <div class="col">

                </div>
            </div>
        </div>
       

        

    
</body>
<html>