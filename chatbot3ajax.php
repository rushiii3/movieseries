<?php
$con=mysqli_connect("localhost","root","","chatbot");
if(mysqli_errno($con)){
    die("not connected");
}
else{
    echo("connected");
}
if(!empty($_POST['value'])){
    $value=$_POST['value'];
    $query="SELECT * FROM chatbot2 WHERE response LIKE '%$value%' ";
    $result=mysqli_query($con,$query);
if(mysqli_num_rows($result)>0)
{
    while($row=mysqli_fetch_assoc($result)){
        
        ?>
        <div style="padding: 0.2rem;margin-block: 1rem;width: auto;">
        <span style="background-color:orange;width: auto;padding: 0.5rem;border-radius: 10px; display: inline-block">
        <?php
        echo($row['reply']);
        ?>
        <script>
$('button').on('click',function(){
       
       var id = $(this).attr('id');
       console.log(id);
   })

</script>
        </span>
        </div>
        <?php
    }
}
}

?>