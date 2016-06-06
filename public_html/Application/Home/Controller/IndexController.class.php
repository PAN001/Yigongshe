<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $m=M('consultation_type');
        $consultation_type=$m->select();
        $this->assign('consultation_type',$consultation_type);
        $m=M('restaurant_time');
        $restaurant_time=$m->select();
        $this->assign('restaurant_time',$restaurant_time);
        $m=M('active');
        $active=$m->order('id DESC')->limit(1)->find();
        $aid=$active['id'];
        $this->assign('active',$active);
        $m=M('active_sign');
        $activenum = $m->where("aid='$aid'")->sum('number');
        if($activenum){
            $this->assign('activenum',$activenum);
        }else{
            $activenum='0';
            $this->assign('activenum',$activenum);
        }
        $uid=$_SESSION['uid'];
        $m=M('user');
        $profile= $m->where("uid='$uid'")->find();
        $this->assign('profile',$profile);
        $uid=$_SESSION['uid'];
        $m=M('user');
        $comprofile=$m->where("uid='$uid'")->find();
        $this->assign('comprofile',$comprofile);
        $this->show();
    }
    public function doask(){
    $_SESSION['urlReferer']='http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];
    if(!isset($_SESSION['uid']) || $_SESSION['uid']==''){
		$this->redirect('http://'.C('DEFAULT_DOMAIN').'/api');
	}else{
		$rules = array(
		array('cid', 'require', '请选择问题类型'),
		array('content','require','请输入问题内容'),
		);
		$m = M('consultation'); 
		if (!$m->validate($rules)->create()){
			$this->error($m->getError());
			}else{
				$m=M('consultation');
                $data['uid']=$_POST['uid'];
                $data['cid']=$_POST['cid'];
                $data['content']=$_POST['content'];
                $data['date']=date('Y-m-d',time());
                $doask=$m->add($data);
                if($doask){
                    $this->success('提问成功，请等待解答','/Home/Index/index');
                }else{
                    $this->error('提问失败，请返回修改','/Home/Index/index');
                }
			}
    }
    }
    public function dorestaurant(){
    $_SESSION['urlReferer']='http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];
    if(!isset($_SESSION['uid']) || $_SESSION['uid']==''){
		$this->redirect('http://'.C('DEFAULT_DOMAIN').'/api');
	}else{
		$rules = array(
		array('tid', 'require', '请选择用餐时间'),
		array('number','require','请选择用餐人数'),
		);
		$m = M('restaurant'); 
		if (!$m->validate($rules)->create()){
			$this->error($m->getError());
			}else{
				$m=M('restaurant');
            $data['uid']=$_POST['uid'];
            $data['tid']=$_POST['tid'];
            $data['number']=$_POST['number'];
            $data['date']=date('Y/m/d',strtotime('+1 day'));
            $dorestaurant=$m->add($data);
            if($dorestaurant){
                $this->success('预约成功，请准时就餐','/Home/Index/index');
            }else{
                $this->error('预约失败，请返回修改','/Home/Index/index');
            }
			}
    }
    }
    public function domyconadmin(){
    $_SESSION['urlReferer']='http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];
    if(!isset($_SESSION['uid']) || $_SESSION['uid']==''){
		$this->redirect('http://'.C('DEFAULT_DOMAIN').'/api');
	}else{
        $id=$_GET['id'];
        $data['status']='2';
        $data['adate']=date('Y-m-d',time());
        $m=M('consultation');
        $domyconadmin=$m->where("id='$id'")->save($data);
        if($domyconadmin){
            $this->success('处理成功','/Home/Index/index');
        }else{
            $this->error('处理失败','/Home/Index/index');
        }
    }
    }
    public function doactive(){
    $_SESSION['urlReferer']='http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];
    if(!isset($_SESSION['uid']) || $_SESSION['uid']==''){
		$this->redirect('http://'.C('DEFAULT_DOMAIN').'/api');
	}else{
		$rules = array(
		array('number','require','请选择活动人数'),
		);
		$m = M('active_sign'); 
		if (!$m->validate($rules)->create()){
			$this->error($m->getError());
			}else{
			    $data['aid']=$_POST['aid'];
                $data['uid']=$_POST['uid'];
                $data['number']=$_POST['number'];
                $m=M('active_sign');
                $doactive=$m->add($data);
                if($doactive){
                   $this->success('预约成功','/Home/Index/index');
                }else{
                    $this->error('预约失败','/Home/Index/index');
                }
			}
    }
    }
    public function video(){
        $m=M('videos');
        $video=$m->order("id DESC")->select();
        $this->assign('video',$video);
        $this->assign('videoa',$video);
        $uid=$_SESSION['uid'];
        $m=M('user');
        $comprofile=$m->where("uid='$uid'")->find();
        $this->assign('comprofile',$comprofile);
        $this->display();
    }
    public function teletext(){
        $m=M('article');
        $article=$m->order("id DESC")->limit(8)->select();
        $this->assign('article',$article);
        $uid=$_SESSION['uid'];
        $m=M('user');
        $comprofile=$m->where("uid='$uid'")->find();
        $this->assign('comprofile',$comprofile);
        $this->display();
    }
    public function usermanual(){
        $uid=$_SESSION['uid'];
        $m=M('user');
        $comprofile=$m->where("uid='$uid'")->find();
        $this->assign('comprofile',$comprofile);
        $this->display();
    }
}