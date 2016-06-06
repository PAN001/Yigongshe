<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>我的义务-<?php echo (C("WEB_NAME")); ?></title>
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
            我的义务
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
<form class="am-form" method="POST" action="/User/Index/upintelapply">
  <fieldset style="padding-bottom:0px;margin-bottom:-30px;">
    <input type="hidden" name="uid" value="<?php echo ($_SESSION['uid']); ?>">
    <div class="am-form-group" style="float:left;margin-bottom:6px;">
      <select id="obligation" name="oid" onchange="abc(this.options[this.options.selectedIndex].id)" style="width:120px;">
        <option value="<?php echo ($myduty["oid"]); ?>" id="<?php $id=$myduty['oid'];$m=M('obligation_type');$myobligation_type=$m->where("id='$id'")->find();echo $myobligation_type['content']; ?>"><?php $id=$myduty['oid'];$m=M('obligation_type');$myobligation_type=$m->where("id='$id'")->find();echo $myobligation_type['title']; ?></option>
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
      <textarea id="ocontent" name="ocontent" class="" rows="5" style="height:80px;" disabled="disabled"><?php $id=$myduty['oid'];$m=M('obligation_type');$myobligation_type=$m->where("id='$id'")->find();echo $myobligation_type['content']; ?></textarea>
    </div>
  </fieldset>
  <fieldset style="padding-bottom:0px;margin-bottom:-30px;">
    <div class="am-form-group" style="float:left;margin-bottom:6px;">
      <select id="consultation" name="cid" onchange="bao(this.options[this.options.selectedIndex].id)" style="width:120px;">
        <option value="<?php echo ($myduty["cid"]); ?>" id="<?php $id=$myduty['cid'];$m=M('consultation_type');$myconsultation_type=$m->where("id='$id'")->find();echo $myconsultation_type['content']; ?>"><?php $id=$myduty['cid'];$m=M('consultation_type');$myconsultation_type=$m->where("id='$id'")->find();echo $myconsultation_type['title']; ?></option>
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
      <textarea id="ccontent" name="ccontent" class="" rows="5" style="height:80px;" disabled="disabled"><?php $id=$myduty['cid'];$m=M('consultation_type');$myconsultation_type=$m->where("id='$id'")->find();echo $myconsultation_type['content']; ?></textarea>
    </div>
  </fieldset>
  <fieldset style="padding-bottom:0px;margin-bottom:-30px;">
    <div class="am-titlebar am-titlebar-multi" style="padding-top:1px;margin-top:0px;">
    <h2 class="am-titlebar-title ">
        自我介绍
    </h2>
    </div>
    <div class="am-form-group">
      <textarea name="content" class="" rows="5" style="height:80px;" placeholder="请输入你的个人简介"><?php echo ($myduty["content"]); ?></textarea>
    </div>
  </fieldset>
  <fieldset style="padding-bottom:0px;margin-bottom:-15px;">
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
	width:25px;
    height:20px;
	color: red;
	float:left;
	text-align:center;
}
</style>
    <div class="am-form-group">
    <div class="checkboxFour">
		<input type="checkbox" id="checkboxFourInput1" value="one" name="one" style="display:none;float:left;" <?php $isIn=in_array("one",$myduty); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput1" style="text-align:center;float:left;width:25px;height:20px;">1</label>
		<input type="checkbox" id="checkboxFourInput2" value="two" name="two" style="display:none;float:left;" <?php $isIn=in_array("two",$myduty); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput2" style="text-align:center;float:left;width:25px;height:20px;">2</label>
		<input type="checkbox" id="checkboxFourInput3" value="three" name="three" style="display:none;float:left;" <?php $isIn=in_array("three",$myduty); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput3" style="text-align:center;float:left;width:25px;height:20px;">3</label>
		<input type="checkbox" id="checkboxFourInput4" value="four" name="four" style="display:none;float:left;" <?php $isIn=in_array("four",$myduty); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput4" style="text-align:center;float:left;width:25px;height:20px;">4</label>
		<input type="checkbox" id="checkboxFourInput5" value="five" name="five" style="display:none;float:left;" <?php $isIn=in_array("five",$myduty); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput5" style="text-align:center;float:left;width:25px;height:20px;">5</label>
		<input type="checkbox" id="checkboxFourInput6" value="six" name="six" style="display:none;float:left;" <?php $isIn=in_array("six",$myduty); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput6" style="text-align:center;float:left;width:25px;height:20px;">6</label>
		<input type="checkbox" id="checkboxFourInput7" value="seven" name="seven" style="display:none;float:left;" <?php $isIn=in_array("seven",$myduty); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput7" style="text-align:center;float:left;width:25px;height:20px;">7</label>
		<input type="checkbox" id="checkboxFourInput8" value="eight" name="eight" style="display:none;float:left;" <?php $isIn=in_array("eight",$myduty); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput8" style="text-align:center;float:left;width:25px;height:20px;">8</label>
		<input type="checkbox" id="checkboxFourInput9" value="nine" name="nine" style="display:none;float:left;" <?php $isIn=in_array("nine",$myduty); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput9" style="text-align:center;float:left;width:25px;height:20px;">9</label>
		<input type="checkbox" id="checkboxFourInput10" value="ten" name="ten" style="display:none;float:left;" <?php $isIn=in_array("ten",$myduty); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput10" style="text-align:center;float:left;width:25px;height:20px;">10</label>
		<input type="checkbox" id="checkboxFourInput11" value="eleven" name="eleven" style="display:none;float:left;" <?php $isIn=in_array("eleven",$myduty); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput11" style="text-align:center;float:left;width:25px;height:20px;">11</label>
		<input type="checkbox" id="checkboxFourInput12" value="twelve" name="twelve" style="display:none;float:left;" <?php $isIn=in_array("twelve",$myduty); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput12" style="text-align:center;float:left;width:25px;height:20px;">12</label>
		<input type="checkbox" id="checkboxFourInput13" value="thirteen" name="thirteen" style="display:none;float:left;" <?php $isIn=in_array("thirteen",$myduty); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput13" style="text-align:center;float:left;width:25px;height:20px;">13</label>
		<input type="checkbox" id="checkboxFourInput14" value="fourteen" name="fourteen" style="display:none;float:left;" <?php $isIn=in_array("fourteen",$myduty); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput14" style="text-align:center;float:left;width:25px;height:20px;">14</label>
		<input type="checkbox" id="checkboxFourInput15" value="fifteen" name="fifteen" style="display:none;float:left;" <?php $isIn=in_array("fifteen",$myduty); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput15" style="text-align:center;float:left;width:25px;height:20px;">15</label>
		<input type="checkbox" id="checkboxFourInput16" value="sixteen" name="sixteen" style="display:none;float:left;" <?php $isIn=in_array("sixteen",$myduty); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput16" style="text-align:center;float:left;width:25px;height:20px;">16</label>
		<input type="checkbox" id="checkboxFourInput17" value="seventeen" name="seventeen" style="display:none;float:left;" <?php $isIn=in_array("seventeen",$myduty); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput17" style="text-align:center;float:left;width:25px;height:20px;">17</label>
		<input type="checkbox" id="checkboxFourInput18" value="eighteen" name="eighteen" style="display:none;float:left;" <?php $isIn=in_array("eighteen",$myduty); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput18" style="text-align:center;float:left;width:25px;height:20px;">18</label>
		<input type="checkbox" id="checkboxFourInput19" value="nineteen" name="nineteen" style="display:none;float:left;" <?php $isIn=in_array("nineteen",$myduty); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput19" style="text-align:center;float:left;width:25px;height:20px;">19</label>
		<input type="checkbox" id="checkboxFourInput20" value="twenty" name="twenty" style="display:none;float:left;" <?php $isIn=in_array("twenty",$myduty); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput20" style="text-align:center;float:left;width:25px;height:20px;">20</label>
		<input type="checkbox" id="checkboxFourInput21" value="twentyone" name="twentyone" style="display:none;float:left;" <?php $isIn=in_array("twentyone",$myduty); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput21" style="text-align:center;float:left;width:25px;height:20px;">21</label>
		<input type="checkbox" id="checkboxFourInput22" value="twentytwo" name="twentytwo" style="display:none;float:left;" <?php $isIn=in_array("twentytwo",$myduty); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput22" style="text-align:center;float:left;width:25px;height:20px;">22</label>
		<input type="checkbox" id="checkboxFourInput23" value="twentythree" name="twentythree" style="display:none;float:left;" <?php $isIn=in_array("twentythree",$myduty); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput23" style="text-align:center;float:left;width:25px;height:20px;">23</label>
		<input type="checkbox" id="checkboxFourInput24" value="twentyfour" name="twentyfour" style="display:none;float:left;" <?php $isIn=in_array("twentyfour",$myduty); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput24" style="text-align:center;float:left;width:25px;height:20px;">24</label>
		<input type="checkbox" id="checkboxFourInput25" value="twentyfive" name="twentyfive" style="display:none;float:left;" <?php $isIn=in_array("twentyfive",$myduty); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput25" style="text-align:center;float:left;width:25px;height:20px;">25</label>
		<input type="checkbox" id="checkboxFourInput26" value="twentysix" name="twentysix" style="display:none;float:left;" <?php $isIn=in_array("twentysix",$myduty); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput26" style="text-align:center;float:left;width:25px;height:20px;">26</label>
		<input type="checkbox" id="checkboxFourInput27" value="twentyseven" name="twentyseven" style="display:none;float:left;" <?php $isIn=in_array("twentyseven",$myduty); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput27" style="text-align:center;float:left;width:25px;height:20px;">27</label>
		<input type="checkbox" id="checkboxFourInput28" value="twentyeight" name="twentyeight" style="display:none;float:left;" <?php $isIn=in_array("twentyeight",$myduty); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput28" style="text-align:center;float:left;width:25px;height:20px;">28</label>
		<input type="checkbox" id="checkboxFourInput29" value="twentynine" name="twentynine" style="display:none;float:left;" <?php $isIn=in_array("twentynine",$myduty); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput29" style="text-align:center;float:left;width:25px;height:20px;">29</label>
		<input type="checkbox" id="checkboxFourInput30" value="thirty" name="thirty" style="display:none;float:left;" <?php $isIn=in_array("thirty",$myduty); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput30" style="text-align:center;float:left;width:25px;height:20px;">30</label>
		<input type="checkbox" id="checkboxFourInput31" value="thirtyone" name="thirtyone" style="display:none;float:left;" <?php $isIn=in_array("thirtyone",$myduty); if($isIn) echo "checked";?>/>
		<label for="checkboxFourInput31" style="text-align:center;float:left;width:25px;height:20px;">31</label>
  	</div>
    </div>
    <input type="submit" class="am-btn am-btn-primary" value="修改" style="float:right;height:39px;width:100%;">
  </fieldset>
  <fieldset style="padding-bottom:0px;margin-bottom:-35px;">
    <div class="am-titlebar am-titlebar-multi" style="padding-top:1px;margin-top:0px;">
    <h2 class="am-titlebar-title ">
        义务管理
    </h2>
    </div>
    <div class="am-form-group">
    <div class="am-panel am-panel-default">
    <div class="am-panel-bd" style="text-align:center;"><label class="ml1">义务总数</label><a href="/User/Index/mydutyadmin" style="color:#000000;">（<span class="color-red"><?php $uid=$_SESSION['uid'];$m=M('obligation');$allobligation=$m->where("uid='$uid'")->count();echo $allobligation; ?></span>）</a>   <label class="ml1">当前义务</label><a href="/User/Index/mydutyadmin" style="color:#000000;">（<span class="color-red"><?php $uid=$_SESSION['uid'];$m=M('obligation');$nowobligation=$m->where("uid='$uid' and status='1'")->count();echo $nowobligation; ?></span>）</a><br>
