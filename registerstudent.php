<!DOCTYPE HTML>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="icon" type="image/x-icon" href="logo1.png">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="https://vazecollege.net/PATS/imgs/1611814068005.jpg">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
        #regi:hover{
            background: linear-gradient(-135deg, #71b7e6, #9b59b6);
            color:white;

        }
        @media (min-width: 280px){
            label{
            font-weight:600;
            font-size:1rem;
            padding:0.5rem;

        }
        #rg{
            font-size:1.5rem;
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
            width:60%;
        }
        #regi{
            font-size:1.5rem;
            background-color:rgb(	211, 211, 211);
            font-weight:500;
            color:black;
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
    <div class="conatiner-fluid  " style="margin-top:10rem;margin-bottom:10rem;">
    
 
        <div class="row mx-auto p-4 " style="background-color:white;border-radius:20px;box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;" id="row1">
            <!--Heading-->
            <div class="col-lg-7 col-md-11 col-sm-11 ">
                <h1 id="rg">REGISTRATION</h1>
            </div>
            <!--input control id-->
            <div class="col-lg-6 col-md-11 p-2">
                <label for="controlid">CONTROL ID</label><br>
                <input type="text" id="ress" placeholder="Enter your Control ID" style="width:100%;padding:0.5rem;font-size:1rem;border-radius:10px;border:1px solid black">
            </div>
            <!--input full name-->
            <div class="col-lg-6 col-md-11 p-2">
                <label for="name">FULL NAME</label><br>
                <input type="text" placeholder="Enter your full name" id="fname" style="width:100%;padding:0.5rem;font-size:1rem;border-radius:10px;border:1px solid black;">
            </div>
            <!--input email-->
            <div class="col-lg-6 col-md-11 p-2">
                <label for="email">EMAIL</label><br>
                <input type="text" placeholder="Enter your email" id="email" oninput="hel3()" style="width:100%;padding:0.5rem;font-size:1rem;border-radius:10px;border:1px solid black">
                <div id="disp3" style="padding:0.2rem;font-size:1rem;">

</div>
            </div>
            <!--input phone-->
            <div class="col-lg-6 col-md-11 p-2">
                <label for="phonenumber">PHONE NUMBER</label><br>
                <input type="text" placeholder="Enter your phone number" oninput="hel2()"  name="phone" id="phone" style="width:100%;padding:0.5rem;font-size:1rem;border-radius:10px;border:1px solid black;" maxlength="10">
                <div id="disp2" style="padding:0.2rem;font-size:1rem;">

