<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo ($applyid["title"]); ?>申请-<?php echo (C("WEB_NAME")); ?></title>
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
   
  <form class="form-box" action="/User/Index/doapply" method="POST">
  <div class="con-font con-pd bgcolor-w con-mb2">
           
              <div class="row">
              <input type="hidden" name="tid" value="<?php echo ($applyid["id"]); ?>">
              <input type="hidden" name="uid" value="<?php echo ($_SESSION["uid"]); ?>">
              <textarea name="content" class="textarea-unit2" placeholder="申请叙述（200字）"></textarea>
              </div>
              
         
        </div>
  <div class="text-center"><input type="submit" class="btn-submit2 wp60" value="提 交"></div>
    </form>
       </div>
       
       
    </div>
    
   <nav class="bar bar-tab">
    <a class="tab-item external" href="/">
      <span class="tab-label">综合信息</span>
    </a>
    <a class="tab-item external" href="/User/Index/support">
      <span class="tab-label">提供支持</span>
    </a>
    <a class="tab-item external active" href="/User/Index/index">
      <span class="tab-label">我的信息</span>
    </a>
   
  </nav>
             

          
          
<script src="/Public/template/js/zepto.min.js"></script>
<script src="/Public/template/js/sm.js"></script>
<script src="/Public/template/js/sm-extend.js"></script>
  </body>
</html>