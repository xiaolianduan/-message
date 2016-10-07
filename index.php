<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }

        .box{
            width: 600px;
            height: 400px;
            position: absolute;
            left: 0;right: 0;top: 0;bottom: 0;
            margin: auto;
            border: 1px solid #ccc;
            background: #eee;
        }
        h2{
            width: 100%;
            height: 80px;
            text-align: center;
            line-height: 80px;
            color: #333;
        }
        form{
            width:80%;
            height: 300px;
            margin-left: 15%;
        }
        span{
            display: block;
            position: absolute;
            left: 5%;
            top: 80px;
            font-size: 18px;
            line-height: 30px;           
        }
        #text2{
            top:120px; 
        }
        #title{
            width:420px;
            height:30px;
            line-height: 30px;
            padding-left: 10px;
        }
        #content{ 
            margin-top: 10px;
            width: 420px;
            height: 200px;
            line-height: 30px;
            padding-left: 10px;
        }
        #submit{
            background:white;
            width:150px;
            height:40px;
            border:none;
            position: relative;
            top: 20px;
            left:140px;
            font-size: 16px;
        }
    </style>
    <script type="text/javascript" src="js/jquery1.12.3.js"></script>
</head>
<body>
    <div class="box">
        <h2>留言板</h2>
        <span id="text1">标题:</span>
        <span id="text2">内容:</span>
        <form action="admin/add.php" method="get">
             <input type="text" name="title" id="title">
             <textarea name="content" id="content" cols="30" rows="10"></textarea>
             <input type="submit" value="提交" id="submit">
        </form>
    </div>
    <ul>
        <li>这是我的留言</li>
    </ul>
</body>
<script type="text/javascript">
    $("form").submit(function(){
        if ($("#title").val()=="") {
            alert("不能为空")
            return false;
        };
        if ($("#content").val()=="") {
            alert("不能为空")
            return false;
        };
    })
</script>
<?php
    include "db.php";  //引入链接数据库的php文件
    $sql="select * from marks";  //查询marks表
    $result=$db->query($sql);
    while ($row=$result->fetch_assoc()){   //每循环一行,就读取一行

?>

<dl>
    <dd><?php echo $row["title"] ?></dd>
    <dd><?php echo $row["content"] ?></dd>
</dl>

<?php
    }
?>
</html>