<?php
include ("../include/config.php");
include ("../include/function.php");
$VipUser=$_COOKIE["VipUser"];
$sqlu="select * from user where VipUser='".$VipUser."'";
$resultu=mysql_query($sqlu);
$rsu=mysql_fetch_array($resultu);
if($rsu!=NULL)
{
    $yue=$rsu["yue"];
    $flag=$rsu["flag"];
}
/*王庆路 暂时不做分页*/
/*王庆路 暂时不做分页 end*/
?>
<?php
/*王庆路 地区*/
if($_GET['area']){
    $id=$_GET["area"];
    if($flag==2){
        if ($id!='all'){
            $sqls = "select * from wechat_class where ID = '".$id."'";
            $result_temp = mysql_db_query($dbname,$sqls);
            $rst = mysql_fetch_array($result_temp);
            $sql="select * from wechat_info where area='".$rst['SmallClass']."'";
        }
        else{
            $sql="select * from wechat_info";
        }
    }
    else{
        if ($id!='all'){
            $sqls = "select * from wechat_class where ID = '".$id."'";
            $result_temp = mysql_db_query($dbname,$sqls);
            $rst = mysql_fetch_array($result_temp);
            $sql="select * from wechat_info where area='".$rst['SmallClass']."'";
        }
        else{
            $sql="select * from wechat_info";
        }
    }
}
/*王庆路 地区 end*/
/*王庆路 媒体领域*/
else if($_GET['media']){
    $id = $_GET['media'];
    if($flag==2){
        if ($id!='all'){
            $sql="select * from wechat_info where nav_id=".$id;
        }
        else{
            $sql="select * from wechat_info";
        }
    }
    else{
        if ($id!='all'){
            $sql="select * from wechat_info where nav_id=".$id;
        }
        else{
            $sql="select * from wechat_info";
        }
    }
}
/*王庆路 媒体领域 end*/
/*王庆路 发布参考报价*/
else if($_GET['headprice']){
    $id = $_GET['headprice'];
    if ($flag == 2){
        if ($id!='all'){
            switch ($id){
                case "1":
                    $sql = "select * from wechat_info where (headline_price BETWEEN 1 and 200) order by ID asc";
                    break;
                case "2":
                    $sql = "select * from wechat_info where (headline_price BETWEEN 201 and 500) order by ID asc";
                    break;
                case "3":
                    $sql = "select * from wechat_info where (headline_price BETWEEN 501 and 1000) order by ID asc";
                    break;
                case "4":
                    $sql = "select * from wechat_info where (headline_price BETWEEN 1001 and 2000) order by ID asc";
                    break;
                case "5":
                    $sql = "select * from wechat_info where (headline_price BETWEEN 2001 and 5000) order by ID asc";
                    break;
                case "6":
                    $sql = "select * from wechat_info where (headline_price BETWEEN 5001 and 10000) order by ID asc";
                    break;
                case "7":
                    $sql = "select * from wechat_info where (headline_price>10000) order by ID asc";
                    break;
                default:
                    die();
                    break;
            }
        }
        else{
            $sql = "select * from wechat_info";
        }
    }
    else{
        if ($id!='all'){
            switch ($id){
                case "1":
                    $sql = "select * from wechat_info where (headline_price BETWEEN 1 and 200) order by ID asc";
                    break;
                case "2":
                    $sql = "select * from wechat_info where (headline_price BETWEEN 201 and 500) order by ID asc";
                    break;
                case "3":
                    $sql = "select * from wechat_info where (headline_price BETWEEN 501 and 1000) order by ID asc";
                    break;
                case "4":
                    $sql = "select * from wechat_info where (headline_price BETWEEN 1001 and 2000) order by ID asc";
                    break;
                case "5":
                    $sql = "select * from wechat_info where (headline_price BETWEEN 2001 and 5000) order by ID asc";
                    break;
                case "6":
                    $sql = "select * from wechat_info where (headline_price BETWEEN 5001 and 10000) order by ID asc";
                    break;
                case "7":
                    $sql = "select * from wechat_info where (headline_price>10000) order by ID asc";
                    break;
                default:
                    die();
                    break;
            }
        }
        else{
            $sql = "select * from wechat_info";
        }
    }
}
/*王庆路 发布参考报价 end*/
/*王庆路 粉丝量*/
else if($_GET['fans']){
    $id = $_GET['fans'];
    if ($flag == 2){
        if ($id!='all'){
            switch ($id){
                case "1":
                    $sql = "select * from wechat_info where (fans_num<10000) order by ID asc";
                    break;
                case "2":
                    $sql = "select * from wechat_info where (fans_num BETWEEN 10001 and 50000) order by ID asc";
                    break;
                case "3":
                    $sql = "select * from wechat_info where (fans_num BETWEEN 50001 and 100000) order by ID asc";
                    break;
                case "4":
                    $sql = "select * from wechat_info where (fans_num BETWEEN 100001 and 200000) order by ID asc";
                    break;
                case "5":
                    $sql = "select * from wechat_info where (fans_num BETWEEN 200001 and 400000) order by ID asc";
                    break;
                case "6":
                    $sql = "select * from wechat_info where (fans_num BETWEEN 400001 and 800000) order by ID asc";
                    break;
                case "7":
                    $sql = "select * from wechat_info where (fans_num BETWEEN 800001 and 1200000) order by ID asc";
                    break;
                case "8":
                    $sql = "select * from wechat_info where (fans_num BETWEEN 1200001 and 2000000) order by ID asc";
                    break;
                case "9":
                    $sql = "select * from wechat_info where (fans_num>2000000) order by ID asc";
                    break;
                default:
                    die();
                    break;
            }
        }
        else{
            $sql = "select * from wechat_info";
        }
    }
    else{
        if ($id!='all'){
            switch ($id){
                case "1":
                    $sql = "select * from wechat_info where (fans_num<10000) order by ID asc";
                    break;
                case "2":
                    $sql = "select * from wechat_info where (fans_num BETWEEN 10001 and 50000) order by ID asc";
                    break;
                case "3":
                    $sql = "select * from wechat_info where (fans_num BETWEEN 50001 and 100000) order by ID asc";
                    break;
                case "4":
                    $sql = "select * from wechat_info where (fans_num BETWEEN 100001 and 200000) order by ID asc";
                    break;
                case "5":
                    $sql = "select * from wechat_info where (fans_num BETWEEN 200001 and 400000) order by ID asc";
                    break;
                case "6":
                    $sql = "select * from wechat_info where (fans_num BETWEEN 400001 and 800000) order by ID asc";
                    break;
                case "7":
                    $sql = "select * from wechat_info where (fans_num BETWEEN 800001 and 1200000) order by ID asc";
                    break;
                case "8":
                    $sql = "select * from wechat_info where (fans_num BETWEEN 1200001 and 2000000) order by ID asc";
                    break;
                case "9":
                    $sql = "select * from wechat_info where (fans_num>2000000) order by ID asc";
                    break;
                default:
                    die();
                    break;
            }
        }
        else{
            $sql = "select * from wechat_info";
        }
    }
}
/*王庆路 粉丝量 end*/
/*王庆路 粉丝认证*/
else if ($_GET['auth']!=null){
    $id = $_GET['auth'];
    if ($flag == "2"){
        if ($id!='all'){
            if ($id == "0"){
                $sql = "select * from wechat_info WHERE fans_authen = 0";
            }
            else{
                $sql = "select * from wechat_info WHERE fans_authen = 1";
            }
        }
        else{
            $sql = "select * from wechat_info";
        }
    }
    else{
        if ($id!='all'){
            if ($id == "0"){
                $sql = "select * from wechat_info WHERE fans_authen = 0";
            }
            else{
                $sql = "select * from wechat_info WHERE fans_authen = 1";
            }
        }
        else{
            $sql = "select * from wechat_info";
        }
    }
}
/*王庆路 粉丝认证 end*/
/*王庆路 微信认证*/
else if ($_GET['auth2']!=null){
    $id = $_GET['auth2'];
    if ($flag == "2"){
        if ($id!='all'){
            if ($id == "0"){
                $sql = "select * from wechat_info WHERE wechat_authen = 0";
            }
            else{
                $sql = "select * from wechat_info WHERE wechat_authen = 1";
            }
        }
        else{
            $sql = "select * from wechat_info";
        }
    }
    else{
        if ($id!='all'){
            if ($id == "0"){
                $sql = "select * from wechat_info WHERE wechat_authen = 0";
            }
            else{
                $sql = "select * from wechat_info WHERE wechat_authen = 1";
            }
        }
        else{
            $sql = "select * from wechat_info";
        }
    }
}
/*王庆路 微信认证 end*/
/*王庆路 阅读量*/
else if($_GET['view']!=null){
    $id = $_GET['view'];
    if ($flag == 2){
        if ($id!='all'){
            switch ($id){
                case "1":
                    $sql = "select * from wechat_info where (viewrefer_num BETWEEN 0 and 500) order by ID asc";
                    break;
                case "2":
                    $sql = "select * from wechat_info where (viewrefer_num BETWEEN 500 and 1000) order by ID asc";
                    break;
                case "3":
                    $sql = "select * from wechat_info where (viewrefer_num BETWEEN 1000 and 3000) order by ID asc";
                    break;
                case "4":
                    $sql = "select * from wechat_info where (viewrefer_num BETWEEN 3000 and 5000) order by ID asc";
                    break;
                case "5":
                    $sql = "select * from wechat_info where (viewrefer_num BETWEEN 5000 and 10000) order by ID asc";
                    break;
                case "6":
                    $sql = "select * from wechat_info where (viewrefer_num BETWEEN 10000 and 15000) order by ID asc";
                    break;
                case "7":
                    $sql = "select * from wechat_info where (viewrefer_num BETWEEN 15000 and 20000) order by ID asc";
                    break;
                case "8":
                    $sql = "select * from wechat_info where (viewrefer_num>20000) order by ID asc";
                    break;
                default:
                    die();
                    break;
            }
        }
        else{
            $sql = "select * from wechat_info";
        }
    }
    else{
        if ($id!='all'){
            switch ($id){
                case "1":
                    $sql = "select * from wechat_info where (viewrefer_num BETWEEN 0 and 500) order by ID asc";
                    break;
                case "2":
                    $sql = "select * from wechat_info where (viewrefer_num BETWEEN 500 and 1000) order by ID asc";
                    break;
                case "3":
                    $sql = "select * from wechat_info where (viewrefer_num BETWEEN 1000 and 3000) order by ID asc";
                    break;
                case "4":
                    $sql = "select * from wechat_info where (viewrefer_num BETWEEN 3000 and 5000) order by ID asc";
                    break;
                case "5":
                    $sql = "select * from wechat_info where (viewrefer_num BETWEEN 5000 and 10000) order by ID asc";
                    break;
                case "6":
                    $sql = "select * from wechat_info where (viewrefer_num BETWEEN 10000 and 15000) order by ID asc";
                    break;
                case "7":
                    $sql = "select * from wechat_info where (viewrefer_num BETWEEN 15000 and 20000) order by ID asc";
                    break;
                case "8":
                    $sql = "select * from wechat_info where (viewrefer_num>20000) order by ID asc";
                    break;
                default:
                    die();
                    break;
            }
        }
        else{
            $sql = "select * from wechat_info";
        }
    }
}
/*王庆路 阅读量 end*/
/*王庆路 微信名称查找*/
else if($_GET['name']!=null){
    $id = trim(htmlspecialchars($_GET['name']));
    if($flag==2){
        if ($id!='all'){
            $sql = "select * from wechat_info where name LIKE '%".$id."%'";
        }
        else{
            $sql = "select * from wechat_info";
        }
    }
    else{
        if ($id!='all'){
            $sql = "select * from wechat_info WHERE name LIKE '%".$id."%'";
        }
        else{
            $sql = "select * from wechat_info";
        }
    }

}
/*王庆路 微信名称查找*/
else{

}
/*--------------------------------------------------*/
$result=mysql_db_query($dbname,$sql);
?>
<table  width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#CCCCCC" id="searchtr" style="font-size:13px">
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
            <th height="30" width="100" bgcolor="#FFFFFF" align="center">标签</th>
            <th height="30" width="100" bgcolor="#CDD3EB">微信号</th>
            <th height="30" width="100" bgcolor="#CDD3EB">粉丝量</th>
            <th height="30" width="100" bgcolor="#CDD3EB">阅读参考数</th>
            <th height="30" width="100" bgcolor="#CDD3EB">头条报价</th>
            <th height="30" width="100" bgcolor="#CDD3EB">简介</th>
            <th height="30" width="100" bgcolor="#CDD3EB">粉丝认证</th>
            <th height="30" width="100" bgcolor="#CDD3EB">微信认证</th>
            <th height="30" width="100" bgcolor="#CDD3EB">地区</th>
            <th height="30" width="100" bgcolor="#CDD3EB">操作</th>
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
                    <DIV align=center>
                        <?php echo $rs["name"];?>
                        <input name="xz_mc_<?php echo $rs["ID"];?>" type="hidden" id="xz_mc_<?php echo $rs["ID"];?>" value="<?php echo $rs["name"];?>">
                    </DIV>
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
        <?php }}?>
</table>
<br />
