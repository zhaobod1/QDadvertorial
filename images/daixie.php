<?php
include("../include/config.php");
include("../include/function.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML xmlns="http://www.w3.org/1999/xhtml">
<HEAD>
<title><?php echo $H_Title;?>_<?php echo $webname;?></title>
<meta name="keywords" content="<?php echo $H_KeyWords;?>" />
<meta name="description" content="<?php echo $H_Descr;?>" />
<META content="text/html; charset=utf-8" http-equiv=Content-Type>
<LINK rel=stylesheet type=text/css href="../images/index.css">
<LINK rel=stylesheet type=text/css href="../images/css.css">
<LINK rel=icon type=image/x-icon href="../images/favicon.ico">
<STYLE type=text/css>BODY {
	FONT-FAMILY: Microsoft Yahei, "微软雅黑", "宋体"; BACKGROUND: #ececec; COLOR: #474747; FONT-SIZE: 14px;line-height:5x;
}
IMG {
	BORDER-BOTTOM: 0px; BORDER-LEFT: 0px; BORDER-TOP: 0px; BORDER-RIGHT: 0px
}
* {
	PADDING-BOTTOM: 0px; MARGIN: 0px; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; PADDING-TOP: 0px
}
.clear {
	CLEAR: both
}
A {
	COLOR: #474747; TEXT-DECORATION: none
}
A:hover {
	COLOR: #ff6600
}
.quanjugg {
	MARGIN-TOP: 10px
}
.quanjugg IMG {
	PADDING-BOTTOM: 0px; PADDING-LEFT: 2px; PADDING-RIGHT: 2px; PADDING-TOP: 0px
}
.quanjuggg {
	MARGIN-TOP: 5px
}
#content .input {
	BORDER-BOTTOM: #b7b7b7 1px solid; BORDER-LEFT: #b7b7b7 1px solid; BACKGROUND-COLOR: #fff; PADDING-LEFT: 5px; FONT-FAMILY: Microsoft Yahei, "微软雅黑", "宋体"; COLOR: #474747; BORDER-TOP: #b7b7b7 1px solid; BORDER-RIGHT: #b7b7b7 1px solid
}
#content .input:focus {
	BORDER-BOTTOM: #84d2ff 1px solid; BORDER-LEFT: #84d2ff 1px solid; BACKGROUND: #f0f9ff; BORDER-TOP: #84d2ff 1px solid; BORDER-RIGHT: #84d2ff 1px solid
}
#content .textarea {
	BORDER-BOTTOM: #b7b7b7 1px solid; BORDER-LEFT: #b7b7b7 1px solid; PADDING-BOTTOM: 5px; BACKGROUND-COLOR: #fff; PADDING-LEFT: 5px; WIDTH: 532px; PADDING-RIGHT: 5px; FONT-FAMILY: Microsoft Yahei, "微软雅黑", "宋体"; COLOR: #474747; BORDER-TOP: #b7b7b7 1px solid; BORDER-RIGHT: #b7b7b7 1px solid; PADDING-TOP: 5px
}
#content .textarea:focus {
	BORDER-BOTTOM: #84d2ff 1px solid; BORDER-LEFT: #84d2ff 1px solid; BACKGROUND: #f0f9ff; BORDER-TOP: #84d2ff 1px solid; BORDER-RIGHT: #84d2ff 1px solid
}
.input {
	BORDER-BOTTOM: #b7b7b7 1px solid; BORDER-LEFT: #b7b7b7 1px solid; PADDING-BOTTOM: 0px; BACKGROUND-COLOR: #fff; PADDING-LEFT: 5px; PADDING-RIGHT: 5px; FONT-FAMILY: Microsoft Yahei, "微软雅黑", "宋体"; COLOR: #474747; BORDER-TOP: #b7b7b7 1px solid; BORDER-RIGHT: #b7b7b7 1px solid; PADDING-TOP: 0px
}
.input:focus {
	BORDER-BOTTOM: #84d2ff 1px solid; BORDER-LEFT: #84d2ff 1px solid; BACKGROUND: #f0f9ff; BORDER-TOP: #84d2ff 1px solid; BORDER-RIGHT: #84d2ff 1px solid
}
.textarea {
	BORDER-BOTTOM: #b7b7b7 1px solid; BORDER-LEFT: #b7b7b7 1px solid; PADDING-BOTTOM: 5px; BACKGROUND-COLOR: #fff; PADDING-LEFT: 5px; PADDING-RIGHT: 5px; FONT-FAMILY: Microsoft Yahei, "微软雅黑", "宋体"; COLOR: #474747; BORDER-TOP: #b7b7b7 1px solid; BORDER-RIGHT: #b7b7b7 1px solid; PADDING-TOP: 5px
}
.textarea:focus {
	BORDER-BOTTOM: #84d2ff 1px solid; BORDER-LEFT: #84d2ff 1px solid; BACKGROUND: #f0f9ff; BORDER-TOP: #84d2ff 1px solid; BORDER-RIGHT: #84d2ff 1px solid
}
.tag_options {
	OVERFLOW-Y: scroll; MAX-HEIGHT: 300px
}
#ruanwen_gg {
	BORDER-BOTTOM: #f0f0f0 1px solid; MARGIN-TOP: 0px; BACKGROUND: url(../images/ruanwen_bj.gif) #fafafa no-repeat center top; HEIGHT: 535px
}
.ruangwen_gg_main {
	MARGIN: 0px auto; WIDTH: 1000px;.ruangwen_gg_main;
}
.ruangwen_gg_main H2 {
	FONT-SIZE: 30px; FONT-WEIGHT: normal
}
.ruangwen_gg_main P {
	LINE-HEIGHT: 32px; COLOR: #707a80; FONT-SIZE: 16px
}
.ruanwen_gg_1 {
	COLOR: #dc503c; FONT-SIZE: 48px; PADDING-TOP: 30px
}
.ruanwen_gg_2 {
	PADDING-LEFT: 115px; PADDING-TOP: 105px
}
.ruanwen_gg_3 {
	PADDING-LEFT: 115px; PADDING-TOP: 35px
}
.ruanwen_gg_4 {
	PADDING-LEFT: 115px; PADDING-TOP: 35px
}
#content {
	BACKGROUND: #ffffff
}
.contentp {
	MARGIN: 0px auto; WIDTH: 1000px
}
.ruanwen_table {
	TEXT-ALIGN: center; MARGIN: 0px auto; WIDTH: 100%; BORDER-COLLAPSE: collapse
}
.ruanwen_table TH {
	BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; LINE-HEIGHT: 45px; BACKGROUND: #fafafa; HEIGHT: 45px; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid
}
.ruanwen_table TD {
	BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; LINE-HEIGHT: 45px; HEIGHT: 45px; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid
}
.ruanwen_sm {
	LINE-HEIGHT: 30px
}
.youhua_button {
	BACKGROUND-IMAGE: url(../images/button.gif); BORDER-BOTTOM: 0px; BORDER-LEFT: 0px; MARGIN-TOP: 30px; WIDTH: 331px; BACKGROUND-REPEAT: no-repeat; HEIGHT: 51px; BORDER-TOP: 0px; CURSOR: pointer; BORDER-RIGHT: 0px
}
.youhua_xian {
	BORDER-BOTTOM: #2a76a8 1px dashed; MARGIN: 10px auto; WIDTH: 850px; HEIGHT: 1px
}
A.applink:hover {
	BORDER-BOTTOM: #dce6f4 2px dotted; BORDER-LEFT: #dce6f4 2px dotted; PADDING-BOTTOM: 2px; BACKGROUND-COLOR: #ffff00; PADDING-LEFT: 2px; PADDING-RIGHT: 2px; COLOR: green; BORDER-TOP: #dce6f4 2px dotted; BORDER-RIGHT: #dce6f4 2px dotted; TEXT-DECORATION: none; PADDING-TOP: 2px
}
A.applink {
	BORDER-BOTTOM: #dce6f4 2px dotted; BORDER-LEFT: #dce6f4 2px dotted; PADDING-BOTTOM: 2px; PADDING-LEFT: 2px; PADDING-RIGHT: 2px; BACKGROUND: none transparent scroll repeat 0% 0%; COLOR: #2f5bff; BORDER-TOP: #dce6f4 2px dotted; BORDER-RIGHT: #dce6f4 2px dotted; TEXT-DECORATION: none; PADDING-TOP: 2px
}
A.info {
	BACKGROUND: none transparent scroll repeat 0% 0%; COLOR: #2f5bff; TEXT-DECORATION: none
}
A.info:hover {
	BACKGROUND: none transparent scroll repeat 0% 0%; COLOR: green; TEXT-DECORATION: underline
}
.mainnav {
	WIDTH: 100%; BACKGROUND: #08a5e0; HEIGHT: 40px
}
.mainnav .nav {
	MARGIN: 0px auto; WIDTH: 980px
}
.mainnav .nav .current-post-ancestor {
	BACKGROUND: #40bbec
}
.mainnav .nav .current-menu-ancestor {
	BACKGROUND: #40bbec
}
.mainnav .nav .current-menu-parent {
	BACKGROUND: #40bbec
}
.mainnav .nav .current-menu-item {
	BACKGROUND: #40bbec
}
.mainnav .nav UL {
	Z-INDEX: 999; POSITION: relative; FLOAT: left; HEIGHT: 100%
}
.mainnav .nav LI {
	TEXT-ALIGN: center; WIDTH: 100px; DISPLAY: inline; FLOAT: left; HEIGHT: 40px; MARGIN-RIGHT: 1px; TEXT-DECORATION: none
}
.mainnav .nav LI A {
	PADDING-BOTTOM: 0px; LINE-HEIGHT: 40px; PADDING-LEFT: 15px; PADDING-RIGHT: 15px; DISPLAY: block; COLOR: #fff; FONT-SIZE: 16px; PADDING-TOP: 0px
}
.mainnav .nav LI A:link {
	PADDING-BOTTOM: 0px; LINE-HEIGHT: 40px; PADDING-LEFT: 15px; PADDING-RIGHT: 15px; DISPLAY: block; COLOR: #fff; FONT-SIZE: 16px; PADDING-TOP: 0px
}
.mainnav .nav LI A:visited {
	PADDING-BOTTOM: 0px; LINE-HEIGHT: 40px; PADDING-LEFT: 15px; PADDING-RIGHT: 15px; DISPLAY: block; COLOR: #fff; FONT-SIZE: 16px; PADDING-TOP: 0px
}
.mainnav .nav LI A:active {
	PADDING-BOTTOM: 0px; LINE-HEIGHT: 40px; PADDING-LEFT: 15px; PADDING-RIGHT: 15px; DISPLAY: block; COLOR: #fff; FONT-SIZE: 16px; PADDING-TOP: 0px
}
.mainnav .nav UL LI UL {
	Z-INDEX: 999; POSITION: absolute; FILTER: alpha(opacity=90); WIDTH: 158px; DISPLAY: none; BACKGROUND: #08a5e0; HEIGHT: auto; BORDER-TOP: #fff 1px solid; opacity: .9; -moz-opacity: .9
}
.mainnav .nav UL LI UL LI {
	BORDER-BOTTOM: #fff 1px solid; TEXT-ALIGN: left; PADDING-BOTTOM: 0px; PADDING-LEFT: 0px; WIDTH: 158px; PADDING-RIGHT: 0px; DISPLAY: block; BACKGROUND: none transparent scroll repeat 0% 0%; FLOAT: left; PADDING-TOP: 0px
}
.mainnav .nav UL LI UL LI A {
	LINE-HEIGHT: 24px; WIDTH: 128px; DISPLAY: block; FLOAT: none; FONT-SIZE: 12px
}
.mainnav .nav LI A:hover {
	BACKGROUND: #ffbf4b
}
.mainnav .nav UL LI UL LI A:hover {
	BACKGROUND: #ffbf4b
}
</STYLE>

