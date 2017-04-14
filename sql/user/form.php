<?php
@$uname=$_REQUEST['uname'] or die("uname required");
@$pwd=$_REQUEST['pwd'] or die("pwd required");
$time=time()*1000;
echo  "用户名为： $uname";
echo "密码为： $pwd";
echo "当前时间为： $time";
?>