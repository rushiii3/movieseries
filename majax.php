<?php
$con=mysqli_connect("localhost","root","","class");
                if(mysqli_connect_errno()){
                die("Failed to connect");
                }
                $nw = 1;
                
                
                
                if(!empty($_POST["snsid"])){ 
                    $query = "SELECT * FROM seap WHERE season = $nw"; 
                $result = mysqli_query($con,$query); 
                 
                // Generate HTML of state options list 
                if(mysqli_num_rows($result) > 0){ 
                    echo '<option value="">Select Episode</option>'; 
                    while($row = mysqli_fetch_assoc($result)){  
                        echo '<option value="'.$row['se_id'].'">'.$row['episode'].'</option>'; 
                    } 
                }else{ 
                    echo '<option value="">Episode not available</option>'; 
                } 
                }

                if(!empty($_POST["epid"])){ 
                    $query = "SELECT * FROM seap WHERE se_id = ".$_POST["epid"].""; 
                $result = mysqli_query($con,$query); 
                 
                // Generate HTML of state options list 
                if(mysqli_num_rows($result) > 0){ 
                    while($row = mysqli_fetch_assoc($result)){  
                        //echo '<iframe width="560" height="315" id="iframe" src="'.$row['wlink'].'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
                        echo($row['wlink']);
                    } 
                }else{ 
                    echo '<option value="">State not available</option>'; 
                } 
                }


                if(!empty($_POST["snssid"])){ 
                    $query = "SELECT * FROM seap WHERE season = $nw"; 
                $result = mysqli_query($con,$query); 
                 
                // Generate HTML of state options list 
                if(mysqli_num_rows($result) > 0){ 
                    while($row = mysqli_fetch_assoc($result)){  
                        echo '<a href="'.$row['dlink'].'" target="_blank" id="tt2">Download Episode '.$row['episode'].'</a>';
                        echo("<br>");
                        echo("<br>");
                        echo("<br>");
                    } 
                }else{ 
                    echo '<option value="">Episode not available</option>'; 
                } 
                }


                
                if(!empty($_POST['srch'])){
                    $search = $_POST['srch'];
                    $query = "SELECT title,movie_id,category,poster_id FROM movies WHERE title LIKE '%$search%' UNION SELECT title,show_id,category,poster_id FROM shows WHERE title LIKE '%$search%'";
                    $result = mysqli_query($con,$query);
                    if(mysqli_num_rows($result)>0)
                    {
                        while($row = mysqli_fetch_assoc($result))
                        {
                            $id=$row['movie_id'];
                            $category=$row['category'];
                            $pid =  $row['poster_id'];
                            ?>
                            <div class="col-lg-3 p-3 m-2 col-sm-5 mx-lg-5  text-center mx-auto" id="cool" >
                            <a href="<?php 
                                if($category=='m')
                                {
                                    echo("movielay.php?id=$id");
                                }
                                else{
                                    echo("serrieslay.php?id=$id");
                                }
                                $sql2=" SELECT * from poster WHERE poster_id = '$pid' ";
                                $result2 = mysqli_query($con,$sql2);
                                if(mysqli_num_rows($result2)>0)
                                {
                                    while($row1 = mysqli_fetch_assoc($result2))
                                    {
                                ?>" id="aa">
                                <img src="<?php  echo($row1['img_poster']);  ?>" class="img-thumbnail" id="imgw" >
                                    <h1 style="padding: 1rem;" >
                                     <?php echo($row['title']); ?>
                                    </h1>
                                </a>
                                </div>
                            <?php
                        }
                    
                    }
                }
            }
                }
                ?>