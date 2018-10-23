<?php 
    $mysqli = new mysqli("localhost", "root", "db", "guestbook"); 
    if(!$mysqli)  { 
        echo"database error"; 
    }else{
        $result=mysqli_query($mysqli, "select * from gbook");
        while($row = mysqli_fetch_assoc($result)){
?>
<p><?php echo $row['user'];?></p>
<p><?php echo $row['message'];?></p>
<p><?php echo $row['ip'];?></p>
<?php }
   }
   $mysqli->close();
?>
