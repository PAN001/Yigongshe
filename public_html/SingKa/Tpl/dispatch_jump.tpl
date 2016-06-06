<?php
    if(C('LAYOUT_ON')) {
        echo '{__NOLAYOUT__}';
    }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>跳转提示-<{$Think.config.WEB_NAME}></title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="/favicon.ico">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <link rel="stylesheet" href="__PUBLIC__/template/admin/css/sm.css">
    <link rel="stylesheet" href="__PUBLIC__/template/admin/css/sm-extend.css">
    <link rel="stylesheet" href="__PUBLIC__/template/admin/css/main-admin.css">

  </head>
  <body>
    <div class="content-box no-bottom">
    <div class="main-con">
 <div class="pro-p con-font con-color con-pd-notop con-mb">
   <h3 class="con-tit"><span><?php if(isset($message)) {?>
<h1>:)</h1>
<p class="success"><?php echo($message); ?></p>
<?php }else{?>
<h1>:(</h1>
<p class="error"><?php echo($error); ?></p>
<?php }?></span></h3>
  <div class="con-area con-pd">
  页面自动 <a id="href" href="<?php echo($jumpUrl); ?>">跳转</a> 等待时间： <b id="wait"><?php echo($waitSecond); ?></b>
   </div> 
  </div>
  
  </div>
  
  
</div>
    
    

          
          
<script src="__PUBLIC__/template/admin/js/zepto.min.js"></script>
<script src="__PUBLIC__/template/admin/js/sm.js"></script>
<script src="__PUBLIC__/template/admin/js/sm-extend.js"></script>
<script type="text/javascript">
(function(){
var wait = document.getElementById('wait'),href = document.getElementById('href').href;
var interval = setInterval(function(){
	var time = --wait.innerHTML;
	if(time <= 0) {
		location.href = href;
		clearInterval(interval);
	};
}, 1000);
})();
</script>
  </body>
</html>