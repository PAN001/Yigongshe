<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>财务监管-<?php echo (C("WEB_NAME")); ?></title>
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
         <div class="con-font bgcolor-w con-mb">
     <table cellpadding="2" cellspacing="2" border="0" class="inte-table">
     <tr><td style="color:#000000;">日期</td><td style="color:#000000;">收入</td><td style="color:#000000;">支出</td><td style="color:#000000;">余额</td><td style="color:#000000;">备注</td></tr>
     <?php if(is_array($finance)): $i = 0; $__LIST__ = $finance;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$finance): $mod = ($i % 2 );++$i;?><tr><td><?php echo ($finance["date"]); ?></td><td><?php echo ($finance["income"]); ?></td><td><?php echo ($finance["expenditure"]); ?></td><td><?php echo ($finance["balance"]); ?></td><td><?php echo ($finance["remarks"]); ?></td></tr><?php endforeach; endif; else: echo "" ;endif; ?>
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