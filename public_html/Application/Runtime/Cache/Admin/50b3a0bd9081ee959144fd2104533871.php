<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>活动报名详情-<?php echo (C("WEB_NAME")); ?></title>
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
        <div class="lists" style="margin-top:-20px;">
    <div class="list-item">
     <div class="row bor-b no-gutter">
    <div class="col-100">
     <ul>
     <li>活动编号：<?php echo ($activity["id"]); ?>　活动时间：<?php echo ($activity["date"]); ?>　活动人数：<?php echo ($activity["allnumber"]); ?><br>
     用户类型：<?php $id=$activity['usertype'];$m=M('user_type');$usertype=$m->where("id='$id'")->find();if($usertype){ echo $usertype['title']; }else{ echo '会员'; } ?>　用户积分：<?php echo ($activity["integral"]); ?>　携带人数：<?php echo ($activity["usernumber"]); ?><br>
     活动内容：<?php echo ($activity["content"]); ?>
     </li>
     </ul>
    </div>
    
    </div>
    </div>
   </div>
  <div class="food-p2 con-font con-pd bgcolor-w">
    <table width="99%" cellpadding="0" cellspacing="0" class="data-table">
    <tr>
      <td>姓名</td>
      <td>手机</td>
      <td>人数</td>
    </tr>
    <?php if(is_array($activitydetail)): $i = 0; $__LIST__ = $activitydetail;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$activitydetail): $mod = ($i % 2 );++$i;?><tr>
      <td><?php $uid=$activitydetail['uid'];$m=M('user');$profile=$m->where("uid='$uid'")->find(); echo $profile['name']; ?></td>
      <td><?php echo ($profile["mobile"]); ?></td>
      <td><?php echo ($activitydetail["number"]); ?></td>
    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>

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