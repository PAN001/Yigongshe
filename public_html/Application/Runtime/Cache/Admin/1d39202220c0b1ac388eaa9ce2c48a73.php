<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>智慧支持（详情）-<?php echo (C("WEB_NAME")); ?></title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="/favicon.ico">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <link rel="stylesheet" href="/Public/template/admin/css/sm.css">
    <link rel="stylesheet" href="/Public/template/admin/css/sm-extend.css">
    <link rel="stylesheet" href="/Public/template/admin/css/main-admin.css">

  </head>
  <body>
    <div class="content-box no-top">
    <div class="main-con">
 <div class="intr-p con-font con-color con-pd bgcolor-1">
  申请日期：<?php echo ($witsupportdetail["date"]); ?><br>
  姓名：<?php $uid=$witsupportdetail['uid'];$m=M('user');$profile=$m->where("uid='$uid'")->find();echo $profile['name']; ?>　性别：<?php if($profile['sex']==1): ?>男<?php else: ?>女<?php endif; ?><br>
出生日期：<?php echo ($profile["birth"]); ?>　积分：<?php echo ($profile["score"]); ?>　身份：<?php $id=$profile['type'];$m=M('user_type');$usertype=$m->where("id='$id'")->find();if($usertype){ echo $usertype['title']; }else{ echo "会员"; } ?><br>
手机号：<?php echo ($profile["mobile"]); ?>　推荐人：<?php echo ($profile["rmobile"]); ?>
  </div>
  
  <div class="area-p con-font con-color con-pd-notop bgcolor-2 con-mt">
  <h3 class="con-tit"><span class="bgcolor-6">义务领域：<?php $id=$witsupportdetail['oid'];$m=M('obligation_type');$obligation_type=$m->where("id='$id'")->find(); echo $obligation_type['title']; ?></span></h3>
  <div class="con-area con-pd">
  <?php echo ($obligation_type["content"]); ?>
   </div> 
  </div>
  
 <div class="profile-p con-font con-color con-pd-notop bgcolor-3 con-mt">
  <h3 class="con-tit"><span class="bgcolor-7">咨询领域：<?php $id=$witsupportdetail['cid'];$m=M('consultation_type');$consultation_type=$m->where("id='$id'")->find(); echo $consultation_type['title']; ?></span></h3>
  <div class="con-area con-pd">
  <?php echo ($consultation_type["content"]); ?>
   </div> 
  </div> 
  
  <div class="timelist-p con-font con-pd-notop bgcolor-4 con-mt">
  <h3 class="con-tit"><span class="bgcolor-8">时间表</span></h3>
  <div class="con-pd">
  <?php if($witsupportdetail['one']=='one'): ?><span style="color:red;">1</span><?php else: ?>1<?php endif; ?> <?php if($witsupportdetail['two']=='two'): ?><span style="color:red;">2</span><?php else: ?>2<?php endif; ?> <?php if($witsupportdetail['three']=='three'): ?><span style="color:red;">3</span><?php else: ?>3<?php endif; ?> <?php if($witsupportdetail['four']=='four'): ?><span style="color:red;">4</span><?php else: ?>4<?php endif; ?> <?php if($witsupportdetail['five']=='five'): ?><span style="color:red;">5</span><?php else: ?>5<?php endif; ?> <?php if($witsupportdetail['six']=='six'): ?><span style="color:red;">6</span><?php else: ?>6<?php endif; ?> <?php if($witsupportdetail['seven']=='seven'): ?><span style="color:red;">7</span><?php else: ?>7<?php endif; ?> <?php if($witsupportdetail['eight']=='eight'): ?><span style="color:red;">8</span><?php else: ?>8<?php endif; ?> <?php if($witsupportdetail['nine']=='nine'): ?><span style="color:red;">9</span><?php else: ?>9<?php endif; ?> <?php if($witsupportdetail['ten']=='ten'): ?><span style="color:red;">10</span><?php else: ?>10<?php endif; ?> <?php if($witsupportdetail['eleven']=='eleven'): ?><span style="color:red;">11</span><?php else: ?>11<?php endif; ?> <?php if($witsupportdetail['twelve']=='twelve'): ?><span style="color:red;">12</span><?php else: ?>12<?php endif; ?> <?php if($witsupportdetail['thirteen']=='thirteen'): ?><span style="color:red;">13</span><?php else: ?>13<?php endif; ?> <?php if($witsupportdetail['fourteen']=='fourteen'): ?><span style="color:red;">14</span><?php else: ?>14<?php endif; ?> <?php if($witsupportdetail['fifteen']=='fifteen'): ?><span style="color:red;">15</span><?php else: ?>15<?php endif; ?> <?php if($witsupportdetail['sixteen']=='sixteen'): ?><span style="color:red;">16</span><?php else: ?>16<?php endif; ?> <?php if($witsupportdetail['seventeen']=='seventeen'): ?><span style="color:red;">17</span><?php else: ?>17<?php endif; ?> <?php if($witsupportdetail['eighteen']=='eighteen'): ?><span style="color:red;">18</span><?php else: ?>18<?php endif; ?> <?php if($witsupportdetail['nineteen']=='nineteen'): ?><span style="color:red;">19</span><?php else: ?>19<?php endif; ?> <?php if($witsupportdetail['twenty']=='twenty'): ?><span style="color:red;">20</span><?php else: ?>20<?php endif; ?> <?php if($witsupportdetail['twentyone']=='twentyone'): ?><span style="color:red;">21</span><?php else: ?>21<?php endif; ?> <?php if($witsupportdetail['twentytwo']=='twentytwo'): ?><span style="color:red;">22</span><?php else: ?>22<?php endif; ?> <?php if($witsupportdetail['twentythree']=='twentythree'): ?><span style="color:red;">23</span><?php else: ?>23<?php endif; ?> <?php if($witsupportdetail['twentyfour']=='twentyfour'): ?><span style="color:red;">24</span><?php else: ?>24<?php endif; ?> <?php if($witsupportdetail['twentyfive']=='twentyfive'): ?><span style="color:red;">25</span><?php else: ?>25<?php endif; ?> <?php if($witsupportdetail['twentysix']=='twentysix'): ?><span style="color:red;">26</span><?php else: ?>26<?php endif; ?> <?php if($witsupportdetail['twentyseven']=='twentyseven'): ?><span style="color:red;">27</span><?php else: ?>27<?php endif; ?> <?php if($witsupportdetail['twentyeight']=='twentyeight'): ?><span style="color:red;">28</span><?php else: ?>28<?php endif; ?> <?php if($witsupportdetail['twentynine']=='twentynine'): ?><span style="color:red;">29</span><?php else: ?>29<?php endif; ?> <?php if($witsupportdetail['thirty']=='thirty'): ?><span style="color:red;">30</span><?php else: ?>30<?php endif; ?> <?php if($witsupportdetail['thirtyone']=='thirtyone'): ?><span style="color:red;">31</span><?php else: ?>31<?php endif; ?>
   </div> 
  </div>
  <?php if($witsupportdetail['status']==1): ?><div class="ywgl">
        <div class="ywgl-item con-font con-pd-notb bgcolor-w con-mt">
     <div class="row no-gutter">
    <div class="col-80">
     <ul>
     <li>义务管理</li>
     <li><span class="bgcolor-10">待审核</span></li>
     </ul>
    </div>
    <div class="col-20">
      <ul class="actions">
       <li class="bor-l"><a href="/Admin/Index/dowitsupport/uid/<?php echo ($witsupportdetail["uid"]); ?>/status/2/"><img src="/Public/template/admin/images/icon_gou0.png" alt=""/></a></li>
       <li class="bor-l bor-t"><a href="/Admin/Index/deletewitsupport/uid/<?php echo ($witsupportdetail["uid"]); ?>"><img src="/Public/template/admin/images/icon_x0.png" alt=""/></a></li>
      </ul>
    </div>
    </div>
    </div>
   </div>
  <?php else: ?>
    <div class="zhixun-p con-font con-pd-notop bgcolor-5 con-mt">
  <h3 class="con-tit"><span class="bgcolor-9">义务管理</span></h3>
  <div class="zhixun-p-con">
  义务总数（<span><?php $uid=$witsupportdetail['uid'];$m=M('obligation');$allobligation=$m->where("uid='$uid'")->count();echo $allobligation; ?></span>）　当前义务（<span><?php $uid=$witsupportdetail['uid'];$m=M('obligation');$nowobligation=$m->where("uid='$uid' and status='1'")->count();echo $nowobligation; ?></span>）<br>
