#Master8.NET Created
# --------------------------------------------------------


DROP TABLE IF EXISTS about;
CREATE TABLE `about` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `entitle` text,
  `content` text,
  `encontent` text,
  `paixu` int(11) DEFAULT NULL,
  `data` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=gb2312;

INSERT INTO about VALUES('4','公司简介','','<DIV class=\"m_l_div m_l_one small\">\r\n<H2>平台简介</H2>\r\n<P>国内最大的软文推广平台，合作网络媒体1000余家，日均发稿3000篇以上，服务企业客户5000余家，专注于软文营销。</P></DIV>\r\n<DIV class=\"m_l_div m_l_two small\">\r\n<H2>优势发稿</H2>\r\n<P>全部采用资源包月、直编合作、软文交换的合作方式，确保低价、快速、稳定的发布渠道，平台供货代理300余家。</P></DIV>\r\n<DIV class=\"m_l_div m_l_three small\">\r\n<H2>方便快捷</H2>\r\n<P>您仅需注册账号、充值所需费用（无最低限额，冲多有惠），提交稿件，即可选择千余家网络媒体快速发布。</P></DIV>\r\n<DIV class=\"m_l_div m_l_four small\">\r\n<H2>企业保障</H2>\r\n<P>最新推出软文免费策划、软文收录查询、软文效果跟踪、软文删稿重发、软文定时发布、更多服务为您免费定制。</P></DIV>','','1','2013-09-18');

DROP TABLE IF EXISTS admin;
CREATE TABLE `admin` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `AdminUser` varchar(255) DEFAULT NULL,
  `AdminPass` varchar(255) DEFAULT NULL,
  `qq` varchar(255) DEFAULT NULL,
  `dianhua` varchar(255) DEFAULT NULL,
  `myemail` varchar(255) DEFAULT NULL,
  `weburl` varchar(255) DEFAULT NULL,
  `flag` int(11) DEFAULT '0',
  `ip` varchar(255) DEFAULT NULL,
  `regtime` varchar(255) DEFAULT NULL,
  `data` varchar(255) DEFAULT NULL,
  `yue` float DEFAULT '0',
  `tyue` float DEFAULT '0',
  `headpic` varchar(255) DEFAULT '../images/headpic.gif	',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gb2312;

INSERT INTO admin VALUES('1','admin','c33367701511b4f6020ec61ded352059','2245849708','13261853069','2245849708@qq.com','http://www.hongmuchuan.com','1','127.0.0.1','','2014-02-08 11:34:27','868','0','../upload/headpic/1380283488.bmp');

DROP TABLE IF EXISTS anli_class;
CREATE TABLE `anli_class` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `BigClass` varchar(255) DEFAULT NULL,
  `enBigClass` varchar(255) DEFAULT NULL,
  `paixu` int(11) DEFAULT NULL,
  `data` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=gb2312;


DROP TABLE IF EXISTS anli_info;
CREATE TABLE `anli_info` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `class_id` int(11) DEFAULT NULL,
  `title` text,
  `entitle` text,
  `nd` int(11) DEFAULT '1',
  `content` text,
  `encontent` text,
  `data` varchar(255) DEFAULT '',
  `tj` int(11) DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=73 DEFAULT CHARSET=gb2312;


DROP TABLE IF EXISTS appkf_info;
CREATE TABLE `appkf_info` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `VipUser` varchar(255) DEFAULT NULL,
  `owner` varchar(255) DEFAULT NULL,
  `mid` int(11) DEFAULT '0',
  `order_id` varchar(255) DEFAULT NULL,
  `title` text,
  `medianame` text,
  `weburl` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT '0',
  `content` text,
  `reason` text,
  `dreason` text,
  `data` varchar(255) DEFAULT '',
  `fbtime` varchar(255) DEFAULT '',
  `flag` int(11) DEFAULT '0',
  `yn` int(11) DEFAULT '0',
  `dyn` int(11) DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=132 DEFAULT CHARSET=gb2312;

INSERT INTO appkf_info VALUES('129','vip01','','178','2013101493086','网站应用开发需求','腾讯高级应用开发','','230','网站应用开发需求','','','2013-10-14 08:39:16','','0','0','1');
INSERT INTO appkf_info VALUES('130','vip01','','179','2013101493086','网站应用开发需求','腾讯普通应用开发','','200','网站应用开发需求','特殊原因，不能实现。','','2013-10-14 08:39:16','2013-10-14 08:48:24','3','0','0');
INSERT INTO appkf_info VALUES('131','vip01','','176','2013101493086','网站应用开发需求','新浪高级应用开发','http://www.sina.com.cn/','80','网站应用开发需求','','','2013-10-14 08:39:16','2013-10-14 08:47:38','2','1','0');

DROP TABLE IF EXISTS ask_class;
CREATE TABLE `ask_class` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `BigClass` varchar(255) DEFAULT NULL,
  `enBigClass` varchar(255) DEFAULT NULL,
  `paixu` int(11) DEFAULT NULL,
  `data` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=gb2312;

INSERT INTO ask_class VALUES('28','已回复','','1','2013-09-19');
INSERT INTO ask_class VALUES('29','未回复','','2','2013-09-19');

DROP TABLE IF EXISTS ask_discuss;
CREATE TABLE `ask_discuss` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `VipUser` varchar(255) DEFAULT NULL,
  `order_id` varchar(255) DEFAULT NULL,
  `recontent` text,
  `data` varchar(255) DEFAULT '',
  `flag` int(11) DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=83 DEFAULT CHARSET=gb2312;

INSERT INTO ask_discuss VALUES('79','admin','13772844834611','尊敬的客户：<br />\r\n			　　您反馈的问题，我们已收到，并正在处理中...请耐心等待我们的处理结果，谢谢！','2013-10-02 12:34:48','0');
INSERT INTO ask_discuss VALUES('80','admin','13770231578873','支付宝系统异常，请稍等再试！','2013-10-02 01:05:48','0');
INSERT INTO ask_discuss VALUES('81','vip01','13770231578873','那我稍候再试，谢谢！','2013-10-02 01:27:15','0');
INSERT INTO ask_discuss VALUES('82','admin','13770231578873','好的，有问题请继续向我们反馈，谢谢您对我们工作的支持。','2013-10-02 01:30:22','0');

