<?php
/**
 * Created by PhpStorm.
 * User: 王庆路
 * Date: 2016/11/30
 * Time: 21:59
 */
?>
<script src="/ueditor/ueditor.config.js"></script>
<script src="/ueditor/ueditor.all.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        var ue = new UE.ui.Editor;
        var nums = document.getElementsByTagName("textarea").length;
        for(var i=0; i<nums; i++){
            document.getElementsByTagName("textarea")[i].style.visibility = "visible";
            ue.render(document.getElementsByTagName("textarea")[i]);
        }
    });
</script>   