</div>
            </div>
            <!--input passsword-->
            <div class="col-lg-6 col-md-11 p-2">
                <label for="password">PASSWORD</label><br>
                <input type="password" placeholder="Enter your password" oninput="hel1()" id="password" name="password" style="width:100%;padding:0.5rem;font-size:1rem;border-radius:10px;border:1px solid black">
                <div id="disp1" style="padding:0.2rem;font-size:1rem;">

        </div>
            </div>
            <!--input confirm password-->
            <div class="col-lg-6 col-md-11 p-2">
                <label for="confirmpassword">CONFIRM PASSWORD</label><br>
                <input type="password" placeholder="Enter your confirm password" oninput="hel()" id="password2" name="cpassword" style="width:100%;padding:0.5rem;font-size:1rem;border-radius:10px;border:1px solid black;">
                <div id="disp" style="padding:0.2rem;font-size:1rem;">

        </div>
            </div>
            <!--input roll number-->
            <div class="col-lg-6 col-md-11 p-2">
                <label for="rollno">ROLL NUMBER</label><br>
                <input type="text" placeholder="Enter your roll number" style="width:100%;padding:0.5rem;font-size:1rem;border-radius:10px;border:1px solid black">
            </div>
            <!--select department-->
            <div class="col-lg-6 col-md-11 p-2">
                <label for="department">DEPARTMENT</label><br>
                <select style="width:100%;padding:0.5rem;font-size:1rem;border-radius:10px;border:1px solid black;" id="department">
                    <option>SELECT DEPARTMENT</option>
                    <?php 
                    $con=mysqli_connect("localhost","root","","anime");
                    if(mysqli_connect_errno($con)){
                        die("not connected");
                    }
                    $sql1="SELECT * FROM countries";
                    $result=mysqli_query($con,$sql1);
                    if(mysqli_num_rows($result)>0){
                        while($row=mysqli_fetch_assoc($result)){
                            
                            echo '<option value="'.$row['country_id'].'">'.$row['country_name'].'</option>'; 
                            
                        }
                    }
                    ?>
                </select>
            </div>
            <!--select year-->
            <div class="col-lg-6 col-md-11 p-2">
                <label for="year">YEAR</label><br>
                <select id="state" name="course" style="width:100%;padding:0.5rem;font-size:1rem;border-radius:10px;border:1px solid black;">
                    <option value="">Select Department first</option>
                </select>

            </div>
            <!--select division-->
            <div class="col-lg-6 col-md-11 p-2">
                <label for="department">DIVISION</label><br>
                
                <select id="city" style="width:100%;padding:0.5rem;font-size:1rem;border-radius:10px;border:1px solid black;">
                    <option value="">Select course first</option>
                </select>

               
            </div>
            <!--select submit-->
            <div class="col-lg-6 col-md-11 p-2 mx-auto " style="margin-top:1rem;">
                
                <input type="submit" value="Register " onclick="register()" id="regi" style="width:100%;padding:0.5rem;;border-radius:10px;border:1px solid black;margin-left:auto;margin-right:auto;">
            </div>

            <div class="col-lg-11 col-md-11 p-2">
                <label>Already have a account ? <a href="#login">Login</a></label>
            </div>

        </div>
    </div>
              

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    
function hel(){
    var pass1=document.getElementById("password").value;
    var pass2=document.getElementById("password2").value;
    if(pass1==pass2){
        document.getElementById('disp').innerHTML = "PASSWORD MATCHED";
        document.getElementById("password2").style.borderColor = "green";
        document.getElementById("disp").style.color = "green";
    }   
    else{
        document.getElementById('disp').innerHTML = "PASSWORD NOT MATCHED";
        document.getElementById("password2").style.borderColor = "red";
        document.getElementById("disp").style.color = "#ff0000";
    }
}
function hel1(){
    var pass1=document.getElementById("password").value;
    if(pass1.length>=8){
        document.getElementById('disp1').innerHTML = "VALID PASSWORD";
        document.getElementById("password").style.borderColor = "green";
        document.getElementById('disp1').style.color = "green";

    }
    else{
        document.getElementById('disp1').innerHTML = "PASSWORD MUST BE AT LEAST 8 CHARACTERS";
        document.getElementById("password").style.borderColor = "green";
        document.getElementById('disp1').style.color = "#ff0000";
    }
}
function hel2(){
    var phone=document.getElementById("phone").value;
    if(phone.length==10){
        document.getElementById('disp2').innerHTML = "VALID PHONE NUMBER";
        document.getElementById("phone").style.borderColor = "green";
        document.getElementById('disp2').style.color = "green";

    }
    else{
        document.getElementById('disp2').innerHTML = "INVALID PHONE NUMBER";
        document.getElementById("phone").style.borderColor = "green";
        document.getElementById('disp2').style.color = "#ff0000";
    }
}
function hel3(){
    var email=document.getElementById("email").value;
    var mailformat = /^w+([.-]?w+)*@w+([.-]?w+)*(.w{2,3})+$/;
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email))
{
        document.getElementById('disp3').innerHTML = "VALID EMAIL ADDRESS";
        document.getElementById("email").style.borderColor = "green";
        document.getElementById('disp3').style.color = "green";

    }
    else{
        document.getElementById('disp3').innerHTML = "INVALID EMAIL ADDRESS";
        document.getElementById("email").style.borderColor = "green";
        document.getElementById('disp3').style.color = "#ff0000";
    }
}
function register(){
    var email = document.getElementById('disp3').innerHTML;
    var phone = document.getElementById('disp2').innerHTML;
    var password1 = document.getElementById('disp1').innerHTML;
    var password2 = document.getElementById('disp').innerHTML;
    var namee = document.getElementById('fname').value;
    if(email=="VALID EMAIL ADDRESS" && phone=="VALID PHONE NUMBER" && password1=="VALID PASSWORD" && password2=="PASSWORD MATCHED" && namee!="INVALID CONTROL ID"){
        window.location.href = 'https://www.youtube.com/';
    }
}
</script>
<?php



?>
    </body>
    </html>