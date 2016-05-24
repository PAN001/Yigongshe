<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>义务管理-<?php echo (C("WEB_NAME")); ?></title>
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
  <?php if(is_array($mydutyadmin)): $i = 0; $__LIST__ = $mydutyadmin;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$mydutyadmin): $mod = ($i % 2 );++$i; if($mydutyadmin['status']==2): ?><div class="con-font con-pd bgcolor-w con-mb">
           <form class="form-box" action="">
              <div class="row">
              <p class="textarea-unit3" placeholder=""><?php echo ($mydutyadmin["content"]); ?></p>
              </div>
              <div class="row btn-action2">
               <input name="ok" type="button" value="已完成" class="btn-02" disabled="disabled"><span><?php echo ($mydutyadmin["date"]); ?></span>
              </div>
           </form>   
        </div>
    <?php elseif($mydutyadmin['status']==1): ?>
        <div class="con-font con-pd bgcolor-w con-mb">
            <form class="form-box">
              <div class="row">
              <p class="textarea-unit3" placeholder=""><?php echo ($mydutyadmin["content"]); ?></p>
              </div>
              <div class="row btn-action2">
               <input type="hidden" name="id" value="<?php echo ($mydutyadmin["id"]); ?>">
               <input type="hidden" name="status" value="2">
               <a href="/User/Index/domydutyadmin/id/<?php echo ($mydutyadmin["id"]); ?>/status/2/" class="btn-01" style="font-size:10pt;height:25px;text-align:center;line-height:25px;">处理中</a><span><?php echo ($mydutyadmin["date"]); ?></span>
              </div>
           </form>   
        </div>
    <?php else: ?>
        <div class="con-font con-pd bgcolor-w con-mb">
           <form class="form-box">
              <div class="row">
              <p class="textarea-unit3" placeholder=""><?php echo ($mydutyadmin["content"]); ?></p>
              </div>
              <div class="row btn-action">
              <a href="/User/Index/domydutyadmin/id/<?php echo ($mydutyadmin["id"]); ?>/status/1/"><input name="ok" type="button" value="" class="btn-ok"></a>
              <a href="/User/Index/deletemydutyadmin/id/<?php echo ($mydutyadmin["id"]); ?>/"><input name="cancel" type="button" value="" class="btn-cancel"></a>
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