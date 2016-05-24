<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>会员手册-<?php echo (C("WEB_NAME")); ?></title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="/favicon.ico">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <link rel="stylesheet" href="/Public/template/admin/css/sm.css">
    <link rel="stylesheet" href="/Public/template/admin/css/sm-extend.css">
    <link rel="stylesheet" href="/Public/template/admin/css/main-admin.css">

  </head>
  <body>
    <div class="content-box no-top">
    <div class="main-con">
        <form action="" method="POST">
 <div class="manual-p con-font con-color con-pd-s con-mb">
     <div class="con-area con-pd" style="margin:0px;padding:0px;">
     <textarea name="content" style="width:100%;height:410px;font-size:12pt;background-color:rgba(0,0,0,0);border-style:none;"><?php $m=M('setting');$usermanual=$m->where("id='1'")->find(); echo $usermanual['content']; ?></textarea>
   </div>
   </div>
  <div class="manual-action con-pd"><input type="submit" value="我已阅读并同意员工手册条款" class="btn-agree" style="font-size:10pt;"></div>
  </form>
  </div>
  
  
</div>
    
    <nav class="bar bar-tab">
    <a class="tab-item external" href="/Admin">
      <span class="tab-label">返回导航</span>
    </a>
    </nav>

          
          
<script src="/Public/template/admin/js/zepto.min.js"></script>
<script src="/Public/template/admin/js/sm.js"></script>
<script src="/Public/template/admin/js/sm-extend.js"></script>
  </body>
</html>