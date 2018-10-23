<?php
//var_dump($_POST); exit;
$conn=new mysqli('localhost','root','db') or die("数据库连接错误：".mysqli_error());//连接数据库
mysqli_select_db($conn, "guestbook") or die("数据库访问错误：".mysqli_error());//选择数据库
mysqli_query($conn,'set names UTF-8'); 
$name=$_POST['T1'];
$message=$_POST['S1'];
$createtime=date("Y-m-d H:i:s");
$ip = $_SERVER["REMOTE_ADDR"];
$sqlstatement="insert into gbook(time,user,message,ip) values('$createtime','$_POST[T1]','$_POST[S1]','$ip')";
$sql=mysqli_query($conn,$sqlstatement);
if($sql){
echo "<script>alert('添加成功！');window.location.href='wechat_live_withcomments.php';</script>";
mysqli_close($conn);}
?>
