
<!DOCTYPE html>
<html>
   <head>
    <title>
        Series
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
            .page-link{
                font-size: 2rem;
                padding: 1rem 2rem 1rem 2rem;
                
            }
            .img-fluid{
                width: 100%;
                height: 40rem;
            }
            #tt1{
                color: black;
                font-size: 3rem;
                padding:1rem 2rem 1rem 2rem;
                border-radius: 10px;
                text-decoration: none;
                background-color:#0d6efd ;
                margin-bottom: 2rem;
            }
            
            #tt1:hover{
            background-color: black;
                color:white;
                border-radius: 10px;
            }
            #wo{
            font-size: 3rem;
            padding: 1rem;
          }
          #dv{
            font-size: 3rem;
            padding: 1rem;
          }
        
            #ep{
                font-size: 3rem;
                color: white;
                font-weight:bold ;
            }
            #tt2{
                color: black;
                font-size: 3rem;
                padding:1rem 2rem 1rem 2rem;
                border-radius: 10px;
                text-decoration: none;
                background-color: white;
            }
            
            #tt2:hover{
            background-color:  #0d6efd;
                color:white;
                border-radius: 10px;
            }
            iframe{
                WIDTH:100%; 
                HEIGHT:200px;
            }
          }
          
        
            @media (min-width: 768px){
                iframe{
                WIDTH:100%px; 
                HEIGHT:600px;
            }
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
            .page-link{
                font-size: 1.7rem;
                padding: 1rem 2rem 1rem 2rem;
            }
            .img-fluid{
                width: 100%;
                height: 35rem;
            }
            #tt1{
                color: black;
                font-size: 2rem;
                padding: 1rem;
                text-decoration: none;
                }
            #tt1:hover{
            background-color:black ;
                color: white;
                border-radius: 5px;
                
          }
          #wo{
            font-size: 2rem;
            padding: 1rem;
          }
          #dv{
            font-size: 2rem;
            padding: 1rem;
          }
         
            #ep{
                font-size: 2rem;
            }
            #int{
                font-size:2rem;
                padding:0.5rem 1rem 0.5rem 1rem;
                border-radius:20px;
                background-color:black;
                color:white;
            }
            #int:hover{
                background-color:white;
                color:black;
            }
            }
           </style>
    </head>
   <body>
   <?php 
$con=mysqli_connect("localhost","root","","anime");
if(mysqli_connect_errno()){
    die("not connected");
}
?>
       <script src="./removeBanner.js"></script>
    <div style="background-image:url(https://i.pinimg.com/originals/fa/c0/5c/fac05c110c458e9bab3a3248bfb3c376.jpg);background-size: cover ;width: 100%;background-attachment: fixed;"  >


        <div class="container-fluid" > 
            <div class="row" >
                <div class="col-xs-8  col-lg-7  p-1 mt-3 text-sm-center text-lg-start">
                    <span style="color:black;font-size: 3rem;color:white ;" id="ln">
                        Anime Flix
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

    
<div class="container-fluid" >
    <div class="row p-5" style="background-image: url(https://c4.wallpaperflare.com/wallpaper/707/220/899/gradient-blue-pink-abstract-art-wallpaper-preview.jpg);background-attachment: fixed;background-size: cover;background-repeat: no-repeat;;">






        <div class="col-lg-7 col-sm-9  mx-sm-auto mt-sm-5 mt-lg-1 mx-lg-auto mt-2 " style="border:1px solid ;background-color: aliceblue;margin-bottom: 4rem;height:100% ;">
            <h1 style="background-color:cadetblue ;padding: 1rem;">
                Chainsaw Man
            </h1>
            <img src="https://www.animesenpai.net/wp-content/uploads/2022/07/20220729_142507_compress86-683x1024.jpg"   class="img-fluid">
            <p style="padding: 1rem;font-size: 1.5rem;">
                8.9/10 · IMDb
            </p>
            <p style="padding: 1rem;font-size: 1.5rem;font-weight: bold;">
                Action fiction, Comedy horror, Dark fantasy
            
            </p>
            <p style="text-align:center ;background-color:cadetblue ;padding: 0.5rem;font-size: 1.5rem;">
                92% liked this TV show
            </p>
            <p style="padding: 1rem;font-size: 1.5rem;">
                Chainsaw Man is a Japanese manga series written and illustrated by Tatsuki Fujimoto. Its first part was serialized in Shueisha's shōnen manga magazine Weekly Shōnen Jump from December 2018 to December 2020; its second part began serialization in Shueisha's Shōnen Jump+ online magazine in July 2022.            </p>
            
            <p style="text-align:center ;margin-bottom: 2rem;">
                <a href="#wo" id="tt1" >Watch Video</a><br>
            </p>
            <p style="text-align:center ;">
                <a href="#dv" id="tt1">Download Video</a>
            </p>
        </div>






    </div>
