<?php
namespace Admin\Controller;
use Think\Controller;
header("Content-Type: text/html;charset=utf-8");
class LoginController extends Controller {
    public function index(){
        if(!isset($_SESSION['urlReferer']) || $_SESSION['urlReferer']==''){
				$_SESSION['urlReferer']='http://'.C('DEFAULT_DOMAIN').'/Admin/';
		}
        if(IS_POST){
            $username=$_POST['username'];
            $password=md5($_POST['password']);
            $m=M('admin');
            $login=$m->where("username='$username' and password='$password'")->find();
            if($login){
                $_SESSION['adminuid']=$login['uid'];
                $_SESSION['username']=$login['username'];
                session('logintime',time());
                $this->success('用户登录成功',$_SESSION['urlReferer']);
            }else{
                $this->error('用户名或密码错误');
            }
        }else{
            $this->show();
        }
    }
	public function lockscreen(){
	$nowtime = time();
    $s_time = session('overtime');
    if (($nowtime - $s_time) > 30) {
        $_SESSION=array();
				if(isset($_COOKIE[session_name()])){
					setcookie(session_name(),'',time()-1,'/');
				}
			session_destroy();
			$this->redirect('/Admin/Logout');
    }else{
        $this->display();
    }	
	}
}