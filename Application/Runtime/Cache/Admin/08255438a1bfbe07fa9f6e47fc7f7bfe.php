<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>工社活动-<?php echo (C("WEB_NAME")); ?></title>
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
  <form action="/Admin/Index/doactivity" method="POST">
  <table cellpadding="0" cellspacing="0" class="data-table">
<tr><td><div class="num-p con-color con-font con-pd-l con-mb" style="height:30px;margin-top:0px;padding-top:0px;margin-bottom:5px;padding-bottom:5px;"><div class="col-50">活动人数：<input name="allnumber" type="text" class="input-text" style="border-style:none;width:50%;"></div></div></td><td><div class="num-p con-color con-font con-pd-l con-mb" style="height:30px;margin-top:0px;padding-top:0px;margin-bottom:5px;padding-bottom:5px;"><div class="col-50">用户类型：<select name="usertype" class="input-text" style="border-style:none;width:50%;"><option value ="0">会员</option><?php if(is_array($usertype)): $i = 0; $__LIST__ = $usertype;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$usertype): $mod = ($i % 2 );++$i;?><option value ="<?php echo ($usertype["id"]); ?>"><?php echo ($usertype["title"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?></select></div></div></td></tr>
<tr><td><div class="num-p con-color con-font con-pd-l con-mb" style="height:30px;margin-top:0px;padding-top:0px;margin-bottom:5px;padding-bottom:5px;"><div class="col-50">用户积分：<input name="integral" type="text" class="input-text" style="border-style:none;width:50%;"></div></div></td><td><div class="num-p con-color con-font con-pd-l con-mb" style="height:30px;margin-top:0px;padding-top:0px;margin-bottom:5px;padding-bottom:5px;"><div class="col-50">携带人数：<input name="usernumber" type="text" class="input-text" style="border-style:none;width:50%;"></div></div></td></tr>
<tr><td colspan="2"><div class="num-p con-color con-font con-pd-l con-mb" style="height:30px;margin-top:0px;padding-top:0px;margin-bottom:15px;padding-bottom:5px;"><div class="col-50">活动简介：<textarea name="content" type="text" class="input-text" style="border-style:none;width:70%;"></textarea></div></div></td></tr>
     <tr><td colspan="2"><div class="intergral-action con-pd" ><input type="submit" value="添加" class="btn-intergral" style="border-style:none;width:50%;margin-bottom:-20px;padding-bottom:-10px;"></div></td></tr>
   </table>
   </form>
  </div>
   <div class="lists">
    <?php if(is_array($activity)): $i = 0; $__LIST__ = $activity;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$activity): $mod = ($i % 2 );++$i;?><div class="list-item">
     <div class="row bor-b no-gutter">
    <div class="col-100">
     <ul>
     <a href="/Admin/Index/activitydetail/id/<?php echo ($activity["id"]); ?>">
     <li>活动编号：<?php echo ($activity["id"]); ?>　活动时间：<?php echo ($activity["date"]); ?>　活动人数：<?php echo ($activity["allnumber"]); ?><br>
     用户类型：<?php $id=$activity['usertype'];$m=M('user_type');$usertype=$m->where("id='$id'")->find();if($usertype){ echo $usertype['title']; }else{ echo '会员'; } ?>　用户积分：<?php echo ($activity["integral"]); ?>　携带人数：<?php echo ($activity["usernumber"]); ?><br>
     活动内容：<?php echo ($activity["content"]); ?>
     </li></a>
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