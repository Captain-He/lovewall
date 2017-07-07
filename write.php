<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!--
    <meta name="viewport" content="width=device-width"/>
    -->
    <title>表白墙--写下内心的话语</title>
    <link rel="stylesheet" type="text/css" href="CSS/head.css" />
    <link rel="shortcut icon" href="image/favicon.png" >
    <script type="text/javascript">
    function verify(thisform)
    {
        with(thisform)
        {
            if (n_name.value==""||n_name.value==null)
            {
                alert("少年，你的昵称不能为空~~");
                return false;
            }
            if (txt.value==""||txt.value==null)
            {
                alert("少年，你怎么能什么也说呢~~");
                return false;
            }
        }
    }
    </script>
    </head>

    <body>
        <?php include_once 'head.html'?>
        <div class="text">
            <div class="write" >
                <form action="save.php" method="post" name="write" onsubmit="return verify(this)"style="color:#FF3333;">
                <p>你的昵称:<input type="text" name="n_name" style="border:solid 1px #FF3333" onkeyup="this.value=this.value.replace(/^ +| +$/g,'')"
/></p>
                <p>对方邮箱:<input type="text" name="email" style="border:solid 1px #FF3333" onkeyup="this.value=this.value.replace(/^ +| +$/g,'')"
 /> # 可选，如果填写，则向Ta的邮箱发送一封邮件通知^_^</p>
                <p style="color:#FF3333;">你想对Ta说点什么呢？<br /><p><textarea  rows="10" cols="50" name="txt" style="border:solid 1px #FF3333" onkeyup="this.value=this.value.replace(/^ +| +$/g,'')"
></textarea></p></p>
                <p><input type="submit" value="提交" style="border:solid 1px #FF3333;color:#FF3333; margin-top:30px"  /></p>
                </form>
                <br />
                <br />
            </div>
        </div>
    </body>
</html>
