-- Adminer 4.2.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `vol_active`;
CREATE TABLE `vol_active` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '活动编号',
  `allnumber` int(11) NOT NULL COMMENT '活动人数',
  `usertype` int(1) NOT NULL COMMENT '用户类型',
  `integral` int(11) NOT NULL COMMENT '用户积分',
  `usernumber` int(11) NOT NULL COMMENT '携带人数',
  `date` date NOT NULL COMMENT '活动日期',
  `content` varchar(300) NOT NULL COMMENT '活动内容',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `vol_active` (`id`, `allnumber`, `usertype`, `integral`, `usernumber`, `date`, `content`) VALUES
(1,	50,	1,	10,	2,	'2016-04-11',	'这是一个母婴相关的调查，欢迎新老用户积极参与。调查问卷开头，设有个人属性调查选项，请认真作答。'),
(2,	5,	0,	0,	0,	'2016-04-17',	'这是一个母婴相关的调查，欢迎新老用户积极参与。调查问卷开头，设有个人属性调查选项，请认真作答。');

DROP TABLE IF EXISTS `vol_active_sign`;
CREATE TABLE `vol_active_sign` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '报名编号',
  `aid` int(11) NOT NULL COMMENT '活动编号',
  `uid` int(11) NOT NULL COMMENT '用户编号',
  `number` int(11) NOT NULL COMMENT '参与人数',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='活动报名表';

INSERT INTO `vol_active_sign` (`id`, `aid`, `uid`, `number`) VALUES
(1,	2,	2016007,	2);

