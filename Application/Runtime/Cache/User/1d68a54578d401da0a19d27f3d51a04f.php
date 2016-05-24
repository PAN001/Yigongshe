<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>提供支持-<?php echo (C("WEB_NAME")); ?></title>
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
       
         <div class="con-font con-pd bgcolor-w con-mb">
           <h3 class="con-tit"><span>资金支持</span></h3>
           <hr size="1" noshade="noshade" style="border:1px #cccccc dotted"/>
           <form class="form-box" action="/User/Index/dosupportm" method="POST">
           <div class="row">
               <input type="hidden" name="uid"  class="input-text wp120" value="<?php echo ($_SESSION["uid"]); ?>">
              <label>银行名称：<?php echo (C("WEB_BANKNAME")); ?></label>
              <label>户名：<?php echo (C("WEB_CARDNAME")); ?></label><br>
              <label>开户行：<?php echo (C("WEB_ACCOUNTBANK")); ?></label>
              <label>账号：<?php echo (C("WEB_BANKCARDID")); ?></label>
              </div>
              <div class="row">
              <label>资助金额：</label><input class="input-text wp30" placeholder="请输入资助金额" onkeyup="value=value.replace(/\D/g,'') " onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/\D/g,''))" ID="price" NAME="price" style="font-size:10pt;"> 万元
              <?php if($moneystatus==1): ?><input type="submit" class="btn-submit wp30" value="审核中" disabled="disabled" style="font-size:10pt;">
                <?php else: ?>
                    <input type="submit" class="btn-submit wp30" value="复核" style="font-size:10pt;"><?php endif; ?>
              </div>
           </form>
        </div>
        
    <div class="con-font con-pd bgcolor-w con-mb">
           <h3 class="con-tit"><span>智慧支持</span></h3>
           <hr size="1" noshade="noshade" style="border:1px #cccccc dotted"/>
           <form class="form-box" action="/User/Index/intelapply">
            <div class="row text-center">
            <?php if($intelapplystatus==1): ?><a class="btn-submit wp30" style="font-size:10pt;color:red;width:49%;height:120px;float:left;line-height:120px; ">义务工作（...）</a>
              <a class="btn-submit wp30" style="font-size:10pt;color:red;width:49%;height:120px;float:right;line-height:120px; ">咨询顾问（...）</a>
            <?php elseif($intelapplystatus==2): ?>
              <a class="btn-submit wp30" style="font-size:10pt;color:red;width:49%;height:120px;float:left;line-height:120px; ">义务工作（√）</a>
              <a class="btn-submit wp30" style="font-size:10pt;color:red;width:49%;height:120px;float:right;line-height:120px; ">咨询顾问（√）</a>
            <?php else: ?>
              <a href="/User/Index/intelapply" class="btn-submit wp30" style="font-size:10pt;color:red;width:49%;height:120px;float:left;line-height:120px; ">义务工作</a>
              <a href="/User/Index/intelapply" class="btn-submit wp30" style="font-size:10pt;color:red;width:49%;height:120px;float:right;line-height:120px; ">咨询顾问</a><?php endif; ?>
              </div>
           </form>
        </div>
  
  <div class="con-font con-pd bgcolor-w con-mb">
           <h3 class="con-tit"><span>其他支持</span></h3>
           <hr size="1" noshade="noshade" style="border:1px #cccccc dotted"/>
           <form class="form-box" action="/User/Index/doothersup" method="POST">
              <div class="row">
              <input type="hidden" name="uid" value="<?php echo ($_SESSION["uid"]); ?>">
              <textarea name="content" class="textarea-unit" placeholder="填写详情（50字以内）" style="font-size:10pt;"></textarea>
              </div>
              <div class="row text-center">
                <?php if($otherstatus==1): ?><input type="submit" class="btn-submit wp60" value="审核中" disabled="disabled" style="font-size:10pt;">
                <?php else: ?>
                    <input type="submit" class="btn-submit wp60" value="申请" style="font-size:10pt;"><?php endif; ?>
              </div>
           </form>
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
    <a class="tab-item external active" href="/User/Index/support">
      <span class="tab-label">提供支持</span>
    </a>
    <a class="tab-item external" href="/User/Index/index">
      <span class="tab-label">我的信息</span>
    </a>
   
  </nav>

          
          
<script src="/Public/template/js/zepto.min.js"></script>
<script src="/Public/template/js/sm.js"></script>
<script src="/Public/template/js/sm-extend.js"></script>
  </body>
</html>