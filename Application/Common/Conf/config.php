<?php
return array(
	'LOAD_EXT_CONFIG' => 'db,set',
	'APP_GROUP_LIST' => 'Admin,Home,User',
	'DEFAULT_GROUP' => 'Home',
	'APP_GROUP_MODE' => 1,
	'TMPL_FILE_DEPR' =>'/',
	'URL_MODEL' => 2,
	'URL_ROUTER_ON'   => true,
	'URL_ROUTE_RULES' => array( //定义路由规则
	'doLogout'    => 'User/Login/doLogout',
	'Login'    => 'User/Login/index',
	'Register'    => 'User/Register/index',
	),
	'URL_HTML_SUFFIX'       => '',
	'URL_PATHINFO_DEPR'=>'/',//修改URL的分隔符
	'TMPL_L_DELIM'=>'<{', //修改左定界符
    'TMPL_R_DELIM'=>'}>', //修改右定界符
);
?>