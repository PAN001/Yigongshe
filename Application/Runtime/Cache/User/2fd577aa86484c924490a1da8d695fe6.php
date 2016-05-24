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

    <link rel="stylesheet" href="/Public/template/css/sm.css">
    <link rel="stylesheet" href="/Public/template/css/sm-extend.css">
    <link rel="stylesheet" href="/Public/template/css/main.css">
          
  </head>
  <body>
    <div class="content-box no-top">
       <div class="main-con">
  <?php if(is_array($myconadmin)): $i = 0; $__LIST__ = $myconadmin;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$myconadmin): $mod = ($i % 2 );++$i; if($myconadmin['status']==2): ?><div class="con-font con-pd bgcolor-w con-mb">
           <form class="form-box" action="">
              <div class="row">
              <p style="color:red;"><?php $id=$myconadmin['cid'];$m=M('consultation_type');$consultation_type=$m->where("id='$id'")->find();echo $consultation_type['title']; ?></p>
              <p class="textarea-unit3" placeholder=""><?php echo ($myconadmin["content"]); ?></p>
              </div>
              <div class="row btn-action2">
               <input name="ok" type="button" value="已完成" class="btn-02" disabled="disabled"><span><?php echo ($myconadmin["adate"]); ?></span>
              </div>
           </form>   
        </div>
    <?php elseif($myconadmin['status']==1): ?>
        <div class="con-font con-pd bgcolor-w con-mb">
            <form class="form-box">
              <div class="row">
              <p>日期：<?php echo ($myconadmin["date"]); ?>  姓名：<?php $uid=$myconadmin['uid'];$m=M('user');$userinfo=$m->where("uid='$uid'")->find(); echo $userinfo['name']; ?> 状态：<span style="color:red;">处理中</span></p>
              <p>问题类型：<?php $id=$myconadmin['cid'];$m=M('consultation_type');$consultation_type=$m->where("id='$id'")->find();echo $consultation_type['title']; ?> 手机：<?php $uid=$myconadmin['uid'];$m=M('user');$userinfo=$m->where("uid='$uid'")->find(); echo $userinfo['mobile']; ?></p>
              <p class="textarea-unit3" placeholder=""><?php echo ($myconadmin["content"]); ?></p>
              </div>
           </form>   
        </div>
    <?php else: ?>
        <div class="con-font con-pd bgcolor-w con-mb">
           <form class="form-box">
              <div class="row">
              <p>日期：<?php echo ($myconadmin["date"]); ?>  姓名：<?php $uid=$myconadmin['uid'];$m=M('user');$userinfo=$m->where("uid='$uid'")->find(); echo $userinfo['name']; ?> 状态：<span style="color:red;">待处理</span></p>
              <p>问题类型：<?php $id=$myconadmin['cid'];$m=M('consultation_type');$consultation_type=$m->where("id='$id'")->find();echo $consultation_type['title']; ?> 手机：<?php $uid=$myconadmin['uid'];$m=M('user');$userinfo=$m->where("uid='$uid'")->find(); echo $userinfo['mobile']; ?></p>
              <p class="textarea-unit3" placeholder=""><?php echo ($myconadmin["content"]); ?></p>
              </div>
              <div class="row btn-action">
              <a href="/User/Index/domyconadmin/id/<?php echo ($myconadmin["id"]); ?>/status/1/"><input name="ok" type="button" value="" class="btn-ok"></a>
              <a href="/User/Index/deletemyconadmin/id/<?php echo ($myconadmin["id"]); ?>/"><input name="cancel" type="button" value="" class="btn-cancel"></a>
              </div>
           </form>
        </div><?php endif; endforeach; endif; else: echo "" ;endif; ?>
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