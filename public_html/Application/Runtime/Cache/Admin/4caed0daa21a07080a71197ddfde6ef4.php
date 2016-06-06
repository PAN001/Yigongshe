<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>咨询管理-<?php echo (C("WEB_NAME")); ?></title>
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
    
    <div class="senfen-p con-font con-color con-pd-s con-mb bgcolor-10">
 身份要求（不限/会员/义工/代表/理事）积分（>20）
    </div>
 <?php if(is_array($consult)): $i = 0; $__LIST__ = $consult;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$consult): $mod = ($i % 2 );++$i; $uid=$consult['uid'];$m=M('user');$profile=$m->where("uid='$uid'")->find(); ?>
 <?php $uid=$consult['aid'];$m=M('user');$aprofile=$m->where("uid='$uid'")->find(); ?>
 <?php $id=$consult['cid'];$m=M('consultation_type');$type=$m->where("id='$id'")->find(); ?>
 <?php $cid=$consult['cid'];$m=M('intelapply');$intelapply=$m->where("cid='$cid' and status='2'")->select(); ?>
 <?php if((!isset($consult['aid']) || $consult['aid']=='' || $consult['aid']=='0') and ($consult['status']==0)): ?><div class="consult-p con-font con-color con-pd con-mb bgcolor-1">
  <table cellpadding="0" cellspacing="0" class="data-table">
     <tr><td>申请日期：<?php echo ($consult["date"]); ?></td><td>&nbsp;</td></tr>
     <tr><td>姓名：<?php echo ($profile["name"]); ?></td><td>状态：<span>待处理</span></td></tr>
     <tr><td>问题类型：<?php echo ($type["title"]); ?></td><td>手机：<?php echo ($profile["mobile"]); ?></td></tr>
   </table>
   <div class="con-area con-pd"><?php echo ($consult["content"]); ?>
   </div>
   <div class="con-bot">
   <form action="/Admin/Index/doconsult" method="POST">
   <input type="hidden" name="id" value="<?php echo ($consult["id"]); ?>">
   <div class="row no-gutter">
    <div class="col-50" style="float:left;"><select name="aid" onchange="abc(this.options[this.options.selectedIndex].id)" style="float:left;"><option value="">手机号</option><?php if(is_array($intelapply)): $i = 0; $__LIST__ = $intelapply;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$intelapply): $mod = ($i % 2 );++$i;?><option value="<?php echo ($intelapply["uid"]); ?>" id="<?php $uid=$intelapply['uid'];$m=M('user');$naprofile=$m->where("uid='$uid'")->find(); echo $naprofile['name']; ?>"><?php $uid=$intelapply['uid'];$m=M('user');$nprofile=$m->where("uid='$uid'")->find(); echo $nprofile['mobile']; ?></option><?php endforeach; endif; else: echo "" ;endif; ?></select> </div><div class="col-10" style="float:left;"><input id="ocontent" name="ocontent" style="background-color:transparent;border:none;"/></div>
    <script>
        function abc(s){
            ocontent.value=s;
            aid.value=s;
            document.all.aid.options[0].selected=true;
        }
        </script>
    <div class="col-40" style="float:right;"><input type="submit" value="发送" class="btn-send" style="float:right;"></div>
    </div>
    </form>
   </div>
  </div>
  <?php elseif((!isset($consult['aid']) || $consult['aid']=='') and ($consult['status']==0)): ?>

  <?php elseif($consult['status']==1): ?>
  
  <div class="sup-p2 con-font con-pd bgcolor-5 con-mt">
   <table cellpadding="0" cellspacing="0" class="data-table">
     <tr><td>日期：<?php echo ($consult["date"]); ?></td><td>&nbsp;</td></tr>
     <tr><td>姓名：<?php echo ($profile["name"]); ?></td><td>状态：<span>处理中</span></td></tr>
     <tr><td>问题类型：<?php echo ($type["title"]); ?></td><td>手机：<?php echo ($profile["mobile"]); ?></td></tr>
   </table>
  </div>
  <?php elseif($consult['status']==2): ?>
  <div class="sup-p2 con-font con-pd bgcolor-w con-mt">
   <table cellpadding="0" cellspacing="0" class="data-table">
     <tr><td>日期：<?php echo ($consult["date"]); ?></td><td>&nbsp;</td></tr>
     <tr><td>姓名：<?php echo ($profile["name"]); ?></td><td>状态：<span>已完成</span></td></tr>
     <tr><td>问题类型：<?php echo ($type["title"]); ?></td><td>手机：<?php echo ($profile["mobile"]); ?></td></tr>
   </table>
  </div>
  <?php else: ?>
  <div class="sup-p2 con-font con-pd bgcolor-11 con-mt">
  <table cellpadding="0" cellspacing="0" class="data-table">
     <tr><td>申请日期：<?php echo ($consult["date"]); ?></td><td>&nbsp;</td></tr>
     <tr><td>姓名：<?php echo ($profile["name"]); ?></td><td>状态：<span>发送中</span></td></tr>
     <tr><td>问题类型：<?php echo ($type["title"]); ?></td><td>手机：<?php echo ($profile["mobile"]); ?></td></tr>
   </table>
   <div class="con-area-dark con-pd"><?php echo ($consult["content"]); ?>
   </div>
   <div class="con-bot">
   <div class="row no-gutter">
    <div class="col-60"><?php echo ($aprofile["mobile"]); ?> <span class="con-color"><?php echo ($aprofile["name"]); ?></span></div>
    </div>
   </div>
  </div><?php endif; endforeach; endif; else: echo "" ;endif; ?>

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