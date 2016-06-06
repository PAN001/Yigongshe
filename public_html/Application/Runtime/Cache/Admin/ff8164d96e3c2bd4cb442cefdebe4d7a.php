<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>身份审核-<?php echo (C("WEB_NAME")); ?></title>
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
    <?php if(is_array($oneidentity)): $i = 0; $__LIST__ = $oneidentity;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$oneidentity): $mod = ($i % 2 );++$i;?><div class="sup-p con-font con-color con-pd bgcolor-1">
   <table cellpadding="0" cellspacing="0" class="data-table">
     <tr><td>日期：<?php echo ($oneidentity["date"]); ?>  姓名：<?php $uid=$oneidentity['uid'];$m=M('user');$profile=$m->where("uid='$uid'")->find();echo $profile['name']; ?>  状态：<span>待审核</span></td></tr>
     <tr><td>出生日期：<?php echo ($profile["birth"]); ?>  积分：<?php echo ($profile["score"]); ?>  申请身份：<?php $id=$oneidentity['tid'];$m=M('user_type');$user_type=$m->where("id='$id'")->find();echo $user_type['title']; ?></td></tr>
     <tr><td>推荐人：<?php echo ($profile["rmobile"]); ?>  手机：<?php echo ($profile["mobile"]); ?></td></tr>
   </table>
    <div class="con-area con-pd-s">
      详情：<?php echo ($oneidentity["content"]); ?>
    </div>
    <table cellpadding="0" cellspacing="0" class="act-table">
     <tr><td class="bor-b-d"><a href="/Admin/Index/doidentity/id/<?php echo ($oneidentity["id"]); ?>/uid/<?php echo ($oneidentity["uid"]); ?>/type/<?php echo ($oneidentity["tid"]); ?>/status/2/"><img src="/Public/template/admin/images/icon_gou_w.png"/></a></td><td>&nbsp;</td><td class="bor-b-d"><a href="/Admin/Index/doidentity/id/<?php echo ($oneidentity["id"]); ?>/uid/<?php echo ($oneidentity["uid"]); ?>/status/0/"><img src="/Public/template/admin/images/icon_x_w.png"/></a></td></tr>
    </table>
    
  </div><?php endforeach; endif; else: echo "" ;endif; ?>
  <?php if(is_array($twoidentity)): $i = 0; $__LIST__ = $twoidentity;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$twoidentity): $mod = ($i % 2 );++$i;?><div class="sup-p2 con-font con-pd bgcolor-w con-mt">
   <table cellpadding="0" cellspacing="0" class="data-table">
     <tr><td>日期：<?php echo ($twoidentity["date"]); ?>  姓名：<?php $uid=$twoidentity['uid'];$m=M('user');$twoprofile=$m->where("uid='$uid'")->find();echo $twoprofile['name']; ?>  状态：<span>已通过</span></td></tr>
     <tr><td>出生日期：<?php echo ($twoprofile["birth"]); ?>  积分：<?php echo ($twoprofile["score"]); ?>  申请身份：<?php $id=$twoidentity['tid'];$m=M('user_type');$twouser_type=$m->where("id='$id'")->find();echo $twouser_type['title']; ?></td></tr>
     <tr><td>推荐人：<?php echo ($twoprofile["rmobile"]); ?>  手机：<?php echo ($twoprofile["mobile"]); ?></td></tr>
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