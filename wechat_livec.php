<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport"
          content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <link rel="stylesheet" type="text/css" href="02.css"/>
    <link rel="stylesheet" type="text/css" href="03.css"/>
    <link rel="stylesheet" type="text/css" href="04.css"/>
    <script type="text/javascript" src="statistics.js" charset="UTF-8"></script>
    <script type="text/javascript" src="04.js" charset="UTF-8"></script>
    <script type="text/javascript" src="checkInput.js" charset="UTF-8"></script>
    <script type="text/javascript" src="js/jquery-1.11.3.min.js" charset="UTF-8"></script>
    <script type="text/javascript" src="js/query.js" charset="UTF-8"></script>
    <title>某某现场直播</title>
</head>
<body>
<div style ='margin:0 auto;width:0px;height:0px;overflow:hidden;'>
<img src='live.jpeg'>
</div>
</body>
<body bgcolor="#F5F5F5" style="height:auto;width:100%;margin:0;padding:0;">
<video width="100%" height="auto" controls="controls" autoplay="autoplay" playsinline>
    <source src="http://hls.allstreaming.cn/live/zhongpeng/index.m3u8" type="video/mp4">
    Your browser does not support the video tag.
</video>
<div id="top">
    <div id="head">
        <ul>
            <li id="L1" onclick="Tab(1)"><a href="#"><strong>热门评论</strong></a></li>
            <li id="L2" onclick="Tab(2)"><a href="#"><strong>直播简介</strong></a></li>
            <li id="l-zan"><!--img src="zan_natuer.png" alt="" class="zan" id="zan" onclick="addZan()"--></li>

        </ul>
    </div>
</div>
<HR width="100%" color="red" SIZE="2"/>
<div id="d2">
    <h1>某某现场直播</h1>
    <p style="color:gray">时间：2016年12月30日，地点：人民大会堂</p>
    <HR width="100%" color="#DCDCDC" SIZE="1"/>
    <HR width="100%" color="#DCDCDC" SIZE="1"/>
    <div class="text" style="font-size:15px;font-family:verdana;color:#696969;">
        <p style="text-indent:2em;"><B>标题</B>
        <p style="text-indent:2em;">内容</p>
    </div>
    <HR width="100%" color="#DCDCDC" SIZE="2"/>
    <br/>
</div>
<div id="d1">
    <div class="ylcon">
        <form method="POST" action="insert.php" class="bootstrap-frm">
            <div>
                <label>
                    <span>您的姓名：</span>
                    <input id="name" type="text" name="T1" size="20" value="不超过5个汉字" onFocus="this.value=''"/>
                </label>
                <label>
                    <span>留言内容：</span>
                    <textarea id="message" rows="2" name="S1" cols="38" onFocus="this.value=''">不超过38个汉字</textarea>
                </label>
                <label class="submit-label">
                    <input type="reset" class="button" value="重置" name="B2">
                    <input type="submit" class="button" value="提交" name="B1" onclick="return checkInput()"/>
                </label>
            </div>
        </form>
    </div>
</div>
</body>
</html>
