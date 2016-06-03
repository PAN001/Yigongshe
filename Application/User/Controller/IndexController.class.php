<?php
namespace User\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    $_SESSION['urlReferer']='http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];
    if(!isset($_SESSION['uid']) || $_SESSION['uid']==''){
		$this->redirect('http://yigong.igawk.cn/api');
	}else{
	    $uid=$_SESSION['uid'];
        $m=M('user');
        $profile=$m->where("uid='$uid'")->find();
        $is_sup=$profile['support'];
        $this->assign('profile',$profile);
        $uid=$_SESSION['uid'];
        $m=M('user_type_apply');
        $user_type_apply=$m->where("uid='$uid' and status='1'")->find();
        if($user_type_apply){
            $user_type_apply_status='1';
        }else{
            $user_type_apply_status='0';
        }
        $this->assign('user_type_apply_status',$user_type_apply_status);
        $rmobile=$profile['mobile'];
        $m=M('user');
        $myrecommend=$m->where("rmobile='$rmobile' and status='1' or rmobile='$rmobile' and status='2'")->count();
        $this->assign('myrecommend',$myrecommend);
        $m=M('intelapply');
        $uid=$_SESSION['uid'];
        $indexapply=$m->where("uid='$uid'")->find();
        if($indexapply){
            $indexapplystatus=$indexapply['status'];
        }else{
            $indexapplystatus='0';
        }
        $this->assign('indexapplystatus',$indexapplystatus);
        if($is_sup<>0){
            $this->display();
        }else{
            $this->error('只有提供支持后才能成为会员','/User/Index/support');
        }
	}
    }
    public function set(){
    $_SESSION['urlReferer']='http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];
    if(!isset($_SESSION['uid']) || $_SESSION['uid']==''){
		$this->redirect('http://yigong.igawk.cn/api');
	}else{
	    $uid=$_SESSION['uid'];
        $m=M('user');
        $profile=$m->where("uid='$uid'")->find();
        $is_sup=$profile['support'];
        $this->assign('profile',$profile);
        $this->display();
	}
    }
    public function doset(){
			$rules = array(
			array('name', 'require', '请输入姓名'),
			array('mobile', '','手机号码已经存在', 0 , 'unique', 1),
			array('mobile','require','请输入手机号码'),
			array('sex','require','请选择性别'),
			array('birth','require','请选择出生日期'),
			array('address','require','请输入您的地址'),
			);
			$user = M('User'); // 实例化User对象
			if (!$user->validate($rules)->create()){
				// 如果创建失败 表示验证没有通过 输出错误提示信息
				$this->error($user->getError());
				}else{
					$uid=$_POST['uid'];
					$data['name']=$_POST['name'];
					$data['sex']=$_POST['sex'];
					$data['mobile']=$_POST['mobile'];
					$data['birth']=$_POST['birth'];
					$data['address']=$_POST['address'];
					$data['joindate']=date('Y-m-d',time());
					$m=M('user');
					$doset=$m->where("uid='$uid'")->save($data);
					if($doset){
					    $this->success('修改信息成功','/User/Index/index');
					}else{
					    $this->error('修改信息失败','/User/Index/login');
					}
				}
		}
    public function login(){
        if(!isset($_SESSION['urlReferer']) || $_SESSION['urlReferer']==''){
				$_SESSION['urlReferer']='http://yigong.igawk.cn/User/Index/index';
		}
        $openid=$_GET['openid'];
        $avatar=$_GET['avatar'];
        $m=M('user');
        $login=$m->where("openid='$openid'")->find();
        if($login){
            $_SESSION['uid']=$login['uid'];
            $_SESSION['mobile']=$login['mobile'];
            $this->redirect($_SESSION['urlReferer']);
        }else{
            $this->assign('openid',$openid);
            $this->assign('avatar',$avatar);
            $this->display();
        }
    }
    public function regaaa(){
        $data['openid']=$_POST['openid'];
        $data['avatar']=$_POST['avatar'];
        $data['name']=$_POST['name'];
        $data['sex']=$_POST['sex'];
        $data['mobile']=$_POST['mobile'];
        $data['birth']=$_POST['birth'];
        $data['rmobile']=$_POST['rmobile'];
        $data['address']=$_POST['address'];
        $data['joindate']=date('Y-m-d',time());
        $m=M('user');
        $reg=$m->add($data);
        if($reg){
            $this->redirect('/User/Index/index');
        }else{
            $this->error('请完善信息','/User/Index/login');
        }
    }
    public function reg(){
			$rules = array(
			array('name', 'require', '请输入姓名'),
			array('mobile', '','手机号码已经存在', 0 , 'unique', 1),
			array('mobile','require','请输入手机号码'),
			array('sex','require','请选择性别'),
			array('birth','require','请选择出生日期'),
			array('rmobile','require','请输入推荐人手机号码'),
			array('address','require','请输入您的地址'),
			);
			$user = M('User'); // 实例化User对象
			if (!$user->validate($rules)->create()){
				// 如果创建失败 表示验证没有通过 输出错误提示信息
				$this->error($user->getError());
				}else{
					$data['openid']=$_POST['openid'];
					$data['avatar']=$_POST['avatar'];
					$data['name']=$_POST['name'];
					$data['sex']=$_POST['sex'];
					$data['mobile']=$_POST['mobile'];
					$data['birth']=$_POST['birth'];
					$data['rmobile']=$_POST['rmobile'];
					$data['address']=$_POST['address'];
					$data['joindate']=date('Y-m-d',time());
					$m=M('user');
					$reg=$m->add($data);
					if($reg){
					    $this->redirect('/User/Index/index');
					}else{
					    $this->error('请完善信息','/User/Index/login');
					}
				}
		}
    public function support(){
    $_SESSION['urlReferer']='http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];
    if(!isset($_SESSION['uid']) || $_SESSION['uid']==''){
		$this->redirect('http://yigong.igawk.cn/api');
	}else{
        $m=M('intelapply');
        $uid=$_SESSION['uid'];
        $intelapply=$m->where("uid='$uid'")->find();
        if($intelapply){
            $intelapplystatus=$intelapply['status'];
        }else{
            $intelapplystatus='0';
        }
        $this->assign('intelapplystatus',$intelapplystatus);
        $m=M('sup_other_type');
        $othertype=$m->select();
        $this->assign('othertype',$othertype);
        $m=M('sup_money');
        $uid=$_SESSION['uid'];
        $supmoney=$m->where("uid='$uid' and status='1'")->find();
        if($supmoney){
            $moneystatus='1';
        }else{
            $moneystatus='0';
        }
        $this->assign('moneystatus',$moneystatus);
        $m=M('sup_other');
        $uid=$_SESSION['uid'];
        $supother=$m->where("uid='$uid' and status='1'")->find();
        if($supother){
            $otherstatus='1';
        }else{
            $otherstatus='0';
        }
        $this->assign('otherstatus',$otherstatus);
        $uid=$_SESSION['uid'];
        $m=M('user');
        $comprofile=$m->where("uid='$uid'")->find();
        $this->assign('comprofile',$comprofile);
        $this->display();
	}
    }
    public function intelapply(){
    $_SESSION['urlReferer']='http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];
    if(!isset($_SESSION['uid']) || $_SESSION['uid']==''){
		$this->redirect('http://yigong.igawk.cn/api');
	}else{
        $m=M('obligation_type');
        $obligation_type=$m->select();
        $this->assign('obligation_type',$obligation_type);
        $m=M('obligation_type');
        $obligation_typew=$m->select();
        $this->assign('obligation_typew',$obligation_typew);
        $m=M('obligation_type');
        $obligation_typee=$m->select();
        $this->assign('obligation_typee',$obligation_typee);
        $m=M('consultation_type');
        $consultation_type=$m->select();
        $this->assign('consultation_type',$consultation_type);
        $m=M('consultation_type');
        $consultation_typew=$m->select();
        $this->assign('consultation_typew',$consultation_typew);
        $m=M('consultation_type');
        $consultation_typee=$m->select();
        $this->assign('consultation_typee',$consultation_typee);
        $uid=$_SESSION['uid'];
        $m=M('user');
        $comprofile=$m->where("uid='$uid'")->find();
        $this->assign('comprofile',$comprofile);
        $this->display();
	}
    }
    public function dointelapply(){
    $_SESSION['urlReferer']='http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];
    if(!isset($_SESSION['uid']) || $_SESSION['uid']==''){
		$this->redirect('http://yigong.igawk.cn/api');
	}else{
        $data['uid']=$_POST['uid'];
        $data['oid']=$_POST['oid'];
        $data['cid']=$_POST['cid'];
        $data['content']=$_POST['content'];
        $data['one']=$_POST['one'];
        $data['two']=$_POST['two'];
        $data['three']=$_POST['three'];
        $data['four']=$_POST['four'];
        $data['five']=$_POST['five'];
        $data['six']=$_POST['six'];
        $data['seven']=$_POST['seven'];
        $data['eight']=$_POST['eight'];
        $data['nine']=$_POST['nine'];
        $data['ten']=$_POST['ten'];
        $data['eleven']=$_POST['eleven'];
        $data['twelve']=$_POST['twelve'];
        $data['thirteen']=$_POST['thirteen'];
        $data['fourteen']=$_POST['fourteen'];
        $data['fifteen']=$_POST['fifteen'];
        $data['sixteen']=$_POST['sixteen'];
        $data['seventeen']=$_POST['seventeen'];
        $data['eighteen']=$_POST['eighteen'];
        $data['nineteen']=$_POST['nineteen'];
        $data['twenty']=$_POST['twenty'];
        $data['twentyone']=$_POST['twentyone'];
        $data['twentytwo']=$_POST['twentytwo'];
        $data['twentythree']=$_POST['twentythree'];
        $data['twentyfour']=$_POST['twentyfour'];
        $data['twentyfive']=$_POST['twentyfive'];
        $data['twentysix']=$_POST['twentysix'];
        $data['twentyseven']=$_POST['twentyseven'];
        $data['twentyeight']=$_POST['twentyeight'];
        $data['twentynine']=$_POST['twentynine'];
        $data['thirty']=$_POST['thirty'];
        $data['thirtyone']=$_POST['thirtyone'];
        $data['date']=date('Y-m-d',time());
        $data['status']='1';
        $m=M('intelapply');
        $dointelapply=$m->add($data);
        if($dointelapply){
            $this->success('提交成功，请等待审核','/User/Index/index');
        }else{
            $this->error('提交失败');
        }
    }
    }
    public function dosupportm(){
    $_SESSION['urlReferer']='http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];
    if(!isset($_SESSION['uid']) || $_SESSION['uid']==''){
		$this->redirect('http://yigong.igawk.cn/api');
	}else{
	    $uid=$_POST['uid'];
        $data['uid']=$_POST['uid'];
        $data['price']=$_POST['price'];
        $data['status']='1';
        $data['date']=date('Y-m-d H:i:s',time());
        $m=M('sup_money');
        $dosupportm=$m->add($data);
        $m=M('user');
        $dosupportuser=$m->where("uid='$uid'")->setInc('support',1);
        if($dosupportm and $dosupportuser){
            $this->success('登记成功，请等待审核','/User/Index/support');
        }else{
            $this->error('登记失败，请重新登记或联系客服人员','/User/Index/support');
        }
    }
    }
    public function doothersup(){
    $_SESSION['urlReferer']='http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];
    if(!isset($_SESSION['uid']) || $_SESSION['uid']==''){
		$this->redirect('http://yigong.igawk.cn/api');
	}else{
	    $uid=$_POST['uid'];
        $data['uid']=$_POST['uid'];
        $data['content']=$_POST['content'];
        $data['date']=date('Y-m-d',time());
        $data['status']='1';
        $m=M('sup_other');
        $doothersup=$m->add($data);
        $m=M('user');
        $dosupportuser=$m->where("uid='$uid'")->setInc('support',1);
        if($doothersup and $dosupportuser){
            $this->success('登记成功，请等候审核','/User/Index/support');
        }else{
            $this->error('登记失败，请重新登记或联系客服人员','/User/Index/support');
        }
    }
    }
    public function integral(){
    $_SESSION['urlReferer']='http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];
    if(!isset($_SESSION['uid']) || $_SESSION['uid']==''){
		$this->redirect('http://yigong.igawk.cn/api');
	}else{
        $uid=$_SESSION['uid'];
        $m=M('integral_record');
        $integralrecord=$m->where("uid='$uid'")->select();
        $this->assign('integralrecord',$integralrecord);
        $uid=$_SESSION['uid'];
        $m=M('user');
        $comprofile=$m->where("uid='$uid'")->find();
        $this->assign('comprofile',$comprofile);
        $this->display();
    }
    }
    public function apply(){
    $_SESSION['urlReferer']='http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];
    if(!isset($_SESSION['uid']) || $_SESSION['uid']==''){
		$this->redirect('http://yigong.igawk.cn/api');
	}else{
        $cid=$_GET['cid'];
        $m=M('user_type');
        $applyid=$m->where("id='$cid'")->find();
        $this->assign('applyid',$applyid);
        $uid=$_SESSION['uid'];
        $m=M('user');
        $comprofile=$m->where("uid='$uid'")->find();
        $this->assign('comprofile',$comprofile);
        $this->display();
    }
    }
    public function doapply(){
        $data['uid']=$_POST['uid'];
        $data['tid']=$_POST['tid'];
        $data['content']=$_POST['content'];
        $data['date']=date('Y-m-d',time());
        $data['status']='1';
        $m=M('user_type_apply');
        $doapply=$m->add($data);
        if($doapply){
            $this->success('提交成功，请等待审核','/User/Index/index');
        }else{
            $this->error('申请失败');
        }
    }
    public function finance(){
    $_SESSION['urlReferer']='http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];
    if(!isset($_SESSION['uid']) || $_SESSION['uid']==''){
		$this->redirect('http://yigong.igawk.cn/api');
	}else{
        $m=M('finance');
        $finance=$m->order('id')->limit(10)->select();
        $this->assign('finance',$finance);
        $uid=$_SESSION['uid'];
        $m=M('user');
        $comprofile=$m->where("uid='$uid'")->find();
        $this->assign('comprofile',$comprofile);
        $this->display();
    }
    }
    public function dorecommend(){
        $uid=$_GET['uid'];
        $data['status']=$_GET['status'];
        $m=M('user');
        $dorecommend=$m->where("uid='$uid'")->save($data);
        if($dorecommend){
            $this->success('提交成功，请等待审核','/User/Index/index');
        }else{
            $this->error('提交失败');
        }
    }
    public function myrecommend(){
    $_SESSION['urlReferer']='http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];
    if(!isset($_SESSION['uid']) || $_SESSION['uid']==''){
		$this->redirect('http://yigong.igawk.cn/api');
	}else{
        $rmobile=$_SESSION['mobile'];
        $m=M('user');
        $myrecommend=$m->where("rmobile='$rmobile' and status='1' or rmobile='$rmobile' and status='2'")->select();
        $this->assign('myrecommend',$myrecommend);
        $uid=$_SESSION['uid'];
        $m=M('user');
        $comprofile=$m->where("uid='$uid'")->find();
        $this->assign('comprofile',$comprofile);
        $this->display();
    }
    }
    public function domyrecommend(){
        $uid=$_GET['uid'];
        $data['status']=$_GET['status'];
        $m=M('user');
        $domyrecommend=$m->where("uid='$uid'")->save($data);
        if($domyrecommend){
            $this->success('审核成功');
        }else{
            $this->error('审核失败');
        }
    }
    public function myduty(){
    $_SESSION['urlReferer']='http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];
    if(!isset($_SESSION['uid']) || $_SESSION['uid']==''){
		$this->redirect('http://yigong.igawk.cn/api');
	}else{
	    $uid=$_SESSION['uid'];
        $m=M('intelapply');
        $myduty=$m->where("uid='$uid'")->find();
        $this->assign('myduty',$myduty);
        $m=M('obligation_type');
        $obligation_type=$m->select();
        $this->assign('obligation_type',$obligation_type);
        $mytypeoid=$myduty['oid'];
        $m=M('obligation_type');
        $obligation_typew=$m->where("id <> '$mytypeoid'")->select();
        $this->assign('obligation_typew',$obligation_typew);
        $m=M('obligation_type');
        $obligation_typee=$m->select();
        $this->assign('obligation_typee',$obligation_typee);
        $m=M('consultation_type');
        $consultation_type=$m->select();
        $this->assign('consultation_type',$consultation_type);
        $mytypeid=$myduty['cid'];
        $m=M('consultation_type');
        $consultation_typew=$m->where("id <> '$mytypeid'")->select();
        $this->assign('consultation_typew',$consultation_typew);
        $m=M('consultation_type');
        $consultation_typee=$m->select();
        $this->assign('consultation_typee',$consultation_typee);
        $uid=$_SESSION['uid'];
        $m=M('user');
        $comprofile=$m->where("uid='$uid'")->find();
        $this->assign('comprofile',$comprofile);
        $this->display();
    }
    }
    public function upintelapply(){
    $_SESSION['urlReferer']='http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];
    if(!isset($_SESSION['uid']) || $_SESSION['uid']==''){
		$this->redirect('http://yigong.igawk.cn/api');
	}else{
        $uid=$_POST['uid'];
        $data['oid']=$_POST['oid'];
        $data['cid']=$_POST['cid'];
        $data['content']=$_POST['content'];
        $data['one']=$_POST['one'];
        $data['two']=$_POST['two'];
        $data['three']=$_POST['three'];
        $data['four']=$_POST['four'];
        $data['five']=$_POST['five'];
        $data['six']=$_POST['six'];
        $data['seven']=$_POST['seven'];
        $data['eight']=$_POST['eight'];
        $data['nine']=$_POST['nine'];
        $data['ten']=$_POST['ten'];
        $data['eleven']=$_POST['eleven'];
        $data['twelve']=$_POST['twelve'];
        $data['thirteen']=$_POST['thirteen'];
        $data['fourteen']=$_POST['fourteen'];
        $data['fifteen']=$_POST['fifteen'];
        $data['sixteen']=$_POST['sixteen'];
        $data['seventeen']=$_POST['seventeen'];
        $data['eighteen']=$_POST['eighteen'];
        $data['nineteen']=$_POST['nineteen'];
        $data['twenty']=$_POST['twenty'];
        $data['twentyone']=$_POST['twentyone'];
        $data['twentytwo']=$_POST['twentytwo'];
        $data['twentythree']=$_POST['twentythree'];
        $data['twentyfour']=$_POST['twentyfour'];
        $data['twentyfive']=$_POST['twentyfive'];
        $data['twentysix']=$_POST['twentysix'];
        $data['twentyseven']=$_POST['twentyseven'];
        $data['twentyeight']=$_POST['twentyeight'];
        $data['twentynine']=$_POST['twentynine'];
        $data['thirty']=$_POST['thirty'];
        $data['thirtyone']=$_POST['thirtyone'];
        $m=M('intelapply');
        $dointelapply=$m->where("uid='$uid'")->save($data);
        if($dointelapply){
            $this->success('提交成功');
        }else{
            $this->error('提交失败');
        }
    }
    }
    public function mydutyadmin(){
    $_SESSION['urlReferer']='http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];
    if(!isset($_SESSION['uid']) || $_SESSION['uid']==''){
		$this->redirect('http://yigong.igawk.cn/api');
	}else{
	    $uid=$_SESSION['uid'];
        $m=M('obligation');
        $mydutyadmin=$m->where("uid='$uid'")->order('id DESC')->select();
        $this->assign('mydutyadmin',$mydutyadmin);
        $uid=$_SESSION['uid'];
        $m=M('user');
        $comprofile=$m->where("uid='$uid'")->find();
        $this->assign('comprofile',$comprofile);
        $this->display();
    }
    }
    public function domydutyadmin(){
        $id=$_GET['id'];
        $data['status']=$_GET['status'];
        $data['date']=date('Y-m-d',time());
        $m=M('obligation');
        $domydutyadmin=$m->where("id='$id'")->save($data);
        if($domydutyadmin){
            $this->success('处理成功','/User/Index/mydutyadmin');
        }else{
            $this->error('处理失败','/User/Index/mydutyadmin');
        }
    }
    public function deletemydutyadmin(){
    $_SESSION['urlReferer']='http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];
    if(!isset($_SESSION['uid']) || $_SESSION['uid']==''){
		$this->redirect('http://yigong.igawk.cn/api');
	}else{
        $id=$_GET['id'];
        $m=M('obligation');
        $deletemydutyadmin=$m->where("id='$id'")->delete();
        if($deletemydutyadmin){
            $this->success('处理成功','/User/Index/mydutyadmin');
        }else{
            $this->error('处理失败','/User/Index/mydutyadmin');
        }
    }
    }
    public function myconadmin(){
    $_SESSION['urlReferer']='http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];
    if(!isset($_SESSION['uid']) || $_SESSION['uid']==''){
		$this->redirect('http://yigong.igawk.cn/api');
	}else{
	    $aid=$_SESSION['uid'];
        $m=M('consultation');
        $myconadmin=$m->where("aid='$aid'")->order('id DESC')->select();
        $this->assign('myconadmin',$myconadmin);
        $uid=$_SESSION['uid'];
        $m=M('user');
        $comprofile=$m->where("uid='$uid'")->find();
        $this->assign('comprofile',$comprofile);
        $this->display();
    }
    }
    public function domyconadmin(){
    $_SESSION['urlReferer']='http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];
    if(!isset($_SESSION['uid']) || $_SESSION['uid']==''){
		$this->redirect('http://yigong.igawk.cn/api');
	}else{
        $id=$_GET['id'];
        $data['status']=$_GET['status'];
        $data['adate']=date('Y-m-d',time());
        $m=M('consultation');
        $domyconadmin=$m->where("id='$id'")->save($data);
        if($domyconadmin){
            $this->success('处理成功','/User/Index/myconadmin');
        }else{
            $this->error('处理失败','/User/Index/myconadmin');
        }
    }
    }
    public function deletemyconadmin(){
    $_SESSION['urlReferer']='http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];
    if(!isset($_SESSION['uid']) || $_SESSION['uid']==''){
		$this->redirect('http://yigong.igawk.cn/api');
	}else{
        $id=$_GET['id'];
        $data['aid']='NULL';
        $data['adate']='NULL';
        $m=M('consultation');
        $deletemyconadmin=$m->where("id='$id'")->save($data);
        if($deletemyconadmin){
            $this->success('处理成功','/User/Index/myconadmin');
        }else{
            $this->error('处理失败','/User/Index/myconadmin');
        }
    }
    }
    public function dormobile(){
    $_SESSION['urlReferer']='http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];
    if(!isset($_SESSION['uid']) || $_SESSION['uid']==''){
		$this->redirect('http://yigong.igawk.cn/api');
	}else{
        $uid=$_POST['uid'];
        $data['rmobile']=$_POST['rmobile'];
        $data['comparison']='1';
        $rmobile=$_POST['rmobile'];
        $m=M('user');
        $oneself=$m->where("uid='$uid'")->find();
        $oneselftype=$oneself['type'];
        $recommended=$m->where("mobile='$rmobile'")->find();
        $recommendedtype=$recommended['type'];
        if($oneselftype < $recommendedtype){
            $dormobile=$m->where("uid='$uid'")->save($data);
            if($dormobile){
                $this->success('比对成功','/User/Index/index');
            }else{
                $this->error('比对失败','/User/Index/index');
            }
        }else{
            $this->error('请输入等级比你高的推荐人手机号码','/User/Index/index');
        }
    }
    }
}