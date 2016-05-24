<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends CommonController {
    public function index(){
        $this->show();
    }
    public function moneysupport(){
        $m=M('sup_money');
        $moneysupport=$m->order('Id DESC')->select();
        $this->assign('moneysupport',$moneysupport);
        $this->show();
    }
    public function smoneysupport(){
        $m=M('user');
        $mobile=$_POST['mobile'];
        $userinfo=$m->where("mobile='$mobile'")->find();
        $muid=$userinfo['uid'];
        $m=M('sup_money');
        $smoneysupport=$m->where("uid='$muid'")->order('id DESC')->select();
        $this->assign('smoneysupport',$smoneysupport);
        $this->show();
    }
    public function domoneysupport(){
        $id=$_GET['id'];
        $uid=$_GET['uid'];
        $score=$_GET['price'];
        $data['status']=$_GET['status'];
        $datat['uid']=$uid;
        $datat['reason']='资金';
        $datat['date']=date('Y-m-d',time());
        $datat['tid']='0';
        $datat['income']=$score;
        $m=M('user');
        $userscore=$m->where("uid='$uid'")->setInc('score',$score);
        $m=M('integral_record');
        $dointegral=$m->add($datat);
        $m=M('sup_money');
        $domoneysupport=$m->where("id='$id'")->save($data);
        if($domoneysupport and $userscore and $dointegral){
            $this->success('审核成功','/Admin/Index/moneysupport/');
        }else{
            $this->error('审核失败');
        }
    }
    public function deletemoneysupport(){
        $id=$_GET['id'];
        $m=M('sup_money');
        $deletemoneysupport=$m->where("id='$id'")->delete();
        if($deletemoneysupport){
            $this->success('审核成功','/Admin/Index/moneysupport/');
        }else{
            $this->error('审核失败');
        }
    }
    public function witsupport(){
        $m=M('intelapply');
        $witsupport=$m->order('date DESC')->select();
        $this->assign('witsupport',$witsupport);
        $this->display();
    }
    public function witsupportdetail(){
        $uid=$_GET['uid'];
        $m=M('intelapply');
        $witsupportdetail=$m->where("uid='$uid'")->find();
        $this->assign('witsupportdetail',$witsupportdetail);
        $this->display();
    }
    public function dowitsupport(){
        $uid=$_GET['uid'];
        $data['status']=$_GET['status'];
        $m=M('intelapply');
        $dowitsupport=$m->where("uid='$uid'")->save($data);
        if($dowitsupport){
            $this->success('审核成功','/Admin/Index/witsupport/');
        }else{
            $this->error('审核失败');
        }
    }
    public function deletewitsupport(){
        $uid=$_GET['uid'];
        $m=M('intelapply');
        $deletewitsupport=$m->where("uid='$uid'")->delete();
        if($deletewitsupport){
            $this->success('审核成功','/Admin/Index/witsupport/');
        }else{
            $this->error('审核失败');
        }
    }
    public function othersupport(){
        $m=M('sup_other');
        $oneothersupport=$m->where("status='1'")->order('id DESC')->select();
        $this->assign('oneothersupport',$oneothersupport);
        $twoothersupport=$m->where("status='2'")->order('id DESC')->select();
        $this->assign('twoothersupport',$twoothersupport);
        $this->display();
    }
    public function doothersupport(){
        $id=$_GET['id'];
        $data['status']=$_GET['status'];
        $m=M('sup_other');
        $doothersupport=$m->where("id='$id'")->save($data);
        if($doothersupport){
            $this->success('审核成功','/Admin/Index/othersupport/');
        }else{
            $this->error('审核失败');
        }
    }
    public function deleteothersupport(){
        $id=$_GET['id'];
        $m=M('sup_other');
        $deleteothersupport=$m->where("id='$id'")->delete();
        if($deleteothersupport){
            $this->success('审核成功','/Admin/Index/othersupport/');
        }else{
            $this->error('审核失败');
        }
    }
    public function integral(){
        if(IS_POST){
            $mobile=$_POST['mobile'];
            $m=M('user');
            $profile=$m->where("mobile='$mobile'")->find();
            $this->assign('profile',$profile);
            if($profile){
                $profilename=$profile['name'];
                $profilemobile=$profile['mobile'];
                $this->assign('profilename',$profilename);
                $this->assign('profilemobile',$profilemobile);
            }else{
                $profilename="查无此人";
                $this->assign('profilename',$profilename);
            }
            $this->display();
        }else{
            $this->display();
        }
    }
    public function dointegral(){
        $uid=$_POST['uid'];
        $tid=$_POST['tid'];
        $score=$_POST['score'];
        if($tid==0){
            $data['uid']=$uid;
            $data['reason']=$_POST['reason'];
            $data['date']=date('Y-m-d',time());
            $data['tid']='0';
            $data['income']=$score;
            $m=M('user');
            $userscore=$m->where("uid='$uid'")->setInc('score',$score);
            $m=M('integral_record');
            $dointegral=$m->add($data);
            if($dointegral and $userscore){
                $this->success('操作成功','/Admin/Index/integral');
            }else{
                $this->error('操作失败','/Admin/Index/integral');
            }
        }else{
            $data['uid']=$uid;
            $data['reason']=$_POST['reason'];
            $data['date']=date('Y-m-d',time());
            $data['tid']='1';
            $data['expenditure']=$_POST['score'];
            $m=M('user');
            $userscore=$m->where("uid='$uid'")->setDec('score',$score);
            $m=M('integral_record');
            $dointegral=$m->add($data);
            if($dointegral and $userscore){
                $this->success('操作成功','/Admin/Index/integral');
            }else{
                $this->error('操作失败','/Admin/Index/integral');
            }
        }
    }
    public function food(){
        $date=date('Y-m-d',time());
        $m=M('restaurant');
        $food=$m->where("date='$date'")->select();
        $this->assign('food',$food);
        $this->display();
    }
    public function identity(){
        $m=M('user_type_apply');
        $oneidentity=$m->where("status='1'")->order('id DESC')->select();
        $this->assign('oneidentity',$oneidentity);
        $twoidentity=$m->where("status='2'")->order('id DESC')->select();
        $this->assign('twoidentity',$twoidentity);
        $this->display();
    }
    public function doidentity(){
        $id=$_GET['id'];
        $uid=$_GET['uid'];
        $status=$_GET['status'];
        if($status==0){
            $data['status']=$_GET['status'];
            $m=M('user_type_apply');
            $doidentity=$m->where("id='$id'")->save($data);
            if($doidentity){
                $this->success('审核成功','/Admin/Index/identity/');
            }else{
                $this->error('审核失败');
            }
        }else{
            $data['status']=$_GET['status'];
            $dataa['type']=$_GET['type'];
            $m=M('user_type_apply');
            $doidentity=$m->where("id='$id'")->save($data);
            $m=M('user');
            $douserinfo=$m->where("uid='$uid'")->save($dataa);
            if($doidentity and $douserinfo){
                $this->success('审核成功','/Admin/Index/identity/');
            }else{
                $this->error('审核失败');
            }
        }
    }
    public function financial(){
        $m=M('finance');
        $financial=$m->order("id DESC")->select();
        $this->assign('financial',$financial);
        $m=M('finance');
        $financiallast=$m->order("id DESC")->limit(1)->find();
        $this->assign('financiallast',$financiallast);
        $this->display();
    }
    public function dofinancial(){
        $tid=$_POST['tid'];
        $lastbalance=$_POST['lastbalance'];
        $price=$_POST['price'];
        if($tid==0){
            $data['tid']=$_POST['tid'];
            $data['income']=$_POST['price'];
            $data['balance']=intval ( $lastbalance )+ intval ( $price );
            $data['date']=$_POST['date'];
            $data['remarks']=$_POST['remarks'];
            $m=M('finance');
            $dofinancial=$m->add($data);
            if($dofinancial){
                $this->success('添加成功','/Admin/Index/financial/');
            }else{
                $this->error('添加失败');
            }
        }else{
            $data['tid']=$_POST['tid'];
            $data['expenditure']=$_POST['price'];
            $data['balance']=intval ( $lastbalance )- intval ( $price );
            $data['date']=$_POST['date'];
            $data['remarks']=$_POST['remarks'];
            $m=M('finance');
            $dofinancial=$m->add($data);
            if($dofinancial){
                $this->success('添加成功','/Admin/Index/financial/');
            }else{
                $this->error('添加失败');
            }
        }
    }
    public function manual(){
        if(IS_POST){
            $data['content']=$_POST['content'];
            $m=M('setting');
            $manual=$m->where("id='1'")->save($data);
            if($manual){
                $this->success('提交成功','/Admin/Index/manual/');
            }else{
                $this->error('提交失败');
            }
        }else{
            $this->display();
        }
    }
    public function users(){
        $m=M('user');
        $userlist=$m->order('score DESC')->select();
        $this->assign('userlist',$userlist);
        $this->display();
    }
    public function dosearchuser(){
        $mobile=$_POST['mobile'];
        $m=M('user');
        $dosearchuser=$m->where("mobile='$mobile'")->find();
        if($dosearchuser){
            $this->assign('dosearchuser',$dosearchuser);
            $this->display();
        }else{
            $this->error('查无此人');
        }
    }
    public function videos(){
        $m=M('videos');
        $videos=$m->order('id DESC')->select();
        $this->assign('videos',$videos);
        $this->display();
    }
    public function videoadd(){
        $data['title']=$_POST['title'];
        $data['url']=$_POST['url'];
        $data['thumb']=$_POST['thumb'];
        $data['date']=date('Y-m-d H:i:s',time());
        $m=M('videos');
        $videoadd=$m->add($data);
        if($videoadd){
            $this->success('添加成功','/Admin/Index/videos/');
        }else{
            $this->error('添加失败');
        }
    }
    public function stuff(){
        $m=M('article');
        $stuff=$m->order('id DESC')->select();
        $this->assign('stuff',$stuff);
        $this->display();
    }
    public function stuffadd(){
        $data['title']=$_POST['title'];
        $data['url']=$_POST['url'];
        $data['thumb']=$_POST['thumb'];
        $data['date']=date('Y-m-d H:i:s',time());
        $m=M('article');
        $stuffadd=$m->add($data);
        if($stuffadd){
            $this->success('添加成功','/Admin/Index/stuff/');
        }else{
            $this->error('添加失败');
        }
    }
    public function consultationtype(){
        $m=M('consultation_type');
        $consultationtype=$m->select();
        $this->assign('consultationtype',$consultationtype);
        $this->display();
    }
    public function doctype(){
        $data['title']=$_POST['title'];
        $data['content']=$_POST['content'];
        $m=M('consultation_type');
        $doctype=$m->add($data);
        if($doctype){
            $this->success('添加成功','/Admin/Index/consultationtype/');
        }else{
            $this->error('添加失败');
        }
    }
    public function editctype(){
        $id=$_GET['id'];
        $data['title']=$_POST['title'];
        $data['content']=$_POST['content'];
        $m=M('consultation_type');
        $editctype=$m->where("id='$id'")->save($data);
        if($editctype){
            $this->success('修改成功','/Admin/Index/consultationtype/');
        }else{
            $this->error('修改失败');
        }
    }
    public function obligationtype(){
        $m=M('obligation_type');
        $obligationtype=$m->select();
        $this->assign('obligationtype',$obligationtype);
        $this->display();
    }
    public function dootype(){
        $data['title']=$_POST['title'];
        $data['content']=$_POST['content'];
        $m=M('obligation_type');
        $dootype=$m->add($data);
        if($dootype){
            $this->success('添加成功','/Admin/Index/obligationtype/');
        }else{
            $this->error('添加失败');
        }
    }
    public function editotype(){
        $id=$_GET['id'];
        $data['title']=$_POST['title'];
        $data['content']=$_POST['content'];
        $m=M('obligation_type');
        $editotype=$m->where("id='$id'")->save($data);
        if($editotype){
            $this->success('修改成功','/Admin/Index/obligationtype/');
        }else{
            $this->error('修改失败');
        }
    }
    public function activity(){
        $m=M('active');
        $activity=$m->order('id DESC')->select();
        $this->assign('activity',$activity);
        $m=M('user_type');
        $usertype=$m->select();
        $this->assign('usertype',$usertype);
        $this->display();
    }
    public function doactivity(){
        $data['allnumber']=$_POST['allnumber'];
        $data['usertype']=$_POST['usertype'];
        $data['integral']=$_POST['integral'];
        $data['usernumber']=$_POST['usernumber'];
        $data['content']=$_POST['content'];
        $data['date']=date('Y-m-d',time());
        $m=M('active');
        $doactivity=$m->add($data);
        if($doactivity){
            $this->success('添加成功','/Admin/Index/activity/');
        }else{
            $this->error('添加失败');
        }
    }
    public function activitydetail(){
        $aid=$_GET['id'];
        $m=M('active_sign');
        $activitydetail=$m->where("aid='$aid'")->order('id DESC')->select();
        $this->assign('activitydetail',$activitydetail);
        $id=$_GET['id'];
        $m=M('active');
        $activity=$m->where("id='$id'")->find();
        $this->assign('activity',$activity);
        $this->display();
    }
    public function consult(){
        $m=M('consultation');
        $consult=$m->order('id DESC')->select();
        $this->assign('consult',$consult);
        $this->display();
    }
    public function doconsult(){
		$rules = array(
		array('aid', 'require', '请选择解答人员'),
		);
		$m=M('consultation');
		if (!$m->validate($rules)->create()){
			$this->error($m->getError());
			}else{
			$m=M('consultation');
            $id=$_POST['id'];
            $data['aid']=$_POST['aid'];
            $data['adate']=date('Y-m-d',time());
            $doconsult=$m->where("id='$id'")->save($data);
            if($doconsult){
                $this->success('发送成功','/Admin/Index/consult');
            }else{
                $this->error('发送失败');
            }
			}
    }
}