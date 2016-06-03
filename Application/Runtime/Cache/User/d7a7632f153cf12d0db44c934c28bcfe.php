<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>个人信息-<?php echo (C("WEB_NAME")); ?></title>
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

      <div class="am-header-right am-header-nav">
          <a href="/User/Index/set" class="">
		     <i class="am-icon-gear am-icon-sm"></i>
          </a>
      </div>
  </header>
  <div class="am-titlebar am-titlebar-multi" style="padding-top:1px;margin-top:0px;">
    <h2 class="am-titlebar-title ">
        基本信息
    </h2>
  </div>
<table class="am-table am-table-bordered am-table-radius am-table-striped" border="0" style="border-color:#FFF;margin-bottom:-16px;padding-top:4px;">
    <tbody>
        <tr class="am-primary">
            <td class="" style="width:50%;border-width:5px;border-color:#FFF;font-size:10pt;"><i class="am-icon-user"></i>&nbsp姓名 <?php echo ($profile["name"]); ?></td>
            <?php if($profile['sex']==1): ?><td class="" style="width:50%;border-width:5px;border-color:#FFF;font-size:10pt;"><i class="am-icon-mars"></i>&nbsp性别 男</td>
            <?php else: ?>
            <td class="" style="width:50%;border-width:5px;border-color:#FFF;font-size:10pt;"><i class="am-icon-venus"></i>&nbsp性别 女</td><?php endif; ?>
        </tr>
        <tr class="am-primary">
            <td class="" style="width:50%;border-width:5px;border-color:#FFF;font-size:10pt;"><i class="am-icon-calendar"></i>&nbsp出生日期 <?php echo ($profile["birth"]); ?></td>
            <td class="" style="width:50%;border-width:5px;border-color:#FFF;font-size:10pt;"><i class="am-icon-mobile"></i>&nbsp手机号 <?php echo ($profile["mobile"]); ?></td>
        </tr>
		<?php if($profile['comparison']==1): ?><tr class="am-primary">
            <td colspan="2" class="" style="border-width:5px;border-color:#FFF;font-size:10pt;line-height:25px;"><input type="hidden" name="uid" value="<?php echo ($_SESSION["uid"]); ?>"><i class="am-icon-user-md"></i>&nbsp推荐人 <?php echo ($profile["rmobile"]); ?>&nbsp<?php $mobile=$profile['rmobile'];$m=M('user');$rname=$m->where("mobile='$mobile'")->find(); echo ($rname["name"]); ?>
            <?php if($profile['status']==0): ?><a href="/User/Index/dorecommend/uid/<?php echo ($_SESSION["uid"]); ?>/status/1/" class='am-btn am-btn-primary' style='float:right;height:25px;font-size:10pt;line-height:14px;'>申请</a>
         <?php elseif($profile['status']==1): ?>
         <a class='am-btn am-btn-primary' style='float:right;height:25px;font-size:10pt;line-height:14px;'>处理中</a>
         <?php elseif($profile['status']==2): ?>
         <a class='am-btn am-btn-primary' style='float:right;height:25px;font-size:10pt;line-height:14px;'>已通过</a>
         <?php else: endif; ?>
            </td>
        </tr>
        <?php else: ?>
        <tr class="am-primary">
            <td colspan="2" class="" style="border-width:5px;border-color:#FFF;font-size:10pt;line-height:25px;"><form action="/User/Index/dormobile" method="POST" style="float:left;"><input type="hidden" name="uid" value="<?php echo ($_SESSION["uid"]); ?>"><i class="am-icon-user-md"></i>&nbsp推荐人&nbsp<input type="text" name="rmobile" class="" value="<?php echo ($profile["rmobile"]); ?>" style="border-style:none;width:200px;background-color:transparent;" placeholder="请输入推荐人手机号">
            <input type="submit" value="比对" class='am-btn am-btn-primary' style='float:right;height:25px;font-size:10pt;line-height:14px;'>
            </form>
            </td>
        </tr><?php endif; ?>
        <tr class="am-primary">
            <td class="" style="width:50%;border-width:5px;border-color:#FFF;font-size:10pt;"><i class="am-icon-user"></i>&nbsp身份申请 <?php if(($profile['score'] >= 10) and ($profile['score'] < 100)): if($profile['type']==1): ?>您已经是义工
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
     <?php else: ?>积分不足<?php endif; ?></td>
            <td class="" style="width:50%;border-width:5px;border-color:#FFF;font-size:10pt;"><i class="am-icon-recommend"></i>&nbsp我的推荐 <a href="/User/Index/myrecommend" style="color:red;">（ <?php echo ($myrecommend); ?> ）</a></td>
        </tr>
        <tr class="am-primary">
            <td class="" style="width:50%;border-width:5px;border-color:#FFF;font-size:10pt;"><i class="am-icon-rmb"></i>&nbsp财务监管 <?php if($profile['financeauth']==0): ?>暂无权限<i class="am-icon-lock" style="float:right;"></i><?php else: ?><a href="/User/Index/finance">点击进入</a><?php endif; ?></td>
            <td class="" style="width:50%;border-width:5px;border-color:#FFF;font-size:10pt;"><i class="am-icon-mobile"></i>&nbsp我的义务 <?php if($indexapplystatus==1): ?>审核中<img src="/Public/template/images/locked.png">
            <?php elseif($indexapplystatus==2): ?>
              <a href="/User/Index/myduty">点击进入</a>
            <?php else: ?>
              <a href="/User/Index/intelapply">点击申请</a><i class="am-icon-lock" style="float:right;"></i><?php endif; ?></td>
        </tr>
		<tr class="am-primary">
            <td colspan="2" class="" style="width:50%;border-width:5px;border-color:#FFF;font-size:10pt;"><i class="am-icon-book"></i>&nbsp地址 <?php echo ($profile["address"]); ?></td>
        </tr>
    </tbody>
</table>




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