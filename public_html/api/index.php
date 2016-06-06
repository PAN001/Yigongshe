<?php

$appid='wx9d672afb2bb31edc';
$redirect_uri = urlencode ( 'http://uniwill.singka.cn/api/getUserInfo.php');
$url ="https://open.weixin.qq.com/connect/oauth2/authorize?appid=$appid&redirect_uri=$redirect_uri&response_type=code&scope=snsapi_base&state=1#wechat_redirect";
header("Location:".$url);

?>