<?php
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
$sqlt = "select * from wechat_list where ID = ".$ID." and VipUser='".$VipUser."'";
$resultT = mysql_db_query($dbname,$sqlt);
$rst = mysql_fetch_array($resultT);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=7"/>
    <title>后台管理中心</title>
    <link href="../images/reset.css" rel="stylesheet" type="text/css"/>
    <link href="../images/zh-cn-system.css" rel="stylesheet" type="text/css"/>
    <!--王庆路 引入发布任务预览框样式-->
    <!--<link href="../huo15template/css/stylecopy.css" rel="stylesheet" type="text/css">-->
    <link href="../huo15template/css/fbmis.css" rel="stylesheet" type="text/css">
    <!--王庆路 引入发布任务预览框样式 end-->
    <script language="javascript" type="text/javascript" src="../images/jquery.min.js"></script>
    <script language="javascript" type="text/javascript" src="../images/styleswitch.js"></script>
    <!--王庆路 将kindeditor替换为ueditor-->
    <!--<script charset="utf-8" src="../kindeditor/kindeditor.js"></script>
    <script>
        KE.show({
            id: 'neirong',
            afterCreate: function (id) {
                KE.event.ctrl(document, 13, function () {
                    KE.util.setData(id);
                    document.forms['example'].submit();
                });
                KE.event.ctrl(KE.g[id].iframeDoc, 13, function () {
                    KE.util.setData(id);
                    document.forms['example'].submit();
                });
            }
        });
    </script>-->
    <?php include("../ueditor.php")?>
    <!--王庆路 将kindeditor替换为ueditor end-->
    <style type="text/css">
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

        .nextpage {
            background: #3E5F9B;
            color: #fff;
            bottom: 0;
            margin: 0px;
            left: 0px;
            position: fixed;
            line-height: 25px;
            width: 100%;
            z-index: 999;
            padding-left: 10px;
            _bottom: auto;
            _width: 100%;
            _position: absolute;
            font-size: 14;
            padding-left: 0px;
            _top: expression(eval(document.documentElement.scrollTop+document.documentElement.clientHeight-this.offsetHeight-(parseInt(this.currentStyle.marginTop,20)||0)-(parseInt(this.currentStyle.marginBottom,20)||0)));
        }
    </style>
