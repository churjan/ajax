<?php
$conn=mysqli_connect('127.0.0.1','root','','pj');
$sql="SET NAMES UTF8";
mysqli_query($conn,$sql);
$sql="INSERT INTO t_user VALUES(NULL,'xiaoming','churjan','123456')";
$result=mysqli_query($conn,$sql);
if($result){
  echo "执行成功！新增记录的自增编号".mysqli_insert_id($conn);
}
?>