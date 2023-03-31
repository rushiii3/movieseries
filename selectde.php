<!DOCTYPE html>
<html>
    <head>
        <title>
            MAJAX
        </title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    </head>
    <body>
        <?php
 $con=mysqli_connect("localhost","root","","class");
 if(mysqli_connect_errno()){
 die("Failed to connect");
 }
 else{
    echo("conneted");
 }


?>
        <span id="ep">Select Season</sapn>
            <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example" style="width:90%;" id="season">
            <option value="">Select Season</option>
            <?php
           
            $nw=1;
            $sql3 = " SELECT DISTINCT * FROM seasons WHERE showidd = $nw";
            $result3 = mysqli_query($con,$sql3);
            if(mysqli_num_rows($result3)>0)
            {
                while($row=mysqli_fetch_assoc($result3)){
                    ?>
                    <option value="<?php echo($row['sid']); ?> "> <?php echo($row['season_no']); ?> </option> 
                    
            
                    <?php
                }}
            ?>
            
            
            </select>

            <span id="ep">Select Episode</sapn>
                <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example" style="width:90%;" id="episode">
  <option selected>Select Season First</option>
            </select>

  <iframe width="560" height="315" id="iframe" src=" " title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>


  <script>
$(document).ready(function(){
    $('#season').on('change', function(){
        var seasonID = $(this).val();  
        $.ajax({
        type: 'POST',
        url: 'majax.php',
        data: 'snsid=' + seasonID,
        success: function(data) {
			$('#episode').html(data);
        },
        error: function() {
            console.log(response.status);
        },
    })
    })


    $('#episode').on('change', function(){
        var episodeID = $(this).val();  
        $.ajax({
        type: 'POST',
        url: 'majax.php',
        data: 'epid=' + episodeID,
        success: function(data) {
			$('#dd').val(data);
            $('#iframe').attr('src', data);
            $('#if').attr('src', 'data');
        },
        error: function() {
            console.log(response.status);
        },
    })
    })
}
)
        
        </script>
    </body>
</html>