<?php
include "../db.php";

$title=$_GET["title"];		//接收HTML页面发送的请求
$con=$_GET["content"];

$sql="INSERT INTO `list`.`marks` (`id`, `title`, `content`) VALUES (NULL, '{$title}', '{$con}')";
	// 往数据库插入数据
$db->query($sql);  //发送到数据库
if ($row=$db->affected_rows>0) {  //判断结果
	include "../back.html";
	//echo "<script>alert('插入成功'),location.href='back.html'</script>";
}
?>