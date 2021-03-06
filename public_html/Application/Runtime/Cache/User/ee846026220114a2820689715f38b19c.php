<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>修改信息-<?php echo (C("WEB_NAME")); ?></title>
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
  <header data-am-widget="header" class="am-header am-header-default" style="height:100px;">
      <div class="am-header-left am-header-nav">
          <a href="#left-link" class="">
            <img src="<?php echo ($profile["avatar"]); ?>" alt="" class="am-img-thumbnail am-circle" style="width:80px;height:80px;margin-top:8px;margin-bottom:8px;">
          </a>
      </div>

      <h1 class="am-header-title" style="line-height:20px;font-size:10pt;text-align:left;width:60%;">
         <div style="margin-top:18px;margin-left:15px;margin-left:0px;">身份 <?php $id=$profile['type'];$m=M('user_type');$usertype=$m->where("id='$id'")->find();if($usertype){ echo $usertype['title']; }else{ echo '会员'; } ?><br>积分 <a href="/User/Index/integral"><?php echo ($profile["score"]); ?></a><br>入会日期 <?php echo ($profile["joindate"]); ?></div>
      </h1>

  </header>
  <div class="am-titlebar am-titlebar-multi" style="padding-top:1px;margin-top:0px;">
    <h2 class="am-titlebar-title ">
        修改个人信息
    </h2>
  </div>
<form action="/User/Index/doset" method="POST">
<input type="hidden" name="uid" value="<?php echo ($_SESSION["uid"]); ?>">
<table class="am-table am-table-bordered am-table-radius am-table-striped" border="0" style="border-color:#FFF;margin-bottom:-16px;padding-top:4px;">
    <tbody>
        <tr class="am-primary">
            <td class="" style="width:50%;border-width:5px;border-color:#FFF;font-size:10pt;line-height:25px;"><i class="am-icon-user"></i>&nbsp姓名 <input type="text" name="name" class="" value="<?php echo ($profile["name"]); ?>" style="border-style:none;width:65%;background-color:transparent;" placeholder="请输入真实姓名"></td>
            <td class="" style="width:50%;border-width:5px;border-color:#FFF;font-size:10pt;"><div style="float:left;line-height:25px;"><i class="am-icon-venus"></i>&nbsp性别&nbsp</div><?php if($profile['sex']==1): ?><div style="float:left;line-height:5px;"><input type="radio" name="sex" value="1" checked> 男 <input type="radio" name="sex" value="0"> 女 </div><?php else: ?><div style="float:left;line-height:5px;"><input type="radio" name="sex" value="1"> 男 <input type="radio" name="sex" value="0" checked> 女 </div><?php endif; ?></td>
        </tr>
        <tr class="am-primary">
            <td class="" style="width:50%;border-width:5px;border-color:#FFF;font-size:10pt;line-height:25px;"><i class="am-icon-calendar"></i>&nbsp生日 <input type="date" name="birth" class="" value="<?php echo ($profile["birth"]); ?>" style="width:65%;" placeholder="请选择出生日期"></td>
            <td class="" style="width:50%;border-width:5px;border-color:#FFF;font-size:10pt;line-height:25px;"><i class="am-icon-mobile"></i>&nbsp手机号 <input type="text" name="mobile" class="" value="<?php echo ($profile["mobile"]); ?>" style="border-style:none;width:65%;background-color:transparent;" placeholder="请输入手机号码"></td>
        </tr>
		<tr class="am-primary">
            <td colspan="2" class="" style="width:50%;border-width:5px;border-color:#FFF;font-size:10pt;line-height:25px;"><i class="am-icon-book"></i>&nbsp地址 <input type="text" name="address" class="" value="<?php echo ($profile["address"]); ?>" style="border-style:none;width:80%;background-color:transparent;" placeholder="请输入联系地址"></td>
        </tr>
    </tbody>
    
</table>
<div style="padding-top:20px">
<input type="submit" class="am-btn am-btn-primary" value="修改" style="height:39px;width:100%;"></div>
</form>




<div data-am-widget="navbar" class="am-navbar am-cf am-navbar-default "
     id="">
  <ul class="am-navbar-nav am-cf am-avg-sm-4">
    <li>
      <a href="/">
        <span class="am-icon-server"></span>
        <span class="am-navbar-label">综合信息</span>
      </a>
    </li>
    <li>
      <a href="/User/Index/support">
        <span class="am-icon-support"></span>
        <span class="am-navbar-label">提供支持</span>
      </a>
    </li>
    <li>
      <a href="/User/Index/index">
        <span class="am-icon-user"></span>
        <span class="am-navbar-label">我的信息</span>
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