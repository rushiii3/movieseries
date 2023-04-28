<?php
$con = mysqli_connect('localhost','root','','Movie&Series');
if(mysqli_connect_errno())
{
    die("Not connected");
}
if(!empty($_POST['uidd']))
{
    $id = $_POST['uidd']; 
    $query = "SELECT * FROM chats";
    $result = mysqli_query($con,$query);
    if(mysqli_num_rows($result))
    {
        while($row=mysqli_fetch_assoc($result))
        {
            $uid=$row['userid'];
            $chat = $row['chat'];
            $datee = $row['datetimee'];
            if($id==$uid)
            {
                $query2 = "SELECT * FROM chatuser WHERE uidd = '$uid' ";
                $result2 = mysqli_query($con,$query2);
                if(mysqli_num_rows($result2))
                {
                    while($row=mysqli_fetch_assoc($result2))
                    {
                        ?>


                        <div class="d-flex justify-content-between" style="margin-block:0.5rem;" id="ms">
                            <p class="small mb-1 text-muted">  <?php echo($datee); ?></p>
                            <p class="small mb-1">Me</p>
                        </div>
                        <div class="d-flex flex-row justify-content-end mb-4 pt-1">
                            <div>
                                <p class="small p-2 me-3 mb-3 text-black rounded-3 " style="background-color: #f5f6f7;">
                                <?php echo($chat) ;?>
                                </p>
                            </div>
                            <img src="<?php echo($row['imglink']); ?>"alt="avatar 1" style="width: 45px; height: 100%;border-radius:50%;">
                        </div>
                        
                            
            <?php
                    }
            }
        }
            else{
                $query2 = "SELECT * FROM chatuser WHERE uidd = '$uid' ";
                $result2 = mysqli_query($con,$query2);
                if(mysqli_num_rows($result2))
                {
                    while($row=mysqli_fetch_assoc($result2))
                    {
                        ?>
                       
<div class="d-flex justify-content-between" style="margin-block:0.5rem;" id="ms">
                                <p class="small mb-1" ><?php echo($row['namee']); ?></p>
                                <p class="small mb-1 text-muted" ><?php echo($datee); ?></p>
                            </div>
                            <div class="d-flex flex-row justify-content-start">
                                <img src="<?php echo($row['imglink']); ?>" 
                                    alt="avatar 1" style="width: 45px; height: 100%;border-radius:50%;">
                             <div>
                                 <p class="small p-2 ms-3 mb-3 rounded-3" style="background-color:#483d8b;color:white">
                                <?php echo($chat) ;?>
                                </p>
                                </div>
                                </div>
                            
            <?php
                    }
            }
            

            
        }}
    }
}
if(!empty($_POST['uids']) && !empty($_POST['chatt']))
{
    $Now = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
    $td = $Now->format('d M H:i A');
    echo  $td;
    $id = $_POST['uids']; 
    $chat = $_POST['chatt'];
    $query = "INSERT INTO chats(userid,chat,datetimee) VALUES ('$id','$chat','$td')";
    if(mysqli_query($con,$query))
    {
        echo("done");
    }
    else{
        echo("notdone");
    }
}
if(!empty($_POST['latitude']) && !empty($_POST['longitude']) && !empty($_POST['user']) )
{
    
    $id = $_POST['user']; 
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];
    $query = "UPDATE chatuser SET latitude = '$latitude' , longitude = '$longitude' WHERE uidd = '$id' ";
    if(mysqli_query($con,$query))
    {
        echo("done");
    }
    else{
        echo("notdone");
    }
}
if(!empty($_POST['cmd']))
{
    $query = "SELECT * FROM chatuser ";
    $result = mysqli_query($con,$query);
    if(mysqli_num_rows($result)>0)
    {
        ?>
       
        <?php
        while($row=mysqli_fetch_assoc($result))
        {
            $longitude = $row['longitude'];
            $latitude = $row['latitude'];
            if(!empty($longitude) && !empty($latitude))
            {
                ?>
                    <script>
                        
                            var airportPopup1 = new maplibregl.Popup({
                                    anchor: 'bottom',
                                    offset: [0, -64] // height - shadow
                                })
                                .setText( '<?php echo($row['namee']);  ?> ');

                                var airport1 = new maplibregl.Marker( {
                                    anchor: 'bottom',
                                    offset: [0, 6]
                                })
                                .setLngLat([<?php echo($longitude);  ?>,<?php echo($latitude);  ?>])
                                .setPopup(airportPopup1)
                                .addTo(map);
                                
                               
                        
                    
                    </script>
            <?php
            }
            
        }
    }
}

?>