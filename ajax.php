<!DOCTYPE html>
<html>
    <head>
        <title>
            Ajax
        </title>
    </head>
    <body>
        <h1>Select Country</h1>
        <?php 
    $db=mysqli_connect("localhost","root","","anime");
    if(mysqli_connect_errno()){
        die("Failed to connect");
    }
     
    // Fetch all the country data 
    $query = "SELECT * FROM countries WHERE status = 1 ORDER BY country_name ASC"; 
    $result = $db->query($query); 
?>
<form action="ajax.php" method="POST">
<!-- Country dropdown -->
<select id="country" name="faculty">
    <option value="">Select Department</option>
    <?php 
    if($result->num_rows > 0){ 
        while($row = $result->fetch_assoc()){  
            echo '<option value="'.$row['country_id'].'">'.$row['country_name'].'</option>'; 
        } 
    }else{ 
        echo '<option value="">Country not available</option>'; 
    } 
    ?>
</select>

<!-- State dropdown -->
<select id="state" name="course">
    <option value="">Select Department first</option>
</select>
<!-- City dropdown -->
<select id="city">
    <option value="">Select course first</option>
</select>
<select id="subject">
    <option value="">Select course first</option>
</select>

<input type="submit" name="sub1">
<form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $('#country').on('change', function(){
        var countryID = $(this).val();
        if(countryID){
            $.ajax({
                type:'POST',
                url:'cajax.php',
                data:'country_id='+countryID,
                success:function(html){
                    $('#state').html(html);
                    $('#city').html('<option value="">Select state first</option>'); 
                }
            }); 
        }else{
            $('#state').html('<option value="">Select department first</option>');
            $('#city').html('<option value="">Select course first</option>'); 
        }
    });
    
    $('#state').on('change', function(){
        var stateID = $("#country").val();
        if(stateID){
            $.ajax({
                type:'POST',
                url:'cajax.php',
                data:'state_id='+stateID,
                success:function(html){
                    $('#city').html(html);
                }
            }); 
        }else{
            $('#city').html('<option value="">Select Course first</option>'); 
        }
    });
    $('#state').on('change', function(){
        var subID = $("#state").val();
        if(subID){
            $.ajax({
                type:'POST',
                url:'cajax.php',
                data:'sub_id='+subID,
                success:function(html){
                    $('#subject').html(html);
                }
            }); 
        }else{
            $('#subject').html('<option value="">Select Course first</option>'); 
        }
    });


});
</script>

<?php

echo($_POST['course']);


?>
</body>

</html>