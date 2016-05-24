<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>义务领域-<?php echo (C("WEB_NAME")); ?></title>
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
  <form action="/Admin/Index/dootype" method="POST">
  <table cellpadding="0" cellspacing="0" class="data-table">
<tr><td><div class="num-p con-color con-font con-pd-l con-mb" style="height:30px;margin-top:0px;padding-top:0px;margin-bottom:5px;padding-bottom:5px;"><div class="col-50">领域标题：<input name="title" type="text" class="input-text" style="border-style:none;width:70%;"></div></div></td></tr>
<tr><td><div class="num-p con-color con-font con-pd-l con-mb" style="height:30px;margin-top:0px;padding-top:0px;margin-bottom:15px;padding-bottom:5px;"><div class="col-50">领域简介：<textarea name="content" type="text" class="input-text" style="border-style:none;width:70%;"></textarea></div></div></td></tr>
     <tr><td colspan="2"><div class="intergral-action con-pd" ><input type="submit" value="添加" class="btn-intergral" style="border-style:none;width:50%;margin-bottom:-20px;padding-bottom:-10px;"></div></td></tr>
   </table>
   </form>
  </div>
  <?php if(is_array($obligationtype)): $i = 0; $__LIST__ = $obligationtype;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$obligationtype): $mod = ($i % 2 );++$i;?><div class="food-p con-font con-color con-pd con-mb">
  <form action="/Admin/Index/editotype/id/<?php echo ($obligationtype["id"]); ?>/" method="POST">
  <table cellpadding="0" cellspacing="0" class="data-table">
<tr><td><div class="num-p con-color con-font con-pd-l con-mb" style="height:30px;margin-top:0px;padding-top:0px;margin-bottom:5px;padding-bottom:5px;"><div class="col-50">领域标题：<input name="title" type="text" class="input-text" value="<?php echo ($obligationtype["title"]); ?>" style="border-style:none;width:70%;"></div></div></td></tr>
<tr><td><div class="num-p con-color con-font con-pd-l con-mb" style="height:30px;margin-top:0px;padding-top:0px;margin-bottom:15px;padding-bottom:5px;"><div class="col-50">领域简介：<textarea name="content" type="text" class="input-text" style="border-style:none;width:70%;"><?php echo ($obligationtype["content"]); ?></textarea></div></div></td></tr>
     <tr><td colspan="2"><div class="intergral-action con-pd" ><input type="submit" value="修改" class="btn-intergral" style="border-style:none;width:50%;margin-bottom:-20px;padding-bottom:-10px;"></div></td></tr>
   </table>
   </form>
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