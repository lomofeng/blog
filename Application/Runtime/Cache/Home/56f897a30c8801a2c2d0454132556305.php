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
</header>
<div id="content">
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>文章内容页</title>
</head>
<body>
<h1>文章内容</h1>
<h4><?php echo ($post["title"]); ?></h4>
<h5><?php echo (date('Y-m-d H:i:s',$post["timestamp"])); ?></h5>
<p><?php echo ($post["content"]); ?></p>
</body>
</html>
</div>
<footer>Copyright @ EasyBlog</footer>


</body>
</html>