DROP TABLE IF EXISTS `vol_admin`;
CREATE TABLE `vol_admin` (
  `uid` int(10) NOT NULL AUTO_INCREMENT COMMENT '用户编号',
  `username` varchar(20) NOT NULL COMMENT '用户名称',
  `password` varchar(32) NOT NULL COMMENT '用户密码',
  `createtime` datetime NOT NULL COMMENT '添加时间',
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='管理员表';

INSERT INTO `vol_admin` (`uid`, `username`, `password`, `createtime`) VALUES
(1,	'admin',	'21232f297a57a5a743894a0e4a801fc3',	'2016-04-17 18:10:08');

DROP TABLE IF EXISTS `vol_article`;
CREATE TABLE `vol_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '文章编号',
  `title` varchar(50) NOT NULL COMMENT '文章标题',
  `date` datetime NOT NULL COMMENT '发表时间',
  `url` varchar(300) NOT NULL COMMENT '文章链接',
  `thumb` varchar(300) NOT NULL COMMENT '文章缩略图',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='文章信息表';

INSERT INTO `vol_article` (`id`, `title`, `date`, `url`, `thumb`) VALUES
(1,	'欢迎关注 义工社',	'2016-05-04 04:03:21',	'https://mp.weixin.qq.com/s?__biz=MzIwMDA5Mjg5OA==&mid=210094735&idx=1&sn=c52cd3a3f4e2d7e858df3cb823a54058&key=b28b03434249256bd76e9f02b675d61681c30e41b45b199247b8e6d235319e8ce1c3aea3c384cea00f9ce1de8c0120af&ascene=1&uin=MTQ1Mjk2NjM1&devicetype=Windows-QQBrowser&version=61030003&pass_ticket=Y2XhRFE%2',	'http://freshman.91ibang.com/Data/Uploads/Photo/Freshman/2016-05-11/57322d2d54469.jpg'),
(2,	'宁波鄞州万达广场',	'2016-06-01 15:38:53',	'http://freshman.91ibang.com/Index/details/id/3',	'http://freshman.91ibang.com/Data/Uploads/Photo/Freshman/2016-05-10/5731d6a8386ad.jpg'),
(3,	'大学新生常见心理问题及应对办法',	'2016-06-01 15:43:19',	'http://freshman.91ibang.com/Index/details/id/45',	'http://static.91ibang.com/Template/freshman/img/img3.jpg'),
(4,	'大学生最应该读的书有哪些',	'2016-06-01 15:43:59',	'http://freshman.91ibang.com/Index/details/id/40',	'http://static.91ibang.com/Template//freshman/img/img5.jpg');

DROP TABLE IF EXISTS `vol_consultation`;
CREATE TABLE `vol_consultation` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '问题编号',
  `uid` int(11) NOT NULL COMMENT '提问者编号',
  `cid` int(11) NOT NULL COMMENT '问题类型',
  `content` varchar(200) NOT NULL COMMENT '问题内容',
  `date` date NOT NULL COMMENT '提问时间',
  `aid` int(11) DEFAULT NULL COMMENT '解答者编号',
  `adate` date DEFAULT NULL COMMENT '解答时间',
  `status` int(11) NOT NULL DEFAULT '0' COMMENT '问题状态',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='问题咨询表';

INSERT INTO `vol_consultation` (`id`, `uid`, `cid`, `content`, `date`, `aid`, `adate`, `status`) VALUES
(1,	2016005,	1,	'教育',	'2016-05-26',	2016004,	'2016-05-26',	1),
(2,	2016005,	1,	'教育',	'2016-05-26',	2016007,	'2016-06-03',	1),
(3,	2016007,	1,	'我们在干嘛呀',	'2016-06-01',	2016007,	'2016-06-03',	2),
(4,	2016007,	1,	'我们的爱啊',	'2016-06-03',	2016007,	'2016-06-03',	2);

DROP TABLE IF EXISTS `vol_consultation_type`;
CREATE TABLE `vol_consultation_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '咨询类型编号',
  `title` varchar(20) NOT NULL COMMENT '咨询类型名称',
  `content` varchar(20) NOT NULL COMMENT '咨询类型简介',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='咨询类型表';

INSERT INTO `vol_consultation_type` (`id`, `title`, `content`) VALUES
(1,	'家庭教育',	'解决家庭纠纷，促进家庭和谐；'),
(2,	'咨询类型二',	'咨询简介二'),
(3,	'咨询类型三',	'咨询简介三'),
(4,	'咨询类型四',	'咨询简介四'),
(5,	'家庭教育',	'');

DROP TABLE IF EXISTS `vol_finance`;
CREATE TABLE `vol_finance` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '财务编号',
  `tid` int(1) NOT NULL COMMENT '收支类型',
  `income` varchar(20) DEFAULT NULL COMMENT '财务收入',
  `expenditure` varchar(20) DEFAULT NULL COMMENT '财务支出',
  `balance` varchar(20) NOT NULL COMMENT '财务余额',
  `date` date NOT NULL COMMENT '财务时间',
  `remarks` varchar(20) NOT NULL COMMENT '财务备注',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='财务收支表';

INSERT INTO `vol_finance` (`id`, `tid`, `income`, `expenditure`, `balance`, `date`, `remarks`) VALUES
(1,	0,	'20000',	NULL,	'20000',	'2016-04-13',	'资助'),
(2,	0,	'50000',	NULL,	'70000',	'2016-04-13',	'资助'),
(3,	1,	NULL,	'30000',	'40000',	'2016-04-13',	'办公支出'),
(4,	0,	'5000',	NULL,	'45000',	'2016-04-20',	'资助'),
(5,	1,	NULL,	'1250',	'43750',	'2016-04-21',	'买菜'),
(6,	0,	'3460',	NULL,	'47210',	'2016-04-21',	'财政补贴');

DROP TABLE IF EXISTS `vol_integral_record`;
CREATE TABLE `vol_integral_record` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '积分编号',
  `uid` int(11) NOT NULL COMMENT '用户编号',
  `tid` int(11) NOT NULL COMMENT '收入类型',
  `income` varchar(20) DEFAULT NULL COMMENT '积分收入',
  `expenditure` varchar(20) DEFAULT NULL COMMENT '积分支出',
  `reason` varchar(20) NOT NULL COMMENT '积分缘由',
  `date` date NOT NULL COMMENT '积分日期',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='积分记录表';

INSERT INTO `vol_integral_record` (`id`, `uid`, `tid`, `income`, `expenditure`, `reason`, `date`) VALUES
(1,	2016002,	0,	'1',	NULL,	'资金',	'2016-05-19'),
(2,	2016002,	0,	'1',	NULL,	'资金',	'2016-05-19'),
(3,	2016003,	0,	'10',	NULL,	'资金',	'2016-05-19'),
(4,	2016001,	0,	'5',	NULL,	'资金',	'2016-05-20'),
(5,	2016004,	0,	'1',	NULL,	'资金',	'2016-05-26'),
(6,	2016004,	0,	'1',	NULL,	'资金',	'2016-05-26'),
(7,	2016005,	0,	'1',	NULL,	'资金',	'2016-05-26'),
(8,	2016006,	0,	'1',	NULL,	'资金',	'2016-05-26'),
(9,	2016006,	0,	'1',	NULL,	'资金',	'2016-05-26'),
(10,	2016009,	0,	'1',	NULL,	'资金',	'2016-06-01'),
(11,	2016008,	0,	'1',	NULL,	'资金',	'2016-06-01'),
(12,	2016008,	0,	'1',	NULL,	'资金',	'2016-06-01'),
(13,	2016007,	0,	'5',	NULL,	'资金',	'2016-06-01'),
(14,	2016010,	0,	'10000',	NULL,	'资金',	'2016-06-01'),
(15,	2016010,	0,	'10000',	NULL,	'资金',	'2016-06-01'),
(16,	2016007,	0,	'5',	NULL,	'资金',	'2016-06-01');

DROP TABLE IF EXISTS `vol_intelapply`;
CREATE TABLE `vol_intelapply` (
  `uid` int(11) NOT NULL COMMENT '用户编号',
  `oid` int(11) NOT NULL COMMENT '义务领域',
  `cid` int(11) NOT NULL COMMENT '咨询领域',
  `content` text NOT NULL COMMENT '自我介绍',
  `one` varchar(20) DEFAULT NULL,
  `two` varchar(20) DEFAULT NULL,
  `three` varchar(20) DEFAULT NULL,
  `four` varchar(20) DEFAULT NULL,
  `five` varchar(20) DEFAULT NULL,
  `six` varchar(20) DEFAULT NULL,
  `seven` varchar(20) DEFAULT NULL,
  `eight` varchar(20) DEFAULT NULL,
  `nine` varchar(20) DEFAULT NULL,
  `ten` varchar(20) DEFAULT NULL,
  `eleven` varchar(20) DEFAULT NULL,
  `twelve` varchar(20) DEFAULT NULL,
  `thirteen` varchar(20) DEFAULT NULL,
  `fourteen` varchar(20) DEFAULT NULL,
  `fifteen` varchar(20) DEFAULT NULL,
  `sixteen` varchar(20) DEFAULT NULL,
  `seventeen` varchar(20) DEFAULT NULL,
  `eighteen` varchar(20) DEFAULT NULL,
  `nineteen` varchar(20) DEFAULT NULL,
  `twentyone` varchar(20) DEFAULT NULL,
  `twentyweo` varchar(20) DEFAULT NULL,
  `twentythree` varchar(20) DEFAULT NULL,
  `twentyfour` varchar(20) DEFAULT NULL,
  `twentyfive` varchar(20) DEFAULT NULL,
  `twentysix` varchar(20) DEFAULT NULL,
  `twentyseven` varchar(20) DEFAULT NULL,
  `twentyeight` varchar(20) DEFAULT NULL,
  `twentynine` varchar(20) DEFAULT NULL,
  `twentyten` varchar(20) DEFAULT NULL,
  `thirty` varchar(20) DEFAULT NULL,
  `thirtyone` varchar(20) DEFAULT NULL,
  `date` date NOT NULL COMMENT '申请日期',
  `status` int(11) DEFAULT NULL COMMENT '申请状态'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='智慧支持申请';

INSERT INTO `vol_intelapply` (`uid`, `oid`, `cid`, `content`, `one`, `two`, `three`, `four`, `five`, `six`, `seven`, `eight`, `nine`, `ten`, `eleven`, `twelve`, `thirteen`, `fourteen`, `fifteen`, `sixteen`, `seventeen`, `eighteen`, `nineteen`, `twentyone`, `twentyweo`, `twentythree`, `twentyfour`, `twentyfive`, `twentysix`, `twentyseven`, `twentyeight`, `twentynine`, `twentyten`, `thirty`, `thirtyone`, `date`, `status`) VALUES
(2016002,	1,	3,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'seven',	NULL,	NULL,	NULL,	'eleven',	NULL,	NULL,	'fourteen',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'2016-05-19',	2),
(2016003,	1,	2,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'nine',	NULL,	'eleven',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'2016-05-19',	2),
(2016001,	1,	3,	'我是好人',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'eleven',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'eighteen',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'twentyeight',	NULL,	NULL,	NULL,	NULL,	'2016-05-20',	2),
(2016004,	1,	1,	'',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'nine',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'2016-05-26',	2),
(2016005,	1,	1,	'1',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'ten',	NULL,	NULL,	'thirteen',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'2016-05-26',	2),
(2016007,	2,	1,	'我想做一名优秀的义工。你觉得可以嘛？',	'one',	'two',	NULL,	'four',	NULL,	'six',	NULL,	'eight',	NULL,	'ten',	NULL,	NULL,	NULL,	NULL,	NULL,	'sixteen',	'seventeen',	NULL,	'nineteen',	'twentyone',	NULL,	'twentythree',	NULL,	'twentyfive',	NULL,	NULL,	'twentyeight',	NULL,	NULL,	'thirty',	'thirtyone',	'2016-06-01',	2);

DROP TABLE IF EXISTS `vol_obligation`;
CREATE TABLE `vol_obligation` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '义务编号',
  `cid` int(11) NOT NULL COMMENT '义务类型',
  `content` varchar(300) NOT NULL COMMENT '义务内容',
  `uid` varchar(11) NOT NULL COMMENT '义务处理人',
  `date` date NOT NULL COMMENT '义务日期',
  `status` int(1) NOT NULL COMMENT '义务状态',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='义务信息表';

INSERT INTO `vol_obligation` (`id`, `cid`, `content`, `uid`, `date`, `status`) VALUES
(1,	1,	'去打扫卫生院',	'2016007',	'2016-06-03',	1),
(2,	2,	'去捐款给灾区小孩1000圆整',	'2016007',	'2016-06-03',	2),
(3,	3,	'今天去参观考察一些产地',	'2016007',	'2016-06-03',	2);

DROP TABLE IF EXISTS `vol_obligation_type`;
CREATE TABLE `vol_obligation_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '义务类型编号',
  `title` varchar(20) NOT NULL COMMENT '义务类型名称',
  `content` varchar(300) NOT NULL COMMENT '义务类型简介',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='义务类型表';

INSERT INTO `vol_obligation_type` (`id`, `title`, `content`) VALUES
(1,	'系统开发',	'开发并维护义工社互联网平台'),
(2,	'视觉设计',	'设计及完善义工社视觉形象体系'),
(3,	'文案',	'设计并统一义工社文字表述体系'),
(4,	'财务',	'记录日常收支，定期制作报表，制定财务制度，核实报销；');

DROP TABLE IF EXISTS `vol_restaurant`;
CREATE TABLE `vol_restaurant` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '餐饮编号',
  `uid` int(11) NOT NULL COMMENT '用户编号',
  `tid` int(11) NOT NULL COMMENT '餐饮时间',
  `date` date NOT NULL COMMENT '餐饮日期',
  `number` varchar(20) NOT NULL COMMENT '餐饮人数',
  `status` int(11) NOT NULL DEFAULT '0' COMMENT '餐饮状态',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='工社餐饮表';

INSERT INTO `vol_restaurant` (`id`, `uid`, `tid`, `date`, `number`, `status`) VALUES
(1,	2016001,	2,	'2016-05-19',	'2',	0),
(2,	2016007,	1,	'2016-06-02',	'2',	0);

DROP TABLE IF EXISTS `vol_restaurant_time`;
CREATE TABLE `vol_restaurant_time` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '时间段编号',
  `title` varchar(20) NOT NULL COMMENT '时间段名称',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='餐饮时间段';

INSERT INTO `vol_restaurant_time` (`id`, `title`) VALUES
(1,	'午餐'),
(2,	'晚餐');

DROP TABLE IF EXISTS `vol_setting`;
CREATE TABLE `vol_setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '设置编号',
  `content` text NOT NULL COMMENT '设置内容',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='系统设置表';

INSERT INTO `vol_setting` (`id`, `content`) VALUES
(1,	'1、填写会员申请表且交纳工本费5元即可成为普济堂会员。\r\n2、请您填写个人真实资料，这样我们后期才可以给您提供完善的会员增值服务。一个家庭可以办理壹张主卡多张副卡。会员资料我们将完全保密。\r\n3、会员入店消费时，需持会员卡方能享受相应会员待遇。未持会员卡的会员，需提交有效身份证明经工作人员核实后，店长批准收银员手工录入会员编号，享受会员待遇但不享受积分，积分需让顾客在三天内持卡和电脑小票到店内重新积分。未持会员卡且没有效身份证明按普通会员接待。\r\n4、会员储值会员卡时，储值金额需100元的倍数，当储值金额不足时，继续储值且享受优惠积分奖励，若用现金消费，不享受储值消费优惠政策。储值金额不兑换现金，但会员卡作废，办理退卡手续后，储值卡内储值金额方可退还余额。\r\n5、连续3个月未消费的会员卡即进入休眠期，会员卡暂停使用，积分保留并通知会员。休眠会员卡自休眠之日起6个月内可重新激活，激活后可继续使用，原积分依然有效。\r\n6、休眠之日起6个月内未办理激活手续，该会员卡将失效，顾客需重新办理，原积分作废。失效会员卡储值金额以现金形式返还。');

DROP TABLE IF EXISTS `vol_sup_money`;
CREATE TABLE `vol_sup_money` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `uid` int(10) NOT NULL COMMENT '用户编号',
  `price` varchar(10) NOT NULL COMMENT '资助金额',
  `date` date NOT NULL COMMENT '资助时间',
  `status` int(11) NOT NULL COMMENT '资助状态',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='资金支持表';

INSERT INTO `vol_sup_money` (`id`, `uid`, `price`, `date`, `status`) VALUES
(1,	2016001,	'5',	'2016-05-18',	2),
(2,	2016002,	'1',	'2016-05-19',	2),
(3,	2016003,	'10',	'2016-05-19',	2),
(4,	2016004,	'1',	'2016-05-26',	2),
(5,	2016005,	'1',	'2016-05-26',	2),
(6,	2016006,	'1',	'2016-05-26',	2),
(7,	2016007,	'5',	'2016-05-30',	2),
(8,	2016008,	'1',	'2016-06-01',	2),
(9,	2016009,	'1',	'2016-06-01',	2),
(10,	2016010,	'10000',	'2016-06-01',	2),
(11,	2016007,	'5',	'2016-06-01',	2),
(12,	2016007,	'5',	'2016-06-01',	2),
(13,	2016007,	'5',	'2016-06-01',	2),
(14,	2016011,	'1',	'2016-06-02',	1);

DROP TABLE IF EXISTS `vol_sup_other`;
CREATE TABLE `vol_sup_other` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '支持编号',
  `uid` int(10) NOT NULL COMMENT '用户编号',
  `content` varchar(200) NOT NULL COMMENT '支持内容',
  `date` date NOT NULL COMMENT '支持时间',
  `status` int(11) NOT NULL COMMENT '支持状态',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='其他支持表';

INSERT INTO `vol_sup_other` (`id`, `uid`, `content`, `date`, `status`) VALUES
(1,	2016002,	'很丰富f',	'2016-05-19',	2),
(2,	2016002,	'很丰富f',	'2016-05-19',	1),
(3,	2016010,	'',	'2016-06-01',	1),
(4,	2016008,	'',	'2016-06-01',	1),
(5,	2016007,	'茶叶一盒',	'2016-06-01',	2);

DROP TABLE IF EXISTS `vol_sup_other_type`;
CREATE TABLE `vol_sup_other_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '其他支持类型编号',
  `title` varchar(20) NOT NULL COMMENT '其他支持类型名称',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='其他支持类型表';

INSERT INTO `vol_sup_other_type` (`id`, `title`) VALUES
(1,	'其他支持一'),
(2,	'其他支持二'),
(3,	'其他支持三');

DROP TABLE IF EXISTS `vol_user`;
CREATE TABLE `vol_user` (
  `uid` int(10) NOT NULL AUTO_INCREMENT COMMENT '用户编号',
  `openid` varchar(32) NOT NULL COMMENT '微信编号',
  `avatar` varchar(300) NOT NULL COMMENT '用户头像',
  `name` varchar(15) NOT NULL COMMENT '用户姓名',
  `mobile` varchar(15) NOT NULL COMMENT '手机号码',
  `sex` int(1) NOT NULL COMMENT '用户性别',
  `birth` date NOT NULL COMMENT '出生日期',
  `joindate` date NOT NULL COMMENT '入会日期',
  `rmobile` varchar(15) NOT NULL COMMENT '推荐人手机号码',
  `score` varchar(15) NOT NULL DEFAULT '0' COMMENT '用户积分',
  `type` int(1) NOT NULL COMMENT '用户身份',
  `address` varchar(50) NOT NULL COMMENT '用户地址',
  `status` int(1) NOT NULL DEFAULT '0' COMMENT '推荐状态',
  `financeauth` int(1) NOT NULL DEFAULT '0' COMMENT '财务权限',
  `comparison` int(1) NOT NULL DEFAULT '0' COMMENT '比对成功',
  `support` int(1) NOT NULL DEFAULT '0' COMMENT '是否支持',
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='用户列表';

INSERT INTO `vol_user` (`uid`, `openid`, `avatar`, `name`, `mobile`, `sex`, `birth`, `joindate`, `rmobile`, `score`, `type`, `address`, `status`, `financeauth`, `comparison`, `support`) VALUES
(2016001,	'o4oq9vjvanLVtnUxwXKRpf6E45J0',	'http://wx.qlogo.cn/mmopen/FqoqEHvgIuL99hOqWDAxM1icOAzJ2sSkfC6Esd7etYWBJpibSaIlhL0Nsn2FEfgiaicVs2lLmiaUkqH4q5VU0N6fNGGVtOtBxBaNw/0',	'夏晓强',	'17757863353',	1,	'1990-05-18',	'2016-05-18',	'18858002358',	'5',	0,	'宁波市鄞州区首南街道钱湖南路8号',	2,	0,	1,	1),
(2016002,	'o4oq9vlrOu6tL41Wilird-cruVpI',	'http://wx.qlogo.cn/mmopen/FqoqEHvgIuLbRlhH1UZDHb06mibqyu2xhkLNSq827uA4G67mmWP5g6vQKibn0kic0l5kSv08fD9F6SMs5ceDzIZeQ/0',	'毛远',	'13819801110',	1,	'1980-11-10',	'2016-05-19',	'17757863353',	'2',	0,	'宁波',	0,	1,	0,	1),
(2016003,	'o4oq9vspS4_9aw05quh05NECOXcU',	'http://wx.qlogo.cn/mmopen/PiajxSqBRaEJp4BW1UydINRymKI5rpibeGh3R6BjOK1qynDJraZ46QPzQ6f29qYWibBcl0GGibccRWPcAd7z0BbBibQ/0',	'毛南瑾',	'18858237143',	0,	'2013-01-28',	'2016-05-19',	'13819801110',	'10',	0,	'宁波',	0,	1,	0,	1),
(2016004,	'o4oq9vp5gsAcROkDPg9TSlQuiECI',	'http://wx.qlogo.cn/mmopen/hib3saPibXQjTdVFoJiaxj4YKztwibb07QnojCv9XBZozCQiaxibg5luWQZcqgcpwheg4vTje5RyO4u7DB8RQiaicrrymU2ZwyRticHfX/0',	'潘奕尘',	'13857810767',	1,	'2016-05-26',	'2016-05-26',	'13819801110',	'2',	0,	'00',	0,	0,	0,	1),
(2016005,	'o4oq9vvWuBauCEBflBVrYNZj6C_4',	'http://wx.qlogo.cn/mmopen/PiajxSqBRaEJtGk9WuZ9j7UDcT7r8OOAsYZbia3tjN0b4oAEFOlic2QKZuem8clIGJJl31ZribdtqeEoBdmlwzEcFg/0',	'王世航',	'15602063165',	1,	'1994-07-08',	'2016-05-26',	'13819801110',	'1',	0,	'诺丁汉大学',	0,	0,	0,	1),
(2016006,	'o4oq9vqBzVXC-kec_KPmtqqbaSz4',	'http://wx.qlogo.cn/mmopen/ajNVdqHZLLBSa5icEpaLFNwiauhJzT3ibYnNaPWb0CJU3ibxTq4cCrvkz41JpToqTVOYOtaRkaX8V3mTGZkSGv76pQ/0',	'许兆亮',	'13857857519',	1,	'1995-02-12',	'2016-05-26',	'13819801110',	'2',	0,	'宁波诺丁汉大学',	0,	0,	0,	1),
(2016007,	'o4oq9vrth6xoOukHedv5iQtqTbs8',	'http://wx.qlogo.cn/mmopen/ajNVdqHZLLD0Z0Ksut3uvXWYNovOJGRoJaz6unyg4Ml56oNF8CNvZdnUZP5ROHlkCicGibkewlcjKA5ic5LTt0puQ/0',	'夏慧新',	'18858002358',	1,	'2016-05-30',	'2016-06-03',	'18858002358',	'10',	1,	'浙江省宁波市鄞州区首南街道钱湖南路1号',	0,	1,	0,	3),
(2016008,	'o4oq9vhrsqmzkyIm1EMpvKbvHq2E',	'http://wx.qlogo.cn/mmopen/JoWyCnQKNwNpUFtq6BWYxNladjgN80yt4jAmGd90jcz5jhiaic5QiaufUZpsP4iaHRVIeVXbV6kCtQqHSfuKBOTJ8NdCmoqLlAGZ/0',	'曲玉',	'13777110561',	0,	'2016-06-01',	'2016-06-01',	'13819801110',	'2',	0,	'宁波诺丁汉大学',	0,	0,	0,	1),
(2016009,	'o4oq9vuxd39Q6zJ7dCdoQIlMyFCs',	'http://wx.qlogo.cn/mmopen/FqoqEHvgIuLQyIJMLv7Qm5UD7J3oUu5G89NEASft5Xj4v3Kyy7jmeLYylzenkbpdUhv2NeKd5xMPrzVIBWhm02jkJ7eH9I5Q/0',	'王欣童',	'17858951826',	0,	'1994-12-28',	'2016-06-01',	'13819801110',	'1',	0,	'宁波诺丁汉大学',	0,	0,	0,	1),
(2016010,	'o4oq9vhe4HonpQDrvu7MlvarPb40',	'http://wx.qlogo.cn/mmopen/FqoqEHvgIuLQyIJMLv7QmybH1rqSgVt3ryfCw8dpMAHD6KtmH4ibKmMsmcgwVu6e5WVPpmP8YjymxEnn5AXKqdG3VEANicNOgK/0',	'王秋实',	'17858951822',	0,	'1995-11-02',	'2016-06-01',	'13819801110',	'20000',	0,	'浙江省宁波市鄞州区泰康东路199号',	0,	0,	0,	1),
(2016011,	'o4oq9vqQipWwRv6i2lTiP4GFfOVY',	'http://wx.qlogo.cn/mmopen/FqoqEHvgIuLQyIJMLv7Qmx7hR2SYNCSBR4qOWiatzabzP2ECsamJtREpnsWaqtwWP5vbENU383aDJ5mGuBTcUjczOH1DLB3iac/0',	'戴文豪',	'17855846323',	1,	'2004-01-15',	'2016-06-02',	'18858002358',	'0',	0,	'浙江万里学院',	0,	0,	0,	1);

DROP TABLE IF EXISTS `vol_user_type`;
CREATE TABLE `vol_user_type` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '类型编号',
  `title` varchar(20) NOT NULL COMMENT '类型名称',
  `integral` varchar(20) NOT NULL COMMENT '积分要求',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='用户类型表';

INSERT INTO `vol_user_type` (`id`, `title`, `integral`) VALUES
(1,	'义工',	'10'),
(2,	'代表',	'100'),
(3,	'理事',	'1000');

DROP TABLE IF EXISTS `vol_user_type_apply`;
CREATE TABLE `vol_user_type_apply` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '申请编号',
  `uid` int(11) NOT NULL COMMENT '用户编号',
  `tid` int(11) NOT NULL COMMENT '身份编号',
  `content` text NOT NULL COMMENT '申请感言',
  `date` date NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='身份申请表';

INSERT INTO `vol_user_type_apply` (`id`, `uid`, `tid`, `content`, `date`, `status`) VALUES
(1,	2016007,	1,	'我想成为一名优秀的义工。',	'2016-06-02',	2);

DROP TABLE IF EXISTS `vol_videos`;
CREATE TABLE `vol_videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '视频编号',
  `title` varchar(30) NOT NULL COMMENT '视频标题',
  `url` varchar(300) NOT NULL COMMENT '视频地址',
  `thumb` varchar(300) NOT NULL COMMENT '视频缩略图',
  `date` datetime NOT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='视频资料表';

INSERT INTO `vol_videos` (`id`, `title`, `url`, `thumb`, `date`) VALUES
(1,	'兄弟！咱们下辈子还做义工',	'http://v.youku.com/v_show/id_XOTMxODcyNDEy.html?from=s1.8-1-1.2',	'http://img1.imgtn.bdimg.com/it/u=2363364701,2305499622&fm=21&gp=0.jpg',	'2016-05-04 03:52:31'),
(2,	'我为建寺添砖瓦（义工掠影）',	'http://v.youku.com/v_show/id_XMTU1NzAzMDA1Mg==.html?from=s1.8-1-1.2',	'http://img3.imgtn.bdimg.com/it/u=710867256,1264885149&fm=21&gp=0.jpg',	'2016-05-04 04:06:40'),
(3,	'义工“贴心”环卫工',	'http://v.youku.com/v_show/id_XMTU1NjQzMzE0MA==.html?from=s1.8-1-1.2',	'http://img0.imgtn.bdimg.com/it/u=3326003744,2518036514&fm=21&gp=0.jpg',	'2016-05-04 04:07:31');

-- 2016-06-03 00:52:32
