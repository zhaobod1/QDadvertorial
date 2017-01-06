<?php
/**
 * Created by PhpStorm.
 * User: 王庆路
 * Date: 2016/11/16
 * Time: 19:01
 */
include("checkuser.php");
include("../include/config.php");
include("../include/function.php");
$VipUser = $_COOKIE["VipUser"];
$sql = "select * from user where VipUser='" . $VipUser . "'";
$result = mysql_db_query($dbname, $sql);
$rs = mysql_fetch_array($result);
if ($rs != NULL) {
    $yue = $rs["yue"];
}
$ID = @$_REQUEST["ID"];
$action = @$_REQUEST["action"];
?>
<HTML>
<HEAD>
    <TITLE>软文价格中心 - 好推手</TITLE>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=7" />
    <link href="../images/reset.css" rel="stylesheet" type="text/css" />
    <link href="../images/zh-cn-system.css" rel="stylesheet" type="text/css" />
    <script language="javascript" type="text/javascript" src="../images/jquery.min.js"></script>
    <script language="javascript" type="text/javascript" src="../images/styleswitch.js"></script>
</HEAD>
<style>
    html {
        _overflow-y: scroll
    }

    .background {
        display: block;
        width: 100%;
        height: 100%;
        opacity: 0.4;
        filter: alpha(opacity=40);
        background: white;
        position: absolute;
        top: 0;
        left: 0;
        z-index: 2000;
    }
    .progressBar {
        border: solid 2px #86A5AD;
        background: white url(progressBar_m.gif) no-repeat 10px 10px;
    }

    .progressBar {
        display: block;
        width: 148px;
        height: 28px;
        position: fixed;
        top: 50%;
        left: 50%;
        margin-left: -74px;
        margin-top: -14px;
        padding: 10px 10px 10px 50px;
        text-align: left;
        line-height: 27px;
        font-weight: bold;
        position: absolute;
        z-index: 2001;
    }
