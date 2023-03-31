<!DOCTYPE html>
<html>
    <head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
         <style>
             *{
                padding: 0%;
                margin: 0%;
            }
            @media (min-width:768px)
            {
                #btn{
                display:block;
            }
            #show{
                display:none;
            }
            a{
                text-decoration:none;
                padding:1rem;
            }
            li{
                list-style-type:none ;
                
                width:100%;
                margin-top:5%;
                margin-bottom:5%;
                font-size:1.1rem;
            }
            a:hover{
                color:red;
                
            }
            input[type=text]
            {
                width:50%;
                
            }
            input[type=text]:focus{
                width:100%;
            }
                
        }

            
            @media(min-width:992px)
            {
                a:hover{
                color:red;
                
            }
            a{
                text-decoration:none;
                padding:1rem;
            }
            li{
                list-style-type:none ;
                float:left;
                width:10%;
                margin-left:1%;
                margin-right:1%;
                font-size:1.1rem;
                margin-top:0%;
                margin-bottom:0%;
            }
            
            input[type=text]
            {
                width:50%;
                
            }
            input[type=text]:focus{
                width:100%;
            }
            #btn{
                display:none;
            }
            #show{
                display:none;
            }
            
            }
        </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row p-1">
            <div class="col-lg-12 col-md-6 col-sm-2 col-xs-6 text-lg-center text-md-start">
                <p class="fs-1">
                    Movies00
                </p>
            </div>
            <div class="col-lg-0 col-md-6 col-sm-3 col-xs-6"  >
            
            <button style="background-color:white;border:none;float:right;" id="btn"><span class="material-symbols-outlined">menu</span></button>
            </div>
            <div class="col-lg-12 col-md-12 bg-light p-3 col-sm-12 col-xs-12" id="nv">
                 <ul>
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">Movies</a>
                    </li>
                    <li>
                        <a href="#">Series</a>
                    </li>
                    <li>
                        <a href="#">Request Us</a>
                    </li>
                    <li>
                        <a href="#">About Us</a>
                    </li>
                    <li>
                        <div style="width:30rem;">
                        <input type="text" placeholder="Search movies or series.." id="input">
                        <div class="show" style="height:20rem;z-index:10;position:absolute;overflow-y:auto;padding:1rem;background-color:red;" id="show">

                            <div style="background-color:blue;height:50%;margin-top:2rem;width:100%;">
                            <a href="#" style="background-color:green;">
                                    <img src="https://img.freepik.com/free-photo/wide-angle-shot-single-tree-growing-clouded-sky-during-sunset-surrounded-by-grass_181624-22807.jpg" style="height:100%;width:30%;float:left;padding:0.5rem;">
                                    <p style="padding:2rem;margin-left:0rem;">
                                    Four ways healing nature is vital to our recovery from COVID-19
                                    </p>
                            </a>
                            </div>
                            
                        


                        

        
                           

                        </div>
                       
                    </li>
                </ul>
            </div>
            
        </div>
    </div>

    <script>
     $("input").focusin(function() {

        
        document.getElementById("show").style.display="block";
        $("#show").width(450); 
     });
     $("input").focusout(function() {

        document.getElementById("show").style.display="none";

        });
        $( "button" ).click(function() 
        {
            $( "ul" ).toggle();
        });
        

 </script>


</body>
</html>