<?php
$db=new mysqli("localhost","root","","list");
//连接数据库 ("地址","用户名","密码","库名")
$db->query("set names utf8");   //设置返回数据的编码格式
?>