</style>
<BODY>
<DIV style="_width: 80.9%; _margin-right: -12px" id=main_frameid class="pad-10 display">
    <DIV class="col-2  col-auto">
        <H6>微信报价</H6>
        <DIV class="content">
            <DIV id="flselect">
                <table width="100%" border="0" cellpadding="0" style="border:1px solid #ccc;padding-bottom:5px;">
                    <TR>
                        <TD style="PADDING-LEFT: 5px" bgColor=#f1f3f9>
                            <UL class=meitilist>
                                <LI style="CURSOR: pointer" onclick=mt_search3()>地区-》</LI>
                            </UL>
                        </TD>
                    </TR>
                    <TR>
                        <TD style="PADDING-LEFT: 5px" bgColor=#ffffff>
                            <UL class=meitilist>
                                <LI style="CURSOR: pointer"
                                    onclick=wc_search_area('all')>不限</LI>
                                <?php
                                $sqls = "select * from wechat_class where BigID=58";
                                $results = mysql_db_query($dbname, $sqls);
                                while ($rss = mysql_fetch_array($results)) {
                                    ?>
                                    <LI style="CURSOR: pointer"
                                        onclick=wc_search_area(<?php echo $rss["ID"]; ?>)><?php echo $rss["SmallClass"]; ?></LI>
                                    <?php
                                } ?>
                            </UL>
                        </TD>
                    </TR>
                    <TR>
                        <TD style="PADDING-LEFT: 5px" bgColor=#f1f3f9>
                            <UL class=meitilist>
                                <LI style="CURSOR: pointer" onclick=mt_search3()>媒体领域-》</LI>
                            </UL>
                        </TD>
                    </TR>
                    <TR>
                        <TD style="PADDING-LEFT: 5px" bgColor=#ffffff>
                            <UL class=meitilist>
                                <LI style="CURSOR: pointer"
                                    onclick=wc_search_media('all')>不限</LI>
                                <?php
                                $sqls = "select * from wechat_class where BigID=47";
                                $results = mysql_db_query($dbname, $sqls);
                                while ($rss = mysql_fetch_array($results)) {
                                    ?>
                                    <LI style="CURSOR: pointer"
                                        onclick=wc_search_media(<?php echo $rss["ID"]; ?>)><?php echo $rss["SmallClass"]; ?></LI>
                                    <?php
                                } ?>
                            </UL>
                        </TD>
                    </TR>
                    <TR>
                        <TD style="PADDING-LEFT: 5px" bgColor=#f1f3f9>
                            <UL class=meitilist>
                                <LI style="CURSOR: pointer" onclick=mt_search3()>发布参考报价-》</LI>
                            </UL>
                        </TD>
                    </TR>
                    <TR>
                        <TD style="PADDING-LEFT: 5px" bgColor=#ffffff>
                            <UL class=meitilist>
                                <LI style="CURSOR: pointer" onclick=wc_search_headprice('all')>不限</LI>
                                <LI style="CURSOR: pointer" onclick=wc_search_headprice(1)>200元以下</LI>
                                <LI style="CURSOR: pointer" onclick=wc_search_headprice(2)>200-500元</LI>
                                <LI style="CURSOR: pointer" onclick=wc_search_headprice(3)>500-1000元</LI>
                                <LI style="CURSOR: pointer" onclick=wc_search_headprice(4)>1000-2000元</LI>
                                <LI style="CURSOR: pointer" onclick=wc_search_headprice(5)>2000-5000元</LI>
                                <LI style="CURSOR: pointer" onclick=wc_search_headprice(6)>5000-10000元</LI>
                                <LI style="CURSOR: pointer" onclick=wc_search_headprice(7)>10000元以上</LI>
                            </UL>
                        </TD>
                    </TR>
                    <TR>
                        <TD style="PADDING-LEFT: 5px" bgColor=#f1f3f9>
                            <UL class=meitilist>
                                <LI style="CURSOR: pointer" onclick=mt_search3()>粉丝量-》</LI>
                            </UL>
                        </TD>
                    </TR>
                    <TR>
                        <TD style="PADDING-LEFT: 5px" bgColor=#ffffff>
                            <UL class=meitilist>
                                <LI style="CURSOR: pointer" onclick=wc_search_fans('all')>不限</LI>
                                <LI style="CURSOR: pointer" onclick=wc_search_fans(1)>1万以下</LI>
                                <LI style="CURSOR: pointer" onclick=wc_search_fans(2)>1-5万</LI>
                                <LI style="CURSOR: pointer" onclick=wc_search_fans(3)>5-10万</LI>
                                <LI style="CURSOR: pointer" onclick=wc_search_fans(4)>10-20万</LI>
                                <LI style="CURSOR: pointer" onclick=wc_search_fans(5)>20-40万</LI>
                                <LI style="CURSOR: pointer" onclick=wc_search_fans(6)>40-80万</LI>
                                <LI style="CURSOR: pointer" onclick=wc_search_fans(7)>80-120万</LI>
                                <LI style="CURSOR: pointer" onclick=wc_search_fans(8)>120-200万</LI>
                                <LI style="CURSOR: pointer" onclick=wc_search_fans(9)>200万以上</LI>
                            </UL>
                        </TD>
                    </TR>
                    <TR>
                        <TD style="PADDING-LEFT: 5px" bgColor=#f1f3f9>
                            <UL class=meitilist>
                                <LI style="CURSOR: pointer" onclick=mt_search3()>粉丝认证-》</LI>
                            </UL>
                        </TD>
                    </TR>
                    <TR>
                        <TD style="PADDING-LEFT: 5px" bgColor=#ffffff>
                            <UL class=meitilist>
                                <LI style="CURSOR: pointer" onclick=wc_search_fansauth('all')>不限</LI>
                                <LI style="CURSOR: pointer" onclick=wc_search_fansauth(1)>已认证</LI>
                                <LI style="CURSOR: pointer" onclick=wc_search_fansauth(0)>未认证</LI>
                            </UL>
                        </TD>
                    </TR>
                    <TR>
                        <TD style="PADDING-LEFT: 5px" bgColor=#f1f3f9>
                            <UL class=meitilist>
                                <LI style="CURSOR: pointer" onclick=mt_search3()>微信认证-》</LI>
                            </UL>
                        </TD>
                    </TR>
                    <TR>
                        <TD style="PADDING-LEFT: 5px" bgColor=#ffffff>
                            <UL class=meitilist>
                                <LI style="CURSOR: pointer" onclick=wc_search_wechatauth('all')>不限</LI>
                                <LI style="CURSOR: pointer" onclick=wc_search_wechatauth(1)>已认证</LI>
                                <LI style="CURSOR: pointer" onclick=wc_search_wechatauth(0)>未认证</LI>
                            </UL>
                        </TD>
                    </TR>
                    <TR>
                        <TD style="PADDING-LEFT: 5px" bgColor=#f1f3f9>
                            <UL class=meitilist>
                                <LI style="CURSOR: pointer" onclick=mt_search3()>阅读量-》</LI>
                            </UL>
                        </TD>
                    </TR>
                    <TR>
                        <TD style="PADDING-LEFT: 5px" bgColor=#ffffff>
                            <UL class=meitilist>
                                <LI style="CURSOR: pointer" onclick=wc_search_viewrefer('all')>不限</LI>
                                <LI style="CURSOR: pointer" onclick=wc_search_viewrefer(1)>0-5百</LI>
                                <LI style="CURSOR: pointer" onclick=wc_search_viewrefer(2)>5百-1千</LI>
                                <LI style="CURSOR: pointer" onclick=wc_search_viewrefer(3)>1千-3千</LI>
                                <LI style="CURSOR: pointer" onclick=wc_search_viewrefer(4)>3千-5千</LI>
                                <LI style="CURSOR: pointer" onclick=wc_search_viewrefer(5)>5千-1万</LI>
                                <LI style="CURSOR: pointer" onclick=wc_search_viewrefer(6)>1万-1.5万</LI>
                                <LI style="CURSOR: pointer" onclick=wc_search_viewrefer(7)>1.5万-2万</LI>
                                <LI style="CURSOR: pointer" onclick=wc_search_viewrefer(8)>2万以上</LI>
                            </UL>
                        </TD>
                    </TR>
                </table>
                <form name="form2" id='searchtrun' style="margin-bottom:20px;">
                    <br/>
                    <table width="100%" cellpadding="0" cellspacing="0" bgcolor="#e2e2e2">
                        <tr>
                            <td width="6%" height="28" bgcolor="#FFFFFF"
                                style="border-top:1px solid #ccc; border-left:1px solid #ccc; border-right:1px solid #ccc;">
                                <div align="center">微信查找</div>
                            </td>
                            <td width="94%" align="center" valign="middle" bgcolor="#FFFFFF">
                                <table border="0" cellpadding="5" cellspacing="2">
                                    <tr>
                                        <td>
                                            <div align="center">微信名称</div>
                                        </td>
                                        <td><input name="meiti_name" type="text" class="txt" id="wechat_name" size="13"
                                                   onkeydown="if(event.keyCode == 13)event.returnValue = false;"/>
                                        </td>
                                        <td><input type="button" name="button2" id="button2" value="查找"
                                                   onclick="wechat_search_name();"
                                                   style="border:1px solid #ccc; background:#e2e2e2;color:#000; width:80px; cursor:pointer;"/>
                                        </td>
                                        <td></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td height="23" colspan="2" bgcolor="#FFFFFF">
                                <div id="s_wechat"></div>
                            </td>
                        </tr>
                    </table>
                </form>
                </DIV>
            </DIV>
        </DIV>
    </DIV>
