<?php
/**
 * Created by PhpStorm.
 * User: 王庆路
 * Date: 2016/11/9
 * Time: 21:42
 */
include ("../include/config.php");
include ("../include/function.php");


/*-----------------设置每页显示数目-------------------*/
$List_Num=50;
/*-----------------计算共有记录数--------------------*/
$sqlN="select Count(*) from wechat_info ";
//$sqlN="select Count(*) from ruanwen_info";
$resultN=mysql_db_query($dbname,$sqlN);
$rsN=mysql_fetch_array($resultN);
$Num=$rsN[0];

/*------------------计算共有页数--------------------*/
$CountPage=ceil($Num/$List_Num);
/*-------------------设置当前页--------------------*/
if(empty($_REQUEST["Page"])){
    $Page=1;
}else{
    $Page=$_REQUEST["Page"];
    if($Page<1){$Page=1;}
    if($Page>$CountPage){$Page=$CountPage;}
}
$Cpage=$Page+1;
/*--------------------------------------------------*/
$sql="select * from wechat_info  order by id desc limit ".($List_Num*($Page-1)).",".$List_Num;
$result=mysql_db_query($dbname,$sql);
?>
<html >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=7" />
    <TITLE>后台管理中心</TITLE>
    <link href="../images/reset.css" rel="stylesheet" type="text/css" />
    <link href="../images/zh-cn-system.css" rel="stylesheet" type="text/css" />
    <script language="javascript" type="text/javascript" src="../images/jquery.min.js"></script>
    <script language="javascript" type="text/javascript" src="../images/styleswitch.js"></script>