DROP TABLE IF EXISTS ask_info;
CREATE TABLE `ask_info` (
  `ID` int(1) NOT NULL AUTO_INCREMENT,
  `VipUser` varchar(255) DEFAULT NULL,
  `order_id` varchar(255) DEFAULT NULL,
  `title` text,
  `content` text,
  `encontent` text,
  `data` varchar(255) DEFAULT '',
  `flag` int(11) DEFAULT '0',
  `yn` int(11) DEFAULT '0',
  `dyn` int(11) DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=74 DEFAULT CHARSET=gb2312;

INSERT INTO ask_info VALUES('67','vip02','13769389137314','充值失败但已扣款','<p>充值提示失败，但款项已扣掉，麻烦检查确认一下。</p>','','2013-09-19','0','0','0');
INSERT INTO ask_info VALUES('68','vip01','13769389138313','软文发布失败','<p>不知道怎么回事，执行了操作却发布失败。</p>','','2013-09-19','0','0','0');
INSERT INTO ask_info VALUES('69','vip01','13770231578873','不能充值问题','<p>为什么使用支付宝不能充值？<br/></p>','','2013-09-19','2','1','0');
INSERT INTO ask_info VALUES('70','vip01','13772844834611','请问如何充值？','<p>我不会充值，请问如何充值？</p>','','2013-09-19','1','0','0');
INSERT INTO ask_info VALUES('71','vip01','1377284727600','如何申请代写软文？','<p>请问如何申请代写软文？</p>','','2013-09-19','0','0','0');
INSERT INTO ask_info VALUES('72','admin','2013092282379','富软文','','','2013-09-22','1','0','0');
INSERT INTO ask_info VALUES('73','vip01','2013092295001','xxxxxxxxx','<p>xxxxxxxxxxxxxxxxx</p>','','2013-09-22','1','0','0');

DROP TABLE IF EXISTS bank_info;
CREATE TABLE `bank_info` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `accnumber` varchar(255) DEFAULT NULL,
  `bankname` varchar(255) DEFAULT NULL,
  `propic` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=gb2312;

INSERT INTO bank_info VALUES('9','张三丰','googlesem@foxmail.com','http://www.alipay.com','../images/yinhang_01.png');
INSERT INTO bank_info VALUES('10','张三丰','5424040420','http://www.tenpay.com','../images/yinhang_02.png');
INSERT INTO bank_info VALUES('11','张三丰','6222021813000778915','中国工商银行','../images/yinhang_05.png');
INSERT INTO bank_info VALUES('12','张三丰','6227001852510636976','中国建设银行','../images/yinhang_06.png');
INSERT INTO bank_info VALUES('13','张三丰','6228480031424512718','中国农业银行','../images/yinhang_07.png');
INSERT INTO bank_info VALUES('14','张三丰','370285000668664','中国招商银行','../images/yinhang_09.png');

DROP TABLE IF EXISTS caiwu;
CREATE TABLE `caiwu` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` varchar(255) DEFAULT NULL,
  `trade_id` varchar(255) DEFAULT NULL,
  `VipUser` varchar(255) DEFAULT NULL,
  `operator` varchar(255) DEFAULT NULL,
  `leixing` varchar(255) DEFAULT NULL,
  `jine` float DEFAULT '0',
  `flag` int(11) DEFAULT '0',
  `data` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=122 DEFAULT CHARSET=gb2312;

INSERT INTO caiwu VALUES('30','2013090381452','','admin','admin','账号充值','500','1','2013-09-18 03:13:45');
INSERT INTO caiwu VALUES('31','2013090382366','','vip01','admin','账号代充值','500','1','2013-09-18 03:13:58');
INSERT INTO caiwu VALUES('32','2013090344848','','vip02','admin','账号代充值','500','1','2013-09-18 03:14:07');
INSERT INTO caiwu VALUES('33','2013090353645','','vip03','admin','账号代充值','500','1','2013-09-18 03:14:16');
INSERT INTO caiwu VALUES('34','2013092127552','','vip01','vip01','软文发稿','90','3','2013-09-21 04:19:48');
INSERT INTO caiwu VALUES('35','2013092276847','','vip01','vip01','软文代写','50','3','2013-09-22 09:31:24');
INSERT INTO caiwu VALUES('36','2013092253447','','vip04','admin','账号代充值','123','1','2013-09-22 10:11:14');
INSERT INTO caiwu VALUES('37','2013092286023','','vip04','admin','账号代充值','100','1','2013-09-22 10:11:30');
INSERT INTO caiwu VALUES('38','2013092259898','','admin','admin','软文发稿','50','3','2013-09-22 10:19:32');
INSERT INTO caiwu VALUES('39','2013092226964','','admin','admin','软文发稿','330','3','2013-09-22 10:20:36');
INSERT INTO caiwu VALUES('40','2013092264938','','admin','admin','账号充值','500','1','2013-09-22 10:21:43');
INSERT INTO caiwu VALUES('41','2013092546232','','vip02','admin','发稿费用','0','6','2013-09-25 04:58:31');
INSERT INTO caiwu VALUES('42','2013092546232','','admin','admin','发稿利润','20','6','2013-09-25 04:58:31');
INSERT INTO caiwu VALUES('43','2013092567219','','vip02','admin','发稿费用','10','6','2013-09-25 08:43:47');
INSERT INTO caiwu VALUES('44','2013092567219','','admin','admin','发稿利润','10','6','2013-09-25 08:43:47');
INSERT INTO caiwu VALUES('45','2013092533365','','vip01','admin','软文拒稿','70','5','2013-09-25 09:08:34');
INSERT INTO caiwu VALUES('46','2013092579175','','vip01','vip01','软文发稿','60','3','2013-09-25 10:13:37');
INSERT INTO caiwu VALUES('47','2013092631305','','vip01','vip01','软文发稿','60','3','2013-09-26 02:16:24');
INSERT INTO caiwu VALUES('48','2013092753450','','vip01','vip01','软文删单','60','5','2013-09-27 03:04:21');
INSERT INTO caiwu VALUES('49','2013092771014','','vip01','vip01','软文发稿','70','3','2013-09-27 04:41:01');
INSERT INTO caiwu VALUES('50','2013092760071','','vip01','vip01','软文发稿','130','3','2013-09-27 04:42:05');
INSERT INTO caiwu VALUES('51','2013092733408','','vip01','vip01','软文代写','50','3','2013-09-27 04:46:21');
INSERT INTO caiwu VALUES('52','2013092772853','','vip01','vip01','软文代写','100','3','2013-09-27 04:48:00');
INSERT INTO caiwu VALUES('53','2013092751303','','vip01','admin','账号代充值','3000','1','2013-09-27 04:48:56');
INSERT INTO caiwu VALUES('54','2013092732566','','vip01','vip01','软文代写','150','3','2013-09-27 04:49:23');
INSERT INTO caiwu VALUES('55','2013092773966','','vip02','vip02','软文发稿','120','3','2013-09-27 05:02:00');
INSERT INTO caiwu VALUES('56','2013092747264','','vip04','admin','账号代充值','1000','1','2013-09-27 05:09:21');
INSERT INTO caiwu VALUES('57','2013092743109','','vip04','vip04','软文代写','150','3','2013-09-27 05:09:54');
INSERT INTO caiwu VALUES('58','2013092791343','','vip04','vip04','软文发稿','90','3','2013-09-27 05:10:55');
INSERT INTO caiwu VALUES('59','2013092719345','','vip04','vip04','软文发稿','50','3','2013-09-27 05:11:41');
INSERT INTO caiwu VALUES('60','2013092720431','','vip02','admin','软文拒稿','70','5','2013-09-27 01:36:58');
INSERT INTO caiwu VALUES('61','2013092768098','','vip02','admin','发稿费用','10','6','2013-09-27 01:38:29');
INSERT INTO caiwu VALUES('62','2013092768098','','admin','admin','发稿利润','60','6','2013-09-27 01:38:29');
INSERT INTO caiwu VALUES('63','2013092861583','','admin','admin','软文发稿','10','3','2013-09-28 02:42:53');
INSERT INTO caiwu VALUES('64','2013092821038','','admin','admin','软文发稿','10','3','2013-09-28 04:08:27');
INSERT INTO caiwu VALUES('65','2013092988285','','admin','admin','账号充值','800','1','2013-09-29 06:05:32');
INSERT INTO caiwu VALUES('66','2013092928468','','vip05','admin','账号代充值','800','1','2013-09-29 06:05:51');
INSERT INTO caiwu VALUES('67','2013092957032','','vip05','vip05','软文发稿','380','3','2013-09-29 06:16:42');
INSERT INTO caiwu VALUES('68','2013092910928','','vip05','vip05','软文发稿','220','3','2013-09-29 06:50:01');
INSERT INTO caiwu VALUES('69','2013092923861','','vip05','admin','账号代充值','800','1','2013-09-29 07:22:28');
INSERT INTO caiwu VALUES('70','2013092990375','','vip05','vip05','软文发稿','320','3','2013-09-29 07:23:32');
INSERT INTO caiwu VALUES('71','2013092983583','','admin','admin','软文发稿','130','3','2013-09-29 07:45:12');
INSERT INTO caiwu VALUES('72','2013092919654','','admin','admin','软文发稿','130','3','2013-09-29 07:59:32');
INSERT INTO caiwu VALUES('73','2013092971270','','admin','admin','软文发稿','30','3','2013-09-29 08:13:19');
INSERT INTO caiwu VALUES('74','2013092919107','','admin','admin','软文发稿','160','3','2013-09-29 08:19:30');
INSERT INTO caiwu VALUES('75','2013092960067','','vip01','vip01','软文发稿','150','3','2013-09-29 08:32:55');
INSERT INTO caiwu VALUES('76','2013092972166','','admin','admin','软文发稿','130','3','2013-09-29 08:42:24');
INSERT INTO caiwu VALUES('77','2013092937976','','admin','admin','软文发稿','130','3','2013-09-29 08:43:23');
INSERT INTO caiwu VALUES('78','2013092941802','','admin','admin','软文发稿','130','3','2013-09-29 08:46:56');
INSERT INTO caiwu VALUES('79','2013092933453','','vip01','vip01','软文发稿','150','3','2013-09-29 08:47:25');
INSERT INTO caiwu VALUES('80','2013092931071','','vip05','vip05','软文发稿','200','3','2013-09-29 08:48:10');
INSERT INTO caiwu VALUES('81','2013092918517','','admin','admin','软文发稿','160','3','2013-09-29 09:08:55');
INSERT INTO caiwu VALUES('82','2013092946142','','admin','admin','软文发稿','30','3','2013-09-29 09:10:34');
INSERT INTO caiwu VALUES('83','2013092912298','','vip01','vip01','软文发稿','210','3','2013-09-29 09:11:19');
INSERT INTO caiwu VALUES('84','2013092928704','','vip01','vip01','软文发稿','60','3','2013-09-29 09:11:37');
INSERT INTO caiwu VALUES('85','2013092992320','','vip05','vip05','软文发稿','320','3','2013-09-29 09:12:27');
INSERT INTO caiwu VALUES('86','2013092924883','','vip05','vip05','软文发稿','120','3','2013-09-29 09:12:47');
INSERT INTO caiwu VALUES('87','2013092952371','','admin','admin','发稿利润','20','6','2013-09-29 09:27:56');
INSERT INTO caiwu VALUES('88','2013092952080','','vip02','vip02','软文删单','50','5','2013-09-29 10:10:00');
INSERT INTO caiwu VALUES('89','2013100174226','','vip01','vip01','软文代写','50','3','2013-10-01 04:11:06');
INSERT INTO caiwu VALUES('90','2013100147641','','vip01','vip01','代写删单','50','5','2013-10-01 04:24:53');
INSERT INTO caiwu VALUES('91','2013100193616','','admin','admin','软文代写','50','3','2013-10-01 05:22:43');
INSERT INTO caiwu VALUES('92','2013100118080','','vip01','vip01','软文代写','50','3','2013-10-01 05:36:31');
INSERT INTO caiwu VALUES('93','2013100250844','','vip02','admin','提现结款','300','6','2013-10-02 05:50:27');
INSERT INTO caiwu VALUES('94','2013100414328','','admin','admin','发稿利润','-30','6','2013-10-04 07:40:07');
INSERT INTO caiwu VALUES('95','2013100480153','','admin','admin','发稿利润','20','6','2013-10-04 07:50:28');
INSERT INTO caiwu VALUES('96','2013100484775','','admin','admin','发稿利润','70','6','2013-10-04 08:06:12');
INSERT INTO caiwu VALUES('97','2013100438660','','admin','admin','发稿利润','60','6','2013-10-04 08:23:42');
INSERT INTO caiwu VALUES('98','2013101469474','','vip01','vip01','微营销发稿','200','3','2013-10-14 02:36:20');
INSERT INTO caiwu VALUES('99','2013101498868','','vip01','vip01','社区发稿','200','3','2013-10-14 05:06:57');
INSERT INTO caiwu VALUES('100','2013101433296','','admin','admin','发稿利润','50','6','2013-10-14 06:06:45');
INSERT INTO caiwu VALUES('101','2013101433384','','admin','admin','发稿利润','30','6','2013-10-14 06:08:08');
INSERT INTO caiwu VALUES('102','2013101419173','','vip01','vip01','会员发稿','250','3','2013-10-14 06:33:44');
INSERT INTO caiwu VALUES('103','2013101437913','','admin','admin','发稿利润','60','6','2013-10-14 06:54:30');
INSERT INTO caiwu VALUES('104','2013101465014','','vip01','vip01','会员发稿','300','3','2013-10-14 07:07:11');
INSERT INTO caiwu VALUES('105','2013101431014','','admin','admin','发稿利润','80','6','2013-10-14 07:19:00');
INSERT INTO caiwu VALUES('106','2013101482138','','vip01','vip01','门户合作发稿','350','3','2013-10-14 07:31:09');
INSERT INTO caiwu VALUES('107','2013101438569','','admin','admin','发稿利润','60','6','2013-10-14 07:40:23');
INSERT INTO caiwu VALUES('108','2013101480749','','vip01','vip01','活动发稿','163','3','2013-10-14 07:52:38');
INSERT INTO caiwu VALUES('109','2013101433296','','admin','admin','发稿利润','30','6','2013-10-14 08:01:40');
INSERT INTO caiwu VALUES('110','2013101488140','','vip01','vip01','群发发稿','190','3','2013-10-14 08:14:33');
INSERT INTO caiwu VALUES('111','2013101475882','','admin','admin','发稿利润','10','6','2013-10-14 08:27:44');
INSERT INTO caiwu VALUES('112','2013101493086','','vip01','vip01','应用开发发稿','510','3','2013-10-14 08:39:16');
INSERT INTO caiwu VALUES('113','2013101492045','','admin','admin','发稿利润','50','6','2013-10-14 08:47:49');
INSERT INTO caiwu VALUES('114','2013101499409','','vip01','vip01','应用开发删单','230','5','2013-10-14 08:49:17');
INSERT INTO caiwu VALUES('115','2013101649811','','vip02','admin','账号代充值','500','1','2013-10-16 05:08:17');
INSERT INTO caiwu VALUES('116','2013101628355','','vip02','admin','提现结款','100','6','2013-10-16 05:29:40');
INSERT INTO caiwu VALUES('117','2013101615427','','vip02','admin','提现结款','100','6','2013-10-16 05:34:34');
INSERT INTO caiwu VALUES('118','2013101616726','','vip02','admin','提现结款','500','6','2013-10-16 05:52:57');
INSERT INTO caiwu VALUES('119','2014012178334','','admin','admin','软文发稿','30','3','2014-01-21 07:49:44');
INSERT INTO caiwu VALUES('120','2014012190527','','admin','admin','软文发稿','30','3','2014-01-21 08:13:51');
INSERT INTO caiwu VALUES('121','2014072260210','','admin','admin','账号充值','8','1','2014-07-22 15:32:12');

DROP TABLE IF EXISTS contact;
CREATE TABLE `contact` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `entitle` text,
  `content` text,
  `encontent` text,
  `paixu` int(11) DEFAULT NULL,
  `data` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=gb2312;

INSERT INTO contact VALUES('5','联系我们','','<P><STRONG><FONT style=\"FONT-SIZE: 16pt\">联系方式： </FONT></STRONG></P>\r\n<P>公司电话：4000020172 </P>\r\n<P>企业 Q Q：800023525 </P>\r\n<P>经理Q Q：775925816 </P>\r\n<P>公司邮箱：775925816@qq.com </P>\r\n<P>联系人：朱先生</P>','','1','2013-09-18');

DROP TABLE IF EXISTS daixie_discuss;
CREATE TABLE `daixie_discuss` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `VipUser` varchar(255) DEFAULT NULL,
  `order_id` varchar(255) DEFAULT NULL,
  `recontent` text,
  `data` varchar(255) DEFAULT '',
  `flag` int(11) DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=84 DEFAULT CHARSET=gb2312;

INSERT INTO daixie_discuss VALUES('79','vip01','2013092276847','要求已更新，请重新看要求。','2013-10-01 09:02:21','0');
INSERT INTO daixie_discuss VALUES('80','vip01','2013092276847','稿件要求已再次修改，请查看。','2013-10-02 03:51:48','0');
INSERT INTO daixie_discuss VALUES('81','admin','2013092276847','已经按要求再次作了修改，请审阅。','2013-10-02 06:57:07','0');
INSERT INTO daixie_discuss VALUES('82','vip01','2013092276847','最好能突出产品的卖点。','2013-10-02 07:06:44','0');
INSERT INTO daixie_discuss VALUES('83','admin','2013092276847','能详细说一下你们公司的产品有什么卖点吗？','2013-10-02 07:25:26','0');

DROP TABLE IF EXISTS daixie_info;
CREATE TABLE `daixie_info` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `VipUser` varchar(255) DEFAULT NULL,
  `order_id` varchar(255) DEFAULT NULL,
  `title` text,
  `pianshu` int(11) DEFAULT '0',
  `price` int(11) DEFAULT '0',
  `content` text,
  `encontent` text,
  `data` varchar(255) DEFAULT '',
  `flag` int(11) DEFAULT '0',
  `yn` int(11) DEFAULT '0',
  `dyn` int(11) DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=82 DEFAULT CHARSET=gb2312;

INSERT INTO daixie_info VALUES('74','vip01','2013092276847','好鞋网：购鞋新选择，低价买好鞋','1','50','<p>1、推广对象：好鞋网<br />\r\n2、文章体裁：不限<br />\r\n3、文章标题：不限<br />\r\n4、宣传要点：宣传好鞋网的产品价低，物廉，品质好。<br />\r\n5、其他要求：<br />\r\n5、软文案例：没有<br />\r\n若能提供一篇您认为不错的软文链接给我们，对我们的写作方向很有参考作用，写出的文章也能比较达到您预期的要求。</p>','<p><span style=\"color:#444444;font-family:??????;font-size:medium;background-color:#ffffff;\">　　若能提供一篇您认为不错的软文链接给我们，对我们的写作方向很有参考作用，写出的文章也能比较达到您预期的要求。<span style=\"color:#444444;font-family:??????;font-size:medium;background-color:#ffffff;\">若能提供一篇您认为不错的软文链接给我们，对我们的写作方向很有参考作用，写出的文章也能比较达到您预期的要求。</span></span></p>\r\n<p><span style=\"color:#444444;font-family:??????;font-size:medium;background-color:#ffffff;\"><span style=\"color:#444444;font-family:??????;font-size:medium;background-color:#ffffff;\"><span style=\"color:#444444;font-family:??????;font-size:medium;background-color:#ffffff;\">　　若能提供一篇您认为不错的软文链接给我们，对我们的写作方向很有参考作用，写出的文章也能比较达到您预期的要求。<span style=\"color:#444444;font-family:??????;font-size:medium;background-color:#ffffff;\">若能提供一篇您认为不错的软文链接给我们，对我们的写作方向很有参考作用，写出的文章也能比较达到您预期的要求。</span></span></span></span></p>\r\n<p><span style=\"color:#444444;font-family:??????;font-size:medium;background-color:#ffffff;\"><span style=\"color:#444444;font-family:??????;font-size:medium;background-color:#ffffff;\"><span style=\"color:#444444;font-family:??????;font-size:medium;background-color:#ffffff;\"><span style=\"color:#444444;font-family:??????;font-size:medium;background-color:#ffffff;\"><span style=\"color:#444444;font-family:??????;font-size:medium;background-color:#ffffff;\">　　若能提供一篇您认为不错的软文链接给我们，对我们的写作方向很有参考作用，写出的文章也能比较达到您预期的要求。<span style=\"color:#444444;font-family:??????;font-size:medium;background-color:#ffffff;\">若能提供一篇您认为不错的软文链接给我们，对我们的写作方向很有参考作用，写出的文章也能比较达到您预期的要求。</span></span></span></span></span></span></p>\r\n<p><span style=\"color:#444444;font-family:??????;font-size:medium;background-color:#ffffff;\"><span style=\"color:#444444;font-family:??????;font-size:medium;background-color:#ffffff;\"><span style=\"color:#444444;font-family:??????;font-size:medium;background-color:#ffffff;\"><span style=\"color:#444444;font-family:??????;font-size:medium;background-color:#ffffff;\"><span style=\"color:#444444;font-family:??????;font-size:medium;background-color:#ffffff;\"><span style=\"color:#444444;font-family:??????;font-size:medium;background-color:#ffffff;\"><span style=\"color:#444444;font-family:??????;font-size:medium;background-color:#ffffff;\">　　若能提供一篇您认为不错的软文链接给我们，对我们的写作方向很有参考作用，写出的文章也能比较达到您预期的要求。<span style=\"color:#444444;font-family:??????;font-size:medium;background-color:#ffffff;\">若能提供一篇您认为不错的软文链接给我们，对我们的写作方向很有参考作用，写出的文章也能比较达到您预期的要求。</span></span></span></span></span></span></span></span></p>','2013-09-22 09:31:24','3','0','0');
INSERT INTO daixie_info VALUES('75','vip01','2013092733408','haohaod ','1','50','<p>1、推广对象：<br/>2、文章体裁：<br/>3、文章标题：<br/>4、宣传要点：<br/>5、其他要求：<br/>5、软文案例：<br/>若能提供一篇您认为不错的软文链接给我们，对我们的写作方向很有参考作用，写出的文章也能比较达到您预期的要求。<br/></p>','','2013-09-27 04:46:21','4','0','0');
INSERT INTO daixie_info VALUES('76','vip01','2013092772853','kkkk','2','100','<p>1、推广对象：<br/>2、文章体裁：<br/>3、文章标题：<br/>4、宣传要点：<br/>5、其他要求：<br/>5、软文案例：<br/>若能提供一篇您认为不错的软文链接给我们，对我们的写作方向很有参考作用，写出的文章也能比较达到您预期的要求。<br/></p>','','2013-09-27 04:48:00','1','0','0');
INSERT INTO daixie_info VALUES('77','vip01','2013092732566','dafgadsg','3','150','<p>1、推广对象：<br/>2、文章体裁：<br/>3、文章标题：<br/>4、宣传要点：<br/>5、其他要求：<br/>5、软文案例：<br/>若能提供一篇您认为不错的软文链接给我们，对我们的写作方向很有参考作用，写出的文章也能比较达到您预期的要求。<br/></p>','','2013-09-27 04:49:23','5','0','0');
INSERT INTO daixie_info VALUES('78','vip04','2013092743109','test it','3','150','<p>1、推广对象：<br/>2、文章体裁：<br/>3、文章标题：<br/>4、宣传要点：<br/>5、其他要求：<br/>5、软文案例：<br/>若能提供一篇您认为不错的软文链接给我们，对我们的写作方向很有参考作用，写出的文章也能比较达到您预期的要求。<br/></p>','<p style=\"padding:0px;margin-bottom:10px;line-height:25px;text-indent:2em;color:#444444;font-size:14px;font-family:??????;-webkit-text-size-adjust:none;\">　　美国人最后终于开始体会到买一套好的西装而被穿一件大量生产的廉价衬衫毁坏了整个效果，实在是一件愚蠢的事。因此在这个阶层的人群中，“哈特威</p>\r\n<p style=\"padding:0px;margin-bottom:10px;line-height:25px;text-indent:2em;color:#444444;font-size:14px;font-family:??????;-webkit-text-size-adjust:none;\">　　”衬衫就开始流行了。</p>\r\n<p style=\"padding:0px;margin-bottom:10px;line-height:25px;text-indent:2em;color:#444444;font-size:14px;font-family:??????;-webkit-text-size-adjust:none;\"><br style=\"padding:0px;margin:0px auto;\" />\r\n</p>\r\n<p style=\"padding:0px;margin-bottom:10px;line-height:25px;text-indent:2em;color:#444444;font-size:14px;font-family:??????;-webkit-text-size-adjust:none;\">　　首先，“哈特威”衬衫耐穿性极长??这是多年的事了。其次，因为“哈特威”</p>\r\n<p style=\"padding:0px;margin-bottom:10px;line-height:25px;text-indent:2em;color:#444444;font-size:14px;font-family:??????;-webkit-text-size-adjust:none;\">　　剪裁??低斜度及“为顾客定制的”??衣领，使得您看起来更年轻、更高贵。</p>\r\n<p style=\"padding:0px;margin-bottom:10px;line-height:25px;text-indent:2em;color:#444444;font-size:14px;font-family:??????;-webkit-text-size-adjust:none;\">　　整件衬衣不惜工本的剪裁，因而使您更为“舒适”。</p>\r\n<p style=\"padding:0px;margin-bottom:10px;line-height:25px;text-indent:2em;color:#444444;font-size:14px;font-family:??????;-webkit-text-size-adjust:none;\"><br style=\"padding:0px;margin:0px auto;\" />\r\n</p>\r\n<p style=\"padding:0px;margin-bottom:10px;line-height:25px;text-indent:2em;color:#444444;font-size:14px;font-family:??????;-webkit-text-size-adjust:none;\">　　下摆很长，可深入您的裤腰。钮扣是用珍珠母做成??非常大，也非常有男子气</p>\r\n<p style=\"padding:0px;margin-bottom:10px;line-height:25px;text-indent:2em;color:#444444;font-size:14px;font-family:??????;-webkit-text-size-adjust:none;\">　　。甚至缝纫上也存在着一种南北战争前的高雅。</p>\r\n<p style=\"padding:0px;margin-bottom:10px;line-height:25px;text-indent:2em;color:#444444;font-size:14px;font-family:??????;-webkit-text-size-adjust:none;\"><br style=\"padding:0px;margin:0px auto;\" />\r\n</p>\r\n<p style=\"padding:0px;margin-bottom:10px;line-height:25px;text-indent:2em;color:#444444;font-size:14px;font-family:??????;-webkit-text-size-adjust:none;\">　　最重要的是“哈特威”使用从世界各角落进口的最有名的布匹来缝制他们的衬衫</p>\r\n<p style=\"padding:0px;margin-bottom:10px;line-height:25px;text-indent:2em;color:#444444;font-size:14px;font-family:??????;-webkit-text-size-adjust:none;\">　　??从英国来的棉毛混纺的斜纹布，从苏格兰奥斯特拉德地方来的毛织波纹绸，</p>\r\n<p style=\"padding:0px;margin-bottom:10px;line-height:25px;text-indent:2em;color:#444444;font-size:14px;font-family:??????;-webkit-text-size-adjust:none;\">　　从英属西印度群岛来的海岛棉，从印度来的手织绸，从英格兰曼彻斯特来的宽幅</p>\r\n<p style=\"padding:0px;margin-bottom:10px;line-height:25px;text-indent:2em;color:#444444;font-size:14px;font-family:??????;-webkit-text-size-adjust:none;\">　　细毛布，从巴黎来的亚麻细布，在穿了这么完美风格的衬衫，会使您得到众多的</p>\r\n<p style=\"padding:0px;margin-bottom:10px;line-height:25px;text-indent:2em;color:#444444;font-size:14px;font-family:??????;-webkit-text-size-adjust:none;\">　　内心满足。</p>\r\n<p style=\"padding:0px;margin-bottom:10px;line-height:25px;text-indent:2em;color:#444444;font-size:14px;font-family:??????;-webkit-text-size-adjust:none;\"><br style=\"padding:0px;margin:0px auto;\" />\r\n</p>\r\n<p style=\"padding:0px;margin-bottom:10px;line-height:25px;text-indent:2em;color:#444444;font-size:14px;font-family:??????;-webkit-text-size-adjust:none;\">　　“哈特威”衬衫是缅因州的小城渥特威的一个小公司的虔诚的手艺人所缝制的。</p>\r\n<p style=\"padding:0px;margin-bottom:10px;line-height:25px;text-indent:2em;color:#444444;font-size:14px;font-family:??????;-webkit-text-size-adjust:none;\">　　他们老老小小的在那里工作了已整整114年。</p>\r\n<p style=\"padding:0px;margin-bottom:10px;line-height:25px;text-indent:2em;color:#444444;font-size:14px;font-family:??????;-webkit-text-size-adjust:none;\"><br style=\"padding:0px;margin:0px auto;\" />\r\n</p>\r\n<p style=\"padding:0px;margin-bottom:10px;line-height:25px;text-indent:2em;color:#444444;font-size:14px;font-family:??????;-webkit-text-size-adjust:none;\">　　您如果想在离您最近的店家买到“哈特威”衬衫，请写张明信片到“G?F?哈特</p>\r\n<p style=\"padding:0px;margin-bottom:10px;line-height:25px;text-indent:2em;color:#444444;font-size:14px;font-family:??????;-webkit-text-size-adjust:none;\">　　威”缅因州?渥特威城，即复。</p>','2013-09-27 05:09:54','2','0','0');
INSERT INTO daixie_info VALUES('79','vip01','2013100174226','代写“哈特威”衬衫宣传软文','1','50','1、推广对象：“哈特威”衬衫<br />\r\n2、文章体裁：不限<br />\r\n3、文章标题：不限<br />\r\n4、宣传要点：<br />\r\n5、其他要求：<br />\r\n5、软文案例：<br />\r\n若能提供一篇您认为不错的软文链接给我们，对我们的写作方向很有参考作用，写出的文章也能比较达到您预期的要求。<br />','','2013-10-01 04:11:06','0','0','1');
INSERT INTO daixie_info VALUES('80','admin','2013100193616','代写宣传公司宣传性软文','1','50','1、推广对象：<br />\r\n2、文章体裁：<br />\r\n3、文章标题：<br />\r\n4、宣传要点：<br />\r\n5、其他要求：<br />\r\n5、软文案例：<br />\r\n若能提供一篇您认为不错的软文链接给我们，对我们的写作方向很有参考作用，写出的文章也能比较达到您预期的要求。<br />','','2013-10-01 05:22:43','0','0','0');
INSERT INTO daixie_info VALUES('81','vip01','2013100118080','代写红木船公司宣传性软文','1','50','1、推广对象：红木船公司<br />\r\n2、文章体裁：不限<br />\r\n3、文章标题：不限<br />\r\n4、宣传要点：<br />\r\n5、其他要求：<br />\r\n5、软文案例：<br />\r\n若能提供一篇您认为不错的软文链接给我们，对我们的写作方向很有参考作用，写出的文章也能比较达到您预期的要求。<br />','','2013-10-01 05:36:31','0','0','0');

DROP TABLE IF EXISTS diqu_class;
CREATE TABLE `diqu_class` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `BigClass` varchar(255) DEFAULT NULL,
  `enBigClass` varchar(255) DEFAULT NULL,
  `paixu` int(11) DEFAULT NULL,
  `data` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=gb2312;

INSERT INTO diqu_class VALUES('30','北京','','1','2013-09-18');
INSERT INTO diqu_class VALUES('31','上海','','2','2013-09-18');
INSERT INTO diqu_class VALUES('32','广东','','3','2013-09-18');
INSERT INTO diqu_class VALUES('33','浙江','','4','2013-09-18');
INSERT INTO diqu_class VALUES('34','天津','','5','2013-09-18');
INSERT INTO diqu_class VALUES('35','重庆','','6','2013-09-18');
INSERT INTO diqu_class VALUES('36','湖北','','7','2013-09-18');
INSERT INTO diqu_class VALUES('37','湖南','','8','2013-09-18');
INSERT INTO diqu_class VALUES('38','河北','','9','2013-09-18');
INSERT INTO diqu_class VALUES('39','河南','','10','2013-09-18');
INSERT INTO diqu_class VALUES('40','东北','','11','2013-09-18');
INSERT INTO diqu_class VALUES('41','山西','','12','2013-09-18');
INSERT INTO diqu_class VALUES('42','江苏','','13','2013-09-18');
INSERT INTO diqu_class VALUES('43','江西','','14','2013-09-18');
INSERT INTO diqu_class VALUES('44','四川','','15','2013-09-18');
INSERT INTO diqu_class VALUES('45','辽宁','','16','2013-09-18');
INSERT INTO diqu_class VALUES('46','吉林','','17','2013-09-18');
INSERT INTO diqu_class VALUES('47','甘肃','','18','2013-09-18');
INSERT INTO diqu_class VALUES('48','青海','','19','2013-09-18');
INSERT INTO diqu_class VALUES('49','海南','','20','2013-09-18');
INSERT INTO diqu_class VALUES('50','安徽','','21','2013-09-18');
INSERT INTO diqu_class VALUES('51','福建','','22','2013-09-18');
INSERT INTO diqu_class VALUES('52','其他地区','','23','2013-09-18');

DROP TABLE IF EXISTS huiyuan_info;
CREATE TABLE `huiyuan_info` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `VipUser` varchar(255) DEFAULT NULL,
  `owner` varchar(255) DEFAULT NULL,
  `mid` int(11) DEFAULT '0',
  `order_id` varchar(255) DEFAULT NULL,
  `title` text,
  `medianame` text,
  `weburl` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT '0',
  `content` text,
  `reason` text,
  `dreason` text,
  `data` varchar(255) DEFAULT '',
  `fbtime` varchar(255) DEFAULT '',
  `flag` int(11) DEFAULT '0',
  `yn` int(11) DEFAULT '0',
  `dyn` int(11) DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=131 DEFAULT CHARSET=gb2312;

INSERT INTO huiyuan_info VALUES('129','vip01','','158','2013101419173','代写宣传软文','新浪普通会员','','100','代写宣传软文','违规内容。','','2013-10-14 06:33:44','2013-10-14 06:54:57','3','0','0');
INSERT INTO huiyuan_info VALUES('130','vip01','','160','2013101419173','代写宣传软文','腾讯普通会员','http://www.qq.com/','150','代写宣传软文','','','2013-10-14 06:33:44','2013-10-14 06:54:14','2','1','0');

DROP TABLE IF EXISTS huodong_info;
CREATE TABLE `huodong_info` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `VipUser` varchar(255) DEFAULT NULL,
  `owner` varchar(255) DEFAULT NULL,
  `mid` int(11) DEFAULT '0',
  `order_id` varchar(255) DEFAULT NULL,
  `title` text,
  `medianame` text,
  `weburl` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT '0',
  `content` text,
  `reason` text,
  `dreason` text,
  `data` varchar(255) DEFAULT '',
  `fbtime` varchar(255) DEFAULT '',
  `flag` int(11) DEFAULT '0',
  `yn` int(11) DEFAULT '0',
  `dyn` int(11) DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=131 DEFAULT CHARSET=gb2312;

INSERT INTO huodong_info VALUES('129','vip01','','172','2013101480749','活动：购鞋有优惠，不容错过','腾讯促销活动','','83','活动：购鞋有优惠，不容错过','特殊原因，取消活动。','','2013-10-14 07:52:38','2013-10-14 08:02:26','3','0','0');
INSERT INTO huodong_info VALUES('130','vip01','','170','2013101480749','活动：购鞋有优惠，不容错过','新浪促销活动','http://www.sina.com.cn/','80','活动：购鞋有优惠，不容错过','','','2013-10-14 07:52:38','2013-10-14 08:01:31','2','1','0');

DROP TABLE IF EXISTS media_class;
CREATE TABLE `media_class` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `BigID` int(11) DEFAULT '0',
  `SmallClass` varchar(255) DEFAULT NULL,
  `enSmallClass` varchar(255) DEFAULT NULL,
  `paixu` int(11) DEFAULT NULL,
  `data` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=62 DEFAULT CHARSET=gb2312;

INSERT INTO media_class VALUES('30','46','工业贸易','','1','2013-09-18');
INSERT INTO media_class VALUES('31','46','生活消费','','2','2013-09-19');
INSERT INTO media_class VALUES('32','46','女性时尚','','3','2013-09-19');
INSERT INTO media_class VALUES('33','46','娱乐休闲','','4','2013-09-19');
INSERT INTO media_class VALUES('34','46','游戏网站','','5','2013-09-19');
INSERT INTO media_class VALUES('35','46','汽车网站','','6','2013-09-19');
INSERT INTO media_class VALUES('36','46','教育培训','','7','2013-09-19');
INSERT INTO media_class VALUES('37','46','酒店旅游','','8','2013-09-19');
INSERT INTO media_class VALUES('38','46','健康医疗','','9','2013-09-19');
INSERT INTO media_class VALUES('39','46','房产家居','','10','2013-09-19');
INSERT INTO media_class VALUES('40','46','财经商业','','11','2013-09-19');
INSERT INTO media_class VALUES('41','46','新闻资讯','','12','2013-09-19');
INSERT INTO media_class VALUES('42','46','IT-科技','','13','2013-09-19');
INSERT INTO media_class VALUES('43','46','套餐系列','','14','2013-09-19');
INSERT INTO media_class VALUES('44','46','最新秒杀','','15','2013-09-19');
INSERT INTO media_class VALUES('45','46','十元专区','','16','2013-09-19');
INSERT INTO media_class VALUES('46','47','微博营销','','17','');
INSERT INTO media_class VALUES('47','47','微信营销','','18','');
INSERT INTO media_class VALUES('48','48','大社区','','19','');
INSERT INTO media_class VALUES('49','48','小社区','','20','');
INSERT INTO media_class VALUES('50','49','高级会员','','21','');
INSERT INTO media_class VALUES('51','49','普通会员','','22','');
INSERT INTO media_class VALUES('52','50','高级水军','','23','');
INSERT INTO media_class VALUES('53','50','普通水军','','24','');
INSERT INTO media_class VALUES('54','51','大门户','','25','');
INSERT INTO media_class VALUES('55','51','小门户','','26','');
INSERT INTO media_class VALUES('56','52','优惠活动','','27','');
INSERT INTO media_class VALUES('57','52','促销活动','','28','');
INSERT INTO media_class VALUES('58','53','QQ群发','','29','');
INSERT INTO media_class VALUES('59','53','微博群发','','30','');
INSERT INTO media_class VALUES('60','54','高级应用开发','','31','');
INSERT INTO media_class VALUES('61','54','普通应用开发','','32','');

DROP TABLE IF EXISTS media_info;
CREATE TABLE `media_info` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `VipUser` varchar(255) DEFAULT NULL,
  `sh` int(11) DEFAULT '0',
  `nav_id` int(11) DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL,
  `small_id` int(11) DEFAULT NULL,
  `medianame` text,
  `medialx` varchar(255) DEFAULT NULL,
  `weburl` varchar(255) DEFAULT NULL,
  `anliurl` varchar(255) DEFAULT NULL,
  `linkurl` varchar(255) DEFAULT NULL,
  `xinwenyuan` varchar(255) DEFAULT NULL,
  `zhmh` varchar(255) DEFAULT NULL,
  `diqu` varchar(255) DEFAULT NULL,
  `fans` int(11) DEFAULT '0',
  `price` int(11) DEFAULT '0',
  `dlprice` int(11) DEFAULT '0',
  `scprice` int(11) DEFAULT '0',
  `content` text,
  `neirong` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `data` varchar(255) DEFAULT '',
  `flag` int(11) DEFAULT '0',
  `tj` varchar(255) DEFAULT '../images/stars.gif',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=181 DEFAULT CHARSET=gb2312;

INSERT INTO media_info VALUES('73','','1','46','30','0','中国网-民企','','http://minqi.china.com.cn/','http://minqi.china.com.cn/','可带网址','非新闻源','中国网','其他地区','0','130','50','10','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('74','','1','46','30','0','中工网','','http://news.workercn.cn/','http://news.workercn.cn/','可带网址','百度新闻源',' ','其他地区','0','150','50','10','','','2013-09-18','0','../images/stars.gif');
INSERT INTO media_info VALUES('75','','1','46','30','0','中国低碳网','','http://www.ditan360.com/','http://www.ditan360.com/','可带网址','百度新闻源','','其他地区','0','150','80','70','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('76','','1','46','30','0','中国建材采购网','','http://www.jiancai365.cn/','http://www.jiancai365.cn/','可带网址','非新闻源','','其他地区','0','220','100','10','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('77','','1','46','30','0','中国建筑装饰网','','http://www.ccd.com.cn/','http://www.ccd.com.cn/','可带网址','百度新闻源','','其他地区','0','180','70','10','','','2013-09-02','0','../images/stars.gif');
INSERT INTO media_info VALUES('78','','1','46','30','0','地宝网','','http://www.tiboo.cn/','http://www.tiboo.cn/','可带网址','非新闻源','','其他地区','0','170','80','10','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('79','','1','46','30','0','中国家电网','','http://www.cheaa.com/','http://www.cheaa.com/','可带网址','百度新闻源',' ','其他地区','0','170','80','10','','','2013-09-18','0','../images/stars.gif');
INSERT INTO media_info VALUES('80','','1','46','30','0','中华橱柜网','','http://www.chinachugui.com/','http://www.chinachugui.com/','可带网址','非新闻源','','其他地区','0','180','80','10','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('81','','1','46','30','0','世界工厂网','','http://ch.gongchang.com/','http://ch.gongchang.com/','文本链接','非新闻源','','其他地区','0','150','70','10','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('82','','1','46','30','0','中国工业网','','http://www.ecgoods.com/','http://www.ecgoods.com/','文本链接','非新闻源','','其他地区','0','130','60','10','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('83','','1','46','31','0','洛阳网-生活','','http://life.lyd.com.cn/','http://life.lyd.com.cn/system/2013/01/21/010223640.shtml','可带网址','非新闻源','','其他地区','0','130','20','10','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('84','','1','46','31','0','中国青年网-生活','','http://www.youth.cn/','http://www.youth.cn/mscj/sh/jdxw/201307/t20130717_3546744.htm','可带网址','非新闻源','','其他地区','0','150','70','10','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('85','','1','46','31','0','东方网-生活','','http://life.eastday.com/','http://life.eastday.com/eastday/dfsh/node719470/node719472/u1a7441643.html','不能带网址','非新闻源','','其他地区','0','130','60','10','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('86','','1','46','31','0','中青在线','','http://life.cyol.com/','http://life.cyol.com/content/2013-07/10/content_8695409.htm','文本链接','百度新闻源',' ','其他地区','0','180','80','10','','','2013-09-18','0','../images/stars.gif');
INSERT INTO media_info VALUES('87','','1','46','31','0','现代消费网','','http://www.xdxfdb.com/','http://www.xdxfdb.com/html/2013/0711/55172.shtml','文本链接','非新闻源','','其他地区','0','120','60','10','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('88','','1','46','31','0','中国广播网-开发','','http://www.cnr.cn/','http://www.cnr.cn/kfqpd/sp/201305/t20130527_512677831.shtml','文本链接','非新闻源','','其他地区','0','100','50','10','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('89','','1','46','31','0','中国日报网-消费','','http://xf.chinadaily.com.cn/','http://xf.chinadaily.com.cn/html/2013/0701/11285.shtml','文本链接','非新闻源','中国日报网','其他地区','0','90','45','10','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('90','','1','46','31','0','中国日报网-网视','','http://www.wschina.com.cn/','http://www.wschina.com.cn/2012/1119/106858.shtml','文本链接','非新闻源','中国日报网','其他地区','0','100','50','10','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('91','','1','46','31','0','中国日报网-食品','','http://sp.chinadaily.com.cn/','http://sp.chinadaily.com.cn/info/20130123/97366.html','文本链接','非新闻源','中国日报网','其他地区','0','120','60','10','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('92','','1','46','31','0','中国网-生活','','http://live.china.com.cn/','http://live.china.com.cn/2013-01/18/content_5681423.htm','可带网址','非新闻源','中国网','其他地区','0','120','70','10','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('93','','1','46','32','0','凤凰网-时尚','','http://life.lyd.com.cn/','http://life.lyd.com.cn/system/2013/01/21/010223640.shtml','文本链接','百度新闻源','凤凰网','其他地区','0','130','20','10','','','2013-09-21','0','../images/stars5.gif');
INSERT INTO media_info VALUES('94','','1','46','32','0','TOM-风尚','','http://post.lady.tom.com/','http://post.lady.tom.com/s/FD000AB33449.html','文本链接','非新闻源','TOM网','其他地区','0','100','50','10','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('95','','1','46','32','46','中国经济网-时尚','','http://fashion.ce.cn/','http://fashion.ce.cn/','可带网址','非新闻源','','其他地区','0','150','70','10','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('96','','1','46','32','0','中国服装网','','http://www.efu.com.cn/','http://www.efu.com.cn/','可超链接','谷歌新闻源','','湖北','0','170','70','10','<p>法大使馆</p>','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('97','','1','46','32','0','品牌世家','','http://biz.ppsj.com.cn/','http://biz.ppsj.com.cn/2009-8-22/1918862341.html','可带网址','百度新闻源',' ','其他地区','0','150','70','10','','','2013-09-18','0','../images/stars.gif');
INSERT INTO media_info VALUES('98','','1','46','32','0','中国早教网','','http://www.zaojiao.com/','http://www.zaojiao.com/','可带网址','非新闻源','','其他地区','0','160','80','10','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('99','','1','46','32','0','父母网','','http://www.fumu.com/','http://www.fumu.com/','可带网址','非新闻源','','其他地区','0','160','80','10','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('100','','1','46','32','0','中国孕育网','','http://www.5721.net/','http://www.5721.net/','可带网址','非新闻源','','其他地区','0','150','80','10','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('101','','1','46','32','0','瑞丽网-亲子','','http://www.rayli.com.cn/baby/','http://www.rayli.com.cn/baby/','可带网址','非新闻源','','其他地区','0','180','90','10','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('102','','1','46','32','0','亲亲宝贝网','','http://www.qbaobei.com/','http://www.qbaobei.com/','可带网址','非新闻源','','其他地区','0','190','90','10','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('103','','1','46','33','0','TOM-体育','','http://post.sports.tom.com/','http://post.sports.tom.com/s/520009516186.html','文本链接','百度新闻源','TOM网','其他地区','0','100','50','10','','','2013-09-18','0','../images/stars.gif');
INSERT INTO media_info VALUES('104','','1','46','33','0','TOM-娱乐','','http://post.yule.tom.com/','http://post.yule.tom.com/21001DBA705.html','文本链接','百度新闻源','TOM网','其他地区','0','100','50','10','','','2013-09-18','0','../images/stars.gif');
INSERT INTO media_info VALUES('105','','1','46','33','0','中国经济网-娱乐','','http://ent.ce.cn/','http://ent.ce.cn/','可带网址','非新闻源','中国经济网','其他地区','0','150','80','10','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('106','','1','46','33','0','国家艺术网','','http://www.zggjysw.com/','http://www.zggjysw.com/','可带网址','非新闻源','','其他地区','0','130','60','10','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('107','','1','46','33','0','第一视频网','','http://www.v1.cn/','http://www.v1.cn/','可带网址','非新闻源','','其他地区','0','150','70','10','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('108','','1','46','33','0','美悦时尚网','','http://www.27.cn/','http://www.27.cn/','可带网址','非新闻源','','其他地区','0','180','80','10','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('109','','1','46','33','0','粉丝网','','http://www.ifensi.com/','http://www.ifensi.com/','文本链接','百度新闻源',' ','其他地区','0','200','80','10','','','2013-09-18','0','../images/stars.gif');
INSERT INTO media_info VALUES('110','','1','46','33','0','大旗网-娱乐','','http://ent.daqi.com/','http://ent.daqi.com/','文本链接','非新闻源','','其他地区','0','170','70','10','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('111','','1','46','33','0','尚趣网','','http://www.vsuch.com/','http://www.vsuch.com/','文本链接','非新闻源','','其他地区','0','170','70','10','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('112','','1','46','33','0','搜刮音乐-娱乐资讯','','http://news.sogua.com/ent/','http://news.sogua.com/ent/','文本链接','非新闻源','','其他地区','0','180','70','10','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('113','','1','46','34','0','硅谷动力-游戏','','http://games.enet.com.cn/','http://games.enet.com.cn/article/A1120130607025.html','可带网址','百度新闻源',' ','其他地区','0','230','100','10','','','2013-09-18','0','../images/stars.gif');
INSERT INTO media_info VALUES('114','','1','46','34','0','766游戏网','','http://news.766.com/','http://news.766.com/dl/2013-08-16/2107159.shtml','可带网址','百度新闻源','','其他地区','0','230','120','100','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('115','','1','46','34','0','5617网游网','','http://news.5617.com/','http://news.5617.com/news/detail/1041513','不能带网址','非新闻源','','其他地区','0','200','90','10','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('116','','1','46','34','0','265G游戏网','','http://www.265g.com/','http://www.265g.com/news/gamenews/399081.html','可带网址','百度新闻源',' ','其他地区','0','230','90','10','','','2013-09-18','0','../images/stars.gif');
INSERT INTO media_info VALUES('117','','1','46','34','0','光明网-游戏','','http://game.gmw.cn/','http://game.gmw.cn/2013-08/17/content_8630130.htm','可带网址','非新闻源','','其他地区','0','280','110','70','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('118','','1','46','34','0','新手村','','http://www.xinshoucun.com/','http://www.xinshoucun.com/','可带网址','非新闻源','','其他地区','0','150','70','10','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('119','','1','46','34','0','游戏王国','','http://www.noyes.cn/','http://www.noyes.cn/','可带网址','非新闻源','','其他地区','0','150','80','10','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('120','','1','46','34','0','中关村游戏','','http://game.zol.com.cn/','http://game.zol.com.cn/','可带网址','百度新闻源',' ','北京','0','220','100','10','','','2013-09-18','0','../images/stars.gif');
INSERT INTO media_info VALUES('121','','1','46','34','0','游久网','','http://news.uuu9.com/','http://news.uuu9.com/2013/201308/297877.shtml','可带网址','百度新闻源','','其他地区','0','230','100','90','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('122','','1','46','34','0','7yx游戏网','','http://www.7yx.com.cn/','http://www.7yx.com.cn/html/2013/0815/1376552669.html','不能带网址','非新闻源','','其他地区','0','180','100','10','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('123','','1','46','35','0','凤凰网-汽车','','http://hefei.auto.ifeng.com/','http://hefei.auto.ifeng.com/shangqing/2013/0625/1896.html','可带网址','非新闻源','凤凰网','其他地区','0','150','80','10','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('124','','1','46','35','0','TOM-汽车','','http://auto.tom.com/','http://auto.tom.com/2013-05-14/0D5C/00676451.html','文本链接','百度新闻源',' ','其他地区','0','100','50','10','','','2013-09-18','0','../images/stars.gif');
INSERT INTO media_info VALUES('125','','1','46','35','0','东方网-汽车','','http://dateauto.eastday.com/','http://dateauto.eastday.com/','文本链接','非新闻源','','其他地区','0','180','80','10','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('126','','1','46','35','0','千龙网-汽车','','http://auto.qianlong.com/','http://auto.qianlong.com/','文本链接','非新闻源','千龙网','其他地区','0','150','70','10','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('127','','1','46','35','0','卡车之家','','http://www.16888.com/','http://www.16888.com/','文本链接','百度新闻源',' ','北京','0','180','80','10','','','2013-09-18','0','../images/stars.gif');
INSERT INTO media_info VALUES('128','','1','46','35','0','都市汽车网','','http://www.citymotors.com.cn/','http://www.citymotors.com.cn/','文本链接','非新闻源','','北京','0','180','80','30','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('129','','1','46','35','0','搜车吧','','http://www.soche8.com/','http://www.soche8.com/','文本链接','非新闻源','','上海','0','170','70','10','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('130','','1','46','35','0','汽车大世界','','http://www.mycar168.com/','http://www.mycar168.com/','可带网址','非新闻源','','北京','0','280','190','140','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('131','','1','46','35','0','汽车殿堂','','http://www.car136.com/','http://www.car136.com/','文本链接','非新闻源','','北京','0','30','20','10','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('132','','1','46','35','0','汽车江湖网','','http://www.qc188.com/','http://www.qc188.com/','文本链接','非新闻源','','北京','0','180','80','60','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('133','vip02','1','46','35','0','汽车江湖网','','http://www.qc188.com/','http://www.qc188.com/','可超链接','非新闻源','','北京','0','120','60','30','<p>合作</p>','','2013-10-20','0','../images/stars3.gif');
INSERT INTO media_info VALUES('134','vip02','0','46','30','0','哈哈镜','','后台','发','可超链接','',' ','广东','0','100','80','50','<p>test的</p>','','2013-09-27','0','../images/stars1.gif');
INSERT INTO media_info VALUES('135','vip02','1','46','34','46','游戏有戏','','发的噶大使馆','发的三国杀','文本链接','非新闻源','','广东','0','99','88','55','<p>放大师傅</p>','','2013-10-04','0','../images/stars5.gif');
INSERT INTO media_info VALUES('136','vip02','0','46','36','0','是事实还是','','发撒的','发','可超链接','网页收录','中国广播网','上海','0','80','70','60','<p>发生大幅<br/></p>','','2013-09-27','0','../images/stars.gif');
INSERT INTO media_info VALUES('137','vip02','1','46','30','46','汽车江湖网','','http://www.qc188.com/','http://life.lyd.com.cn/system/2013/01/21/010223640.shtml','可带网址','非新闻源','','北京','0','80','60','40','<p>312312431414</p>','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('138','vip02','0','46','30','46','IT科技信息网','','http://www.qc188.com/','http://www.qc188.com/','文本链接','',' ','北京','0','0','0','10','','','2013-09-28','0','../images/stars.gif');
INSERT INTO media_info VALUES('139','vip02','1','46','42','0','IT科技信息网','','http://www.qc188.com/','http://www.qc188.com/','可超链接','非新闻源','','北京','0','50','30','10','','','2013-10-04','0','../images/stars2.gif');
INSERT INTO media_info VALUES('140','vip02','1','46','41','0','中国新闻日报网','','http://life.lyd.com.cn/','http://www.ccd.com.cn/','可超链接','非新闻源','','北京','0','200','150','120','推荐','','2013-10-04','0','../images/stars3.gif');
INSERT INTO media_info VALUES('142','','0','46','30','0','ccc12312','','http://www.qc188.com/','http://www.qc188.com/',' ','非新闻源',' ','北京','0','120','80','50','','','2013-10-04','0','../images/stars.gif');
INSERT INTO media_info VALUES('143','','0','46','30','46','bbb1231231','','http://www.qc188.com/','http://www.qc188.com/','可超链接','非新闻源',' ','北京','0','200','100','88','','','2013-10-04','0','../images/stars2.gif');
INSERT INTO media_info VALUES('144','vip02','0','46','38','0','中国健康网','','http://www.qc188.com/','http://www.qc188.com/','可带网址','非新闻源',' ','北京','0','0','0','38','','','2013-10-04','0','../images/stars.gif');
INSERT INTO media_info VALUES('145','','0','46','30','0','d123123','','http://life.lyd.com.cn/','http://www.qc188.com/','不能带连接','非新闻源',' ','北京','0','80','60','30','','','2013-10-04','0','../images/stars.gif');
INSERT INTO media_info VALUES('147','','1','47','46','0','新浪微博大号01','','http://www.sina.com.cn/','','','非新闻源','新浪网','北京','0','160','100','50','','','2013-10-13','0','../images/stars3.gif');
INSERT INTO media_info VALUES('148','','1','47','46','0','新浪微博大号02','','http://www.sina.com.cn/','','','非新闻源','新浪网','北京','0','200','120','80','','','2013-10-13','0','../images/stars4.gif');
INSERT INTO media_info VALUES('149','','1','47','46','0','新浪微博大号03','','http://www.sina.com.cn/','','','非新闻源','新浪网','北京','0','170','110','70','','','2013-10-13','0','../images/stars5.gif');
INSERT INTO media_info VALUES('150','','1','47','47','0','腾讯微信大号01','','http://www.qq.com/','','','非新闻源','腾讯网','北京','0','200','120','80','','','2013-10-13','0','../images/stars3.gif');
INSERT INTO media_info VALUES('151','','1','47','47','0','腾讯微信大号02','','http://www.qq.com/','','','非新闻源','腾讯网','北京','0','180','120','70','','','2013-10-13','0','../images/stars2.gif');
INSERT INTO media_info VALUES('152','','1','47','47','49','腾讯微信大号03','','http://www.qq.com/','http://www.qq.com/','','非新闻源','腾讯网','北京','0','170','100','50','','','2013-10-13','0','../images/stars4.gif');
INSERT INTO media_info VALUES('153','','1','48','48','0','新浪大社区','','http://www.sina.com.cn/','','','非新闻源','新浪网','北京','0','120','80','50','','','2013-10-14','0','../images/stars.gif');
INSERT INTO media_info VALUES('154','','1','48','49','0','新浪小社区','','http://www.sina.com.cn/','','','非新闻源','新浪网','北京','0','240','120','80','','','2013-10-14','0','../images/stars.gif');
INSERT INTO media_info VALUES('155','','1','48','48','0','腾讯大社区','','http://www.qq.com/','','','非新闻源','腾讯网','北京','0','180','130','70','','','2013-10-14','0','../images/stars.gif');
INSERT INTO media_info VALUES('156','','1','48','49','48','腾讯小社区','','http://www.qq.com/','http://www.qq.com/','','非新闻源','腾讯网','北京','0','100','60','30','','','2013-10-14','0','../images/stars.gif');
INSERT INTO media_info VALUES('157','','1','49','50','0','新浪高级会员','','http://www.sina.com.cn/','','','非新闻源','新浪网','北京','0','300','200','100','','','2013-10-14','0','../images/stars5.gif');
INSERT INTO media_info VALUES('158','','1','49','51','0','新浪普通会员','','http://www.sina.com.cn/','','','非新闻源','新浪网','北京','0','150','100','50','','','2013-10-14','0','../images/stars.gif');
INSERT INTO media_info VALUES('159','','1','49','50','0','腾讯高级会员','','http://www.qq.com/','',' ','非新闻源','腾讯网','北京','0','260','190','120','','','2013-10-14','0','../images/stars2.gif');
INSERT INTO media_info VALUES('160','','1','49','51','0','腾讯普通会员','','http://www.qq.com/','http://www.qq.com/','','非新闻源','腾讯网','北京','0','220','150','90','','','2013-10-14','0','../images/stars2.gif');
INSERT INTO media_info VALUES('161','','1','50','52','0','新浪高级水军','','http://www.sina.com.cn/','',' ','非新闻源','新浪网','北京','0','430','300','230','','','2013-10-14','0','../images/stars.gif');
INSERT INTO media_info VALUES('162','','1','50','53','0','新浪普通水军','','http://www.sina.com.cn/','',' ','非新闻源','新浪网','北京','0','250','180','100','','','2013-10-14','0','../images/stars.gif');
INSERT INTO media_info VALUES('163','','1','50','52','0','腾讯高级水军','','http://www.qq.com/','',' ','非新闻源','腾讯网','北京','0','400','320','238','','','2013-10-14','0','../images/stars.gif');
INSERT INTO media_info VALUES('164','','1','50','53','0','腾讯普通水军','','http://www.qq.com/','http://www.qq.com/','','非新闻源','腾讯网','北京','0','180','120','80','','','2013-10-14','0','../images/stars.gif');
INSERT INTO media_info VALUES('165','','1','51','54','0','新浪大门户','','http://www.sina.com.cn/','',' ','非新闻源','新浪网','北京','0','430','380','300','','','2013-10-14','0','../images/stars.gif');
INSERT INTO media_info VALUES('166','','1','51','55','0','新浪小门户','','http://www.sina.com.cn/','',' ','非新闻源','新浪网','北京','0','300','200','120','','','2013-10-14','0','../images/stars.gif');
INSERT INTO media_info VALUES('167','','1','51','54','0','腾讯大门户','','http://www.qq.com/','',' ','非新闻源','腾讯网','北京','0','510','420','380','','','2013-10-14','0','../images/stars.gif');
INSERT INTO media_info VALUES('168','','1','51','55','0','腾讯小门户','','http://www.qq.com/','http://www.qq.com/','','非新闻源','腾讯网','北京','0','240','150','90','','','2013-10-14','0','../images/stars.gif');
INSERT INTO media_info VALUES('169','','1','52','56','0','新浪优惠活动','','http://www.sina.com.cn/','',' ','非新闻源','新浪网','北京','0','180','120','100','','','2013-10-14','0','../images/stars.gif');
INSERT INTO media_info VALUES('170','','1','52','57','0','新浪促销活动','','http://www.sina.com.cn/','',' ','非新闻源','新浪网','北京','0','110','80','50','','','2013-10-14','0','../images/stars.gif');
INSERT INTO media_info VALUES('171','','1','52','56','0','腾讯优惠活动','','http://www.qq.com/','',' ','非新闻源','腾讯网','北京','0','230','112','90','','','2013-10-14','0','../images/stars.gif');
INSERT INTO media_info VALUES('172','','1','52','57','0','腾讯促销活动','','http://www.qq.com/','','','非新闻源','腾讯网','北京','0','130','83','43','','','2013-10-14','0','../images/stars.gif');
INSERT INTO media_info VALUES('173','','1','53','58','0','腾讯QQ群发','','http://www.qq.com/','','','非新闻源','腾讯网','北京','0','40','30','20','','','2013-10-14','0','../images/stars.gif');
INSERT INTO media_info VALUES('174','','1','53','59','0','腾讯微博群发','','http://www.qq.com/','','','非新闻源','腾讯网','北京','0','80','60','50','','','2013-10-14','0','../images/stars.gif');
INSERT INTO media_info VALUES('175','','1','53','59','0','新浪微博群发','','http://www.sina.com.cn/','http://www.sina.com.cn/','','非新闻源','新浪网','北京','0','200','100','80','','','2013-10-14','0','../images/stars.gif');
INSERT INTO media_info VALUES('176','','1','54','60','0','新浪高级应用开发','','http://www.sina.com.cn/','','','非新闻源','新浪网','北京','0','130','80','30','','','2013-10-14','0','../images/stars.gif');
INSERT INTO media_info VALUES('177','','1','54','61','0','新浪普通应用开发','','http://www.sina.com.cn/','',' ','非新闻源','新浪网','北京','0','450','280','120','','','2013-10-14','0','../images/stars.gif');
INSERT INTO media_info VALUES('178','','1','54','60','0','腾讯高级应用开发','','http://www.qq.com/','',' ','非新闻源','腾讯网','北京','0','400','230','150','','','2013-10-14','0','../images/stars.gif');
INSERT INTO media_info VALUES('179','','1','54','61','0','腾讯普通应用开发','','http://www.qq.com/','','','非新闻源','腾讯网','北京','0','500','200','120','','','2014-04-04','0','../images/stars.gif');
INSERT INTO media_info VALUES('180','vip02','0','47','46','0','腾讯微信大号03','','http://www.qq.com/','http://www.qq.com/',' ','非新闻源','腾讯网','北京','10000','0','0','100','','','2013-10-20','0','../images/stars.gif');

DROP TABLE IF EXISTS media_small;
CREATE TABLE `media_small` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `BigClass` varchar(255) DEFAULT NULL,
  `enBigClass` varchar(255) DEFAULT NULL,
  `paixu` int(11) DEFAULT NULL,
  `data` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=gb2312;

INSERT INTO media_small VALUES('46','10元秒杀','','1','2013-10-03');
INSERT INTO media_small VALUES('47','20元秒杀','','2','2013-10-04');
INSERT INTO media_small VALUES('48','30元秒杀','','3','2013-10-04');
INSERT INTO media_small VALUES('49','100元秒杀','','4','2013-10-04');

DROP TABLE IF EXISTS menhu_class;
CREATE TABLE `menhu_class` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `BigClass` varchar(255) DEFAULT NULL,
  `enBigClass` varchar(255) DEFAULT NULL,
  `paixu` int(11) DEFAULT NULL,
  `data` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=gb2312;

INSERT INTO menhu_class VALUES('30','新浪网','','1','2013-09-18');
INSERT INTO menhu_class VALUES('31','搜狐网','','2','2013-09-18');
INSERT INTO menhu_class VALUES('32','腾讯网','','3','2013-09-18');
INSERT INTO menhu_class VALUES('33','网易网','','4','2013-09-18');
INSERT INTO menhu_class VALUES('34','凤凰网','','5','2013-09-18');
INSERT INTO menhu_class VALUES('35','中华网','','6','2013-09-18');
INSERT INTO menhu_class VALUES('36','人民网','','7','2013-09-18');
INSERT INTO menhu_class VALUES('37','央视网','','8','2013-09-18');
INSERT INTO menhu_class VALUES('38','千龙网','','9','2013-09-18');
INSERT INTO menhu_class VALUES('39','新华网','','10','2013-09-18');
INSERT INTO menhu_class VALUES('40','中国网','','11','2013-09-18');
INSERT INTO menhu_class VALUES('41','慧聪网','','12','2013-09-18');
INSERT INTO menhu_class VALUES('42','TOM网','','13','2013-09-18');
INSERT INTO menhu_class VALUES('43','21CN网','','14','2013-09-18');
INSERT INTO menhu_class VALUES('44','中国日报网','','15','2013-09-18');
INSERT INTO menhu_class VALUES('45','中国经济网','','16','2013-09-18');
INSERT INTO menhu_class VALUES('46','中国新闻网','','17','2013-09-18');
INSERT INTO menhu_class VALUES('47','中国广播网','','18','2013-09-18');

DROP TABLE IF EXISTS menhuhz_info;
CREATE TABLE `menhuhz_info` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `VipUser` varchar(255) DEFAULT NULL,
  `owner` varchar(255) DEFAULT NULL,
  `mid` int(11) DEFAULT '0',
  `order_id` varchar(255) DEFAULT NULL,
  `title` text,
  `medianame` text,
  `weburl` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT '0',
  `content` text,
  `reason` text,
  `dreason` text,
  `data` varchar(255) DEFAULT '',
  `fbtime` varchar(255) DEFAULT '',
  `flag` int(11) DEFAULT '0',
  `yn` int(11) DEFAULT '0',
  `dyn` int(11) DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=131 DEFAULT CHARSET=gb2312;

INSERT INTO menhuhz_info VALUES('129','vip01','','166','2013101482138','妙手攒机 宏图三胞网络DIY装机挑战赛即将启动','新浪小门户','','200','妙手攒机 宏图三胞网络DIY装机挑战赛即将启动','有敏感性内容，不允许发。','','2013-10-14 07:31:09','2013-10-14 07:41:18','3','0','0');
INSERT INTO menhuhz_info VALUES('130','vip01','','168','2013101482138','妙手攒机 宏图三胞网络DIY装机挑战赛即将启动','腾讯小门户','http://www.qq.com/','150','妙手攒机 宏图三胞网络DIY装机挑战赛即将启动','','','2013-10-14 07:31:09','2013-10-14 07:40:12','2','1','0');

DROP TABLE IF EXISTS nav_class;
CREATE TABLE `nav_class` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `BigClass` varchar(255) DEFAULT NULL,
  `enBigClass` varchar(255) DEFAULT NULL,
  `paixu` int(11) DEFAULT NULL,
  `data` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=gb2312;

INSERT INTO nav_class VALUES('46','软文发布','','1','2014-02-12');
INSERT INTO nav_class VALUES('47','微营销','','2','2013-10-04');
INSERT INTO nav_class VALUES('48','社区','','3','2013-10-04');
INSERT INTO nav_class VALUES('49','会员','','4','2013-10-04');
INSERT INTO nav_class VALUES('50','水军','','5','2013-10-04');
INSERT INTO nav_class VALUES('51','门户合作','','6','2013-10-04');
INSERT INTO nav_class VALUES('52','活动','','7','2013-10-04');
INSERT INTO nav_class VALUES('53','群发','','8','2013-10-04');
INSERT INTO nav_class VALUES('54','应用开发','','9','2013-10-04');

DROP TABLE IF EXISTS news_class;
CREATE TABLE `news_class` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `BigClass` varchar(255) DEFAULT NULL,
  `enBigClass` varchar(255) DEFAULT NULL,
  `paixu` int(11) DEFAULT NULL,
  `data` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=gb2312;

INSERT INTO news_class VALUES('28','新闻中心','','1','2013-09-18');
INSERT INTO news_class VALUES('29','发稿帮助','','2','2013-09-18');

DROP TABLE IF EXISTS news_info;
CREATE TABLE `news_info` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `class_id` int(11) DEFAULT NULL,
  `title` text,
  `entitle` text,
  `nd` int(11) DEFAULT '1',
  `content` text,
  `encontent` text,
  `data` varchar(255) DEFAULT '',
  `tj` int(11) DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=73 DEFAULT CHARSET=gb2312;

INSERT INTO news_info VALUES('67','28','软文有什么用？','软文街','1','　　1. 让用户更容易接受广告 \r\n<P style=\"TEXT-ALIGN: left; TEXT-INDENT: 2em\">现在广告信息太多太杂，消费者都很理性，不喜欢硬性推销的广告，他们愿意自己去寻找自己所需要的信息。所以软文不似硬性广告那样会遭到用户抵触，能让客户放下心中芥蒂，更容易去接受。</P>\r\n<P style=\"TEXT-ALIGN: left; TEXT-INDENT: 2em\">2. 给用户带去良好的阅读体验</P>\r\n<P style=\"TEXT-ALIGN: left; TEXT-INDENT: 2em\">优秀的软文多半都具有权威性、专业性或则趣味性、娱乐性，能给用户带去良好的阅读享受，叫用户在读软文时忘了广告的存在，全身心地投入这种享受里。因此更易获得用户的喜爱，获得良好的口碑。</P>\r\n<P style=\"TEXT-ALIGN: left; TEXT-INDENT: 2em\">3. 成本费用低，承载信息量大，效果好</P>\r\n<P style=\"TEXT-ALIGN: left; TEXT-INDENT: 2em\">普通的广告投入费用很高，而且所能承载的信息量十分有限，尤其是纸张媒体上的图片广告，有些甚至只有豆腐干大小，受版面和字数限制，无法将广告信息完整地表达清楚。而软文广告投入费用低，而且所能承载的信息量大，相应的投资回报也高得多。</P>','','2013-09-18','0');
INSERT INTO news_info VALUES('68','28','我们能发布哪些媒体','软文街','1','<P>　　很多企业在软文发布上，很纠结网络媒体该如何选择，软文街媒体库将国内网站进行横向和纵向的分类划分。方便企业进行媒体的选择。</P>\r\n<P>　　更多最新资源请联系客服。</P>','','2013-09-18','0');
INSERT INTO news_info VALUES('69','28','企业如何进行软文营销','软文街','1','<P>　　软文从2009年成就\"脑白金\"至今已经疯狂了5年，2009-2011年也是第一个软文高潮，各企业开始重视软文和积极模仿；从2012年\"清华清茶\" 的整版模式开始进入另一个高潮，专业软文写手和团队开始浮出水面。但是从2013年开始，软文的辉煌时期已过，进入了平稳期，软文的媒体也开始上涨，几乎与硬广告持平，使软文被迫开始创新。</P>\r\n<P>　　平面软文可开发潜力有限，随着网络和娱乐文化的兴盛，未来软文的发展方向是\"潜藏式广告\"??把软文的功夫运用到营销每个环节，类似\"大腕\"和\"天下无贼\"式的软性营销将是中国企业的必由之路。&nbsp; </P>\r\n<P>　　软文街为您提供全方位的软文服务，具体可加上我们企业QQ进行洽谈！</P>','','2013-09-18','0');
INSERT INTO news_info VALUES('71','29','关于软文发布后的有效期时间说明','软文街','1','<p style=\"text-align:left;text-indent:2em;\">1、99%情况下，在本平台发布的稿件是永久保存在新闻网上的；</p>\r\n<p style=\"text-align:left;text-indent:2em;\">2、如果稿件存在违法、负面、涉嫌虚假宣传、政治敏感内容及链接，因上级检查被新闻媒体编辑人员删稿的，本平台不予退款；</p>\r\n<p style=\"text-align:left;text-indent:2em;\">3、如果稿件内容及链接正规，但被新闻媒体编辑删稿的，本平台承诺如下：</p>\r\n<p style=\"text-align:left;text-indent:2em;\">（1）6个月内删稿的，可申请重发，重发不了可100%全额退款；</p>\r\n<p style=\"text-align:left;text-indent:2em;\">（2）6个月后删稿的，我们可协助与媒体沟通尽量恢复，但不再保证恢复或退款；</p>\r\n<p style=\"text-align:left;text-indent:2em;\">谢谢支持与理解！</p>','','2013-09-28','0');
INSERT INTO news_info VALUES('72','29','软文发布教程（一）','软文街','1','<p>　　1、咨询在线客服，获取最新的开户充值优惠活动，让您</p>\r\n<p>　　2、用户自行在<a href=\"http://www.sina.com.cn/reg.php\">http://www.sina.com.cn/reg.php</a> 或者联系客服代开账号，拥有属于您的核心代理商账户。</p>\r\n<p>　　3、用户可在后台<span style=\"color:#0070c0;\">【在线充值】</span>页面使用包括支付宝、财付通、或网银转账等方式进行充值，如有困难请联系在线客服为您解答。</p>\r\n<p>　　4、用户在后台<span style=\"color:#0070c0;\">【软文发布】</span>提交稿件，客服会迅速将您的稿件审核后提交到编辑部门，发布成功您在后台就能看到文字链接地址了。</p>\r\n<p>　　5、没有稿件怎么办？请注意<span style=\"color:#0070c0;\">【代写文章】</span>，用户录入自己网站相关资料和需要类型的稿件后，客服会会立刻将您的要求整理好发送到代写部，写完后您在后台就能查到文章了，如果觉得稿件不是很满意，请在后台<span style=\"color:#0070c0;\">【提交工单】</span>，输入相应的ID和不满意之处，客服会立刻给您回消息。</p>','','2013-10-19','0');

DROP TABLE IF EXISTS page_seo;
CREATE TABLE `page_seo` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `BigClass` varchar(255) DEFAULT NULL,
  `enBigClass` varchar(255) DEFAULT NULL,
  `Title` text,
  `enTitle` text,
  `KeyWords` text,
  `enKeyWords` text,
  `Descr` text,
  `enDescr` text,
  `paixu` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=gb2312;

INSERT INTO page_seo VALUES('1','会员注册','reg','会员注册','','会员注册','','会员注册','','1');
INSERT INTO page_seo VALUES('2','会员登录','login','会员登录','','会员登录','','会员登录','','2');
INSERT INTO page_seo VALUES('3','新闻中心','news','新闻中心','','新闻中心','','新闻中心','','3');
INSERT INTO page_seo VALUES('4','合作媒体','media','合作媒体','','合作媒体','','合作媒体','','4');
INSERT INTO page_seo VALUES('5','软文案例','anli','软文案例','','软文案例','','软文案例','','5');
INSERT INTO page_seo VALUES('6','软文价格','price','软文价格','','软文价格','','软文价格','','6');
INSERT INTO page_seo VALUES('7','软文套餐','taocan','软文套餐','','软文套餐','','软文套餐','','7');
INSERT INTO page_seo VALUES('8','软文代写','daixie','软文代写','','软文代写','','软文代写','','8');
INSERT INTO page_seo VALUES('9','联系我们','contact','联系我们','','联系我们','','联系我们','','9');

DROP TABLE IF EXISTS piclink_class;
CREATE TABLE `piclink_class` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `BigClass` varchar(255) DEFAULT NULL,
  `enBigClass` varchar(255) DEFAULT NULL,
  `paixu` int(11) DEFAULT NULL,
  `data` varchar(255) DEFAULT NULL,
  `propic` varchar(255) DEFAULT NULL,
  `linkurl` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=gb2312;

INSERT INTO piclink_class VALUES('38','红木船高端网络','','1','','','http://www.hongmuchuan.com/');

DROP TABLE IF EXISTS qunfa_info;
CREATE TABLE `qunfa_info` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `VipUser` varchar(255) DEFAULT NULL,
  `owner` varchar(255) DEFAULT NULL,
  `mid` int(11) DEFAULT '0',
  `order_id` varchar(255) DEFAULT NULL,
  `title` text,
  `medianame` text,
  `weburl` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT '0',
  `content` text,
  `reason` text,
  `dreason` text,
  `data` varchar(255) DEFAULT '',
  `fbtime` varchar(255) DEFAULT '',
  `flag` int(11) DEFAULT '0',
  `yn` int(11) DEFAULT '0',
  `dyn` int(11) DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=132 DEFAULT CHARSET=gb2312;

INSERT INTO qunfa_info VALUES('129','vip01','','175','2013101488140','妙手攒机 宏图三胞网络DIY装机挑战赛即将启动','新浪微博群发','','100','妙手攒机 宏图三胞网络DIY装机挑战赛即将启动','','','2013-10-14 08:14:33','','0','0','0');
INSERT INTO qunfa_info VALUES('130','vip01','','174','2013101488140','妙手攒机 宏图三胞网络DIY装机挑战赛即将启动','腾讯微博群发','http://www.sina.com.cn/','60','妙手攒机 宏图三胞网络DIY装机挑战赛即将启动','','','2013-10-14 08:14:33','2013-10-14 08:27:28','2','1','0');
INSERT INTO qunfa_info VALUES('131','vip01','','173','2013101488140','妙手攒机 宏图三胞网络DIY装机挑战赛即将启动','腾讯QQ群发','','30','妙手攒机 宏图三胞网络DIY装机挑战赛即将启动','腾讯封锁，群发不了。','','2013-10-14 08:14:33','2013-10-14 08:29:04','3','0','0');

DROP TABLE IF EXISTS ruanwen_info;
CREATE TABLE `ruanwen_info` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `VipUser` varchar(255) DEFAULT NULL,
  `owner` varchar(255) DEFAULT NULL,
  `mid` int(11) DEFAULT '0',
  `order_id` varchar(255) DEFAULT NULL,
  `title` text,
  `medianame` text,
  `weburl` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT '0',
  `content` text,
  `reason` text,
  `dreason` text,
  `data` varchar(255) DEFAULT '',
  `fbtime` varchar(255) DEFAULT '',
  `flag` int(11) DEFAULT '0',
  `yn` int(11) DEFAULT '0',
  `dyn` int(11) DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=129 DEFAULT CHARSET=gb2312;

INSERT INTO ruanwen_info VALUES('85','vip01','0','0','2013092127552','穿“哈特威”衬衫的男人','品牌世家','http://www.sina.com.cn','70','<p>　　美国人最后终于开始体会到买一套好的西装而被穿一件大量生产的廉价衬衫毁坏了整个效果，实在是一件愚蠢的事。因此在这个阶层的人群中，“哈特威</p><p>　　”衬衫就开始流行了。</p><p><br/></p><p>　　首先，“哈特威”衬衫耐穿性极长??这是多年的事了。其次，因为“哈特威”</p><p>　　剪裁??低斜度及“为顾客定制的”??衣领，使得您看起来更年轻、更高贵。</p><p>　　整件衬衣不惜工本的剪裁，因而使您更为“舒适”。</p><p><br/></p><p>　　下摆很长，可深入您的裤腰。钮扣是用珍珠母做成??非常大，也非常有男子气</p><p>　　。甚至缝纫上也存在着一种南北战争前的高雅。</p><p><br/></p><p>　　最重要的是“哈特威”使用从世界各角落进口的最有名的布匹来缝制他们的衬衫</p><p>　　??从英国来的棉毛混纺的斜纹布，从苏格兰奥斯特拉德地方来的毛织波纹绸，</p><p>　　从英属西印度群岛来的海岛棉，从印度来的手织绸，从英格兰曼彻斯特来的宽幅</p><p>　　细毛布，从巴黎来的亚麻细布，在穿了这么完美风格的衬衫，会使您得到众多的</p><p>　　内心满足。</p><p><br/></p><p>　　“哈特威”衬衫是缅因州的小城渥特威的一个小公司的虔诚的手艺人所缝制的。</p><p>　　他们老老小小的在那里工作了已整整114年。</p><p><br/></p><p>　　您如果想在离您最近的店家买到“哈特威”衬衫，请写张明信片到“G?F?哈特</p><p>　　威”缅因州?渥特威城，即复。</p>','不允许发敏感性文章。','','2013-09-21 04:19:48','','3','1','0');
INSERT INTO ruanwen_info VALUES('86','vip01','0','0','2013092127552','穿“哈特威”衬衫的男人','凤凰网-时尚','http://www.hongmuchuan.com','20','<p>　　美国人最后终于开始体会到买一套好的西装而被穿一件大量生产的廉价衬衫毁坏了整个效果，实在是一件愚蠢的事。因此在这个阶层的人群中，“哈特威</p><p>　　”衬衫就开始流行了。</p><p><br/></p><p>　　首先，“哈特威”衬衫耐穿性极长??这是多年的事了。其次，因为“哈特威”</p><p>　　剪裁??低斜度及“为顾客定制的”??衣领，使得您看起来更年轻、更高贵。</p><p>　　整件衬衣不惜工本的剪裁，因而使您更为“舒适”。</p><p><br/></p><p>　　下摆很长，可深入您的裤腰。钮扣是用珍珠母做成??非常大，也非常有男子气</p><p>　　。甚至缝纫上也存在着一种南北战争前的高雅。</p><p><br/></p><p>　　最重要的是“哈特威”使用从世界各角落进口的最有名的布匹来缝制他们的衬衫</p><p>　　??从英国来的棉毛混纺的斜纹布，从苏格兰奥斯特拉德地方来的毛织波纹绸，</p><p>　　从英属西印度群岛来的海岛棉，从印度来的手织绸，从英格兰曼彻斯特来的宽幅</p><p>　　细毛布，从巴黎来的亚麻细布，在穿了这么完美风格的衬衫，会使您得到众多的</p><p>　　内心满足。</p><p><br/></p><p>　　“哈特威”衬衫是缅因州的小城渥特威的一个小公司的虔诚的手艺人所缝制的。</p><p>　　他们老老小小的在那里工作了已整整114年。</p><p><br/></p><p>　　您如果想在离您最近的店家买到“哈特威”衬衫，请写张明信片到“G?F?哈特</p><p>　　威”缅因州?渥特威城，即复。</p>','','','2013-09-21 04:19:48','2013-09-25 08:57:57','2','1','0');
INSERT INTO ruanwen_info VALUES('87','admin','0','0','2013092259898','123123123','中国网-民企','','50','<p><br/>123123123123132</p>','','','2013-09-22 10:19:32','','0','0','0');
INSERT INTO ruanwen_info VALUES('88','admin','0','0','2013092226964','12313123','中工网','','50','<p><br/>123123123123123123123</p>','','','2013-09-22 10:20:36','','0','0','0');
INSERT INTO ruanwen_info VALUES('89','admin','0','0','2013092226964','12313123','中国网-民企','','50','<p><br/>123123123123123123123</p>','','','2013-09-22 10:20:36','','0','0','0');
INSERT INTO ruanwen_info VALUES('90','admin','0','0','2013092226964','12313123','中国建筑装饰网','','70','<p><br/>123123123123123123123</p>','','','2013-09-22 10:20:36','','0','0','0');
INSERT INTO ruanwen_info VALUES('91','admin','0','0','2013092226964','12313123','地宝网','','80','<p><br/>123123123123123123123</p>','','','2013-09-22 10:20:36','','0','0','0');
INSERT INTO ruanwen_info VALUES('92','admin','0','0','2013092226964','12313123','中国家电网','','80','<p><br/>123123123123123123123000</p>','','','2013-09-22 10:20:36','','1','0','0');
INSERT INTO ruanwen_info VALUES('93','vip01','0','0','2013092579175','穿“哈特威”衬衫的男人','汽车江湖网','','60','<p>　　美国人最后终于开始体会到买一套好的西装而被穿一件大量生产的廉价衬衫毁坏了整个效果，实在是一件愚蠢的事。因此在这个阶层的人群中，“哈特威</p><p>　　”衬衫就开始流行了。</p><p><br/></p><p>　　首先，“哈特威”衬衫耐穿性极长??这是多年的事了。其次，因为“哈特威”</p><p>　　剪裁??低斜度及“为顾客定制的”??衣领，使得您看起来更年轻、更高贵。</p><p>　　整件衬衣不惜工本的剪裁，因而使您更为“舒适”。</p><p><br/></p><p>　　下摆很长，可深入您的裤腰。钮扣是用珍珠母做成??非常大，也非常有男子气</p><p>　　。甚至缝纫上也存在着一种南北战争前的高雅。</p><p><br/></p><p>　　最重要的是“哈特威”使用从世界各角落进口的最有名的布匹来缝制他们的衬衫</p><p>　　??从英国来的棉毛混纺的斜纹布，从苏格兰奥斯特拉德地方来的毛织波纹绸，</p><p>　　从英属西印度群岛来的海岛棉，从印度来的手织绸，从英格兰曼彻斯特来的宽幅</p><p>　　细毛布，从巴黎来的亚麻细布，在穿了这么完美风格的衬衫，会使您得到众多的</p><p>　　内心满足。</p><p><br/></p><p>　　“哈特威”衬衫是缅因州的小城渥特威的一个小公司的虔诚的手艺人所缝制的。</p><p>　　他们老老小小的在那里工作了已整整114年。</p><p><br/></p><p>　　您如果想在离您最近的店家买到“哈特威”衬衫，请写张明信片到“G?F?哈特</p><p>　　威”缅因州?渥特威城，即复。</p>','','','2013-09-25 10:13:37','','0','0','1');
INSERT INTO ruanwen_info VALUES('94','vip01','0','0','2013092631305','穿“哈特威”衬衫的男人','汽车江湖网','','60','<p>　　美国人最后终于开始体会到买一套好的西装而被穿一件大量生产的廉价衬衫毁坏了整个效果，实在是一件愚蠢的事。因此在这个阶层的人群中，“哈特威</p><p>　　”衬衫就开始流行了。</p><p><br/></p><p>　　首先，“哈特威”衬衫耐穿性极长??这是多年的事了。其次，因为“哈特威”</p><p>　　剪裁??低斜度及“为顾客定制的”??衣领，使得您看起来更年轻、更高贵。</p><p>　　整件衬衣不惜工本的剪裁，因而使您更为“舒适”。</p><p><br/></p><p>　　下摆很长，可深入您的裤腰。钮扣是用珍珠母做成??非常大，也非常有男子气</p><p>　　。甚至缝纫上也存在着一种南北战争前的高雅。</p><p><br/></p><p>　　最重要的是“哈特威”使用从世界各角落进口的最有名的布匹来缝制他们的衬衫</p><p>　　??从英国来的棉毛混纺的斜纹布，从苏格兰奥斯特拉德地方来的毛织波纹绸，</p><p>　　从英属西印度群岛来的海岛棉，从印度来的手织绸，从英格兰曼彻斯特来的宽幅</p><p>　　细毛布，从巴黎来的亚麻细布，在穿了这么完美风格的衬衫，会使您得到众多的</p><p>　　内心满足。</p><p><br/></p><p>　　“哈特威”衬衫是缅因州的小城渥特威的一个小公司的虔诚的手艺人所缝制的。</p><p>　　他们老老小小的在那里工作了已整整114年。</p><p><br/></p><p>　　您如果想在离您最近的店家买到“哈特威”衬衫，请写张明信片到“G?F?哈特</p><p>　　威”缅因州?渥特威城，即复。</p>','','','2013-09-26 02:16:24','','1','0','0');
INSERT INTO ruanwen_info VALUES('95','vip01','0','0','2013092771014','穿“哈特威”衬衫的男人','中国青年网-生活','','70','<p>　　美国人最后终于开始体会到买一套好的西装而被穿一件大量生产的廉价衬衫毁坏了整个效果，实在是一件愚蠢的事。因此在这个阶层的人群中，“哈特威</p><p>　　”衬衫就开始流行了。</p><p><br/></p><p>　　首先，“哈特威”衬衫耐穿性极长??这是多年的事了。其次，因为“哈特威”</p><p>　　剪裁??低斜度及“为顾客定制的”??衣领，使得您看起来更年轻、更高贵。</p><p>　　整件衬衣不惜工本的剪裁，因而使您更为“舒适”。</p><p><br/></p><p>　　下摆很长，可深入您的裤腰。钮扣是用珍珠母做成??非常大，也非常有男子气</p><p>　　。甚至缝纫上也存在着一种南北战争前的高雅。</p><p><br/></p><p>　　最重要的是“哈特威”使用从世界各角落进口的最有名的布匹来缝制他们的衬衫</p><p>　　??从英国来的棉毛混纺的斜纹布，从苏格兰奥斯特拉德地方来的毛织波纹绸，</p><p>　　从英属西印度群岛来的海岛棉，从印度来的手织绸，从英格兰曼彻斯特来的宽幅</p><p>　　细毛布，从巴黎来的亚麻细布，在穿了这么完美风格的衬衫，会使您得到众多的</p><p>　　内心满足。</p><p><br/></p><p>　　“哈特威”衬衫是缅因州的小城渥特威的一个小公司的虔诚的手艺人所缝制的。</p><p>　　他们老老小小的在那里工作了已整整114年。</p><p><br/></p><p>　　您如果想在离您最近的店家买到“哈特威”衬衫，请写张明信片到“G?F?哈特</p><p>　　威”缅因州?渥特威城，即复。</p>','','','2013-09-27 04:41:01','','0','0','0');
INSERT INTO ruanwen_info VALUES('96','vip01','0','0','2013092760071','test','中青在线','','80','<p>飞阿斯蒂芬</p>','','','2013-09-27 04:42:05','','0','0','0');
INSERT INTO ruanwen_info VALUES('97','vip01','0','0','2013092760071','test','中国网-民企','','50','<p>飞阿斯蒂芬</p>','','','2013-09-27 04:42:05','','0','0','0');
INSERT INTO ruanwen_info VALUES('98','vip02','0','0','2013092773966','放大师傅','中国青年网-生活','http://www.sina.com.cn','70','<p>发挥个人啊</p>','不允许发敏感信息。','','2013-09-27 05:02:00','','3','1','0');
INSERT INTO ruanwen_info VALUES('99','vip02','0','0','2013092773966','放大师傅','中国网-民企','','50','<p>发挥个人啊！超乎正常人的水准</p>','','','2013-09-27 05:02:00','','0','0','1');
INSERT INTO ruanwen_info VALUES('100','vip04','0','0','2013092791343','fabuyit','中国经济网-时尚','http://www.sina.com.cn','70','<p>fdsf&nbsp;</p>','','','2013-09-27 05:10:55','','2','1','0');
INSERT INTO ruanwen_info VALUES('101','vip04','0','0','2013092791343','fabuyit','凤凰网-时尚','','20','<p>fdsf&nbsp;</p>','','','2013-09-27 05:10:55','','0','0','0');
INSERT INTO ruanwen_info VALUES('102','vip04','0','0','2013092719345','fabuyit','TOM-风尚','','50','<p>fdsf&nbsp;</p>','','','2013-09-27 05:11:41','','0','0','0');
INSERT INTO ruanwen_info VALUES('103','admin','0','0','2013092861583','穿“哈特威”衬衫的男人','中工网','','10','　　美国人最后终于开始体会到买一套好的西装而被穿一件大量生产的廉价衬衫毁坏了整个效果，实在是一件愚蠢的事。因此在这个阶层的人群中，“哈特威”衬衫就开始流行了。\r\n\r\n\r\n\r\n\r\n　　首先，“哈特威”衬衫耐穿性极长??这是多年的事了。其次，因为“哈特威”剪裁低斜度及“为顾客定制的”??衣领，使得您看起来更年轻、更高贵。\r\n\r\n　　整件衬衣不惜工本的剪裁，因而使您更为“舒适”。\r\n\r\n\r\n\r\n\r\n　　下摆很长，可深入您的裤腰。钮扣是用珍珠母做成??非常大，也非常有男子气。甚至缝纫上也存在着一种南北战争前的高雅。\r\n\r\n\r\n\r\n\r\n　　最重要的是“哈特威”使用从世界各角落进口的最有名的布匹来缝制他们的衬衫从英国来的棉毛混纺的斜纹布，从苏格兰奥斯特拉德地方来的毛织波纹绸，从英属西印度群岛来的海岛棉，从印度来的手织绸，从英格兰曼彻斯特来的宽幅\r\n\r\n　　细毛布，从巴黎来的亚麻细布，在穿了这么完美风格的衬衫，会使您得到众多的内心满足。\r\n\r\n\r\n\r\n\r\n　　“哈特威”衬衫是缅因州的小城渥特威的一个小公司的虔诚的手艺人所缝制的。他们老老小小的在那里工作了已整整114年。\r\n\r\n\r\n\r\n\r\n　　您如果想在离您最近的店家买到“哈特威”衬衫，请写张明信片到“哈特威”缅因州?渥特威城，即复。\r\n','','','2013-09-28 02:42:53','','1','0','0');
INSERT INTO ruanwen_info VALUES('104','admin','0','0','2013092821038','穿“哈特威”衬衫的男人','中国工业网','','10','<p>　　美国人最后终于开始体会到买一套好的西装而被穿一件大量生产的廉价衬衫毁坏了整个效果，实在是一件愚蠢的事。因此在这个阶层的人群中，“哈特威”衬衫就开始流行了。</p>\r\n<p><br />\r\n</p>\r\n<p>　　首先，“哈特威”衬衫耐穿性极长??这是多年的事了。其次，因为“哈特威”剪裁低斜度及“为顾客定制的”??衣领，使得您看起来更年轻、更高贵。</p>\r\n<p>　　整件衬衣不惜工本的剪裁，因而使您更为“舒适”。</p>\r\n<p><br />\r\n</p>\r\n<p>　　下摆很长，可深入您的裤腰。钮扣是用珍珠母做成??非常大，也非常有男子气。甚至缝纫上也存在着一种南北战争前的高雅。</p>\r\n<p><br />\r\n</p>\r\n<p>　　最重要的是“哈特威”使用从世界各角落进口的最有名的布匹来缝制他们的衬衫从英国来的棉毛混纺的斜纹布，从苏格兰奥斯特拉德地方来的毛织波纹绸，从英属西印度群岛来的海岛棉，从印度来的手织绸，从英格兰曼彻斯特来的宽幅</p>\r\n<p>　　细毛布，从巴黎来的亚麻细布，在穿了这么完美风格的衬衫，会使您得到众多的内心满足。</p>\r\n<p><br />\r\n</p>\r\n<p>　　“哈特威”衬衫是缅因州的小城渥特威的一个小公司的虔诚的手艺人所缝制的。他们老老小小的在那里工作了已整整114年。</p>\r\n<p><br />\r\n</p>\r\n<p>　　您如果想在离您最近的店家买到“哈特威”衬衫，请写张明信片到“哈特威”缅因州?渥特威城，即复。</p>','','','2013-09-28 04:08:27','','0','0','0');
INSERT INTO ruanwen_info VALUES('105','vip05','vip02','0','2013092910928','好鞋网：购鞋新选择，低价买好鞋','中国日报网-消费','','45','<span style=\"color:#333333;font-family:宋体;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\">　　网购是新一代年轻人喜欢的购物方式，在买鞋这个方面也是一样。面对网络满目琳琅鞋商，但是相信有的消费者也发现了，绝大部分的地方的产品都有共同特点，要么漫天要价，要么质量低廉，那么消费者怎么才能买到物美价廉的品牌鞋呢?笔者了解到近期在专业的B2C鞋商中有一匹黑马股映入眼帘，好鞋网www.haoxie.net成立仅仅一年之际成功跻身行业5强，其中“品牌折扣区”备受消费者喜爱，产品真正的做到物美价廉穿好鞋!与好鞋网的企业文化不谋而合：“打造一流的好鞋购物平台”。它能够给我们全新的购鞋体验，全新的消费感受。</span><br style=\"color:#333333;font-family:宋体;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\" />\r\n<br style=\"color:#333333;font-family:宋体;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\" />\r\n<span style=\"color:#333333;font-family:宋体;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\">　　好鞋网www.haoxie.net在2011年成立，经历过一年的发展，已然赢得了无数顾客群体的青睐。这主要是放心鞋网针对顾客的商业模式与以往完全不同：非常知名的品牌、正规品质鞋源渠道、吸引力强的折扣。这就是好鞋网强有力吸引顾客的方式，也是为什么购鞋的顾客会选择好鞋网站的原因。便宜没好鞋?那就上好鞋网，超低的折扣买好鞋!现在好鞋网的平台正在颠覆这个长久的观念。</span><br style=\"color:#333333;font-family:宋体;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\" />\r\n<br style=\"color:#333333;font-family:宋体;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\" />\r\n<span style=\"color:#333333;font-family:宋体;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\">　　这个时代人们的生活方式已然发生了很大改变，以往的实体店的销售方式不再流行，真正走在前沿的乃是网购，网购是藏着商机的地方。但是我们也都知道，现在很多的网购场所竞争的力度也是相当的激烈的，而要在其中看到转机，渠道是必不可少的，而现在受到消费者青睐的好鞋网www.haoxie.net脱颖而出，在众多的消费者心目中已经树立了良好的形象，是我们买鞋子的最好去处。来源浙江在线)</span>','','','2013-09-29 06:50:01','','0','0','0');
INSERT INTO ruanwen_info VALUES('106','vip05','vip02','0','2013092910928','好鞋网：购鞋新选择，低价买好鞋','中国网-民企','http://www.hongmuchuan.com/','50','<span style=\"color:#333333;font-family:宋体;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\">　　网购是新一代年轻人喜欢的购物方式，在买鞋这个方面也是一样。面对网络满目琳琅鞋商，但是相信有的消费者也发现了，绝大部分的地方的产品都有共同特点，要么漫天要价，要么质量低廉，那么消费者怎么才能买到物美价廉的品牌鞋呢?笔者了解到近期在专业的B2C鞋商中有一匹黑马股映入眼帘，好鞋网www.haoxie.net成立仅仅一年之际成功跻身行业5强，其中“品牌折扣区”备受消费者喜爱，产品真正的做到物美价廉穿好鞋!与好鞋网的企业文化不谋而合：“打造一流的好鞋购物平台”。它能够给我们全新的购鞋体验，全新的消费感受。</span><br style=\"color:#333333;font-family:宋体;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\" />\r\n<br style=\"color:#333333;font-family:宋体;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\" />\r\n<span style=\"color:#333333;font-family:宋体;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\">　　好鞋网www.haoxie.net在2011年成立，经历过一年的发展，已然赢得了无数顾客群体的青睐。这主要是放心鞋网针对顾客的商业模式与以往完全不同：非常知名的品牌、正规品质鞋源渠道、吸引力强的折扣。这就是好鞋网强有力吸引顾客的方式，也是为什么购鞋的顾客会选择好鞋网站的原因。便宜没好鞋?那就上好鞋网，超低的折扣买好鞋!现在好鞋网的平台正在颠覆这个长久的观念。</span><br style=\"color:#333333;font-family:宋体;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\" />\r\n<br style=\"color:#333333;font-family:宋体;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\" />\r\n<span style=\"color:#333333;font-family:宋体;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\">　　这个时代人们的生活方式已然发生了很大改变，以往的实体店的销售方式不再流行，真正走在前沿的乃是网购，网购是藏着商机的地方。但是我们也都知道，现在很多的网购场所竞争的力度也是相当的激烈的，而要在其中看到转机，渠道是必不可少的，而现在受到消费者青睐的好鞋网www.haoxie.net脱颖而出，在众多的消费者心目中已经树立了良好的形象，是我们买鞋子的最好去处。来源浙江在线)</span>','','','2013-09-29 06:50:01','2013-09-29 09:27:16','2','0','0');
INSERT INTO ruanwen_info VALUES('107','vip05','vip02','0','2013092990375','好鞋网：购鞋新选择，低价买好鞋','汽车江湖网','http://www.sina.com.cn','80','<span style=\"color:#333333;font-family:宋体;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\">　　网购是新一代年轻人喜欢的购物方式，在买鞋这个方面也是一样。面对网络满目琳琅鞋商，但是相信有的消费者也发现了，绝大部分的地方的产品都有共同特点，要么漫天要价，要么质量低廉，那么消费者怎么才能买到物美价廉的品牌鞋呢?笔者了解到近期在专业的B2C鞋商中有一匹黑马股映入眼帘，好鞋网www.haoxie.net成立仅仅一年之际成功跻身行业5强，其中“品牌折扣区”备受消费者喜爱，产品真正的做到物美价廉穿好鞋!与好鞋网的企业文化不谋而合：“打造一流的好鞋购物平台”。它能够给我们全新的购鞋体验，全新的消费感受。</span><br style=\"color:#333333;font-family:宋体;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\" />\r\n<br style=\"color:#333333;font-family:宋体;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\" />\r\n<span style=\"color:#333333;font-family:宋体;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\">　　好鞋网www.haoxie.net在2011年成立，经历过一年的发展，已然赢得了无数顾客群体的青睐。这主要是放心鞋网针对顾客的商业模式与以往完全不同：非常知名的品牌、正规品质鞋源渠道、吸引力强的折扣。这就是好鞋网强有力吸引顾客的方式，也是为什么购鞋的顾客会选择好鞋网站的原因。便宜没好鞋?那就上好鞋网，超低的折扣买好鞋!现在好鞋网的平台正在颠覆这个长久的观念。</span><br style=\"color:#333333;font-family:宋体;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\" />\r\n<br style=\"color:#333333;font-family:宋体;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\" />\r\n<span style=\"color:#333333;font-family:宋体;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\">　　这个时代人们的生活方式已然发生了很大改变，以往的实体店的销售方式不再流行，真正走在前沿的乃是网购，网购是藏着商机的地方。但是我们也都知道，现在很多的网购场所竞争的力度也是相当的激烈的，而要在其中看到转机，渠道是必不可少的，而现在受到消费者青睐的好鞋网www.haoxie.net脱颖而出，在众多的消费者心目中已经树立了良好的形象，是我们买鞋子的最好去处。来源浙江在线)</span>','','','2013-09-29 07:23:32','2013-09-29 09:25:14','2','1','0');
INSERT INTO ruanwen_info VALUES('108','vip05','vip02','0','2013092990375','好鞋网：购鞋新选择，低价买好鞋','中国新闻日报网','','150','<span style=\"color:#333333;font-family:宋体;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\">　　网购是新一代年轻人喜欢的购物方式，在买鞋这个方面也是一样。面对网络满目琳琅鞋商，但是相信有的消费者也发现了，绝大部分的地方的产品都有共同特点，要么漫天要价，要么质量低廉，那么消费者怎么才能买到物美价廉的品牌鞋呢?笔者了解到近期在专业的B2C鞋商中有一匹黑马股映入眼帘，好鞋网www.haoxie.net成立仅仅一年之际成功跻身行业5强，其中“品牌折扣区”备受消费者喜爱，产品真正的做到物美价廉穿好鞋!与好鞋网的企业文化不谋而合：“打造一流的好鞋购物平台”。它能够给我们全新的购鞋体验，全新的消费感受。</span><br style=\"color:#333333;font-family:宋体;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\" />\r\n<br style=\"color:#333333;font-family:宋体;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\" />\r\n<span style=\"color:#333333;font-family:宋体;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\">　　好鞋网www.haoxie.net在2011年成立，经历过一年的发展，已然赢得了无数顾客群体的青睐。这主要是放心鞋网针对顾客的商业模式与以往完全不同：非常知名的品牌、正规品质鞋源渠道、吸引力强的折扣。这就是好鞋网强有力吸引顾客的方式，也是为什么购鞋的顾客会选择好鞋网站的原因。便宜没好鞋?那就上好鞋网，超低的折扣买好鞋!现在好鞋网的平台正在颠覆这个长久的观念。</span><br style=\"color:#333333;font-family:宋体;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\" />\r\n<br style=\"color:#333333;font-family:宋体;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\" />\r\n<span style=\"color:#333333;font-family:宋体;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\">　　这个时代人们的生活方式已然发生了很大改变，以往的实体店的销售方式不再流行，真正走在前沿的乃是网购，网购是藏着商机的地方。但是我们也都知道，现在很多的网购场所竞争的力度也是相当的激烈的，而要在其中看到转机，渠道是必不可少的，而现在受到消费者青睐的好鞋网www.haoxie.net脱颖而出，在众多的消费者心目中已经树立了良好的形象，是我们买鞋子的最好去处。来源浙江在线)</span>','','','2013-09-29 07:23:32','','1','0','0');
INSERT INTO ruanwen_info VALUES('109','admin','','0','2013092983583','好鞋网：购鞋新选择，低价买好鞋','中国新闻日报网','','130','<span style=\"color:#333333;font-family:宋体;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\">　　网购是新一代年轻人喜欢的购物方式，在买鞋这个方面也是一样。面对网络满目琳琅鞋商，但是相信有的消费者也发现了，绝大部分的地方的产品都有共同特点，要么漫天要价，要么质量低廉，那么消费者怎么才能买到物美价廉的品牌鞋呢?笔者了解到近期在专业的B2C鞋商中有一匹黑马股映入眼帘，好鞋网www.haoxie.net成立仅仅一年之际成功跻身行业5强，其中“品牌折扣区”备受消费者喜爱，产品真正的做到物美价廉穿好鞋!与好鞋网的企业文化不谋而合：“打造一流的好鞋购物平台”。它能够给我们全新的购鞋体验，全新的消费感受。</span><br style=\"color:#333333;font-family:宋体;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\" />\r\n<br style=\"color:#333333;font-family:宋体;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\" />\r\n<span style=\"color:#333333;font-family:宋体;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\">　　好鞋网www.haoxie.net在2011年成立，经历过一年的发展，已然赢得了无数顾客群体的青睐。这主要是放心鞋网针对顾客的商业模式与以往完全不同：非常知名的品牌、正规品质鞋源渠道、吸引力强的折扣。这就是好鞋网强有力吸引顾客的方式，也是为什么购鞋的顾客会选择好鞋网站的原因。便宜没好鞋?那就上好鞋网，超低的折扣买好鞋!现在好鞋网的平台正在颠覆这个长久的观念。</span><br style=\"color:#333333;font-family:宋体;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\" />\r\n<br style=\"color:#333333;font-family:宋体;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\" />\r\n<span style=\"color:#333333;font-family:宋体;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\">　　这个时代人们的生活方式已然发生了很大改变，以往的实体店的销售方式不再流行，真正走在前沿的乃是网购，网购是藏着商机的地方。但是我们也都知道，现在很多的网购场所竞争的力度也是相当的激烈的，而要在其中看到转机，渠道是必不可少的，而现在受到消费者青睐的好鞋网www.haoxie.net脱颖而出，在众多的消费者心目中已经树立了良好的形象，是我们买鞋子的最好去处。来源浙江在线)</span>','','','2013-09-29 07:45:12','','0','0','0');
INSERT INTO ruanwen_info VALUES('110','admin','','0','2013092919654','好鞋网：购鞋新选择，低价买好鞋','中国新闻日报网','','130','<span style=\"color:#333333;font-family:宋体;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\">　　网购是新一代年轻人喜欢的购物方式，在买鞋这个方面也是一样。面对网络满目琳琅鞋商，但是相信有的消费者也发现了，绝大部分的地方的产品都有共同特点，要么漫天要价，要么质量低廉，那么消费者怎么才能买到物美价廉的品牌鞋呢?笔者了解到近期在专业的B2C鞋商中有一匹黑马股映入眼帘，好鞋网www.haoxie.net成立仅仅一年之际成功跻身行业5强，其中“品牌折扣区”备受消费者喜爱，产品真正的做到物美价廉穿好鞋!与好鞋网的企业文化不谋而合：“打造一流的好鞋购物平台”。它能够给我们全新的购鞋体验，全新的消费感受。</span><br style=\"color:#333333;font-family:宋体;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\" />\r\n<br style=\"color:#333333;font-family:宋体;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\" />\r\n<span style=\"color:#333333;font-family:宋体;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\">　　好鞋网www.haoxie.net在2011年成立，经历过一年的发展，已然赢得了无数顾客群体的青睐。这主要是放心鞋网针对顾客的商业模式与以往完全不同：非常知名的品牌、正规品质鞋源渠道、吸引力强的折扣。这就是好鞋网强有力吸引顾客的方式，也是为什么购鞋的顾客会选择好鞋网站的原因。便宜没好鞋?那就上好鞋网，超低的折扣买好鞋!现在好鞋网的平台正在颠覆这个长久的观念。</span><br style=\"color:#333333;font-family:宋体;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\" />\r\n<br style=\"color:#333333;font-family:宋体;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\" />\r\n<span style=\"color:#333333;font-family:宋体;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\">　　这个时代人们的生活方式已然发生了很大改变，以往的实体店的销售方式不再流行，真正走在前沿的乃是网购，网购是藏着商机的地方。但是我们也都知道，现在很多的网购场所竞争的力度也是相当的激烈的，而要在其中看到转机，渠道是必不可少的，而现在受到消费者青睐的好鞋网www.haoxie.net脱颖而出，在众多的消费者心目中已经树立了良好的形象，是我们买鞋子的最好去处。来源浙江在线)</span>','','','2013-09-29 07:59:32','','0','0','0');
INSERT INTO ruanwen_info VALUES('111','admin','','0','2013092971270','穿“哈特威”衬衫的男人','汽车江湖网','http://www.sina.com.cn','30','1','','','2013-09-29 08:13:19','2013-09-29 10:01:56','2','1','0');
INSERT INTO ruanwen_info VALUES('112','admin','vip02','0','2013092919107','妙手攒机 宏图三胞网络DIY装机挑战赛即将启动','中国新闻日报网','','130','','','','2013-09-29 08:19:30','','0','0','0');
INSERT INTO ruanwen_info VALUES('113','admin','vip02','0','2013092919107','妙手攒机 宏图三胞网络DIY装机挑战赛即将启动','汽车江湖网','','30','','不允许发敏感文章内容。','','2013-09-29 08:19:30','2013-09-29 10:00:48','3','0','0');
INSERT INTO ruanwen_info VALUES('114','vip01','','140','2013092960067','代写宣传公司宣传性软文','中国新闻日报网','','150','','内容含攻击性语言，不允许发。','','2013-09-29 08:32:55','2013-09-29 10:05:49','3','0','0');
INSERT INTO ruanwen_info VALUES('115','admin','vip02','140','2013092941802','12313123','中国新闻日报网','','130','','不能发此类文章。','','2013-09-29 08:46:56','2013-09-29 10:06:43','3','0','0');
INSERT INTO ruanwen_info VALUES('116','vip01','vip02','140','2013092933453','放大师傅','中国新闻日报网','','150','','','','2013-09-29 08:47:25','','0','0','0');
INSERT INTO ruanwen_info VALUES('117','vip05','vip02','140','2013092931071','ok0410410','中国新闻日报网','','200','','','','2013-09-29 08:48:10','','0','0','0');
INSERT INTO ruanwen_info VALUES('118','admin','vip02','133','2013092918517','穿衬衫的男人','汽车江湖网','','30','','','','2013-09-29 09:08:55','','0','0','0');
INSERT INTO ruanwen_info VALUES('119','admin','vip02','140','2013092918517','穿衬衫的男人','中国新闻日报网','','130','','','','2013-09-29 09:08:55','','0','0','0');
INSERT INTO ruanwen_info VALUES('120','admin','vip02','133','2013092946142','穿衬衫的男人','汽车江湖网','','30','','','','2013-09-29 09:10:34','','0','0','0');
INSERT INTO ruanwen_info VALUES('121','vip01','vip02','133','2013092912298','放大师傅','汽车江湖网','','60','','','','2013-09-29 09:11:19','','0','0','0');
INSERT INTO ruanwen_info VALUES('122','vip01','vip02','140','2013092912298','放大师傅','中国新闻日报网','','150','','','','2013-09-29 09:11:19','','0','0','0');
INSERT INTO ruanwen_info VALUES('123','vip01','vip02','133','2013092928704','放大师傅','汽车江湖网','','60','','','','2013-09-29 09:11:37','','1','0','0');
INSERT INTO ruanwen_info VALUES('124','vip05','vip02','133','2013092992320','代写宣传软文','汽车江湖网','http://www.hongmuchuan.com','120','','','','2013-09-29 09:12:27','2013-10-04 08:22:58','2','1','0');
INSERT INTO ruanwen_info VALUES('125','vip05','vip02','140','2013092992320','代写宣传软文','中国新闻日报网','http://www.hongmuchuan.com','200','','','','2013-09-29 09:12:27','2013-10-04 08:05:40','2','1','0');
INSERT INTO ruanwen_info VALUES('126','vip05','vip02','133','2013092924883','代写宣传软文','汽车江湖网','http://www.1451.com/','120','','','','2013-09-29 09:12:47','2013-10-04 08:17:31','2','1','0');
INSERT INTO ruanwen_info VALUES('127','admin','','146','2014012178334','123','BC24234','http://www.123.com/','30','','','','2014-01-21 07:49:44','2014-01-21 07:53:10','2','0','0');
INSERT INTO ruanwen_info VALUES('128','admin','','146','2014012190527','134564','BC24234','http://www.123.com/','30','','','','2014-01-21 08:13:51','2014-01-21 20:17:29','2','0','0');

DROP TABLE IF EXISTS shequ_info;
CREATE TABLE `shequ_info` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `VipUser` varchar(255) DEFAULT NULL,
  `owner` varchar(255) DEFAULT NULL,
  `mid` int(11) DEFAULT '0',
  `order_id` varchar(255) DEFAULT NULL,
  `title` text,
  `medianame` text,
  `weburl` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT '0',
  `content` text,
  `reason` text,
  `dreason` text,
  `data` varchar(255) DEFAULT '',
  `fbtime` varchar(255) DEFAULT '',
  `flag` int(11) DEFAULT '0',
  `yn` int(11) DEFAULT '0',
  `dyn` int(11) DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=131 DEFAULT CHARSET=gb2312;

INSERT INTO shequ_info VALUES('129','vip01','','154','2013101498868','好鞋网：购鞋新选择，低价买好鞋','腾讯社区','','120','好鞋网：购鞋新选择，低价买好鞋','内容违规','','2013-10-14 05:06:57','2013-10-14 06:08:49','3','0','0');
INSERT INTO shequ_info VALUES('130','vip01','','153','2013101498868','好鞋网：购鞋新选择，低价买好鞋','新浪社区','http://www.345234.com/','80','好鞋网：购鞋新选择，低价买好鞋','','','2013-10-14 05:06:57','2013-10-14 06:07:51','2','1','0');

DROP TABLE IF EXISTS shuijun_info;
CREATE TABLE `shuijun_info` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `VipUser` varchar(255) DEFAULT NULL,
  `owner` varchar(255) DEFAULT NULL,
  `mid` int(11) DEFAULT '0',
  `order_id` varchar(255) DEFAULT NULL,
  `title` text,
  `medianame` text,
  `weburl` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT '0',
  `content` text,
  `reason` text,
  `dreason` text,
  `data` varchar(255) DEFAULT '',
  `fbtime` varchar(255) DEFAULT '',
  `flag` int(11) DEFAULT '0',
  `yn` int(11) DEFAULT '0',
  `dyn` int(11) DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=131 DEFAULT CHARSET=gb2312;

INSERT INTO shuijun_info VALUES('129','vip01','','164','2013101465014','代写宣传公司宣传性软文','腾讯普通水军','','120','代写宣传公司宣传性软文','内容不符合规定。','','2013-10-14 07:07:11','2013-10-14 07:19:35','3','0','0');
INSERT INTO shuijun_info VALUES('130','vip01','','162','2013101465014','代写宣传公司宣传性软文','新浪普通水军','http://www.qq.com/','180','代写宣传公司宣传性软文','','','2013-10-14 07:07:11','2013-10-14 07:18:50','2','1','0');

DROP TABLE IF EXISTS tixian;
CREATE TABLE `tixian` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `VipUser` varchar(255) DEFAULT NULL,
  `order_id` varchar(255) DEFAULT NULL,
  `title` text,
  `accnumber` varchar(255) DEFAULT NULL,
  `jine` int(11) DEFAULT '0',
  `content` text,
  `data` varchar(255) DEFAULT '',
  `edata` varchar(255) DEFAULT NULL,
  `flag` int(11) DEFAULT '0',
  `yn` int(11) DEFAULT '0',
  `dyn` int(11) DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=94 DEFAULT CHARSET=gb2312;

INSERT INTO tixian VALUES('82','vip02','2013100285371','提现申请','googlesem@foxmail.com','500','款项已转指定支付宝账号，请注意及时查收。','2013-10-02 03:09:17','2013-10-16 05:52:57','2','0','0');
INSERT INTO tixian VALUES('83','vip02','2013100221609','提现申请','5045222@qq.com','300','款项已转指定支付宝账号，请注意及时查收。','2013-10-02 03:48:54','2013-10-10 20:34:34','2','1','0');
INSERT INTO tixian VALUES('84','vip02','2013100293232','提现申请','5515122@qq.com','380','','2013-10-02 04:50:29','','1','0','0');
INSERT INTO tixian VALUES('85','vip02','2013101651127','提现申请','123543@126.com','100','款项已转指定支付宝账号，请注意及时查收。','2013-10-16 03:03:18','2013-10-16 05:34:34','2','0','0');
INSERT INTO tixian VALUES('86','vip02','2013101641931','提现申请','5045222@qq.com','100','','2013-10-16 04:55:00','','0','0','0');
INSERT INTO tixian VALUES('87','vip02','2013101633365','提现申请','5045222@qq.com','100','','2013-10-16 05:09:25','','0','0','0');
INSERT INTO tixian VALUES('88','vip02','2013102169265','提现申请','5424040420','10','','2013-10-21 10:26:23','','0','0','0');
INSERT INTO tixian VALUES('89','vip02','2013102132310','提现申请','sdfsdgdsg','10','','2013-10-21 10:26:42','','0','0','0');
INSERT INTO tixian VALUES('90','vip02','2013102141530','提现申请','123543@126.com','10','','2013-10-21 10:26:59','','0','0','0');
INSERT INTO tixian VALUES('91','vip02','2013102166642','提现申请','123543@126.com','10','','2013-10-21 10:26:59','','0','0','0');
INSERT INTO tixian VALUES('92','vip02','2013102120623','提现申请','5045222@qq.com','10','','2013-10-21 10:27:31','','0','0','0');
INSERT INTO tixian VALUES('93','vip02','2013102137523','提现申请','ldl-45545@126.com','10','','2013-10-21 10:28:03','','0','0','0');

DROP TABLE IF EXISTS user;
CREATE TABLE `user` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `VipUser` varchar(255) DEFAULT NULL,
  `VipPass` varchar(255) DEFAULT NULL,
  `medianame` text,
  `qq` varchar(255) DEFAULT NULL,
  `dianhua` varchar(255) DEFAULT NULL,
  `myemail` varchar(255) DEFAULT NULL,
  `weburl` varchar(255) DEFAULT NULL,
  `flag` int(11) DEFAULT '0',
  `ip` varchar(255) DEFAULT NULL,
  `regtime` varchar(255) DEFAULT NULL,
  `data` varchar(255) DEFAULT NULL,
  `yue` float DEFAULT '0',
  `tyue` float DEFAULT '0',
  `headpic` varchar(255) DEFAULT '../images/headpic.gif',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=gb2312;

INSERT INTO user VALUES('1','vip01','e10adc3949ba59abbe56e057f20f883e','','2245849708','13261853069','2245849708@qq.com','http://www.hongmuchuan.com','1','127.0.0.1','2013-09-18 02:08:36','2014-01-23 09:40:07','317','0','../upload/headpic/1380287708.bmp');
INSERT INTO user VALUES('2','vip02','e10adc3949ba59abbe56e057f20f883e','','','','','','2','127.0.0.1','2013-09-18 02:08:36','2014-01-23 09:40:38','780','530','../images/headpic.gif');
INSERT INTO user VALUES('3','vip03','e10adc3949ba59abbe56e057f20f883e','','50652132','13261853069','sybase188@126.com','http://www.hongmuchuan.com','2','127.0.0.1','2013-09-18 02:08:36','2014-01-22 08:15:41','500','0','../images/headpic.gif');
INSERT INTO user VALUES('8','vip06','e10adc3949ba59abbe56e057f20f883e','','245554121','1312045120','vip06@qq.com','http://www.13568454.com','3','127.0.0.1','2013-09-28 07:10:54','2013-09-28 07:11:23','0','0','../images/headpic.gif');
INSERT INTO user VALUES('4','vip04','e10adc3949ba59abbe56e057f20f883e','','551144','1380000245','vip04@126.com','http://www.hongmuchuan.com','2','127.0.0.1','2013-09-18 11:57:03','2014-01-22 08:16:11','933','0','../upload/headpic/1380285647.bmp');
INSERT INTO user VALUES('5','vip05','e10adc3949ba59abbe56e057f20f883e','','500154120','1380000001','vip05@126.com','http://www.hongmuchuan.com','3','127.0.0.1','2013-09-23 01:47:59','2013-10-21 03:00:03','40','0','../images/headpic.gif');
INSERT INTO user VALUES('6','111111','96e79218965eb72c92a549dd5a330112','','111111','111111','111111@qq.com','http://www.111111.com','3','127.0.0.1','2013-09-25 02:05:35','2013-09-25 02:05:48','0','0','../images/headpic.gif');
INSERT INTO user VALUES('7','222222','e3ceb5881a0a1fdaad01296d7554868d','','222222','222222','222222@qq.com','http://www.222222.com','2','127.0.0.1','2013-09-25 02:07:15','2013-09-25 02:07:27','0','0','../images/headpic.gif');
INSERT INTO user VALUES('9','vip07','e10adc3949ba59abbe56e057f20f883e','','155541212','22116458','vip07@qq.com','http://www.2352345.com','3','','2013-09-28 07:19:13','','0','0','../images/headpic.gif');
INSERT INTO user VALUES('10','vip08','e10adc3949ba59abbe56e057f20f883e','','12154454','151555454','vip08@qq.com','http://www.252354.com','3','','2013-09-28 07:22:27','','0','0','../images/headpic.gif');
INSERT INTO user VALUES('11','vip09','e10adc3949ba59abbe56e057f20f883e','','1545454','155454554','vip09@qq.com','http://www.52345.com','3','','2013-09-28 07:35:11','','0','0','../images/headpic.gif');
INSERT INTO user VALUES('12','vip10','e10adc3949ba59abbe56e057f20f883e','','11565','134648410','vip10@qq.com','http://www.5759.com','3','','2013-09-28 07:48:35','','0','0','../images/headpic.gif');
INSERT INTO user VALUES('13','vip11','e10adc3949ba59abbe56e057f20f883e','','5441121','3168/51','5441121@qq.com','http://www.hongmuchuan.com','3','127.0.0.1','2013-10-01 10:29:20','2013-10-03 05:45:03','0','0','../images/headpic.gif');
INSERT INTO user VALUES('14','vip12','e10adc3949ba59abbe56e057f20f883e','','9888922','','2245849708@qq.com','','3','127.0.0.1','2013-10-01 10:48:37','2013-10-01 10:48:37','0','0','../images/headpic.gif');

DROP TABLE IF EXISTS webinfo;
CREATE TABLE `webinfo` (
  `webID` int(11) NOT NULL AUTO_INCREMENT,
  `webname` varchar(255) DEFAULT NULL,
  `enwebname` varchar(255) DEFAULT NULL,
  `weburl` varchar(255) DEFAULT NULL,
  `icp` varchar(255) DEFAULT NULL,
  `enicp` varchar(255) DEFAULT NULL,
  `cname` varchar(255) DEFAULT NULL,
  `dianhua` varchar(255) DEFAULT NULL,
  `fax` varchar(255) DEFAULT NULL,
  `myemail` varchar(255) DEFAULT NULL,
  `bgtel` varchar(255) DEFAULT NULL,
  `qq` varchar(255) DEFAULT NULL,
  `qyqq` varchar(255) DEFAULT NULL,
  `msn` varchar(255) DEFAULT NULL,
  `mob` varchar(255) DEFAULT NULL,
  `address` text,
  `enaddress` text,
  `gcadd` text,
  `engcadd` text,
  `title` text,
  `entitle` text,
  `keyword` text,
  `enkeyword` text,
  `descr` text,
  `endescr` text,
  `banquan` text,
  `enbanquan` text,
  `about` text,
  `enabout` text,
  PRIMARY KEY (`webID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=gb2312;

INSERT INTO webinfo VALUES('2','好推手','','http://hts.hongmuchuan.com/','京备字201305541','','张三丰','020-9888922','020-9888922','9888922@qq.com','','9888922','','','13800000001','北京市','','','','好推手','','好推手','','好推手','','好推手','','','');

DROP TABLE IF EXISTS wyx_info;
CREATE TABLE `wyx_info` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `VipUser` varchar(255) DEFAULT NULL,
  `owner` varchar(255) DEFAULT NULL,
  `mid` int(11) DEFAULT '0',
  `order_id` varchar(255) DEFAULT NULL,
  `title` text,
  `medianame` text,
  `weburl` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT '0',
  `content` text,
  `reason` text,
  `dreason` text,
  `data` varchar(255) DEFAULT '',
  `fbtime` varchar(255) DEFAULT '',
  `flag` int(11) DEFAULT '0',
  `yn` int(11) DEFAULT '0',
  `dyn` int(11) DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=129 DEFAULT CHARSET=gb2312;

INSERT INTO wyx_info VALUES('127','vip01','','152','2013101469474','穿“哈特威”衬衫的男人','腾讯微信大号03','','100','穿“哈特威”衬衫的男人','不符合发布条件。','','2013-10-14 02:36:20','2013-10-14 06:07:16','3','0','0');
INSERT INTO wyx_info VALUES('128','vip01','','147','2013101469474','穿“哈特威”衬衫的男人','新浪微博大号01','http://www.34423423.com/','100','穿“哈特威”衬衫的男人','','','2013-10-14 02:36:20','2013-10-14 06:06:25','2','1','0');

