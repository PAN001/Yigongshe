<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>用户列表-<?php echo (C("WEB_NAME")); ?></title>
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
  <form method="post" action="/Admin/Index/dosearchuser/">
    
    <div class="row no-gutter">
    <div class="col-90"><input name="mobile" type="text" placeholder="输入手机号进行搜索" class="input-text"></div>
    <div class="col-10"><input name="submit" type="submit" value=" " class="btn-search"></div>
    </div>
   
  </form>
   </div>
   
   <div class="lists">
    <div class="list-item">
     <div class="row bor-b no-gutter">
    <div class="col-100">
     <ul>
     <li>姓名：<?php echo ($dosearchuser["name"]); ?>　性别：<?php if($dosearchuser['sex']==1): ?>男<?php else: ?>女<?php endif; ?>　出生日期：<?php echo ($dosearchuser["birth"]); ?><br>手机号：<?php echo ($dosearchuser["mobile"]); ?>　推荐人：<?php echo ($dosearchuser["rmobile"]); ?><br>入会日期：<?php echo ($dosearchuser["joindate"]); ?>　积分：<?php echo ($dosearchuser["score"]); ?>　身份：<?php $id=$dosearchuser['type'];$m=M('user_type');$usertype=$m->where("id='$id'")->find();if($usertype){ echo $usertype['title']; }else{ echo "会员"; } ?><br>地址：<?php echo ($dosearchuser["address"]); ?>
</li>
     </ul>
    </div>
    
    </div>
    </div>
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