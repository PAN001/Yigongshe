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

    <link rel="stylesheet" href="/Public/template/css/sm.css">
    <link rel="stylesheet" href="/Public/template/css/sm-extend.css">
    <link rel="stylesheet" href="/Public/template/css/main.css">
          
  </head>
  <body>
    
    <div class="content-box no-top">
       <div class="main-con">
   
  <form class="form-box">
  <div class="con-font con-pd bgcolor-w con-mb2">
           
              <div class="row" style="height:460px;">
                  <textarea name="content" style="width:100%;height:100%;font-size:10pt;background-color:rgba(0,0,0,0);border-style:none;" disabled="disabled"><?php $m=M('setting');$usermanual=$m->where("id='1'")->find(); echo $usermanual['content']; ?></textarea>
              </div>
              
         
        </div>
    </form>
       </div>
       
       
       
       
    </div>
    <nav class="bar bar-tab">
    <a class="tab-item external" href="/Home/Index/index">
      <span class="tab-label">工社服务</span>
    </a>
    <a class="tab-item external" href="/Home/Index/video">
      <span class="tab-label">视频资料</span>
    </a>
    <a class="tab-item external" href="/Home/Index/teletext">
      <span class="tab-label">图文资料</span>
    </a>
    <a class="tab-item external active" href="/Home/Index/usermanual">
      <span class="tab-label">会员手册</span>
    </a>
   
  </nav>


          
          
<script src="/Public/template/js/zepto.min.js"></script>
<script src="/Public/template/js/sm.js"></script>
<script src="/Public/template/js/sm-extend.js"></script>
  </body>
</html>