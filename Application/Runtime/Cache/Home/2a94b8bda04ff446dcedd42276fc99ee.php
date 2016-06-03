<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>义工社</title>
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp"/>
  <link rel="icon" type="image/png" href="/Public/template/default/assets/i/favicon.png">
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="icon" sizes="192x192" href="/Public/template/default/assets/i/app-icon72x72@2x.png">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="Amaze UI"/>
  <link rel="apple-touch-icon-precomposed" href="/Public/template/default/assets/i/app-icon72x72@2x.png">
  <meta name="msapplication-TileImage" content="/Public/template/default/assets/i/app-icon72x72@2x.png">
  <meta name="msapplication-TileColor" content="#0e90d2">
  <link rel="stylesheet" href="/Public/template/default/assets/css/amazeui.min.css">
  <link rel="stylesheet" href="/Public/template/default/assets/css/app.css">
</head>
<body>
  <header data-am-widget="header"
          class="am-header am-header-default">
      <div class="am-header-left am-header-nav">
          <a href="/" class="">

                <i class="am-header-icon am-icon-home"></i>
          </a>
      </div>

      <h1 class="am-header-title">
          <a href="" class="">
            义工社
          </a>
      </h1>

      <div class="am-header-right am-header-nav">
          <a href="/User/Index/index" class="">
          <?php if((!isset($_SESSION['uid']) || $_SESSION['uid']=='')): ?><img src="/Public/template/default/assets/i/yigavatar.jpg" alt="" class="am-comment-avatar" style="width:35px;height:35px;margin-top:8px;margin-bottom:8px;">
          <?php else: ?>
          <img src="<?php echo ($comprofile["avatar"]); ?>" alt="" class="am-comment-avatar" style="width:35px;height:35px;margin-top:8px;margin-bottom:8px;"><?php endif; ?>
          </a>
      </div>
  </header>
  <div class="am-titlebar am-titlebar-multi" style="padding-top:1px;margin-top:0px;">
    <h2 class="am-titlebar-title ">
        问题咨询
    </h2>
  </div>
