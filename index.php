<?php
// Ӧ������ļ�

// ������SESSION
ini_set("session.cookie_domain", 'yigong.igawk.cn');

// ���PHP����
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// ��������ģʽ ���鿪���׶ο��� ����׶�ע�ͻ�����Ϊfalse
define('APP_DEBUG',True);

// ����Ӧ��Ŀ¼
define('APP_PATH','./Application/');

// ����ThinkPHP����ļ�
require './SingKa/SingKa.php';