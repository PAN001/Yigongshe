<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>工社餐饮-<?php echo (C("WEB_NAME")); ?></title>
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
  <table cellpadding="0" cellspacing="0" class="data-table">
     <tr><td>总人数：50</td><td>身份要求（会员/义工/代表/理事）</td></tr>
     <tr><td>积分：（>20）</td><td>携带人数（<3）</td></tr>
   </table>
  </div>
  <div class="food-p2 con-font con-pd bgcolor-w">
    <table width="99%" cellpadding="0" cellspacing="0" class="data-table">
    <tr>
      <td>日期</td>
      <td>姓名</td>
      <td>人数</td>
      <td>手机</td>
      <td>时间</td>
    </tr>
    <?php if(is_array($food)): $i = 0; $__LIST__ = $food;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$food): $mod = ($i % 2 );++$i;?><tr>
      <td><?php echo ($food["date"]); ?></td>
      <td><?php $uid=$food['uid'];$m=M('user');$profile=$m->where("uid='$uid'")->find();echo $profile['name']; ?></td>
      <td><?php echo ($food["number"]); ?></td>
      <td><?php echo ($profile["mobile"]); ?></td>
      <td><?php $id=$food['tid'];$m=M('restaurant_time');$restaurant_time=$m->where("id='$id'")->find();echo $restaurant_time['title']; ?></td>
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