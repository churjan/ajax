<?php
header("Content-Type:application/json;charset=utf-8");

require("init.php");
$start=0;
$count=8;
$sql="SELECT * FROM t_product LIMIT $start,$count";
$result=mysqli_query($conn,$sql);
$output=[];
while(($item=mysqli_fetch_assoc($result)) !=null){
  $output[]=$item;
}
echo json_encode($output);
?>