</div>
<!--Ad Social-->
<script type='text/javascript' src='//pl17884620.profitablegatetocontent.com/d2/89/33/d28933124c8027e91505a5390135be55.js'></script>
<script type='text/javascript' src='//pl17884620.profitablegatetocontent.com/d2/89/33/d28933124c8027e91505a5390135be55.js'></script>
<script type='text/javascript' src='//pl17884620.profitablegatetocontent.com/d2/89/33/d28933124c8027e91505a5390135be55.js'></script>

<!--Vast-->
<script async="async" data-cfasync="false" src="//pl17884631.profitablegatetocontent.com/72b0bb5ae249285276cc9f9698382e33/invoke.js"></script>
<div id="container-72b0bb5ae249285276cc9f9698382e33"></div>

<p id="wo">
    Watch Online
</p>
<div class="container-fluid" style="background-image: url(https://cdn.pixabay.com/photo/2020/10/05/11/16/space-5629007_1280.jpg);background-attachment: fixed;background-size: cover;background-repeat: no-repeat;;">
        <div class="row">
            <div class="col-lg-10  col-sm-13 p-3 mx-auto ">
            
                
            <form method="POST" action="chainsawman.php" id="wb">
            <?php 
    if(isset($_POST['one'])){
        
        $one=$_POST['one'];
        $namee="Chainsaw Man";
        $namee1=mysqli_real_escape_string($con,$namee);
        $sql="SELECT * FROM movies WHERE SE ='$one' AND namee='$namee1' ";
        $result=mysqli_query($con,$sql);
        if(mysqli_num_rows($result)>0){
            while($rr=mysqli_fetch_assoc($result)){
                ?>

                <IFRAME SRC="<?php   echo($rr['link']);   ?>" FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO picture-in-picture allowfullscreen id="dbs"></IFRAME>                
                
                 
                <?php
            }
        }
    }
    
    
    ?>
    </div>
    <div class="col-lg-10  col-sm-13 p-3 mx-auto ">
        <p id="ep">
            Season 1
</p>
<a href="chainsawman.php#dbs" target="_blank"><input type="submit" value="S01E01" name="one"  id="int"></a>
<input type="submit" value="S01E02" name="one"  id="int">
<input type="submit" value="S01E03" name="one" id="int">
<input type="submit" value="S01E04" name="one" id="int">
<input type="submit" value="S01E05" name="one" id="int">
</div>
</form>
            
            
        </div>
    </div>

    <!--Vast-->
<script async="async" data-cfasync="false" src="//pl17884631.profitablegatetocontent.com/72b0bb5ae249285276cc9f9698382e33/invoke.js"></script>
<div id="container-72b0bb5ae249285276cc9f9698382e33"></div>
<p id="dv">
    Download Video
</p>
<div class="container-fluid p-4" style="background-image: url(https://c4.wallpaperflare.com/wallpaper/515/168/907/stars-sky-black-blurred-wallpaper-preview.jpg);background-attachment: fixed;background-size: cover;background-repeat: no-repeat;;">
    <div class="row">
         <!--Ad POP-->
