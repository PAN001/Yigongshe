<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>工社服务-<?php echo (C("WEB_NAME")); ?></title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="/favicon.ico">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <link rel="stylesheet" href="/Public/template/css/sm.css">
    <link rel="stylesheet" href="/Public/template/css/sm-extend.css">
    <link rel="stylesheet" href="/Public/template/css/main.css">
    <link rel="stylesheet" href="/Public/template/css/select.css">
  </head>
  <body>
    <div class="content-box no-top">
       <div class="main-con">
       
         <div class="con-font con-pd bgcolor-w con-mb">
           <h3 class="con-tit"><span>问题咨询</span></h3>
           <hr size="1" noshade="noshade" style="border:1px #cccccc dotted"/>
           <form class="form-box" action="/Home/Index/doask" method="POST">
           <div class="row">
              <input type="hidden" name="uid" value="<?php echo ($_SESSION['uid']); ?>">
              <div class="styled-selectone" style="float:left;width:83px;">
                  <select name="cid">
                      <option value="">问题类型</option>
                      <?php if(is_array($consultation_type)): $i = 0; $__LIST__ = $consultation_type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$consultation_type): $mod = ($i % 2 );++$i;?><option value="<?php echo ($consultation_type["id"]); ?>"><?php echo ($consultation_type["title"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                  </select>
              </div>
              <?php $uid=$_SESSION['uid']; $m=M('consultation'); $notdo=$m->where("uid='$uid' and status='0'")->find(); $cdo=$m->where("uid='$uid' and status='1'")->find(); $id=$cdo['id']; $ccdo=$m->where("uid='$uid' and status='2'")->find(); if($notdo){ echo "<input type='submit' class='btn-submit wp30' value='提交中' style='font-size:10pt;float:right;height:23px;' disabled='disabled'>"; }elseif($cdo){ echo "<a href='/Home/Index/domyconadmin/id/".$id."' class='btn-submit wp30' style='font-size:10pt;background:#ffe8ca;text-align:center;line-height:1.3rem;color:#000;float:right;height:23px;'>完成</a>"; }elseif($ccdo){ echo "<input type='submit' class='btn-submit wp30' value='提交' style='font-size:10pt;float:right;height:23px;'>"; }else{ echo "<input type='submit' class='btn-submit wp30' value='提交' style='font-size:10pt;float:right;height:23px;'>"; } ?>
              </div>
              <div class="row">
              <textarea name="content" class="textarea-unit" placeholder="问题详情（字数限制）" style="font-size:10pt;"></textarea>
              </div>
           </form>
        </div>
  
  <div class="con-font con-pd bgcolor-w con-mb">
           <h3 class="con-tit"><span>工社餐饮</span></h3>
           <hr size="1" noshade="noshade" style="border:1px #cccccc dotted"/>
           <form class="form-box" action="/Home/Index/dorestaurant" method="POST">
           <div class="row">
                <input type="hidden" name="uid" value="<?php echo ($_SESSION['uid']); ?>">
                    <div style="float:left;line-height:25px;">日期:<?php echo date('Y/m/d',strtotime('+1 day')); ?></div>
                    <p style="float:left;color:#FFF">&nbsp&nbsp</p>
<div class="styled-select" style="float:left;">
 <select name="tid">
<?php if(is_array($restaurant_time)): $i = 0; $__LIST__ = $restaurant_time;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$restaurant_time): $mod = ($i % 2 );++$i;?><option value="<?php echo ($restaurant_time["id"]); ?>"><?php echo ($restaurant_time["title"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
 </select>
 </div>
 <p style="float:left;color:#FFF">&nbsp&nbsp</p>
<div class="styled-select" style="float:left;">
 <select name="number">
 <option value="">人数</option>
 <option value="1">1人</option>
 <option value="2">2人</option>
 <option value="3">3人</option>
 </select>
 </div>

                    <?php $uid=$_SESSION['uid'];$date=date('Y/m/d',strtotime('+1 day'));$m=M('restaurant');$doornot=$m->where("uid='$uid' and date='$date'")->find();if($doornot){ echo "<input type='submit' class='btn-submit wp30' value='已预约' style='font-size:10pt;float:right;height:23px;' disabled='disabled'>"; }else{ echo "<input type='submit' class='btn-submit wp30' value='预约' style='font-size:10pt;float:right;height:23px;'>";} ?>
           </div>
           </form>
        </div>
  
  <div class="con-font con-pd bgcolor-w con-mb">
           <h3 class="con-tit"><span>工社活动</span></h3>
           <hr size="1" noshade="noshade" style="border:1px #cccccc dotted"/>
           <form class="form-box" action="/Home/Index/doactive" method="POST">
           <input type="hidden" name="uid" value="<?php echo ($_SESSION["uid"]); ?>">
           <input type="hidden" name="aid" value="<?php echo ($active["id"]); ?>">
              <div class="row">
               <textarea class="textarea-unit" placeholder="活动详情" style="font-size:10pt;" disabled="disabled"><?php echo ($active["content"]); ?></textarea>
              </div>
               <div class="row">
            <div style="float:left;line-height:25px;">
            总人数 <?php echo ($active["allnumber"]); ?> 人&nbsp&nbsp
            </div>
            <div class="styled-select" style="float:left;">
 <select name="number">
 <option value="">人数</option>
 <option value="1">1人</option>
 <option value="2">2人</option>
 <option value="3">3人</option>
 </select>
 </div>
            <?php $aid=$active['id']; $uid=$_SESSION['uid']; $m=M('active_sign'); $doornotdo=$m->where("aid='$aid' and uid='$uid'")->find(); if($doornotdo){ $doornotdoa='1'; }else{ $doornotdoa='0'; } ?>
            <?php if($doornotdoa==1): ?><input type='submit' class='btn-submit wp30' value='已预约' disabled='disabled' style='font-size:10pt;float:right;height:23px;'>
            <?php else: ?>
            <?php if($activenum >= $active['allnumber']): ?><input type="submit" class="btn-submit wp30" value="预约" disabled="disabled" style="color:#C0C0C0;font-size:10pt;float:right;height:23px;">
              <?php elseif(($profile['type'] >= $active['usertype']) and ($profile['score'] >= $active['integral'])): ?>
                  <input type='submit' class='btn-submit wp30' value='预约'style='font-size:10pt;float:right;height:23px;'>
              <?php else: ?>
                  <input type="submit" class="btn-submit wp30" value="预约" disabled="disabled" style="color:#C0C0C0;font-size:10pt;float:right;height:23px;"><?php endif; endif; ?>
              </div>
           </form>
        </div>
       </div>
    </div>
    
    <nav class="bar bar-tab">
    <a class="tab-item external active" href="/Home/Index/index">
      <span class="tab-label">工社服务</span>
    </a>
    <a class="tab-item external" href="/Home/Index/video">
      <span class="tab-label">视频资料</span>
    </a>
    <a class="tab-item external" href="/Home/Index/teletext">
      <span class="tab-label">图文资料</span>
    </a>
    <a class="tab-item external" href="/Home/Index/usermanual">
      <span class="tab-label">会员手册</span>
    </a>
   
  </nav>

          
          
<script src="/Public/template/js/zepto.min.js"></script>
<script src="/Public/template/js/sm.js"></script>
<script src="/Public/template/js/sm-extend.js"></script>
  </body>
</html>