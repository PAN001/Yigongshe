<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>我的推荐-<?php echo (C("WEB_NAME")); ?></title>
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
       <?php if(is_array($myrecommend)): $i = 0; $__LIST__ = $myrecommend;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$myrecommend): $mod = ($i % 2 );++$i;?><div class="con-font con-pd bgcolor-w con-mb">
           <form class="form-box" action="">
              <div class="row recom btn-action3">
               <div class="col-80">
                  日期：<?php echo ($myrecommend["joindate"]); ?>  <br>
姓名：<?php echo ($myrecommend["name"]); ?><br>
手机：<?php echo ($myrecommend["mobile"]); ?><br>
状态：<span><?php if($myrecommend['status']==1): ?>待审核<?php elseif($myrecommend['status']==2): ?>审核通过<?php else: endif; ?></span>

               </div>
               <div class="col-20">
               <?php if($myrecommend['status']==1): ?><a href="/User/Index/domyrecommend/uid/<?php echo ($myrecommend["uid"]); ?>/status/2"><input name="ok" type="button" value="" class="btn-ok"></a>
               <a href="/User/Index/domyrecommend/uid/<?php echo ($myrecommend["uid"]); ?>/status/0"><input name="cancel" type="button" value="" class="btn-cancel"></a>
               <?php elseif($myrecommend['status']==2): ?>
                   <input name="ok" type="button" value="" class="btn-ok-s" disabled="disabled">
               <?php else: ?>
                   <input name="ok" type="button" value="" class="btn-cancel-s" disabled="disabled"><?php endif; ?>
               </div>
              </div>
              
              </form>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
  
        
        
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