<META name=GENERATOR content="MSHTML 8.00.6001.19394">
</HEAD>
<BODY>
<DIV class=top>
<DIV class=head>
<H1><A href="/"></A></H1><IMG src="../images/chongzhi.png"> </DIV></DIV>
<?php
include("menu.php");
?>
<DIV id=ruanwen_gg>
<DIV class=ruangwen_gg_main>
<DIV class=ruanwen_gg_1>为什么选择原创软文？</DIV>
<DIV class=ruanwen_gg_2>
<H2>收录更有保障</H2>
<P>比起伪原创的文章，原创文章的收录更有保障</P></DIV>
<DIV class=ruanwen_gg_3>
<H2>推广价值更高</H2>
<P>一篇好的可读性高的文章所带来的推广价值是不可估量的</P></DIV>
<DIV class=ruanwen_gg_4>
<H2>更利于百度收录</H2>
<P>百度火星计划扶持原创性网站，你的网站还在复制文章吗？</P></DIV></DIV></DIV>
<DIV 
style="BORDER-BOTTOM: #f0f0f0 1px solid; BACKGROUND: #fafafa; HEIGHT: 527px">
<DIV style="MARGIN: 0px auto; WIDTH: 1000px"><IMG src="../images/youshi.gif"></DIV></DIV>
<DIV id=content>
<DIV class=contentp>
<DIV 
style="LINE-HEIGHT: 48px; HEIGHT: 60px; COLOR: #dc503c; FONT-SIZE: 24px; FONT-WEIGHT: bold; PADDING-TOP: 20px">原创软文代写价格：</DIV>
<TABLE class=ruanwen_table>
  <TBODY>
  <TR>
    <TH>字数</TH>
    <TH>20篇以下</TH>
    <TH>20—100篇</TH>
    <TH>100篇以上</TH></TR>
  <TR>
    <TD>300字—500字</TD>
    <TD>30元/篇</TD>
    <TD>25元/篇</TD>
    <TD>20元/篇</TD></TR>
  <TR>
    <TD>500字—700字</TD>
    <TD>40元/篇</TD>
    <TD>35元/篇</TD>
    <TD>30元/篇</TD></TR>
  <TR>
    <TD>700字—900字</TD>
    <TD>50元/篇</TD>
    <TD>45元/篇</TD>
    <TD>40元/篇</TD></TR>
  <TR>
    <TD>900字—1200字</TD>
    <TD>60元/篇</TD>
    <TD>55元/篇</TD>
    <TD>50元/篇</TD></TR></TBODY></TABLE>