<script type='text/javascript' src='//pl17883808.profitablegatetocontent.com/65/a9/68/65a968dabf76d34aec777cc70970f1dc.js'></script>
        <div class="col-lg-11 p-3 mx-auto text-lg-center text-sm-center">
            <p id="ep">
                Episode 1
            </p>
            <div>
                <a href="https://sbanh.com/d/uhxweknshw0d.html" target="_blank" id="tt2">Download</a>
            </div>
        </div>

        <div class="col-lg-11 p-3 mx-auto text-lg-center text-sm-center">
            <p id="ep">
                Episode 2
            </p>
            <div>
                <a href="https://sbanh.com/d/86o7jw7uwyjl.html" target="_blank" id="tt2">Download</a>
            </div>
        </div>
        <div class="col-lg-11 p-3 mx-auto text-lg-center text-sm-center">
            <p id="ep">
                Episode 3
            </p>
            <div>
                <a href="https://sbanh.com/d/citiga1nrsvn.html" target="_blank" id="tt2">Download</a>
            </div>
        </div>
        <div class="col-lg-11 p-3 mx-auto text-lg-center text-sm-center">
            <p id="ep">
                Episode 4
            </p>
            <div>
                <a href="https://sbanh.com/d/j3x4om8zsrpx.html" target="_blank" id="tt2">Download</a>
            </div>
        </div>
        <div class="col-lg-11 p-3 mx-auto text-lg-center text-sm-center">
            <p id="ep">
                Episode 5
            </p>
            <div>
                <a href="https://sbanh.com/e/qn6xk4r8xfyx.html" target="_blank" id="tt2">Download</a>
            </div>
        </div>


        
    </div>
</div>
</div>



<script type='text/javascript' src='//pl17884620.profitablegatetocontent.com/d2/89/33/d28933124c8027e91505a5390135be55.js'></script>
       
      
    
            
       