<DIV style="DISPLAY: none" id=background class=background></DIV>
<DIV style="DISPLAY: none" id=progressBar class=progressBar>数据加载中，请稍等...</DIV>
</BODY>
</HTML>
<script>
    $(document).ready(function () {
        init();
        //mt_search();
    })
    function init() {
        $.get("../user/search3.php",{"area":'all'},function (data) {
            $("#s_wechat").html(data);
        });
    }
    function mt_search() {
        $.get("search.php?a=mt_search", {
                "mc": $("#meiti_name").val(),
                "cid": $("#class_id").val(),
                "skey": $("#skey").val(),
                "mh": $("#zhmh").val(),
                "diqu": $("#diqu").val(),
                "lurl": $("#linkurl").val(),
                "xwy": $("#xinwenyuan").val()
            }
            , function (data) {
                $("#s_meti").html(data);
            });
    }
    function wechat_search_name() {
        var name = document.getElementById('wechat_name').value;
        if(name!=null){
            $.get("../user/search3.php",{"name":name},function (data) {
                $("#s_wechat").html(data);
            });
        }
        else{
            $.get("../user/search3.php",{"area":'all'},function (data) {
                $("#s_wechat").html(data);
            });
        }
    }
    function wc_search_area(area) {
        $.get("../user/search3.php",{"area":area},function (data) {
            $("#s_wechat").html(data);
        });
    }
    function wc_search_media(media) {
        $.get("../user/search3.php",{"media":media},function (data) {
            $("#s_wechat").html(data);
        });
    }
    function wc_search_headprice(price) {
        $.get("../user/search3.php",{"headprice":price},function (data) {
            $("#s_wechat").html(data);
        });
    }
    function wc_search_fans(fans) {
        $.get("../user/search3.php",{"fans":fans},function (data) {
            $("#s_wechat").html(data);
        });
    }
    function wc_search_fansauth(auth) {
        $.get("../user/search3.php",{"auth":auth},function (data) {
            $("#s_wechat").html(data);
        });
    }
    function wc_search_wechatauth(auth) {
        $.get("../user/search3.php",{"auth2":auth},function (data) {
            $("#s_wechat").html(data);
        });
    }
    function wc_search_viewrefer(num) {
        $.get("../user/search3.php",{"view":num},function (data) {
            $("#s_wechat").html(data);
        });
    }
    function meiturn() {
        $("#searchtrun").slideToggle();
    }
</script>
