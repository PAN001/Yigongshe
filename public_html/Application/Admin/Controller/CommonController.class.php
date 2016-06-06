<?php
namespace Admin\Controller;
use Think\Controller;
header("Content-type: text/html; charset=utf-8");
class CommonController extends Controller {
	Public function _initialize(){
	if(!isset($_SESSION['username']) || $_SESSION['username']==''){
		$this->redirect('/Admin/Logout');
	}
	}
	public function __construct() {
    parent::__construct();
    $this->checkAdminSession();
    }
    public function checkAdminSession() {
    $nowtime = time();
    $s_time = session('logintime');
    if (($nowtime - $s_time) > 900) {
        session('logintime',null);
        session('overtime',time());
        $this->error('当前用户登录超时，请重新登录', U('/Admin/Logout'));
    }else if (($nowtime - $s_time) > 1800) {
        $_SESSION=array();
				if(isset($_COOKIE[session_name()])){
					setcookie(session_name(),'',time()-1,'/');
				}
			session_destroy();
			$this->redirect('/Admin/Logout');
    }else{
        session('logintime',$nowtime);
    }
    }
}
?>