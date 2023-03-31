<!DOCTYPE HTML>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="icon" type="image/x-icon" href="logo1.png">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
        <link rel="stylesheet" href="indexpage.css">
        
    </head>
    <body >
    <!--
    <?php
    //session_start();
    ?>
    -->
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
                    
    //session_start();
    //echo($_SESSION['namee']);
    ?>HRushikeshhhhhh
                    </h1>
                    <h2 id="wel_percent">YOUR OVERALL ATTENDANCE IS </h2>
                </div>
                <div class="col-lg-8 col-md-7 col-sm-6"  id="div2">
                    <div id="div3">
                        <h1><b>LECTURE ATTENDED</b></h1>
                        <table class="table">
                                <thead class="table-dark">
                                <tr>
                                    <th scope="col">Subject</th>
                                    <th scope="col">P/A</th>
                                    <th scope="col">Percet</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
      <td>Java Programming</td>
      <td>Present</td>
      <td>89%</td>
    </tr>
    <tr>
      <td>Data Structure</td>
      <td>Present</td>
      <td>100%</td>
    </tr>
      <td>Java Programming</td>
      <td>Present</td>
      <td>89%</td>
    </tr>
    <tr>
      <td>Data Structure</td>
      <td>Present</td>
      <td>100%</td>
    </tr>
      <td>Java Programming</td>
      <td>Present</td>
      <td>89%</td>
    </tr>
    <tr>
      <td>Data Structure</td>
      <td>Present</td>
      <td>100%</td>
    </tr>
    </tr>
      <td>Java Programming</td>
      <td>Present</td>
      <td>89%</td>
    </tr>
    <tr>
      <td>Data Structure</td>
      <td>Present</td>
      <td>100%</td>
    </tr>
                                </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
        </div>
       

      

    
</body>
<html>