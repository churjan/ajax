<?php
header("Content-Type:application/json;charset=utf-8");
@$pNo=$_REQUEST['pNo'];
if(!$pNo){
  $pNo=1;
}else{
  $pNo=intval($pNo);
}
$paper=[
  'recordCount'=>0,
  'pageSize'=>8,
  'pageCount'=>0,
  'pNo'=>$pNo,
  'data'=>[]
];
require("init.php");
//查询所有记录
$sql="SELECT COUNT(*) FROM t_product";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

$paper['recordCount'] = intval($row['COUNT(*)']);
$paper['pageCount'] = ceil($paper['recordCount']/$paper['pageSize']);
//查询指定的记录
$start=($paper['pNo']-1)*$paper['pageSize'];
$count= $paper['pageSize'];
$sql="SELECT * FROM t_product LIMIT $start,$count";
$result=mysqli_query($conn,$sql);
while(($item=mysqli_fetch_assoc($result))!==null){
  $paper['data'][]=$item;
};
echo json_encode($paper);
?>


