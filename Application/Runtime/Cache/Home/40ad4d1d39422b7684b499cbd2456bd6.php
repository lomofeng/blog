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
    <title>文章列表页</title>
    <style>
        .p{
            padding: 30px;
            border: 1px solid #888;
            margin: 20px;
        }
        .p a{
            color: #999;
            text-decoration: none;
        }
        .p a:hover{
            color:#333;
        }
        .p p{
            color:#999;
        }
    </style>
</head>
<body>
<h1>文章列表</h1>
<div id="list">
    <?php if(is_array($post)): foreach($post as $key=>$v): ?><div class="p">
            <h4><a href="<?php echo U('Index/post',array('id'=>$v['id']));?>"><?php echo ($v['title']); ?></a></h4>
            <p><?php echo (date('Y-m-d H:i:s',$v['timestamp'])); ?></p>
        </div><?php endforeach; endif; ?>
</div>
</body>
</html>
</div>
<footer>Copyright @ EasyBlog</footer>


</body>
</html>