<DIV 
style="LINE-HEIGHT: 48px; HEIGHT: 60px; COLOR: #dc503c; FONT-SIZE: 24px; FONT-WEIGHT: bold; PADDING-TOP: 20px">原创软文代写说明：</DIV>
<DIV class=ruanwen_sm>
<P>软文篇幅：300—1200字左右</P>
<P>软文价格：30—60元/篇</P>
<P>关 键 词 ：1—3个，建议提供2个主词，1个长尾词。</P>
<P>网站地址：一个URL链接地址或网址首页</P>
<P>友情提示：代写软文添加1—3个锚文本，以主词为准。</P>
<P>-----------------------------------------------------------------------------------------</P>
<P>提交格式：</P>
<P>1、推广对象：一起飞（www.yiqifei.com），正文里添加一处网址；</P>
<P>2、文章体裁：采访型/评论型/故事型/自由型（请选择1种），字数1000以上，要求原创；</P>
<P>3、文章标题：含关键词“特价机票”；</P>
<P>4、宣传要点：一起飞机票网，特价机票2折起，可预订全球200个国家机票，方便又实惠；</P>
<P>5、若有其他要求请写清楚详细，不满意可以重新修改。</P>
<P>6、若能提供一篇您认为不错的软文链接给我们，对我们的写作方向很有参考作用，写出的文章也能比较达到您预期的要求。</P></DIV>
<DIV 
style="LINE-HEIGHT: 36px; MARGIN-TOP: 20px; COLOR: #dc503c; FONT-SIZE: 18px; FONT-WEIGHT: bold">此外企业网站需要企业介绍、产品介绍 
、企业策划案的文章请跟客服沟通根据文章的难易程度定价。</DIV></DIV></DIV>
<?php
include("footer.php");
?>
</BODY>
</HTML>