<form class="am-form" action="/Home/Index/doask" method="POST">
  <fieldset style="padding-bottom:0px;margin-bottom:-30px;">
    <input type="hidden" name="uid" value="<?php echo ($_SESSION['uid']); ?>">
    <div class="am-form-group" style="float:left;margin-bottom:8px;">
      <select name="cid" id="doc-select-1" style="width:120px;">
        <option value="">问题分类</option>
        <?php if(is_array($consultation_type)): $i = 0; $__LIST__ = $consultation_type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$consultation_type): $mod = ($i % 2 );++$i;?><option value="<?php echo ($consultation_type["id"]); ?>"><?php echo ($consultation_type["title"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
      </select>
      <span class="am-form-caret"></span>
    </div>
    <?php $uid=$_SESSION['uid']; $m=M('consultation'); $notdo=$m->where("uid='$uid' and status='0'")->find(); $cdo=$m->where("uid='$uid' and status='1'")->find(); $id=$cdo['id']; $ccdo=$m->where("uid='$uid' and status='2'")->find(); if($notdo){ echo "<input type='submit' class='am-btn am-btn-primary' value='提交中' style='float:right;' disabled='disabled'>"; }elseif($cdo){ echo "<a href='/Home/Index/domyconadmin/id/".$id."' class='am-btn am-btn-primary' style='float:right;'>完成</a>"; }elseif($ccdo){ echo "<input type='submit' class='am-btn am-btn-primary' value='提交' style='float:right;'>"; }else{ echo "<input type='submit' class='am-btn am-btn-primary' value='提交' style='float:right;'>"; } ?>
    <div class="am-form-group">
      <textarea name="content" class="" rows="5" id="doc-ta-1" placeholder="问题详情" style="height:80px;"></textarea>
    </div>
  </fieldset>
</form>
  <div data-am-widget="titlebar" class="am-titlebar am-titlebar-multi" >
    <h2 class="am-titlebar-title ">
        工社餐饮
    </h2>
  </div>
<form class="am-form" action="/Home/Index/dorestaurant" method="POST">
  <fieldset style="padding-bottom:0px;margin-bottom:-22px;">
    <input type="hidden" name="uid" value="<?php echo ($_SESSION['uid']); ?>">
    <div class="am-form-group" style="float:left;margin-bottom:8px;">
	  <div style="float:left;line-height:39px;"><i class="am-icon-calendar"></i>&nbsp <?php echo date('m月d日',strtotime('+1 day')); ?> &nbsp</div>
      <select name="tid" id="doc-select-1" style="width:70px;float:left;">
        <?php if(is_array($restaurant_time)): $i = 0; $__LIST__ = $restaurant_time;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$restaurant_time): $mod = ($i % 2 );++$i;?><option value="<?php echo ($restaurant_time["id"]); ?>"><?php echo ($restaurant_time["title"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
      </select>
	  <select name="number" id="doc-select-1" style="width:70px;float:left;">
        <option value="">人数</option>
        <option value="1">1人</option>
		<option value="2">2人</option>
		<option value="3">3人</option>
      </select>
      <span class="am-form-caret"></span>
    </div>
    <?php $uid=$_SESSION['uid'];$date=date('Y/m/d',strtotime('+1 day'));$m=M('restaurant');$doornot=$m->where("uid='$uid' and date='$date'")->find();if($doornot){ echo "<input type='submit' class='am-btn am-btn-primary' value='已预约' style='float:right;height:39px;' disabled='disabled'>"; }else{ echo "<input type='submit' class='am-btn am-btn-primary' value='预约' style='float:right;height:39px;'>";} ?>
  </fieldset>
</form>
  <div data-am-widget="titlebar" class="am-titlebar am-titlebar-multi" >
    <h2 class="am-titlebar-title ">
        工社活动
    </h2>
  </div>
<form class="am-form" action="/Home/Index/doactive" method="POST">
  <fieldset style="padding-bottom:0px;margin-bottom:-22px;">
    <input type="hidden" name="uid" value="<?php echo ($_SESSION["uid"]); ?>">
    <input type="hidden" name="aid" value="<?php echo ($active["id"]); ?>">
    <div class="am-form-group" style="margin-bottom:8px;">
      <textarea class="" rows="5" id="doc-ta-1" placeholder="活动详情" style="height:80px;" disabled="disabled"><?php echo ($active["content"]); ?></textarea>
    </div>
	    <div class="am-form-group" style="float:left;">
	  <div style="float:left;line-height:39px;">活动限定总人数 <?php echo ($active["allnumber"]); ?> 人 &nbsp</div>
      <select name="number" id="doc-select-1" style="width:70px;float:left;">
        <option value="">人数</option>
        <option value="1">1人</option>
		<option value="2">2人</option>
		<option value="3">3人</option>
      </select>
      <span class="am-form-caret"></span>
    </div>
    <?php $aid=$active['id']; $uid=$_SESSION['uid']; $m=M('active_sign'); $doornotdo=$m->where("aid='$aid' and uid='$uid'")->find(); if($doornotdo){ $doornotdoa='1'; }else{ $doornotdoa='0'; } ?>
    <?php if($doornotdoa==1): ?><input type='submit' class='am-btn am-btn-primary' value='已预约' disabled='disabled' style='float:right;height:39px;'>
    <?php else: ?>
    <?php if($activenum >= $active['allnumber']): ?><input type="submit" class="am-btn am-btn-primary" value="预约" disabled="disabled" style="float:right;height:39px;">
    <?php elseif(($profile['type'] >= $active['usertype']) and ($profile['score'] >= $active['integral'])): ?>
    <input type='submit' class='am-btn am-btn-primary' value='预约' style='float:right;height:39px;'>
    <?php else: ?>
    <input type="submit" class="am-btn am-btn-primary" value="预约" disabled="disabled" style="float:right;height:39px;"><?php endif; endif; ?>
  </fieldset>
</form>




<div data-am-widget="navbar" class="am-navbar am-cf am-navbar-default "
     id="">
  <ul class="am-navbar-nav am-cf am-avg-sm-4">
    <li>
      <a href="/Home/Index/index">
        <span class="am-icon-server"></span>
        <span class="am-navbar-label">工社服务</span>
      </a>
    </li>
    <li>
      <a href="/Home/Index/video">
        <span class="am-icon-video-camera"></span>
        <span class="am-navbar-label">视频资料</span>
      </a>
    </li>
    <li>
      <a href="/Home/Index/teletext">
        <span class="am-icon-picture-o"></span>
        <span class="am-navbar-label">图文资料</span>
      </a>
    </li>
    <li>
      <a href="/Home/Index/usermanual">
        <span class="am-icon-book"></span>
        <span class="am-navbar-label">会员手册</span>
      </a>
    </li>
  </ul>
</div>
<!--[if (gte IE 9)|!(IE)]><!-->
<script src="/Public/template/default/assets/js/jquery.min.js"></script>
<!--<![endif]-->
<!--[if lte IE 8 ]>
<script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="/Public/template/default/assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->
<script src="/Public/template/default/assets/js/amazeui.min.js"></script>
</body>
</html>