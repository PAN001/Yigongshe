<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>视频资料-<?php echo (C("WEB_NAME")); ?></title>
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp"/>
  <link rel="icon" type="image/png" href="/Public/template/default/assets/i/favicon.png">
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="icon" sizes="192x192" href="/Public/template/default/assets/i/app-icon72x72@2x.png">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="Amaze UI"/>
  <link rel="apple-touch-icon-precomposed" href="/Public/template/default/assets/i/app-icon72x72@2x.png">
  <meta name="msapplication-TileImage" content="/Public/template/default/assets/i/app-icon72x72@2x.png">
  <meta name="msapplication-TileColor" content="#0e90d2">
  <link rel="stylesheet" href="/Public/template/default/assets/css/amazeui.min.css">
  <link rel="stylesheet" href="/Public/template/default/assets/css/app.css">
</head>
<body>
  <header data-am-widget="header"
          class="am-header am-header-default">
      <div class="am-header-left am-header-nav">
          <a href="/" class="">

                <i class="am-header-icon am-icon-home"></i>
          </a>
      </div>

      <h1 class="am-header-title">
          <a href="" class="">
            视频资料
          </a>
      </h1>

      <div class="am-header-right am-header-nav">
          <a href="/User/Index/index" class="">
          <?php if((!isset($_SESSION['uid']) || $_SESSION['uid']=='')): ?><img src="/Public/template/default/assets/i/yigavatar.jpg" alt="" class="am-comment-avatar" style="width:35px;height:35px;margin-top:8px;margin-bottom:8px;">
          <?php else: ?>
          <img src="<?php echo ($comprofile["avatar"]); ?>" alt="" class="am-comment-avatar" style="width:35px;height:35px;margin-top:8px;margin-bottom:8px;"><?php endif; ?>
          </a>
      </div>
  </header>
  
    <div class="am-panel-group" id="accordion">
  <?php if(is_array($video)): $i = 0; $__LIST__ = array_slice($video,0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$video): $mod = ($i % 2 );++$i;?><div class="am-panel am-panel-default">
    <div class="am-panel-hd">
      <h4 class="am-panel-title" data-am-collapse="{parent: '#accordion', target: '#do-not-say-0'}">
        <?php echo ($video["title"]); ?>
      </h4>
    </div>
    <div id="do-not-say-0" class="am-panel-collapse am-collapse am-in">
      <div class="am-panel-bd">
        <a href="<?php echo ($video["url"]); ?>"><img src="<?php echo ($video["thumb"]); ?>" style="height:100%;width:100%;" class="am-img-thumbnail"></a>
      </div>
    </div>
  </div><?php endforeach; endif; else: echo "" ;endif; ?>
  <?php if(is_array($videoa)): $i = 0; $__LIST__ = array_slice($videoa,1,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$videoa): $mod = ($i % 2 );++$i;?><div class="am-panel am-panel-default">
    <div class="am-panel-hd">
      <h4 class="am-panel-title" data-am-collapse="{parent: '#accordion', target: '#do-not-say-<?php echo ($videoa["id"]); ?>'}">
        <?php echo ($videoa["title"]); ?>
      </h4>
    </div>
    <div id="do-not-say-<?php echo ($videoa["id"]); ?>" class="am-panel-collapse am-collapse">
      <div class="am-panel-bd">
        <a href="<?php echo ($videoa["url"]); ?>"><img src="<?php echo ($videoa["thumb"]); ?>" style="height:100%;width:100%;" class="am-img-thumbnail"></a>
      </div>
    </div>
  </div><?php endforeach; endif; else: echo "" ;endif; ?>
</div>

<div data-am-widget="navbar" class="am-navbar am-cf am-navbar-default "
     id="">
  <ul class="am-navbar-nav am-cf am-avg-sm-4">
    <li>
      <a href="/Home/Index/index">
        <span class="am-icon-server"></span>
        <span class="am-navbar-label">工社服务</span>
      </a>
    </li>
    <li>
      <a href="/Home/Index/video">
        <span class="am-icon-video-camera"></span>
        <span class="am-navbar-label">视频资料</span>
      </a>
    </li>
    <li>
      <a href="/Home/Index/teletext">
        <span class="am-icon-picture-o"></span>
        <span class="am-navbar-label">图文资料</span>
      </a>
    </li>
    <li>
      <a href="/Home/Index/usermanual">
        <span class="am-icon-book"></span>
        <span class="am-navbar-label">会员手册</span>
      </a>
    </li>
  </ul>
</div>
<!--[if (gte IE 9)|!(IE)]><!-->
<script src="/Public/template/default/assets/js/jquery.min.js"></script>
<!--<![endif]-->
<!--[if lte IE 8 ]>
<script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="/Public/template/default/assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->
<script src="/Public/template/default/assets/js/amazeui.min.js"></script>
</body>
</html>