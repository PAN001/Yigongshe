<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>视频资料-<?php echo (C("WEB_NAME")); ?></title>
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
        <div class="food-p con-font con-color con-pd con-mb">
  <form action="/Admin/Index/videoadd" method="POST">
      <input type="hidden" name="lastbalance" value="<?php echo ($financiallast["balance"]); ?>">
  <table cellpadding="0" cellspacing="0" class="data-table">
<tr><td><div class="num-p con-color con-font con-pd-l con-mb" style="height:30px;margin-top:15px;padding-top:0px;margin-bottom:5px;padding-bottom:5px;"><div class="col-50">视频标题：<input name="title" type="text" class="input-text" style="border-style:none;width:70%;"></div></div></td></tr>
<tr><td><div class="num-p con-color con-font con-pd-l con-mb" style="height:30px;margin-top:-3px;padding-top:0px;margin-bottom:0px;padding-bottom:0px;"><div class="col-50">视频地址：<input name="url" type="text" class="input-text" style="border-style:none;width:70%;"></div></div></td></tr>
<tr><td><div class="num-p con-color con-font con-pd-l con-mb" style="height:30px;margin-top:2px;padding-top:0px;margin-bottom:0px;padding-bottom:0px;"><div class="col-50">视频图片：<input name="thumb" type="text" class="input-text" style="border-style:none;width:70%;"></div></div></td></tr>
     <tr><td colspan="2"><div class="intergral-action con-pd" style="margin-top:0px;padding-top:0px;margin-bottom:0px;padding-bottom:0px;"><input type="submit" value="添加" class="btn-intergral" style="border-style:none;width:50%;"></div></td></tr>
   </table>
   </form>
  </div>
  <?php if(is_array($videos)): $i = 0; $__LIST__ = $videos;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$videos): $mod = ($i % 2 );++$i;?><div class="sup-p2 con-font con-pd bgcolor-w con-mt">
   <table cellpadding="0" cellspacing="0" class="data-table">
     <tr><td>视频标题：<?php echo ($videos["title"]); ?></td></tr>
     <tr><td>视频地址：<?php echo ($videos["url"]); ?></td></tr>
     <tr><td>添加时间：<?php echo ($videos["date"]); ?></td></tr>
   </table>
  </div><?php endforeach; endif; else: echo "" ;endif; ?>
  
  
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