完成义务（<span><?php $uid=$witsupportdetail['uid'];$m=M('obligation');$completeobligation=$m->where("uid='$uid' and status='2'")->count();echo $completeobligation; ?></span>）　待接义务（<span><?php $uid=$witsupportdetail['uid'];$m=M('obligation');$waitobligation=$m->where("uid='$uid' and status='0'")->count();echo $waitobligation; ?></span>）
   </div> 
  </div>
  
  <div class="zhixun-p con-font con-pd-notop bgcolor-5 con-mt">
  <h3 class="con-tit"><span class="bgcolor-9">咨询管理</span></h3>
  <div class="zhixun-p-con">
  咨询总数（<span><?php $aid=$witsupportdetail['uid'];$m=M('consultation');$allconsultation=$m->where("aid='$aid'")->count();echo $allconsultation; ?></span>）　当前咨询（<span><?php $aid=$witsupportdetail['uid'];$m=M('consultation');$nowconsultation=$m->where("aid='$aid' and status='1'")->count();echo $nowconsultation; ?></span>）<br>
完成咨询（<span><?php $aid=$witsupportdetail['uid'];$m=M('consultation');$completeconsultation=$m->where("aid='$aid' and status='2'")->count();echo $completeconsultation; ?></span>）　待接咨询（<span><?php $aid=$witsupportdetail['uid'];$m=M('consultation');$waitconsultation=$m->where("aid='$aid' and status='0'")->count();echo $waitconsultation; ?></span>）
   </div> 
  </div><?php endif; ?>
  
  

  </div>
  
  
</div>
    
    <nav class="bar bar-tab">
    <a class="tab-item external" href="/Admin">
      <span class="tab-label">返回导航</span>
    </a>
    </nav>

          
          
<script src="/Public/template/admin/js/zepto.min.js"></script>
<script src="/Public/template/admin/js/sm.js"></script>
<script src="/Public/template/admin/js/sm-extend.js"></script>
  </body>
</html>