<div class="container-fluid " style="background-color: black;border-top: 0.4rem solid;border-color: white;"">
                    <div class="row p-4 mx-auto" >
                        <div class="col-lg-4 text-center mx-auto col-sm-10">
                            <span>
                                <a href="suggestbox.html" id="tt" > Request Us </a>
                            </span>
                        </div>
                        <div class="col-lg-4  text-center mx-auto col-sm-10">
                            <span>
                                <a href="contact.html" id="tt" > Contact Us </a>
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
                  
        
               
   <div style="text-align:right;position:fixed;z-index:9999999;bottom:0;width:auto;right:1%;cursor:pointer;line-height:0;display:block!important"><a title="Hosted on free web hosting 000webhost.com. Host your own website for FREE." target="_blank" href="https://www.000webhost.com/?utm_source=000webhostapp&utm_campaign=000_logo&utm_medium=website&utm_content=footer_img"><img src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png" alt="www.000webhost.com"></a></div><script>function getCookie(t){for(var e=t+"=",n=decodeURIComponent(document.cookie).split(";"),o=0;o<n.length;o++){for(var i=n[o];" "==i.charAt(0);)i=i.substring(1);if(0==i.indexOf(e))return i.substring(e.length,i.length)}return""}getCookie("hostinger")&&(document.cookie="hostinger=;expires=Thu, 01 Jan 1970 00:00:01 GMT;",location.reload());var wordpressAdminBody=document.getElementsByClassName("wp-admin")[0],notification=document.getElementsByClassName("notice notice-success is-dismissible"),hostingerLogo=document.getElementsByClassName("hlogo"),mainContent=document.getElementsByClassName("notice_content")[0];if(null!=wordpressAdminBody&&0<notification.length&&null!=mainContent){var googleFont=document.createElement("link");googleFontHref=document.createAttribute("href"),googleFontRel=document.createAttribute("rel"),googleFontHref.value="https://fonts.googleapis.com/css?family=Roboto:300,400,600,700",googleFontRel.value="stylesheet",googleFont.setAttributeNode(googleFontHref),googleFont.setAttributeNode(googleFontRel);var css="@media only screen and (max-width: 576px) {#main_content {max-width: 320px !important;} #main_content h1 {font-size: 30px !important;} #main_content h2 {font-size: 40px !important; margin: 20px 0 !important;} #main_content p {font-size: 14px !important;} #main_content .content-wrapper {text-align: center !important;}} @media only screen and (max-width: 781px) {#main_content {margin: auto; justify-content: center; max-width: 445px;}} @media only screen and (max-width: 1325px) {.web-hosting-90-off-image-wrapper {position: absolute; max-width: 95% !important;} .notice_content {justify-content: center;} .web-hosting-90-off-image {opacity: 1;}} @media only screen and (min-width: 769px) {.notice_content {justify-content: space-between;} #main_content {margin-left: 5%; max-width: 445px;} .web-hosting-90-off-image-wrapper {position: absolute; display: flex; justify-content: center; width: 50%; margin-left: 45%;}} .web-hosting-90-off-image {max-width: 90%;} .content-wrapper {min-height: 454px; display: flex; flex-direction: column; justify-content: center; z-index: 5} .notice_content {display: flex; align-items: center;} * {-webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale;} .upgrade_button_red_sale{box-shadow: 0 2px 4px 0 rgba(255, 69, 70, 0.2); width: 264px; border: 0; border-radius: 3px; background-color: #FF5C62 !important; padding: 15px 55px !important; font-family: 'Roboto', sans-serif; font-size: 16px; font-weight: 600; color: #ffffff;} .upgrade_button_red_sale:hover{color: #ffffff !important; background: #d10303 !important;}",style=document.createElement("style"),sheet=window.document.styleSheets[0];style.styleSheet?style.styleSheet.cssText=css:style.appendChild(document.createTextNode(css)),document.getElementsByTagName("head")[0].appendChild(style),document.getElementsByTagName("head")[0].appendChild(googleFont);var button=document.getElementsByClassName("upgrade_button_red")[0],link=button.parentElement;link.setAttribute("href","https://www.hostinger.com/hosting-starter-offer?utm_source=000webhost&utm_medium=panel&utm_campaign=000-wp"),link.innerHTML='<button class="upgrade_button_red_sale">Claim Deal</button>',(notification=notification[0]).setAttribute("style","padding-bottom: 0; padding-top: 5px; background-color: #040713; background-size: cover; background-repeat: no-repeat; color: #ffffff; border-left-color: #040713;"),notification.className="notice notice-error is-dismissible";var mainContentHolder=document.getElementById("main_content");mainContentHolder.setAttribute("style","padding: 0;"),hostingerLogo[0].remove();var h1Tag=notification.getElementsByTagName("H1")[0];h1Tag.className="000-h1",h1Tag.innerHTML="Black Friday",h1Tag.setAttribute("style",'color: white; font-family: "Roboto", sans-serif; font-size: 48px; font-weight: 700;');var h2Tag=document.createElement("H2");h2Tag.innerHTML="Up to 90% off 4-year hosting plans + free domain, SSL & DDoS protection",h2Tag.setAttribute("style",'color: white; margin: 10px 0 15px 0; font-family: "Roboto", sans-serif; font-size: 16px; font-weight: 400; line-height: 1;'),h1Tag.parentNode.insertBefore(h2Tag,h1Tag.nextSibling);var paragraph=notification.getElementsByTagName("p")[0];paragraph.innerHTML="$<span style='font-size: 80px;'>2.49</span>/mo",paragraph.setAttribute("style",'font-family: "Roboto", sans-serif; font-size: 48px; font-weight: 700; margin: 0;');var list=notification.getElementsByTagName("UL")[0];list.remove();var org_html=mainContent.innerHTML,new_html='<div class="content-wrapper">'+mainContent.innerHTML+'</div><div class="web-hosting-90-off-image-wrapper"><img class="web-hosting-90-off-image" src="https://cdn.000webhost.com/000webhost/promotions/bf-2022-bottom-banner.png"></div>';mainContent.innerHTML=new_html;var saleImage=mainContent.getElementsByClassName("web-hosting-90-off-image")[0]}</script></body>
</html>