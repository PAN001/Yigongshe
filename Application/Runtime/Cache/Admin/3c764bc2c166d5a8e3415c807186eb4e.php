<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>其他支持-<?php echo (C("WEB_NAME")); ?></title>
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
    <?php if(is_array($oneothersupport)): $i = 0; $__LIST__ = $oneothersupport;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$oneothersupport): $mod = ($i % 2 );++$i;?><div class="sup-p con-font con-color con-pd bgcolor-1">
   <table cellpadding="0" cellspacing="0" class="data-table">
     <tr><td>姓名：<?php $uid=$oneothersupport['uid'];$m=M('user');$profile=$m->where("uid='$uid'")->find();echo $profile['name']; ?></td><td>状态：<span>待审核</span></td></tr>
     <tr><td>日期：<?php echo ($oneothersupport["date"]); ?></td><td>手机：<?php echo ($profile["mobile"]); ?></td></tr>
   </table>
    <div class="con-area con-pd-s">
      详情：<?php echo ($oneothersupport["content"]); ?>
    </div>
    <table cellpadding="0" cellspacing="0" class="act-table">
     <tr><td class="bor-b-d"><a href="/Admin/Index/doothersupport/id/<?php echo ($oneothersupport["id"]); ?>/status/2/"><img src="/Public/template/admin/images/icon_gou_w.png"/></a></td><td>&nbsp;</td><td class="bor-b-d"><a href="/Admin/Index/deleteothersupport/id/<?php echo ($oneothersupport["id"]); ?>"><img src="/Public/template/admin/images/icon_x_w.png"/></a></td></tr>
    </table>
    
  </div><?php endforeach; endif; else: echo "" ;endif; ?>
  <?php if(is_array($twoothersupport)): $i = 0; $__LIST__ = $twoothersupport;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$twoothersupport): $mod = ($i % 2 );++$i;?><div class="sup-p2 con-font con-pd bgcolor-w con-mt">
   <table cellpadding="0" cellspacing="0" class="data-table">
     <tr><td>姓名：<?php $uid=$twoothersupport['uid'];$m=M('user');$twoprofile=$m->where("uid='$uid'")->find();echo $twoprofile['name']; ?></td><td>状态：<span>已通过</span></td></tr>
     <tr><td>日期：<?php echo ($twoothersupport["date"]); ?></td><td><?php echo ($twoprofile["mobile"]); ?></td></tr>
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