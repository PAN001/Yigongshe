<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>义务管理-<?php echo (C("WEB_NAME")); ?></title>
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
            义务管理
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
  <?php if(is_array($mydutyadmin)): $i = 0; $__LIST__ = $mydutyadmin;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$mydutyadmin): $mod = ($i % 2 );++$i; if($mydutyadmin['status']==2): ?><div class="am-panel am-panel-default" style="height:140px;">
    <div class="am-panel-bd"><?php echo ($mydutyadmin["content"]); ?></br></br></br><div style="float:left;vertical-align:bottom;"><?php echo ($myconadmin["adate"]); ?></div><div style="float:right;vertical-align:bottom;"><a class="am-btn am-btn-danger" style="height:39px;width:100px;" disabled="disabled">已完成</a></div></div>
  </div>
  <?php elseif($mydutyadmin['status']==1): ?>
  <div class="am-panel am-panel-default" style="height:140px;">
    <div class="am-panel-bd"><?php echo ($mydutyadmin["content"]); ?></br></br></br><div style="float:left;vertical-align:bottom;"><?php echo ($myconadmin["adate"]); ?></div><div style="float:right;vertical-align:bottom;"><a href="/User/Index/domydutyadmin/id/<?php echo ($mydutyadmin["id"]); ?>/status/2/" class="am-btn am-btn-warning" style="height:39px;width:100px;">处理中</a></div></div>
  </div>
  <?php else: ?>
  <div class="am-panel am-panel-default" style="height:140px;">
    <div class="am-panel-bd"><?php echo ($mydutyadmin["content"]); ?></br></br></br><a href="/User/Index/domydutyadmin/id/<?php echo ($mydutyadmin["id"]); ?>/status/1/" class="am-btn am-btn-primary" style="height:39px;width:49%;float:left;vertical-align:bottom;">√</a><a href="/User/Index/deletemydutyadmin/id/<?php echo ($mydutyadmin["id"]); ?>/" class="am-btn am-btn-danger" style="height:39px;width:49%;float:right;vertical-align:bottom;">×</a></div>
  </div><?php endif; endforeach; endif; else: echo "" ;endif; ?>
<div data-am-widget="navbar" class="am-navbar am-cf am-navbar-default "
     id="">
  <ul class="am-navbar-nav am-cf am-avg-sm-4">
    <li>
      <a href="/">
        <span class="am-icon-server"></span>
        <span class="am-navbar-label">综合信息</span>
      </a>
    </li>
    <li>
      <a href="/User/Index/support">
        <span class="am-icon-support"></span>
        <span class="am-navbar-label">提供支持</span>
      </a>
    </li>
    <li>
      <a href="/User/Index/index">
        <span class="am-icon-user"></span>
        <span class="am-navbar-label">我的信息</span>
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