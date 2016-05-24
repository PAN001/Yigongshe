<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>后台登录-<?php echo (C("WEB_NAME")); ?></title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="/favicon.ico">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <link rel="stylesheet" href="/Public/template/admin/css/sm.css">
    <link rel="stylesheet" href="/Public/template/admin/css/sm-extend.css">
    <link rel="stylesheet" href="/Public/template/admin/css/main-admin.css">

  </head>
  <body>
    <h1 class="bigtit bot-line">后台登录</h1>
    
    <div class="content-box no-bottom">
    <div class="main-con">
  <div class="integral-p con-pd-l con-mb bor-b2">
  <div class="search-box2">
  <form method="post" action="">
    <div class="row no-gutter">
    <div class="col-66" style="margin:0 auto;width:100%;text-align:center;"><input name="username" type="text" placeholder="请输入用户名" class="input-text" style="margin:0 auto;width:100%;"></div><br><br>
    <div class="col-66" style="margin:0 auto;width:100%;text-align:center;"><input name="password" type="password" placeholder="请输入密码" class="input-text" style="margin:0 auto;width:100%;"></div>
    </div>
   <div class="intergral-action con-pd"><input type="submit" value="登  录" class="btn-intergral"></div>
  </form>
   </div>
  </div>
  
  
  </div>
  
  
</div>
    
    

          
          
<script src="/Public/template/admin/js/zepto.min.js"></script>
<script src="/Public/template/admin/js/sm.js"></script>
<script src="/Public/template/admin/js/sm-extend.js"></script>
  </body>
</html>