<label class="ml1">完成义务</label><a href="/User/Index/mydutyadmin" style="color:#000000;">（<span class="color-red"><?php $uid=$_SESSION['uid'];$m=M('obligation');$completeobligation=$m->where("uid='$uid' and status='2'")->count();echo $completeobligation; ?></span>）</a>   <label class="ml1">待接义务</label><a href="/User/Index/mydutyadmin" style="color:#000000;">（<span class="color-red"><?php $uid=$_SESSION['uid'];$m=M('obligation');$waitobligation=$m->where("uid='$uid' and status='0'")->count();echo $waitobligation; ?></span>）</a></div>
    </div>
    </div>
  </fieldset>
  <fieldset style="padding-bottom:0px;margin-bottom:0px;">
    <div class="am-titlebar am-titlebar-multi" style="padding-top:1px;margin-top:0px;">
    <h2 class="am-titlebar-title ">
        咨询管理
    </h2>
    </div>
    <div class="am-form-group">
    <div class="am-panel am-panel-default">
    <div class="am-panel-bd" style="text-align:center;"><label class="ml1">咨询总数</label><a href="/User/Index/myconadmin" style="color:#000000;">（<span class="color-red"><?php $aid=$_SESSION['uid'];$m=M('consultation');$allconsultation=$m->where("aid='$aid'")->count();echo $allconsultation; ?></span>）</a>   <label class="ml1">当前咨询</label><a href="/User/Index/myconadmin" style="color:#000000;">（<span class="color-red"><?php $aid=$_SESSION['uid'];$m=M('consultation');$nowconsultation=$m->where("aid='$aid' and status='1'")->count();echo $nowconsultation; ?></span>）</a><br>

<label class="ml1">完成咨询</label><a href="/User/Index/myconadmin" style="color:#000000;">（<span class="color-red"><?php $aid=$_SESSION['uid'];$m=M('consultation');$completeconsultation=$m->where("aid='$aid' and status='2'")->count();echo $completeconsultation; ?></span>）</a>   <label class="ml1">待接咨询</label><a href="/User/Index/myconadmin" style="color:#000000;">（<span class="color-red"><?php $aid=$_SESSION['uid'];$m=M('consultation');$waitconsultation=$m->where("aid='$aid' and status='0'")->count();echo $waitconsultation; ?></span>）</a></div>
    </div>
    </div>
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