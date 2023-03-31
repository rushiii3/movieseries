<!DOCTYPE HTML>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="icon" type="image/x-icon" href="logo1.png">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="https://vazecollege.net/PATS/imgs/1611814068005.jpg">
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
        #regi:hover{
            background: linear-gradient(-135deg, #71b7e6, #9b59b6);
            color:white;

        }
        @media (min-width: 280px){
            label{
            font-weight:600;
            font-size:1.3rem;
            padding:0.5rem;

        }
        #rg{
            font-size:2.5rem;
            padding-right:0.5rem;
            font-weight:bold;
        }
        #row1{
            width:85%;
        }
        #regi{
            font-size:1.7rem;
            background-color:rgb(	211, 211, 211);
            font-weight:500;
            color:black;
        }
        #ct1{
            height:100vh;
        }
        }
        @media (min-width:576px){
            label{
            font-weight:600;
            font-size:1.6rem;
            padding:0.5rem;

        }
        #rg{
            font-size:2.5rem;
            padding:1rem;
            font-weight:bold;
        }
        #row1{
            width:60%;
        }
        #regi{
            font-size:1.6rem;
            background-color:rgb(	211, 211, 211);
            font-weight:500;
            color:black;
        }
        #ct1{
            height:100vh;
        }
        }
        @media (min-width:768px){
            label{
            font-weight:600;
            font-size:1.5rem;
            padding:0.2rem;
        }
        #rg{
            font-size:2rem;
            padding:1rem;
            font-weight:bolder;
            
        }
        #row1{
            width:40%;
        }
        #regi{
            font-size:1.5rem;
            background-color:rgb(	211, 211, 211);
            font-weight:500;
            color:black;
        }
        #ct1{
            height:100vh;
        }
        }



    </style>
    
    
    </head>
    <body style="background-color: #8EC5FC;background-image: linear-gradient(62deg, #8EC5FC 0%, #E0C3FC 100%);background-repeat: no-repeat;background-size: cover;">
    <script>
            function w3_open() {
              document.getElementById("mySidebar").style.width = "100%";
              document.getElementById("mySidebar").style.display = "block";
            }
            
            function w3_close() {
              document.getElementById("mySidebar").style.display = "none";
            }
        </script>
    <div class="w3-sidebar w3-bar-block" style="display:none" id="mySidebar">
    <button onclick="w3_close()" class="w3-bar-item w3-button w3-large">Close &times;</button>
    <a href="index.html" class="w3-bar-item w3-button">HOME</a>
    <a href="#" class="w3-bar-item w3-button">Link 2</a>
    <a href="#" class="w3-bar-item w3-button">Link 3</a>
  </div>
  <button class="w3-button w3-xlarge" onclick="w3_open()"><span class="material-symbols-outlined">
                        menu
                        </span></button>
    <div class="conatiner" style="background-color: #8EC5FC;background-image: linear-gradient(62deg, #8EC5FC 0%, #E0C3FC 100%);background-repeat: no-repeat;background-size: cover; padding-top:10rem;" id="ct1">
        <div class="row mx-auto p-4 " style="background-color:white;border-radius:20px;box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;" id="row1">
            <div class="col-lg-7 col-md-11 col-sm-11 ">
                <h1 id="rg">LOGIN</h1>
            </div>
            <div class="col-lg-11 col-md-11 p-2">
                <label for="controlid">CONTROL ID</label><br>
                <input type="text" placeholder="Enter your Control ID" style="width:100%;padding:0.5rem;font-size:1rem;border-radius:10px;border:1px solid black">
            </div>
            <div class="col-lg-11 col-md-11 p-2">
                <label for="password">PASSWORD</label><br>
                <input type="password" placeholder="Enter your password" style="width:100%;padding:0.5rem;font-size:1rem;border-radius:10px;border:1px solid black">
            </div>
           
           
            <div class="col-lg-6 col-md-11 p-2 mx-auto " style="margin-top:1rem;">
                
                <input type="submit" value="Login " id="regi" style="width:100%;padding:0.5rem;;border-radius:10px;border:1px solid black;margin-left:auto;margin-right:auto;">
            </div>
        </div>
    </div>

    </body>
    </html>