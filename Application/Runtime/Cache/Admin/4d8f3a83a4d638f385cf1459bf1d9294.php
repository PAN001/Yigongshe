<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>资金支持-<?php echo (C("WEB_NAME")); ?></title>
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
  <div class="search-box">
  <form method="post" action="/Admin/Index/smoneysupport/">
    
    <div class="row no-gutter">
    <div class="col-90"><input name="mobile" type="text" placeholder="输入手机号进行搜索" class="input-text"></div>
    <div class="col-10"><input name="submit" type="submit" value=" " class="btn-search"></div>
    </div>
   
  </form>
   </div>
   
   <div class="lists">
    <?php if(is_array($moneysupport)): $i = 0; $__LIST__ = $moneysupport;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$moneysupport): $mod = ($i % 2 );++$i;?><div class="list-item">
     <div class="row bor-b no-gutter">
    <div class="col-80">
     <ul>
     <li>申请日期：<?php echo ($moneysupport["date"]); ?></li>
     <li>姓名：<?php $uid=$moneysupport['uid'];$m=M('user');$profile=$m->where("uid='$uid'")->find();echo $profile['name']; ?></li>
     <li>手机：<?php echo ($profile["mobile"]); ?></li>
     <li>金额：<?php echo ($moneysupport["price"]); ?>万</li>
     </ul>
    </div>
    <div class="col-20">
      <ul class="actions">
       <?php if($moneysupport['status']==1): ?><li class="bor-l"><a href="/Admin/Index/domoneysupport/id/<?php echo ($moneysupport["id"]); ?>/price/<?php echo ($moneysupport["price"]); ?>/uid/<?php echo ($moneysupport["uid"]); ?>/status/2/"><img src="/Public/template/admin/images/icon_gou0.png" alt=""/></a></li>
       <li class="bor-l bor-t"><a href="/Admin/Index/deletemoneysupport/id/<?php echo ($moneysupport["id"]); ?>/"><img src="/Public/template/admin/images/icon_x0.png" alt=""/></a></li>
       <?php elseif($moneysupport['status']==2): ?>
       <li class="bor-l"><a><img src="/Public/template/admin/images/icon_gou.png" alt=""/></a></li>
       <?php else: endif; ?>
      </ul>
    </div>
    </div>
    </div><?php endforeach; endif; else: echo "" ;endif; ?>
   </div>
      
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