<?php
if ($_POST["p"] == 123456)
        { session_start();
          $_SESSION['islogin'] = true;
          header("Location:wechat_live.php");exit;
        }
else
        { header("Location:index_f.html");exit;
        }
?>