</head>
<body>
<style>
    .alink{
        line-height:32px;}
    .alink a{
        border:#999999 1px solid;
        padding-left:6px; padding-right:6px; padding-bottom:2px; padding-top:2px;
        margin-lef:2px; margin-right:2px; color:#999999 color:#3399FF}
    .alink a:hover{
        background:#FFFFCC; border:#999999 1px solid; text-decoration:none; color:#3399FF}
    .ok{
        border:#999999 1px solid;
        padding-left:6px; padding-right:6px; padding-bottom:2px; padding-top:2px;
        margin-lef:2px; margin-right:2px; color:#3399FF; font-weight:bold;
    }
    .pager{
        background:#ffffff; line-height:32px; padding-left:6px;}
    .pager a{
        border:#999999 1px solid;
        padding-left:6px; padding-right:6px; padding-bottom:2px; padding-top:2px;
        margin-lef:2px; margin-right:2px; color:#999999 color:#3399FF}
    .pager a:hover{
        background:#FFFFCC; border:#999999 1px solid; text-decoration:none; color:#3399FF}
</style>
<div id="main_frameid" class="pad-10 display" style="_margin-right:-12px;_width:98.9%;">
    <div class="col-2  col-auto" >
        <h6>微信媒体列表</h6>
        <div class="content">
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
                                onclick=mt_search1('all')>不限</LI>
                            <?php
                            $sqls = "select * from wechat_class where BigID=47";
                            $results = mysql_db_query($dbname, $sqls);
                            while ($rss = mysql_fetch_array($results)) {
                                ?>
                                <LI style="CURSOR: pointer"
                                    onclick=mt_search1(<?php echo $rss["ID"]; ?>)><?php echo $rss["SmallClass"]; ?></LI>
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
                            <LI style="CURSOR: pointer" onclick=mt_search1()>不限</LI>
                            <LI style="CURSOR: pointer" onclick=mt_search2(0)>200元以下</LI>
                            <LI style="CURSOR: pointer" onclick=mt_search2(1)>200-500元</LI>
                            <LI style="CURSOR: pointer" onclick=mt_search2(2)>500-1000元</LI>
                            <LI style="CURSOR: pointer" onclick=mt_search2(3)>1000-2000元</LI>
                            <LI style="CURSOR: pointer" onclick=mt_search2(3)>2000-5000元</LI>
                            <LI style="CURSOR: pointer" onclick=mt_search2(3)>5000-10000元</LI>
                            <LI style="CURSOR: pointer" onclick=mt_search2(3)>10000元以上</LI>
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
                            <LI style="CURSOR: pointer" onclick=mt_search1()>不限</LI>
                            <LI style="CURSOR: pointer" onclick=mt_search2(0)>1万以下</LI>
                            <LI style="CURSOR: pointer" onclick=mt_search2(1)>1-5万</LI>
                            <LI style="CURSOR: pointer" onclick=mt_search2(2)>5-10万</LI>
                            <LI style="CURSOR: pointer" onclick=mt_search2(3)>10-20万</LI>
                            <LI style="CURSOR: pointer" onclick=mt_search2(3)>20-40万</LI>
                            <LI style="CURSOR: pointer" onclick=mt_search2(3)>40-80万</LI>
                            <LI style="CURSOR: pointer" onclick=mt_search2(3)>80-120万</LI>
                            <LI style="CURSOR: pointer" onclick=mt_search2(3)>80-120万</LI>
                            <LI style="CURSOR: pointer" onclick=mt_search2(3)>120-200万</LI>
                            <LI style="CURSOR: pointer" onclick=mt_search2(3)>200万以上</LI>
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
                            <LI style="CURSOR: pointer" onclick=mt_search1()>不限</LI>
                            <LI style="CURSOR: pointer" onclick=mt_search2(0)>已认证</LI>
                            <LI style="CURSOR: pointer" onclick=mt_search2(1)>未认证</LI>
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
                            <LI style="CURSOR: pointer" onclick=mt_search1()>不限</LI>
                            <LI style="CURSOR: pointer" onclick=mt_search2(0)>已认证</LI>
                            <LI style="CURSOR: pointer" onclick=mt_search2(1)>未认证</LI>
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
                            <LI style="CURSOR: pointer" onclick=mt_search1()>不限</LI>
                            <LI style="CURSOR: pointer" onclick=mt_search2(0)>0-5百</LI>
                            <LI style="CURSOR: pointer" onclick=mt_search2(1)>5百-1千</LI>
                            <LI style="CURSOR: pointer" onclick=mt_search2(2)>1千-3千</LI>
                            <LI style="CURSOR: pointer" onclick=mt_search2(3)>3千-5千</LI>
                            <LI style="CURSOR: pointer" onclick=mt_search2(3)>5千-1万</LI>
                            <LI style="CURSOR: pointer" onclick=mt_search2(3)>1万-1.5万</LI>
                            <LI style="CURSOR: pointer" onclick=mt_search2(3)>1.5万-2万</LI>
                            <LI style="CURSOR: pointer" onclick=mt_search2(3)>2万以上</LI>
                        </UL>
                    </TD>
                </TR>
                </table>
            <div id="s_wechat">
            <table width="100%" cellpadding="0" cellspacing="1" bgcolor="#e2e2e2" style="font-size:12px">
                <?php
                if (mysql_num_rows($result)==NULL)
                {
                    echo "<br><table width=750 border=0 align=center cellpadding=0 cellspacing=0><tr>
                 <td align=center><span class=rd rd>您还没有微信数据！</span></td></tr></table>";
                }

                else
                {
                    ?>
                    <tr>
                        <td height="30" bgcolor="#FFFFFF" align="center">标签</td>
                        <td bgcolor="#FFFFFF" align="center">微信号</td>
                        <td bgcolor="#FFFFFF" align="center">粉丝量</td>
                        <td bgcolor="#FFFFFF" align="center">阅读参考数</td>
                        <td bgcolor="#FFFFFF" align="center">头条报价</td>
                        <td bgcolor="#FFFFFF" align="center">简介</td>
                        <td bgcolor="#FFFFFF" align="center">粉丝认证</td>
                        <td bgcolor="#FFFFFF" align="center">微信认证</td>
                        <td bgcolor="#FFFFFF" align="center">地区</td>
                        <td bgcolor="#FFFFFF" align="center" width="210">操作</td>
                    </tr>
                    <?php
                    $i=1;
                    while($rs=mysql_fetch_array($result))
                    {
                        $classid = $rs['nav_id'];
                        $sqlb = "select * from wechat_class where ID = ".$classid;
                        $resultb = mysql_db_query($dbname,$sqlb);
                        $rsb = mysql_fetch_array($resultb);
                        ?>
                        <TR>
                            <TD bgColor=#ffffff height=30>
                                <DIV align=center><?php echo $rsb["SmallClass"];?></DIV>
                            </TD>
                            <TD bgColor=#ffffff>
                                <DIV align=center><?php echo $rs["name"];?></DIV>
                            </TD>
                            <TD style="PADDING-BOTTOM: 0px; PADDING-LEFT: 20px; PADDING-RIGHT: 20px; PADDING-TOP: 0px" bgColor=#ffffff>
                                <DIV align=center><?php echo $rs["fans_num"];?></DIV>
                            </TD>
                            <TD bgColor=#ffffff>
                                <DIV align=center><?php echo $rs["viewrefer_num"];?></DIV>
                            </TD>
                            <TD bgColor=#ffffff>
                                <DIV align=center><?php echo $rs["headline_price"]."元";?></DIV>
                            </TD>
                            <TD bgColor=#ffffff>
                                <DIV align=center><?php echo $rs["introduction"];?></DIV>
                            </TD>
                            <TD bgColor=#ffffff>
                                <DIV align=center>
                                    <?php
                                         if($rs['fans_authen'] == 0){
                                             echo "未认证";
                                         }
                                        else{
                                            echo "已认证";
                                        }
                                    ?>
                                </DIV>
                            </TD>
                            <TD bgColor=#ffffff>
                                <DIV align=center>
                                    <?php
                                    if($rs['wechat_authen'] == 0){
                                        echo "未认证";
                                    }
                                    else{
                                        echo "已认证";
                                    }
                                    ?>
                                </DIV>
                            </TD>
                            <TD bgColor=#ffffff>
                                <DIV align=center><?php echo $rs["area"];?></DIV>
                            </TD>
                            <TD bgColor=#ffffff>
                                <DIV align=center>
                                    <?php
                                        switch ($rs['status']){
                                            case 1:
                                                echo "未收藏未拉黑";
                                                break;
                                            case 2:
                                                echo "收藏未拉黑";
                                                break;
                                            case 3:
                                                echo "未收藏拉黑";
                                                break;
                                            case 4:
                                                echo "收藏拉黑";
                                                break;
                                        }
                                    ?>
                                </DIV>
                            </TD>
                        </TR>
                    <?php }?>
            </table>
                <br />
                <table width="100%" border="0" cellspacing="0" cellpadding="2" style="font-size:12px">
                    <tr>
                        <td width="87%" height="35" align="center"><DIV class=pager><?php
                                if($Num>0){
                                    if($Page!=1)
                                    {
                                        $Prv=$Page-1;
                                        echo "<a href='wechat_list.php'>首页&nbsp;&nbsp;</a>";
                                        echo "<a href=wechat_list.php?Page=".$Prv.">上一页</a>&nbsp;&nbsp;";
                                    }
                                    else
                                    {
                                        echo "首页&nbsp;&nbsp;";
                                        echo "上一页&nbsp;&nbsp;";
                                    }

                                    if($Page+3<$CountPage+1){
                                        $ep=$Page+3;
                                    }else{
                                        $ep=$CountPage;
                                    }
                                    if($Page-3>0){
                                        $sp=$Page-3;
                                    }else{
                                        $sp=1;
                                    }
                                    if($Page>=$CountPage-3){
                                        $sp=$CountPage-5;
                                    }
                                    if($Page>4){
                                        for($i=$sp;$i<=$ep;$i++)
                                        {
                                            if($Page==$i){
                                                $str.="<span class=\"ok\">".$i."</span>&nbsp;&nbsp;";
                                            }else{
                                                $str.="<a href=\"?Page=".$i."&skey=".$skey."&key=".$key."&nav_id=".$nav_id."\">".$i."</a>&nbsp;&nbsp;";}
                                        }
                                    }else{
                                        for($j=1;$j<=$ep;$j++)
                                        {
                                            if($Page==$j){
                                                $str.="<span class=\"ok\">".$j."</span>&nbsp;&nbsp;";
                                            }else{
                                                $str.="<a href=\"?Page=".$j."&skey=".$skey."&key=".$key."&nav_id=".$nav_id."\">".$j."</a>&nbsp;&nbsp;";}
                                        }
                                    }
                                    echo $str;

                                    if($Page!=$CountPage)
                                    {
                                        $NtPage=$Page+1;
                                        $EdPage=$CountPage;
                                        echo "<a href=wechat_list.php?Page=".$NtPage.">下一页</a>&nbsp;&nbsp;";
                                        echo "<a href=wechat_list.php?Page=".$EdPage.">尾页</a>&nbsp;&nbsp;";
                                    }
                                    else
                                    {
                                        echo "下一页&nbsp;&nbsp;";
                                        echo "尾页&nbsp;&nbsp;";
                                    }
                                    echo "当前为".$Page."/".$CountPage."页 每页显示".$List_Num."条记录 共有记录数".$Num."条记录";
                                } } ?></DIV></td>
                    </tr>
                </table>
            </div>
            <br>
        </div>
    </div>
    <div class="bk20 hr"></div>
</div>
<div id='closed' class="closed"><div id="model" class="model"></div><a href="#" onclick="$('#closed').slideUp()" style="float:right;padding:20px;">[关闭]</a></div>
<iframe name="main" width="0" height="0" id="main"  frameborder="0"></iframe>
<script language="javascript">
    function letDivCenter(divName,str){
        var top = ($(window).height() - $("#closed").height())/2;
        var left = ($(window).width() - $("#closed").width())/2;
        var scrollTop = $(document).scrollTop();
        var scrollLeft = $(document).scrollLeft();
        $(divName).html(str);
        $("#closed").css( { position : 'absolute', 'top' : top + scrollTop, left : left + scrollLeft } ).slideDown(100);
    }

    function delID(ID,url,mes){
        var mymes;
        mymes=confirm(mes);
        if(mymes==true){
            window.location=url+ID;
        }
    }
    function wc_search_area(area) {
        $.get("../user/search2.php",{"area":area},function (data) {
            $("#s_wechat").html(data);
        });
    }
</script>
</body>
</html>