</head>
<body topmargin="0" bottommargin="0" leftmargin="0" rightmargin="0">
<DIV style="_width: 80.9%; _margin-right: -12px" id=main_frameid class="pad-10 display">
    <script language="JavaScript" type="text/JavaScript">
        $(function() {
            $("#conurl").hide();
            $("#upload").hide();
            $("#uploadLabel").show();
            $("#file_upload").show();
            $("#art_url_input").show();
            $("#file_upload-button").show();
            $("#up-img1").attr('src','<?php if ($rst['img_path'])echo $rst['img_path'];else echo "/huo15template/img/fengmian.jpg"?>');
            $("#titiePreview").html('<?php echo $rst['title']?>');
            $("#zuozhe").val('<?php if($ID){echo $rst['writter'];} ?>');
            $("#upload_path").val('<?php $rst['img_path']?>');
            $("#biaoti").bind('input propertychange',function () {
                $("#titiePreview").html($(this).val());
            })
        });
    </script>
    <style>
        .on {
            display: none;
        }
    </style>
    <div class="col-2  col-auto">
        <h6>微信发布编辑
            <!-- <span  style="padding-left:15px;cursor:pointer" onclick="$('#form1').slideToggle();">切换发布框</span> <span id='meiturn' onclick='meiturn()' style="padding-left:15px;cursor:pointer">切换查找框</span>-->
        </h6>
        <div class="content">
            <form id="form1" name="form1" method="post" action="savewechat.php?action=edit" onsubmit="return check()" style="display:">
                <input name="userid" type="hidden" value="<?php if($ID){echo $ID;}?>">
                <table width="100%" cellpadding="0" cellspacing="1" bgcolor="#e2e2e2" id='step2' style="font-size:12px">
                    <tr>
                        <td width="12%" height="30" bgcolor="#FFFFFF">
                            <div align="center">标 题</div>
                        </td>
                        <td width="88%" align="left" bgcolor="#FFFFFF" style="padding:10px;">
                            <input name="biaoti" type="text" class="txt" id="biaoti" lang='require' size="100" xml:lang="require" value="<?php echo $rst['title'] ?>"/>
                            <input type="hidden" name="dingdan" id="dingdan" value=""/>
                            （标题字数尽量控制在18个汉字内！）
                        </td>
                    </tr>
                    <tr>
                        <td width="12%" height="30" bgcolor="#FFFFFF">
                            <div align="center">作者</div>
                        </td>
                        <td width="88%" align="left" bgcolor="#FFFFFF" style="padding:10px;">
                            <input name="zuozhe" type="text" class="txt" id="zuozhe" lang='require' size="100" xml:lang="require"
                                   value="<?php if($ID){echo $rst['writter'];} ?>"/>
                            <input type="hidden" name="dingdan" id="dingdan" value=""/>
                        </td>
                    </tr>
                    <tr>
                        <td height="30" bgcolor="#FFFFFF">
                            <div id="tid" align="center">内 容</div>
                        </td>
                        <td align="left" bgcolor="#FFFFFF" style="padding:10px;">
                            <div id="nr">
                                <!--王庆路 去掉visibility:hidden-->
                                <textarea name="neirong" style="width:100%;height:330px;"><?php if($ID){echo $rst['content'];}  ?></textarea>
                                <!--王庆路 去掉visibility:hidden end-->
                                <input type="submit" name="button" id="buttonsave" value=" 提 交 " style="width:60px; height:25px;display:none"/>
                            </div>

                            <label id="uploadLabel" class="uploadifyQueue" style="display: none;"></label>


                        </td>
                    </tr>
                    <tr>

                        <td height="30" bgcolor="#FFFFFF">
                            <div id="tid" align="center">图片上传</div>
                        </td>

                        <td bgcolor="#FFFFFF">
                            <!--王庆路 上传图片预览-->
                            <div class="publish" style="width: 50%">
                                <div class="fb_form" style="width: 100%">
                                    <div class="type-one type-show" style="display: block; margin:0px; padding:0px;width: 100%">
                                        <div class="fl" id="ylfl">
                                            <div class="to-yl">
                                                <div class="up-img">
                                                    <img id="up-img1" src="/huo15template/img/fengmian.jpg" alt="">
                                                    <span id="titiePreview" class="up-img-text yl-title">标题</span>
                                                </div>
                                                <div class="other_bg">
                                                    <img src="../huo15template/img/word_bg.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--王庆路 上传图片预览 end-->
                            <div style="width: 50%">
                                <input id="art_url_input" name="art_url_input" type="text" size="100">
                                <input id="file_upload" name="file_upload" type="file" multiple="true">
                                <input id="upload_path" name="upload_path" type="hidden"
                            </div>
                            <!--王庆路 预览图右侧-->
                            <!--上传组件-->

                            <script src="../huo15template/uploadify/jquery.uploadify.min.js" type="text/javascript"></script>
                            <link rel="stylesheet" type="text/css" href="../huo15template/uploadify/uploadify.css">
                            <script type="text/javascript">
                                <?php $timestamp = time();?>
                                $(function() {
                                    $('#file_upload').uploadify({
                                        'buttonText' : '文件上传',

                                        'uploader' : "upload2.php",
                                        'formData'     : {
                                            'timestamp' : '<?php echo $timestamp;?>',
                                            '_token'     : "{{csrf_token()}}"
                                        },
                                        'swf'      : "../huo15template/uploadify/uploadify.swf",
                                        'onUploadSuccess' : function(file, data, response) {
                                            $('#art_url_input').val(data);
                                            var strOrg = $('#art_url_input').val();
                                            $('#art_url_input').val(strOrg.slice(31));
                                            //$('#art_url_input').attr('src','/'+data);
                                            $("#up-img1").attr('src',data);
                                            $('#upload_path').val(data);
                                            //$("#wx_pic").val(data);
                                        }
                                    });
                                });
                            </script>
                            <style>
                                .uploadify{display:inline-block;}
                                .uploadify-button{border:none; border-radius:5px; margin-top:8px;background: #0B96D9;color:#fff;text-align: center}
                                table.add_tab tr td span.uploadify-button-text{color: #FFF; margin:0;}
                            </style>
                            <!--上传组件 end-->

                        </td>

                    </tr>
                    <tr>
                        <td height="30" bgcolor="#FFFFFF">
                            <div align="center">金 额</div>
                        </td>
                        <td align="left" bgcolor="#FFFFFF" style="padding-left:10px;"><input name="totalmoney"
                                                                                             type="hidden"
                                                                                             id="totalmoney"
                                                                                             style="border:0px;"
                                                                                             value="0"
                                                                                             readonly="readonly"/>(余额：<font
                                color="#FF0000"><b><?php echo $yue; ?></b></font>元 )
                            <font color="blue">第一步：填写标题、内容；点击下一步；第二步：选择要提交的网站，发布成功，等待回链。</font>
                        </td>
                    </tr>
                </table>
                <div align="center">
                    <!--input name="totalmoney" type="hidden" id="totalmoney" style="border:0px;" value="0" readonly="readonly"/-->
                    <input type="hidden" id='yixuanhidden' name='yixuanhidden'/>
                    <!--<input type="button" value="下一步 选择媒体" onclick="nextpage()" style="width:130px; height:30px;text-align:center;  margin-top:10px; "/>-->
                    <!--input type="button" value="上一步 选择媒体" onclick="perpage()" style="width:130px;height:30px; text-align:center;margin-top:3px;"/><input type="button" value=" 提 交 " onclick="$('#buttonsave').click()"  style="width:80px;height:30px; text-align:center;margin-top:3px;"/-->
                    <input type="button" value=" 提 交 " onclick="$('#buttonsave').click()" style="width:80px;height:30px; text-align:center;margin-top:3px;"/>
                </div>
            </form>

            <br/>
        </div>
    </div>
    <div class="bk20 hr"></div>
</div>
<div id="background" class="background" style="display: none; "></div>
<div id="progressBar" class="progressBar" style="display: none; ">数据加载中，请稍等...</div>

<script type="text/javascript">
    $(document).ready(function () {
        var ajaxbg = $("#background,#progressBar");
        ajaxbg.hide();
        $(document).ajaxStart(function () {
            ajaxbg.show();
        }).ajaxStop(function () {
            ajaxbg.hide();
        });
        //mt_search();
    })

    function setprice(val) {
        $("#jiage").val(val * 15);
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
    function wc_search_area(area) {
        $.get("../user/search2.php",{"area":area},function (data) {
            $("#s_wechat").html(data);
        });
    }

    function meiturn() {
        $("#searchtrun").slideToggle();
    }

    function sel(id, tr, jg, yue) {
        var ye = yue;
        var s7 = jg;
        var s2 = $("#xz_mc_" + id).val();
        //alert(yue);
        //alert(s7);
        //如何取消选择，运行yixuansc，减掉选择金额
        if ($("#xz_" + id).attr("checked") == false) {
            yixuancl(id, s2, s7);
            return false;
        }

        if (Number(ye) >= Number(($("#totalmoney").val() * 1 + s7 * 1))) {
            var yx = $("#yixuanhidden").val();
            $("#yixuan").show();
            if (yx.indexOf(tr) == -1) {
                $("#yixuanhidden").val(id + ":" + s2 + "," + yx);
                $("#totalmoney").val($("#totalmoney").val() * 1 + s7 * 1)
                $("#totalmoney2").html($("#totalmoney2").html() * 1 + s7 * 1)
                $("#yixuantr").append("<span id='yixuantr2_" + id + "'>&nbsp;" + s2 + s7 + "元<a href='javascript:;'onclick=\"yixuancl('" + id + "','" + s2 + "'," + s7 + ")\" style='color:#FF0'>[X]</a></span>");
            }
        }
        else {
            $("#biaoti")[0].focus();
            alert('余额不足，请先充值');
            $("#xz_" + id).attr("checked", false);
            return false;
        }
    }

    function yixuancl(tr, mc, je) {
        var yx = $("#yixuanhidden").val();
        //yx=yx.replace("$"+tr+"$,","");
        //yx=yx.replace(tr+",","");

        yx = yx.replace(tr + ":" + mc + ",", "");
        $("#yixuanhidden").val(yx);
        $("#xz_" + tr).attr("checked", false);
        $("#yixuantr2_" + tr).remove();
        $("#totalmoney").val($("#totalmoney").val() * 1 - je * 1)
        $("#totalmoney2").html($("#totalmoney2").html() * 1 - je * 1)
    }

    function yixuan(s1, s2, s3, s4, s5, s6, tr, id) {
        var ye = 0.00;
        var s7 = s3;

        if ($("#xz_" + id).attr("checked") == false) {
            yixuansc(id, s7);
            return false;
        }
        if (ye >= ($("#totalmoney").val() * 1 + s7 * 1)) {
            var yx = $("#yixuanhidden").val();
            $("#yixuan").show();
            if (yx.indexOf(tr) == -1) {
                $("#yixuanhidden").val(tr + "," + yx);
                $("#totalmoney").val($("#totalmoney").val() * 1 + s7 * 1)
                $("#totalmoney2").html($("#totalmoney2").html() * 1 + s7 * 1)
                $("#yixuantr").append("<span id='yixuantr2_" + id + "'>" + s2 + s7 + "元<a href='javascript:;' onclick=\"yixuansc('" + id + "'," + s7 + ")\" style='color:#FF0'>[X]</a></span>&nbsp;&nbsp;");
            }
        }
        else {
            $("#biaoti")[0].focus();
            alert('余额不足，请先充值');
            $("#xz_" + id).attr("checked", false);
            return false;
        }
    }

    function yixuansc(tr, je) {
        var yx = $("#yixuanhidden").val();
        //yx=yx.replace("$"+tr+"$,","");
        yx = yx.replace(tr + ",", "");
        $("#yixuanhidden").val(yx);
        $("#xz_" + tr).attr("checked", false);
        $("#yixuantr2_" + tr).remove();
        $("#totalmoney").val($("#totalmoney").val() * 1 - je * 1)
        $("#totalmoney2").html($("#totalmoney2").html() * 1 - je * 1)
    }

    function check() {
        var flg = true;
        var flg1 = true;
        $("input[lang='require']").each(function () {
            $(this).css("border-color", "#ffffff");
            if ($(this).val() == "") {
                flg = false;
                $(this).css("border-color", "#FF0000");
            }
        })
        $("select[lang='require']").each(function () {
            $(this).css("background-color", "#ffffff");
            if ($(this).val() == "0") {
                flg1 = false;
                $(this).css("background-color", "#FF0000");
            }
        })
        if (flg == false || flg1 == false) {
            alert('红色提示为关键信息,请填写完整,不能空!');
            return false;
        }
        var reg = new RegExp(/^[^*$#\\~@!&%￥<>=|{}+-\/]+$/);
        if (!reg.test(document.form1.biaoti.value)) {
            alert("不能输入特殊字符！");
            document.form1.biaoti.focus();
            return false;
        }
        /*var s7 = $("#yixuanhidden").val();
        if (s7.replace("$", "").replace(",", "").replace(" ", "") == "") {
            alert('未选择任何频道');
            return false;
        }*/
        return true;
    }

    /*
     function perpage(){
     $("#flselect").show();
     $("#form1").hide();
     }

     function nextpage(){
     $("#flselect").hide();
     $("#form1").show();
     }
     */

    function nextpage() {
        if ($("#biaoti").val() != "") {
            if($("#art_url_input").val()!=""){
                $("#flselect").show();
                $("#form1").hide();
            }
            else{
                alert('请上传封面图片!');
            }
        }
        else {
            alert('请先填写标题与内容!');
        }
    }

    function perpage() {
        $("#flselect").hide();
        $("#form1").show();
    }

    function clearall() {
        var checkboxs = $(":checkbox");
        for (var i = 0; i < checkboxs.length; i++) {
            if (checkboxs[i].name == "xz") {
                if (checkboxs[i].checked) {
                    checkboxs[i].click();
                    checkboxs[i].checked = false;
                }
            }
        }
        $("#yixuantr").html("");
    }

</script>

<script language="javascript">
    var rows = document.getElementsByTagName('tr');//获取所有表格行
    for (var i = 0; i < rows.length; i++) {//然后对其遍历
        rows[i].onmouseover = function () {
            this.className += 'highlight';//鼠标经过时，显示样式altrow,注意，js中的样式是className而不是class，这个是新手容易犯的错误；
        }
        rows[i].onmouseout = function () {
            this.className = this.className.replace('highlight', '');//鼠标一走的时候，把样式也去掉
        }
    }

</script>
</body>
</html>