<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>财务管理-<?php echo (C("WEB_NAME")); ?></title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="/favicon.ico">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <link rel="stylesheet" href="/Public/template/admin/css/sm.css">
    <link rel="stylesheet" href="/Public/template/admin/css/sm-extend.css">
    <link rel="stylesheet" href="/Public/template/admin/css/main-admin.css">

  </head>
  <body>
    <div class="content-box no-top">
    <div class="main-con">
 <div class="food-p con-font con-color con-pd con-mb">
  <form action="/Admin/Index/dofinancial" method="POST">
      <input type="hidden" name="lastbalance" value="<?php echo ($financiallast["balance"]); ?>">
  <table cellpadding="0" cellspacing="0" class="data-table">
     <tr><td><div class="num-p con-color con-font con-pd-l con-mb" style="height:30px;margin-top:0px;padding-top:0px;margin-bottom:-20px;padding-bottom:0px;"><div class="col-50">日期：<input type="date" name="date" class="input-text" value="<?php echo date('Y-m-d',time()); ?>" style="border-style:none;width:70%;" placeholder="请选择日期"></div></div></td></tr>
<tr><td><div class="num-p con-color con-font con-pd-l con-mb" style="height:0px;margin-top:0px;padding-top:20px;margin-bottom:5px;padding-bottom:10px;"><div class="col-50">类型：<select name="tid" class="input-text" style="border-style:none;width:70%;height:27px;"><option value ="0">收入</option><option value ="1">支出</option></select></div></div></td></tr>
<tr><td><div class="num-p con-color con-font con-pd-l con-mb" style="height:30px;margin-top:15px;padding-top:0px;margin-bottom:5px;padding-bottom:5px;"><div class="col-50">金额：<input name="price" type="text" class="input-text" style="border-style:none;width:70%;"></div></div></td></tr>
<tr><td><div class="num-p con-color con-font con-pd-l con-mb" style="height:30px;margin-top:-3px;padding-top:0px;margin-bottom:0px;padding-bottom:0px;"><div class="col-50">备注：<input name="remarks" type="text" class="input-text" style="border-style:none;width:70%;"></div></div></td></tr>
     <tr><td colspan="2"><div class="intergral-action con-pd" style="margin-top:0px;padding-top:0px;margin-bottom:0px;padding-bottom:0px;"><input type="submit" value="确 定" class="btn-intergral" style="border-style:none;width:50%;"></div></td></tr>
   </table>
   </form>
  </div>
  <div class="food-p2 con-font con-pd bgcolor-w">
    <table width="99%" cellpadding="0" cellspacing="0" class="data-table">
    <tr>
      <td>日期</td>
      <td>收入</td>
      <td>支出</td>
      <td>余额</td>
      <td>备注</td>
    </tr>
    <?php if(is_array($financial)): $i = 0; $__LIST__ = $financial;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$financial): $mod = ($i % 2 );++$i;?><tr>
      <td><?php echo ($financial["date"]); ?></td>
      <td><?php echo ($financial["income"]); ?></td>
      <td><?php echo ($financial["expenditure"]); ?></td>
      <td><?php echo ($financial["balance"]); ?></td>
      <td><?php echo ($financial["remarks"]); ?></td>
    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>

  </div>
  
  </div>
  
  
</div>
    
    <nav class="bar bar-tab">
    <a class="tab-item external" href="/Admin">
      <span class="tab-label">返回导航</span>
    </a>
    </nav>

          
          
<script src="/Public/template/admin/js/zepto.min.js"></script>
<script src="/Public/template/admin/js/sm.js"></script>
<script src="/Public/template/admin/js/sm-extend.js"></script>
  </body>
</html>