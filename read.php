<?php
if (!isset($index))
{
    Header("Location: index.php");
}

include_once 'bbq_config.php';
$sql = new mysqli(HOST,USER,PASSWD,DB);
date_default_timezone_set("Asia/Shanghai");
$id_min = ($page-1)*5;
$sql -> query("SET NAMES 'utf8'");
$read = $sql -> query("select nick,time,id,txt from bbq order by id desc limit $id_min,5");

while ($now = $read -> fetch_array())
{
    $time=date("Y-m-d h:i:s a",$now['time']);
    $nick = $now['nick'];
    $txt = $now['txt'];
    $id = $now['id'];
    echo <<<text
    <div class="box">
    <a href="pid.php?id=$id">$nick:</a>
    <br />
    <p>
    $txt
    </p>
    <span id="ttime">$time </span>
    <span id="fid">$id 楼</span>
    </div>
text;
}
$sql->close();
echo '           <div style="width:444px;margin:0 auto; padding:20px 0;">
                <div style="width:440px;margin:0 auto; text-align:center;">
                <p style="float:left;height:5px;color:#666666;font-size:14px">Copyright &nbsp 2017&nbsp 耳朵借我LMYE &nbsp &nbsp &nbspALL Rights Reserved</p>
                </div>
                 <div style="width:440px;margin:0 auto; text-align:center;">
                <p style="float:left;height:5px;color:#666666;font-size:14px">&nbsp&nbsp&nbsp&nbsp&nbsp豫ICP备17021914&nbsp&nbsp QQ:767449013@qq.com &nbsp须臾 </p>
                </div>
                <div  style="width:444px;margin:0 auto; text-align:center;">
                <a target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=41042102000022" style="display:inline-block;text-decoration:none;height:5px;line-height:20px;">
                <img src="image/bei.PNG" style="float:left;"/>
                <p style="float:left;height:5px;line-height:20px;margin: 0px 0px 0px 0px;color:#666666;font-size:14px">豫公网安备 41042102000022号</p>
                </a>
                </div>
            </div>
         
         ';