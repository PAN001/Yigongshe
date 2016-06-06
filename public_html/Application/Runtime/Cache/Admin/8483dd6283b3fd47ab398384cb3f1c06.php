<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>智慧支持-<?php echo (C("WEB_NAME")); ?></title>
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
  <div class="form-box">
  <form method="post" action="">
    
    <div class="row no-gutter">
    <div class="col-10"><input name="submit" type="submit" value=" " class="btn-search"></div>
    <div class="col-90"><input name="text" type="text" placeholder="输入手机号搜索" class="input-text"><label>义务领域</label><select><option>请选择</option></select><label>时间表</label><input name="text" type="text" value="20" class="input-text2"></div>
    </div>
   
  </form>
   </div>
   
   <div class="lists">
    <?php if(is_array($witsupport)): $i = 0; $__LIST__ = $witsupport;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$witsupport): $mod = ($i % 2 );++$i;?><div class="list-item">
     <div class="row bor-b no-gutter">
    <div class="col-100">
     <ul>
     <a href="/Admin/Index/witsupportdetail/uid/<?php echo ($witsupport["uid"]); ?>">
     <li>申请日期：<?php echo ($witsupport["date"]); ?>　姓名：<?php $uid=$witsupport['uid'];$m=M('user');$profile=$m->where("uid='$uid'")->find();echo $profile['name']; ?>　性别：<?php if($profile['sex']==1): ?>男<?php else: ?>女<?php endif; ?><br>
出生日期：<?php echo ($profile["birth"]); ?>　积分：<?php echo ($profile["score"]); ?>　身份：<?php $id=$profile['type'];$m=M('user_type');$usertype=$m->where("id='$id'")->find();if($usertype){ echo $usertype['title']; }else{ echo "会员"; } ?><br>
义务领域：<?php $id=$witsupport['oid'];$m=M('obligation_type');$obligation_type=$m->where("id='$id'")->find(); echo $obligation_type['title']; ?>　咨询领域：<?php $id=$witsupport['cid'];$m=M('consultation_type');$consultation_type=$m->where("id='$id'")->find(); echo $consultation_type['title']; ?>　状态：<?php if($witsupport['status']==1): ?>待审核<?php else: ?>通过<?php endif; ?><br>
当前义务：<?php $uid=$profile['uid'];$m=M('obligation');$nowobligation=$m->where("uid='$uid' and status='1'")->count();echo $nowobligation; ?>　当前咨询：<?php $aid=$profile['uid'];$m=M('consultation');$nowconsultation=$m->where("aid='$aid'")->count();echo $nowconsultation; ?>　手机：<?php echo ($profile["mobile"]); ?>
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