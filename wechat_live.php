<?php
session_start();
if(isset($_SESSION['islogin'])){
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <title>WeChat Live Test</title>
</head>

<body bgcolor="#F5F5F5" style="height: 100%;width: 100%;margin: 0;padding: 0;">
    <video width="100%" height="auto" poster=/thurmb.jpg>
    <source src="http:///" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <p>
    <div class="text" style="font-family:verdana;color:red;text-align:center;">直播简介</div>
    <HR width="100%" color="red" SIZE="2"/>
    <div style="margin: 10px;">
    <h1>某某直播</h1>
    <p style="color:gray">时间：2016年12月23日，地点：鸟巢文化中心</p>
    <HR width="100%" color="#DCDCDC" SIZE="1"/>
    <div class="text" style="font-family:verdana;color:#696969;text-align:left;">
    <p>内容</p>
    </div>
    </div>
    <HR width="100%" color="#DCDCDC" SIZE="2"/>
    <br />
    <br />
    <br />
</body>
</html>
<?php
;exit;}
else
{ header("Location:index.html");exit;
    }
?>
