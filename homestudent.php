<!DOCTYPE HTML>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="icon" type="image/x-icon" href="logo1.png">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
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
#sign:hover{
    background-color: #8EC5FC;
    background-image: linear-gradient(62deg, #8EC5FC 0%, #E0C3FC 100%);
    background-repeat: no-repeat;
    background-size: cover;
    color: black;
    font-weight: bold;
}
#sign1:hover{
    background-color: #8EC5FC;
    background-image: linear-gradient(62deg, #8EC5FC 0%, #E0C3FC 100%);
    background-repeat: no-repeat;
    background-size: cover;
    color: black;
    font-weight: bold;
}
@media (min-width: 280px){
    #div1{
    height:55vh;
}
#div2{
    height: 40vh;
    background-color:white;
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
}
#sign{
    text-decoration:none ;
    font-size: 1.4rem;
    color: white;
    padding: 1rem;
    margin-top: 3rem;
    border-radius: 20px;

}
#sign1{
    text-decoration:none ;
    font-size: 1.4rem;
    color: white;
    padding: 1rem 1.3rem 1rem 1.3rem;
    margin-top: 1rem;
    border-radius: 20px;
}
#div3{
    margin-top: 5rem;
    margin-left:5rem ;
    width: 40%;
}
#div4{
    margin-top: 1rem;
    margin-left:5rem ;
    width: 40%;
}
#wel{
    font-size: 2rem;
    font-weight: bolder;
    margin-top: 6rem;
}
#wel_name{
    font-size: 2.5rem;
    font-weight: bolder;
}
}
@media (min-width:768px){
#div1{
    height:auto;
}
#div2{
    height: 100vh;
    background-color:white;
    border-bottom-left-radius: 12550px 12550px;
}
#sign{
    text-decoration:none ;
    font-size: 1.6rem;
    color: white;
    padding: 1rem;
    margin-top: 3rem;
    border-radius: 20px;
}
#sign1{
    text-decoration:none ;
    font-size: 1.6rem;
    color: white;
    padding: 1rem 1.3rem 1rem 1.3rem;
    margin-top: 1rem;
    border-radius: 20px;
}
#wel{
    font-size: 3rem;
    font-weight: bolder;
    margin-top: 10rem;
    padding: 0.5;
}
#wel_name{
    font-size: 3.5rem;
    font-weight: bolder;
    padding: 0.5;
}

#wel_percent{
    font-size: 2rem;
    font-weight: bold;
    margin-top: 4rem;
}
#div3{
    margin-top: 0rem;
    margin-left: 0rem;
    padding: 1rem;
    background-color: #8EC5FC;
    width: 100%;
}
}
@media (min-width:1024px){
#div1{
    height:70vh;
    
}
#div2{
    height: 100vh;
    background-color:white;
    border-bottom-left-radius: 1550px 1550px;
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
}
#div3{
    margin-top: 0rem;
    margin-left: 25rem;
    background-color: #E0C3FC;
    width: auto;
    padding: 1rem;
}
#div4{
    margin-left: 1rem;
}

#wel{
    font-size: 3rem;
    font-weight: bolder;
    margin-top: 10rem;
}
#lecture-table{
font-size: 1.5rem;
padding: 0.5rem;

 

}
}


        </style>
    </head>
    <body >
    <?php
    session_start();
    ?>
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
    <a href="#" class="w3-bar-item w3-button">Link 1</a>
    <a href="#" class="w3-bar-item w3-button">Link 2</a>
    <a href="#" class="w3-bar-item w3-button">Link 3</a>

  </div>
  
        <div class="container-fluid" style="background-color: #8EC5FC;background-image: linear-gradient(62deg, #8EC5FC 0%, #E0C3FC 100%);background-repeat: no-repeat;background-size: cover;">
            <div class="row">
                <div class="col-lg-4 mx-auto col-md-5 col-sm-6 col-xs-6"  id="div1">
                    <button class="w3-button w3-xlarge" onclick="w3_open()"><span class="material-symbols-outlined">
                        menu
                        </span></button>
                    <h3 id="wel">WELCOME</h3>
                    <h1 id="wel_name"> 
                    <?php
                    
    session_start();
    echo($_SESSION['namee']);
    ?>
                    </h1>
                    <h2 id="wel_percent">YOUR OVERALL ATTENDANCE IS </h2>
                </div>
                <div class="col-lg-8 col-md-5 col-sm-6"  id="div2">
                    <div id="div3">
                        <h1><b>LECTURE ATTENDED</b></h1>
                        <table class="table table-dark table-borderless" cellspacing="3" id="lecture-table">
                         
                            <tr>
                                <td>
                                    JAVA PROGRAMMING
                                </td>
                                <td>
                                    PRESENT
                                </td>
                                <td>
                                    98%
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    OPERATING SYSTEM
                                </td>
                                <td>
                                    PRESENT
                                </td>
                                <td>
                                    98%
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    DATABASE MANAGEMNET SYSTEM
                                </td>
                                <td>
                                    ABSENT
                                </td>
                                <td>
                                    80%
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    SOFTWARE ENGINEERING
                                </td>
                                <td>
                                    PRESENT
                                </td>
                                <td>
                                    98%
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    DATA STRUCTURE
                                </td>
                                <td>
                                    PRESENT
                                </td>
                                <td>
                                    98%
                                </td>
                            </tr>
                        </table>
                    </div>
                    
                </div>
            </div>
        </div>
       

      

    
</body>
<html>