<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>图文资料-<?php echo (C("WEB_NAME")); ?></title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="/favicon.ico">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <link rel="stylesheet" href="/Public/template/css/sm.css">
    <link rel="stylesheet" href="/Public/template/css/sm-extend.css">
    <link rel="stylesheet" href="/Public/template/css/main.css">
          
  </head>
  <body>
    <div class="content-box no-top">
       <div class="main-con">
        <?php if(is_array($article)): $i = 0; $__LIST__ = $article;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$article): $mod = ($i % 2 );++$i;?><a href="<?php echo ($article["url"]); ?>"><div class="con-font con-pd bgcolor-w con-mb">
              <div class="row v-bg video-item">
              <img src="<?php echo ($article["thumb"]); ?>" style="height:100%;width:100%;">
              </div>
              <p style="color:#000"><?php echo ($article["title"]); ?><span style="float:right;"><?php echo ($article["date"]); ?></span></p>
        </div></a><?php endforeach; endif; else: echo "" ;endif; ?>
       </div>
    </div>
    
    <nav class="bar bar-tab">
    <a class="tab-item external" href="/Home/Index/index">
      <span class="tab-label">工社服务</span>
    </a>
    <a class="tab-item external" href="/Home/Index/video">
      <span class="tab-label">视频资料</span>
    </a>
    <a class="tab-item external active" href="/Home/Index/teletext">
      <span class="tab-label">图文资料</span>
    </a>
    <a class="tab-item external" href="/Home/Index/usermanual">
      <span class="tab-label">会员手册</span>
    </a>
   
  </nav>

          
          
<script src="/Public/template/js/zepto.min.js"></script>
<script src="/Public/template/js/sm.js"></script>
<script src="/Public/template/js/sm-extend.js"></script>
  </body>
</html>