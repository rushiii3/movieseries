<?php 
$db=mysqli_connect("localhost","root","","anime");
if(mysqli_connect_errno()){
    die("Failed to connect");
}
 


if($_POST['password1']==$_POST['password2']){
    echo("TRUE");
}
else{
    echo("false");
}


if(isset($_POST["ctrlid"])){ 
    $ctrl=$_POST["ctrlid"];
    // Fetch state data based on the specific country 
    $query = "SELECT * FROM stuinfo where control_id='$ctrl'"; 
$result = mysqli_query($db,$query);
// Generate HTML of state options list 
if(mysqli_num_rows($result) > 0){ 

    while($row = $result->fetch_assoc()){  
        
        echo $row['stu_name'];
        
    } 
}else{ 
    echo 'INVALID CONTROL ID'; 
    echo(mysqli_connect_error($db));
} }


if(isset($_POST["ctrlid1"])){ 
    $ctrl=$_POST["ctrlid1"];
    // Fetch state data based on the specific country 
    $query = "SELECT * FROM stuinfo where control_id='$ctrl'"; 
$result = mysqli_query($db,$query);
// Generate HTML of state options list 
if(mysqli_num_rows($result) > 0){ 

    while($row = $result->fetch_assoc()){  
        
        $dep=$row['depart'];
        $sql="SELECT * FROM countries WHERE country_id='$dep'";
        $result1=mysqli_query($db,$sql);
        if(mysqli_num_rows($result1)>0){
            while($row1=mysqli_fetch_assoc($result1)){
                echo($row1['country_name']);
            }
        }
        
    } 
}else{ 
    echo 'INVALID CONTROL ID'; 
    echo(mysqli_connect_error($db));
} 
}

if(isset($_POST["ctrlid2"])){ 
    $ctrl=$_POST["ctrlid2"];
    // Fetch state data based on the specific country 
    $query = "SELECT * FROM stuinfo where control_id='$ctrl'"; 
$result = mysqli_query($db,$query);
// Generate HTML of state options list 
if(mysqli_num_rows($result) > 0){ 

    while($row = $result->fetch_assoc()){  
        
        $yer=$row['yearr'];
        $sql="SELECT * FROM states WHERE state_id='$yer'";
        $result1=mysqli_query($db,$sql);
        if(mysqli_num_rows($result1)>0){
            while($row1=mysqli_fetch_assoc($result1)){
                echo($row1['state_name']);
            }
        }
        
    } 
}else{ 
    echo 'INVALID CONTROL ID'; 
    echo(mysqli_connect_error($db));
} 
}
if(isset($_POST["ctrlid3"])){ 
    $ctrl=$_POST["ctrlid3"];
    // Fetch state data based on the specific country 
    $query = "SELECT * FROM stuinfo where control_id='$ctrl'"; 
$result = mysqli_query($db,$query);
// Generate HTML of state options list 
if(mysqli_num_rows($result) > 0){ 

    while($row = $result->fetch_assoc()){  
        
        echo $row['divisi'];
    } 
}else{ 
    echo 'INVALID CONTROL ID'; 
    echo(mysqli_connect_error($db));
} 
}
if(isset($_POST["ctrlid4"])){ 
    $ctrl=$_POST["ctrlid4"];
    // Fetch state data based on the specific country 
    $query = "SELECT * FROM stuinfo where control_id='$ctrl'"; 
$result = mysqli_query($db,$query);
// Generate HTML of state options list 
if(mysqli_num_rows($result) > 0){ 

    while($row = $result->fetch_assoc()){  
        
        echo $row['roll_no'];
    } 
}else{ 
    echo 'INVALID CONTROL ID'; 
    echo(mysqli_connect_error($db));
} 
}

/*
}
elseif(!empty($_POST["state_id"])){ 
    // Fetch city data based on the specific state 
    $query = "SELECT * FROM cities WHERE state_id = ".$_POST['state_id']." AND status = 1 ORDER BY city_name ASC"; 
    $result = $db->query($query); 
     
    // Generate HTML of city options list 
    if($result->num_rows > 0){ 
        echo '<option value="">Select division</option>'; 
        while($row = $result->fetch_assoc()){  
            echo '<option value="'.$row['city_id'].'">'.$row['city_name'].'</option>'; 
        } 
    }else{ 
        echo '<option value="">division not available</option>'; 
    } 
    
}
elseif(!empty($_POST["sub_id"])){
    $query = "SELECT * FROM subject WHERE course_id = ".$_POST['sub_id']." AND status = 1 "; 
    $result = $db->query($query); 
    // Generate HTML of city options list 
    if($result->num_rows > 0){ 
        echo '<option value="">Select division</option>'; 
        while($row = $result->fetch_assoc()){  
            echo '<option value="'.$row['subid'].'">'.$row['subject_name'].'</option>'; 
        } 
    }else{ 
        echo '<option value="">City not available</option>'; 
    } 
}*/
?>