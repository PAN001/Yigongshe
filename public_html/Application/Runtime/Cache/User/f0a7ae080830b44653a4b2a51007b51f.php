<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>智慧支持（申请）-<?php echo (C("WEB_NAME")); ?></title>
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
            智慧支持(申请)
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
<form class="am-form" method="POST" action="/User/Index/dointelapply">
  <fieldset style="padding-bottom:0px;margin-bottom:-30px;">
    <input type="hidden" name="uid" value="<?php echo ($_SESSION['uid']); ?>">
    <div class="am-form-group" style="float:left;margin-bottom:6px;">
      <select id="obligation" name="oid" onchange="abc(this.options[this.options.selectedIndex].id)" style="width:120px;">
        <option value="">义务领域</option>
        <?php if(is_array($obligation_typew)): $i = 0; $__LIST__ = $obligation_typew;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$obligation_typew): $mod = ($i % 2 );++$i;?><option value="<?php echo ($obligation_typew["id"]); ?>" id="<?php echo ($obligation_typew["content"]); ?>"><?php echo ($obligation_typew["title"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
      </select>
      <span class="am-form-caret"></span>
    </div>
    <script>
        function abc(s){
            ocontent.value=s;
            oid.value=s;
            document.all.oid.options[0].selected=true;
        }
        </script>
    <div class="am-form-group">
      <textarea id="ocontent" name="ocontent" class="" rows="5" style="height:80px;" disabled="disabled"></textarea>
    </div>
  </fieldset>
  <fieldset style="padding-bottom:0px;margin-bottom:-30px;">
    <div class="am-form-group" style="float:left;margin-bottom:6px;">
      <select id="consultation" name="cid" onchange="bao(this.options[this.options.selectedIndex].id)" style="width:120px;">
        <option value="">咨询领域</option>
        <?php if(is_array($consultation_typew)): $i = 0; $__LIST__ = $consultation_typew;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$consultation_typew): $mod = ($i % 2 );++$i;?><option value="<?php echo ($consultation_typew["id"]); ?>" id="<?php echo ($consultation_typew["content"]); ?>"><?php echo ($consultation_typew["title"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
      </select>
      <span class="am-form-caret"></span>
    </div>
    <script>
        function bao(s){
            ccontent.value=s;
            cid.value=s;
            document.all.cid.options[0].selected=true;
        }
    </script>
    <div class="am-form-group">
      <textarea id="ccontent" name="ccontent" class="" rows="5" style="height:80px;" disabled="disabled"></textarea>
    </div>
  </fieldset>
  <fieldset style="padding-bottom:0px;margin-bottom:-30px;">
    <div class="am-titlebar am-titlebar-multi" style="padding-top:1px;margin-top:0px;">
    <h2 class="am-titlebar-title ">
        自我介绍
    </h2>
    </div>
    <div class="am-form-group">
      <textarea name="content" class="" rows="5" style="height:80px;" placeholder="请输入你的个人简介"></textarea>
    </div>
  </fieldset>
  <fieldset style="padding-bottom:0px;margin-bottom:0px;">
    <div class="am-titlebar am-titlebar-multi" style="padding-top:1px;margin-top:0px;">
    <h2 class="am-titlebar-title ">
        义务日期
    </h2>
    </div>
    <style>
.checkboxFour {
   background: #FFFFFF;
   float:left;
   text-align:center;
}

.checkboxFour input[type=checkbox]:checked + label {
	width:20px;
    height:20px;
	color: red;
	float:left;
	text-align:center;
}
</style>
    <div class="am-form-group">
    <div class="checkboxFour">
		<input type="checkbox" id="checkboxFourInput1" value="one" name="one" style="display:none;float:left;" <?php $isIn=in_array("one",$adate); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput1" style="text-align:center;float:left;width:25px;height:20px;">&nbsp01&nbsp</label>
		<input type="checkbox" id="checkboxFourInput2" value="two" name="two" style="display:none;float:left;" <?php $isIn=in_array("two",$adate); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput2" style="text-align:center;float:left;width:25px;height:20px;">&nbsp02&nbsp</label>
		<input type="checkbox" id="checkboxFourInput3" value="three" name="three" style="display:none;float:left;" <?php $isIn=in_array("three",$adate); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput3" style="text-align:center;float:left;width:25px;height:20px;">&nbsp03&nbsp</label>
		<input type="checkbox" id="checkboxFourInput4" value="four" name="four" style="display:none;float:left;" <?php $isIn=in_array("four",$adate); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput4" style="text-align:center;float:left;width:25px;height:20px;">&nbsp04&nbsp</label>
		<input type="checkbox" id="checkboxFourInput5" value="five" name="five" style="display:none;float:left;" <?php $isIn=in_array("five",$adate); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput5" style="text-align:center;float:left;width:25px;height:20px;">&nbsp05&nbsp</label>
		<input type="checkbox" id="checkboxFourInput6" value="six" name="six" style="display:none;float:left;" <?php $isIn=in_array("six",$adate); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput6" style="text-align:center;float:left;width:25px;height:20px;">&nbsp06&nbsp</label>
		<input type="checkbox" id="checkboxFourInput7" value="seven" name="seven" style="display:none;float:left;" <?php $isIn=in_array("seven",$adate); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput7" style="text-align:center;float:left;width:25px;height:20px;">&nbsp07&nbsp</label>
		<input type="checkbox" id="checkboxFourInput8" value="eight" name="eight" style="display:none;float:left;" <?php $isIn=in_array("eight",$adate); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput8" style="text-align:center;float:left;width:25px;height:20px;">&nbsp08&nbsp</label>
		<input type="checkbox" id="checkboxFourInput9" value="nine" name="nine" style="display:none;float:left;" <?php $isIn=in_array("nine",$adate); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput9" style="text-align:center;float:left;width:25px;height:20px;">&nbsp09&nbsp</label>
		<input type="checkbox" id="checkboxFourInput10" value="ten" name="ten" style="display:none;float:left;" <?php $isIn=in_array("ten",$adate); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput10" style="text-align:center;float:left;width:25px;height:20px;">&nbsp10&nbsp</label>
		<input type="checkbox" id="checkboxFourInput11" value="eleven" name="eleven" style="display:none;float:left;" <?php $isIn=in_array("eleven",$adate); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput11" style="text-align:center;float:left;width:25px;height:20px;">&nbsp11&nbsp</label>
		<input type="checkbox" id="checkboxFourInput12" value="twelve" name="twelve" style="display:none;float:left;" <?php $isIn=in_array("twelve",$adate); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput12" style="text-align:center;float:left;width:25px;height:20px;">&nbsp12&nbsp</label>
		<input type="checkbox" id="checkboxFourInput13" value="thirteen" name="thirteen" style="display:none;float:left;" <?php $isIn=in_array("thirteen",$adate); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput13" style="text-align:center;float:left;width:25px;height:20px;">&nbsp13&nbsp</label>
		<input type="checkbox" id="checkboxFourInput14" value="fourteen" name="fourteen" style="display:none;float:left;" <?php $isIn=in_array("fourteen",$adate); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput14" style="text-align:center;float:left;width:25px;height:20px;">&nbsp14&nbsp</label>
		<input type="checkbox" id="checkboxFourInput15" value="fifteen" name="fifteen" style="display:none;float:left;" <?php $isIn=in_array("fifteen",$adate); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput15" style="text-align:center;float:left;width:25px;height:20px;">&nbsp15&nbsp</label>
		<input type="checkbox" id="checkboxFourInput16" value="sixteen" name="sixteen" style="display:none;float:left;" <?php $isIn=in_array("sixteen",$adate); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput16" style="text-align:center;float:left;width:25px;height:20px;">&nbsp16&nbsp</label>
		<input type="checkbox" id="checkboxFourInput17" value="seventeen" name="seventeen" style="display:none;float:left;" <?php $isIn=in_array("seventeen",$adate); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput17" style="text-align:center;float:left;width:25px;height:20px;">&nbsp17&nbsp</label>
		<input type="checkbox" id="checkboxFourInput18" value="eighteen" name="eighteen" style="display:none;float:left;" <?php $isIn=in_array("eighteen",$adate); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput18" style="text-align:center;float:left;width:25px;height:20px;">&nbsp18&nbsp</label>
		<input type="checkbox" id="checkboxFourInput19" value="nineteen" name="nineteen" style="display:none;float:left;" <?php $isIn=in_array("nineteen",$adate); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput19" style="text-align:center;float:left;width:25px;height:20px;">&nbsp19&nbsp</label>
		<input type="checkbox" id="checkboxFourInput20" value="twenty" name="twenty" style="display:none;float:left;" <?php $isIn=in_array("twenty",$adate); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput20" style="text-align:center;float:left;width:25px;height:20px;">&nbsp20&nbsp</label>
		<input type="checkbox" id="checkboxFourInput21" value="twentyone" name="twentyone" style="display:none;float:left;" <?php $isIn=in_array("twentyone",$adate); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput21" style="text-align:center;float:left;width:25px;height:20px;">&nbsp21&nbsp</label>
		<input type="checkbox" id="checkboxFourInput22" value="twentytwo" name="twentytwo" style="display:none;float:left;" <?php $isIn=in_array("twentytwo",$adate); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput22" style="text-align:center;float:left;width:25px;height:20px;">&nbsp22&nbsp</label>
		<input type="checkbox" id="checkboxFourInput23" value="twentythree" name="twentythree" style="display:none;float:left;" <?php $isIn=in_array("twentythree",$adate); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput23" style="text-align:center;float:left;width:25px;height:20px;">&nbsp23&nbsp</label>
		<input type="checkbox" id="checkboxFourInput24" value="twentyfour" name="twentyfour" style="display:none;float:left;" <?php $isIn=in_array("twentyfour",$adate); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput24" style="text-align:center;float:left;width:25px;height:20px;">&nbsp24&nbsp</label>
		<input type="checkbox" id="checkboxFourInput25" value="twentyfive" name="twentyfive" style="display:none;float:left;" <?php $isIn=in_array("twentyfive",$adate); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput25" style="text-align:center;float:left;width:25px;height:20px;">&nbsp25&nbsp</label>
		<input type="checkbox" id="checkboxFourInput26" value="twentysix" name="twentysix" style="display:none;float:left;" <?php $isIn=in_array("twentysix",$adate); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput26" style="text-align:center;float:left;width:25px;height:20px;">&nbsp26&nbsp</label>
		<input type="checkbox" id="checkboxFourInput27" value="twentyseven" name="twentyseven" style="display:none;float:left;" <?php $isIn=in_array("twentyseven",$adate); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput27" style="text-align:center;float:left;width:25px;height:20px;">&nbsp27&nbsp</label>
		<input type="checkbox" id="checkboxFourInput28" value="twentyeight" name="twentyeight" style="display:none;float:left;" <?php $isIn=in_array("twentyeight",$adate); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput28" style="text-align:center;float:left;width:25px;height:20px;">&nbsp28&nbsp</label>
		<input type="checkbox" id="checkboxFourInput29" value="twentynine" name="twentynine" style="display:none;float:left;" <?php $isIn=in_array("twentynine",$adate); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput29" style="text-align:center;float:left;width:25px;height:20px;">&nbsp29&nbsp</label>
		<input type="checkbox" id="checkboxFourInput30" value="thirty" name="thirty" style="display:none;float:left;" <?php $isIn=in_array("thirty",$adate); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput30" style="text-align:center;float:left;width:25px;height:20px;">&nbsp30&nbsp</label>
		<input type="checkbox" id="checkboxFourInput31" value="thirtyone" name="thirtyone" style="display:none;float:left;" <?php $isIn=in_array("thirtyone",$adate); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput31" style="text-align:center;float:left;width:25px;height:20px;">&nbsp31&nbsp</label>
  	</div>
    </div>
    <input type="submit" class="am-btn am-btn-primary" value="申请" style="float:right;height:39px;width:100%">
  </fieldset>
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