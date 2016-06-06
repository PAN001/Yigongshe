<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>提供支持-<?php echo (C("WEB_NAME")); ?></title>
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
            提供支持
          </a>
      </h1>

      <div class="am-header-right am-header-nav">
          <a href="/User/Index/index" class="">
          <?php if((!isset($_SESSION['uid']) || $_SESSION['uid']=='')): ?><img src="http://wx.qlogo.cn/mmopen/PiajxSqBRaEJp4BW1UydINRymKI5rpibeGh3R6BjOK1qynDJraZ46QPzQ6f29qYWibBcl0GGibccRWPcAd7z0BbBibQ/0" alt="" class="am-comment-avatar" style="width:35px;height:35px;margin-top:8px;margin-bottom:8px;">
          <?php else: ?>
          <img src="<?php echo ($comprofile["avatar"]); ?>" alt="" class="am-comment-avatar" style="width:35px;height:35px;margin-top:8px;margin-bottom:8px;"><?php endif; ?>
          </a>
      </div>
  </header>
  <div class="am-titlebar am-titlebar-multi" style="padding-top:1px;margin-top:0px;">
    <h2 class="am-titlebar-title ">
        智慧支持
    </h2>
  </div>
<form class="am-form">
  <fieldset style="padding-bottom:0px;margin-bottom:-30px;">
    <div class="am-form-group">
        <?php if($intelapplystatus==1): ?><a class="am-btn am-btn-primary" style="width:49%;height:80px;text-align:center;line-height:60px;">义务工作（...）</a>
        <a class="am-btn am-btn-primary" style="width:49%;height:80px;text-align:center;line-height:60px;">咨询顾问（...）</a>
        <?php elseif($intelapplystatus==2): ?>
        <a class="am-btn am-btn-primary" style="width:49%;height:80px;text-align:center;line-height:60px;">义务工作（√）</a>
        <a class="am-btn am-btn-primary" style="width:49%;height:80px;text-align:center;line-height:60px;">咨询顾问（√）</a>
        <?php else: ?>
        <a href="/User/Index/intelapply" class="am-btn am-btn-primary" style="width:49%;height:80px;text-align:center;line-height:60px;">义务工作</a>
        <a href="/User/Index/intelapply" class="am-btn am-btn-primary" style="width:49%;height:80px;text-align:center;line-height:60px;">咨询顾问</a><?php endif; ?>
    </div>
  </fieldset>
</form>
  <div data-am-widget="titlebar" class="am-titlebar am-titlebar-multi" >
    <h2 class="am-titlebar-title ">
        资金支持
    </h2>
  </div>
  <!-- style="float:center;" -->
<form class="am-form" action="/User/Index/dosupportm" method="POST">
  <fieldset style="padding-bottom:0px;margin-bottom:-22px;">
    <input type="hidden" name="uid"  class="input-text wp120" value="<?php echo ($_SESSION["uid"]); ?>">
    <div class="am-form-group" style="float:left;margin-bottom:8px;">
	  <div text-align:center;><i class="am-icon-bank"></i>&nbsp银&nbsp&nbsp&nbsp行: <B><?php echo (C("WEB_BANKNAME")); ?></B>&nbsp&nbsp<i class="am-icon-user-md"></i>&nbsp户名: <B><?php echo (C("WEB_CARDNAME")); ?></B> </div>
	  <div text-align:center><i class="am-icon-hospital-o"></i>&nbsp&nbsp开户行: <B><?php echo (C("WEB_ACCOUNTBANK")); ?></B>&nbsp&nbsp<i class="am-icon-user"></i>&nbsp账号: <B><?php echo (C("WEB_BANKCARDID")); ?></B></div>
      <span class="am-form-caret"></span>
    </div>
    <div class="am-form-group" style="float:left;margin-bottom:8px;">
	  <div style="float:left;line-height:39px;"><i class="am-icon-bank"></i>&nbsp资助额&nbsp</div><input type="text"  placeholder="请输入资助金额" onkeyup="value=value.replace(/\D/g,'') " onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/\D/g,''))" id="price" name="price" style="float:left;width:35%;height:39px;" /><div style="float:left;line-height:39px;">&nbsp万元</div>
	  <?php if($moneystatus==1): ?><input type="submit" class="am-btn am-btn-primary" value="审核中" disabled="disabled" style="float:right;height:39px;">
      <?php else: ?>
      <input type="submit" class="am-btn am-btn-primary" value="复核" style="float:right;height:39px;"><?php endif; ?>
    </div>
  </fieldset>
</form>
  <div data-am-widget="titlebar" class="am-titlebar am-titlebar-multi" >
    <h2 class="am-titlebar-title ">
        其他支持
    </h2>
  </div>
<form class="am-form" action="/User/Index/doothersup" method="POST">
  <fieldset style="padding-bottom:0px;margin-bottom:-22px;">
    <input type="hidden" name="uid" value="<?php echo ($_SESSION["uid"]); ?>">
    <div class="am-form-group" style="margin-bottom:8px;">
      <textarea name="content" class="" rows="5" id="doc-ta-1" placeholder="填写详情（50字以内）" style="height:80px;"></textarea>
    </div>
    <?php if($otherstatus==1): ?><input type="submit" class="am-btn am-btn-primary" value="审核中" disabled="disabled" style="float:right;height:39px;width:100%">
    <?php else: ?>
    <input type="submit" class="am-btn am-btn-primary" value="申请" style="float:right;height:39px;width:100%"><?php endif; ?>
  </fieldset>
</form>




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