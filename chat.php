<!DOCTYPE html>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <style>
            @media (min-width: 0px) { #usernos{
                    display:none;
                }
                #menubtn{
                    display:block;
                }
                #closebtn{
    display:block;
 }
            }
            @media (min-width: 576px) { #usernos{
                    display:none;
                }
                #menubtn{
                    display:block;
                }
                #closebtn{
    display:block;
 }
            }
            @media (min-width: 768px) { 
                #usernos{
                    display:none;
                }
                #menubtn{
                    display:block;
                }
                #closebtn{
    display:block;
 }
             }
             @media (min-width: 992px) { 
                #usernos{
                    display:block;
                }
                #menubtn{
                    display:none;
                }
                #closebtn{
                    display:none;
                }
              }

              #overflowTest {
  padding: 15px;
  width: 100%;
  height: 75svh;
  overflow: scroll;
  
}
 
            </style>
    </head>
<body>

<?php
session_start();
$Now = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
//echo  $Now->format('d M H:i A');
$con = mysqli_connect('localhost','root','','Movie&Series');
if(mysqli_connect_errno())
{
    die("Not connected");
}
$count = "SELECT * FROM chatuser";
$result = mysqli_query($con,$count);
?>
<input type="text" value="<?php echo($_SESSION['user']);?>" id="userid" style="display:none;">
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 col-md-9 col-md-12 col-xs-12" style="background-color:#483d8b;height:100svh;overflow:yscroll;color:white;" id="usernos">
            <h3 style="text-align:center;margin-block:1rem;border-bottom:1px solid black;padding:1rem">
                No of Users : <?php echo(mysqli_num_rows($result));?> 
                <span style="float:right;"> 
                    <button style="background-color:#483d8b;border:none;" id="closebtn">
                        <img src="https://raw.githubusercontent.com/rushiii3/Pet-venture/66d2d9c21cd5d0ed35d771222516c379e9871bde/x-lg.svg" style="width:2rem;filter: brightness(0) invert(1);">
                    </button> 
                </span>
            </h3>
            <?php
                        if(mysqli_num_rows($result))
                        {
                            while($row=mysqli_fetch_assoc($result))
                            {
                            ?>
                                <div class="d-flex flex-row justify-content-start" >
                                    <img src=" <?php echo($row['imglink']);?>  "alt="avatar 1" style="width: 45px; height: 100%;border-radius:50%;">
                                    <div>
                                        <p class="p-2 ms-3 mb-3 " style="font-size:1.2rem;">
                                            <?php echo($row['namee']);?> 
                                        </p>
                                    </div>
                                </div> <?php
        }
    }
        ?>
            

        </div>
        
        <div class="col-lg-9 col-md-9 col-md-12 col-xs-12" style="background-color: white;height:100svh;border-left:1px solid black;" id="chat">
            <h3 style="margin-block:1rem;border-bottom:1px solid black;padding:1rem;">
                Chat 
                <span style="float:right;"> 
                    <button style="background-color:white;border:none;" id="menubtn">
                        <img src="https://raw.githubusercontent.com/rushiii3/Pet-venture/280984a6dc3e13396df88077982092f2c7cdb1dc/list.svg" style="width:2rem;">
                    </button> 
                </span>
            </h3>
            <div style="height:78vh;padding:1rem;width:100%;overflow-y: scroll;" id="chatbody" >
            
            
            

            </div>
            <div class="d-flex flex-row justify-content-start" style="margin-block:0.5rem;">
                <input type="text" id="data" style="height:5svh;width:100%;padding:0.5rem;" placeholder="Type something....">
                    <div>
                        <button id="send" style="height:5svh;padding-inline:1rem;background-color:white;border-top:1px solid black;border-right:1px solid black;border-bottom:1px solid black;border-left:0px solid black;"><img src="https://raw.githubusercontent.com/rushiii3/Pet-venture/6cdbb30b9a76d89ca248178e59b8dc1151f1b8db/send.svg"></button>
                    </div>
            </div>
        </div>
    </div>
</div>
   <script>
$(document).ready(function()
{
   
    fetch();
    
    
    var $text = $('#chatbody');
    $text.scrollTop($text[0].scrollHeight);
 setInterval(function(){
    getLocation();
  fetch();
 }, 1000);

 $('#send').on('click',function()
    {
        $('#chatbody').scrollTop($('#chatbody')[0].scrollHeight);
        $user = $('#userid').val();
        $chat =  $('#data').val();
        $.ajax({
            type: 'POST',
            url: 'chatajax.php',
            data: {uids:$user, chatt:$chat},
            success: function(data) {
                $('#data').val(" ");
                    },
                    error: function() {
                        console.log(response.status);
                    },
                })
    })

    $('#menubtn').on('click',function()
    {
        $('#usernos').slideToggle( "slow" );;
        $('#chat').hide();
    })
    $('#closebtn').on('click',function()
    {
        
        $('#chat').toggle();;
        $('#usernos').hide();
    })
    function fetch(){
        $.ajax({
            type: 'POST',
            url: 'chatajax.php',
            data: 'uidd=' + $('#userid').val(),
            success: function(data) {
                    $('#chatbody').html(data);
                    
                    },
                    error: function() {
                        console.log(response.status);
                    },
                })
    }
    
    function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } 
}

function showPosition(position) {
    $id = $('#userid').val();
  $latitude = position.coords.latitude;
  $longitude = position.coords.longitude;
  console.log($latitude) ;
  console.log($longitude) ;
  
  $.ajax({
            type: 'POST',
            url: 'chatajax.php',
            data: { latitude: $latitude, longitude:  $longitude, user: $id },
            success: function(data) {
                    
                    },
                    error: function() {
                        console.log(response.status);
                    },
                })
  
}


})

</script>

</body> 
</html>