<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>个人信息-<?php echo (C("WEB_NAME")); ?></title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="/favicon.ico">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <link rel="stylesheet" href="/Public/template/css/sm.css">
    <link rel="stylesheet" href="/Public/template/css/sm-extend.css">
    <link rel="stylesheet" href="/Public/template/css/main.css">
          
  </head>
  <body>
  
  
    
    <div class="content-box no-top">           
    
    <div class="myinfo-top">
       
        <div class="info-con clearfix">
       <img src="<?php echo ($profile["avatar"]); ?>" class="avatar">
         <div class="text">身份：<?php $id=$profile['type'];$m=M('user_type');$usertype=$m->where("id='$id'")->find();if($usertype){ echo $usertype['title']; }else{ echo '会员'; } ?><br>积分：<a href="/User/Index/integral"><?php echo ($profile["score"]); ?></a><br>入会日期：<?php echo ($profile["joindate"]); ?></div>
        </div>
      
    </div>
       <div class="main-con main-con2">

         <div class="con-font con-mb">
           <table cellpadding="2" cellspacing="2" border="1" class="info-table">
     <tr><td>姓名： <span style="color:#000;"><?php echo ($profile["name"]); ?></span></td><td>性别： <span style="color:#000;"><?php if($profile['sex']==1){echo '男';}else{echo '女';} ?></span></td></tr>
     <tr><td>出生日期：<span style="color:#000;"><?php echo ($profile["birth"]); ?></span></td><td>手机号：<span style="color:#000;"><a href="tel:<?php echo ($profile["mobile"]); ?>" style="color:#000000"><?php echo ($profile["mobile"]); ?></a></span></td></tr>
     <tr>
     <?php if($profile['comparison']==1): ?><td colspan="2">
         <input type="hidden" name="uid" value="<?php echo ($_SESSION["uid"]); ?>">
         推荐人：<span style="color:#000;"><?php echo ($profile["rmobile"]); ?></span>
         <span style="color:#000;"><?php $mobile=$profile['rmobile'];$m=M('user');$rname=$m->where("mobile='$mobile'")->find(); echo ($rname["name"]); ?></span>
         <?php if($profile['status']==0): ?><a href="/User/Index/dorecommend/uid/<?php echo ($_SESSION["uid"]); ?>/status/1/" style="font-size:10pt;float:right;background:#f7b47f;color:#fff;padding:0 0.3rem;border-style:none;font-size:0.7rem; height:1rem;">申请</a>
         <?php elseif($profile['status']==1): ?>
         <a style="font-size:10pt;float:right;background:#f7b47f;color:#fff;padding:0 0.3rem;border-style:none;font-size:0.7rem; height:1rem;">处理中</a>
         <?php elseif($profile['status']==2): ?>
         <a style="font-size:10pt;float:right;background:#f7b47f;color:#fff;padding:0 0.3rem;border-style:none;font-size:0.7rem; height:1rem;">已通过</a>
         <?php else: endif; ?>
     </td>
     <?php else: ?>
     <td colspan="2">
         <form action="/User/Index/dormobile" method="POST" style="float:left;">
         <input type="hidden" name="uid" value="<?php echo ($_SESSION["uid"]); ?>">
         推荐人：<span style="color:#000;"><input type="text" name="rmobile" class="input-text wp90" value="<?php echo ($profile["rmobile"]); ?>" style="border-style:none;width:120px;" placeholder="推荐人手机号"><input type="submit" value="比对" style="font-size:10pt;font-size:10pt;float:right;background:#f7b47f;color:#fff;padding:0 0.3rem;border-style:none;font-size:0.7rem; height:1rem;"></span>
         </form>
     </td><?php endif; ?>
     </tr>
     <tr>
     <td>身份申请：
     
     <?php if(($profile['score'] >= 10) and ($profile['score'] < 100)): if($profile['type']==1): ?>您已经是义工
         <?php else: ?>
             <?php if($user_type_apply_status==1){ echo '审核中'; }else{ echo "<a href='/User/Index/apply/cid/1' style='color:#000000;'>点击申请义工</a>"; } endif; ?>
     <?php elseif(($profile['score'] >= 100) and ($profile['score'] < 1000)): ?>
         <?php if($profile['type']==2): ?>您已经是代表
         <?php else: ?>
             <?php if($user_type_apply_status==1){ echo '审核中'; }else{ echo "<a href='/User/Index/apply/cid/2' style='color:#000000;'>点击申请代表</a>"; } endif; ?>
     <?php elseif($profile['score'] >= 1000): ?>
         <?php if($profile['type']==3): ?>您已经是理事
         <?php else: ?>
             <?php if($user_type_apply_status==1){ echo '审核中'; }else{ echo "<a href='/User/Index/apply/cid/3' style='color:#000000;'>点击申请理事</a>"; } endif; ?>
     <?php else: ?>积分不足<?php endif; ?>
     </td>
     <td>我的推荐：<a href="/User/Index/myrecommend" style="color:red;">（ <?php echo ($myrecommend); ?> ）</a></td>
     </tr>
     <tr>
         <td>财务监管：<?php if($profile['financeauth']==0): ?>暂无权限<img src="/Public/template/images/locked.png" class="icon-lock">
         <?php else: ?>
             <a href="/User/Index/finance" style="color:#000;">点击进入</a><?php endif; ?>
         </td>
         <td>我的义务：
         <?php if($indexapplystatus==1): ?>审核中<img src="/Public/template/images/locked.png">
            <?php elseif($indexapplystatus==2): ?>
              <a href="/User/Index/myduty" style="color:#000;">点击进入</a>
            <?php else: ?>
              <a href="/User/Index/intelapply" style="color:#000;">点击申请</a><img src="/Public/template/images/locked.png"><?php endif; ?>
         </td>
     </tr>
     <tr><td colspan="2">地址：<span style="color:#000;"><?php echo ($profile["address"]); ?></span></td></tr>
   </table>
        </div>
  
  
       </div>
       
       
       <!--<div class="con-font con-pd text-center color-gray bgcolor-w con-mb2">
          联系电话：<a href="tel:<?php echo (C("WEB_TELEPHONE")); ?>" style="color:#000000"><?php echo (C("WEB_TELEPHONE")); ?></a>  技术支持：<a href="http://www.singka.cn" style="color:#000000">晟嘉网络</a>
       </div>-->
       
    </div>
    
    
    
    
    <nav class="bar bar-tab">
    <a class="tab-item external" href="/">
      <span class="tab-label">综合信息</span>
    </a>
    <a class="tab-item external" href="/User/Index/support">
      <span class="tab-label">提供支持</span>
    </a>
    <a class="tab-item external active" href="/User/Index/index">
      <span class="tab-label">我的信息</span>
    </a>
   
    </nav>

          
          
<script src="/Public/template/js/zepto.min.js"></script>
<script src="/Public/template/js/sm.js"></script>
<script src="/Public/template/js/sm-extend.js"></script>
  </body>
</html>