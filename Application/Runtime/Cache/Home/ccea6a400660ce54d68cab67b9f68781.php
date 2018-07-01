<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>我的博客</title>
    <style type="text/css">
        html,body{
            margin: 0;
            padding: 0;
        }
        header,footer{
            padding: 30px 40px;
            background-color: #DDDDDD;
            color: #666;
        }
        header a{
            padding: 0 20px;
            color: #999;
            text-decoration: none;
        }
        header a:hover{
            color: #333;
        }
        footer{
            text-align: center;
        }
        #content{
            padding: 30px 40px;
        }
    </style>
</head>
<body>
<header>
    <a href="<?php echo U('Index/index');?>">首页</a>
    <a href="<?php echo U('Index/list');?>">文章列表页</a>
    <a href="<?php echo U('Index/login');?>">登录</a>
</header>
<div id="content">
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>验证码</title>
</head>
<body>
<form method="post" action="/index.php/Home/Index/login_do" enctype="multipart/form-data">
    <input type="file" name="file" placeholder="请选择上传图片"/><br>
    <input type="text" placeholder="请输入验证码"name="code" required>
    <img src="<?php echo U('verify');?>" alt="" onclick="this.src='<?php echo U('verify');?>?'+Math.random()" title="看不清，换一张"></br></br>
    <button>登录</button>
</form>
</body>
</html>
</div>
<footer>Copyright @ EasyBlog</footer>


</body>
</html>