<?php
    $mysqli = new mysqli("localhost", "root", "db", "guestbook");
    if(!$mysqli)  {
        echo"database error";
    }else{
        $result=mysqli_query($mysqli, "select * from gbook order by sn desc limit 50");
        while($row = mysqli_fetch_assoc($result)){
?>
        <div id="messDivId">
            <div class="story">
                <p class="story_t"><?php echo $row['user'];?></p>
                <p class="story_time"><?php echo $row['time'];?></p>
                <p class="story_m"><?php echo $row['message'];?></p>
            </div>
        </div>
<?php }
   }
   $mysqli->close();
?>
