<?php
/**
 * Created by 火一五信息科技有限公司.
 * Tel :15288986891
 * QQ  :3186355915
 * web :http://host.huo15.com
 * User: apple
 * Date: 2017/1/6
 * Time: 下午4:29
 */
?>
<table class="table">
	<TBODY>
	<TR>
		<TD style="PADDING-LEFT: 5px" bgColor=#f1f3f9>
			<UL class=meitilist>
				<LI style="CURSOR: pointer" onclick=mt_search3()>媒体类型-》</LI>
			</UL>
		</TD>
	</TR>
	<TR>
		<TD style="PADDING-LEFT: 5px" bgColor=#ffffff>
			<UL class=meitilist>
				<?php
				$sql1 = "select * from media_class where BigID=46 order by paixu desc";
				$result1 = mysql_db_query($dbname, $sql1);
				while ($rs1 = mysql_fetch_array($result1)) {
					?>
					<LI style="CURSOR: pointer"
					    onclick=mt_search1(<?php echo $rs1["ID"]; ?>)><?php echo $rs1["SmallClass"]; ?></LI>
					<?php
				} ?>
			</UL>
		</TD>
	</TR>
	<TR>
		<TD style="PADDING-LEFT: 5px" bgColor=#f1f3f9>
			<UL class=meitilist>
				<LI style="CURSOR: pointer" onclick=mt_search3()>综合门户媒体-》</LI>
			</UL>
		</TD>
	</TR>
	<TR>
		<TD style="PADDING-LEFT: 5px" bgColor=#ffffff>
			<UL class=meitilist>
				<?php
				$sql7 = "select * from menhu_class order by paixu desc";
				$result7 = mysql_db_query($dbname, $sql7);
				while ($rs7 = mysql_fetch_array($result7)) {
					?>
					<LI style="CURSOR: pointer"
					    onclick="mt_search7('<?php echo $rs7["BigClass"]; ?>')"><?php echo $rs7["BigClass"]; ?></LI>
					<?php
				} ?>
			</UL>
		</TD>
	</TR>
	<TR>
		<TD style="PADDING-LEFT: 5px" bgColor=#f1f3f9>
			<UL class=meitilist>
				<LI style="CURSOR: pointer" onclick=mt_search3()>价格分类媒体-》</LI>
			</UL>
		</TD>
	</TR>
	<TR>
		<TD style="PADDING-LEFT: 5px" bgColor=#ffffff>
			<UL class=meitilist>
				<LI style="CURSOR: pointer" onclick=mt_search2(0)>0-40元</LI>
				<LI style="CURSOR: pointer" onclick=mt_search2(1)>40-70元</LI>
				<LI style="CURSOR: pointer" onclick=mt_search2(2)>70-120元</LI>
				<LI style="CURSOR: pointer" onclick=mt_search2(3)>120元以上</LI>
			</UL>
		</TD>
	</TR>
	<TR>
		<TD style="PADDING-LEFT: 5px" bgColor=#f1f3f9>
			<UL class=meitilist>
				<LI style="CURSOR: pointer" onclick=mt_search3()>地区分类媒体-》</LI>
			</UL>
		</TD>
	</TR>
	<TR>
		<TD style="PADDING-LEFT: 5px" bgColor=#ffffff>
			<UL class=meitilist>
				<?php
				$sql6 = "select * from diqu_class order by paixu asc";
				$result6 = mysql_db_query($dbname, $sql6);
				while ($rs6 = mysql_fetch_array($result6)) {
					?>
					<LI style="CURSOR: pointer"
					    onclick="mt_search6('<?php echo $rs6["BigClass"]; ?>')"><?php echo $rs6["BigClass"]; ?></LI>
					<?php
				} ?>
			</UL>
		</TD>
	</TR>
	<TR>
		<TD style="PADDING-LEFT: 5px" bgColor=#f1f3f9>
			<UL class=meitilist>
				<LI style="CURSOR: pointer" onclick=mt_search3()>新闻源-》</LI>
			</UL>
		</TD>
	</TR>
	<TR>
		<TD style="PADDING-LEFT: 5px" bgColor=#ffffff>
			<UL class=meitilist>
				<LI style="CURSOR: pointer" onclick="mt_search4('百度新闻源')">百度新闻源</LI>
				<LI style="CURSOR: pointer" onclick="mt_search4('谷歌新闻源')">谷歌新闻源</LI>
				<LI style="CURSOR: pointer" onclick="mt_search4('搜狗新闻源')">搜狗新闻源</LI>
				<LI style="CURSOR: pointer" onclick="mt_search4('360新闻源')">360新闻源</LI>
				<LI style="CURSOR: pointer" onclick="mt_search4('搜搜新闻源')">搜搜新闻源</LI>
				<LI style="CURSOR: pointer" onclick="mt_search4('非新闻源')">无</LI>
			</UL>
		</TD>
	</TR>
	<TR>
		<TD style="PADDING-LEFT: 5px" bgColor=#f1f3f9>
			<UL class=meitilist>
				<LI style="CURSOR: pointer" onclick=mt_search3()>链接-》</LI>
			</UL>
		</TD>
	</TR>
	<TR>
		<TD style="PADDING-LEFT: 5px" bgColor=#ffffff>
			<UL class=meitilist>
				<LI style="CURSOR: pointer" onclick="mt_search5('可带网址')">可带网址</LI>
				<LI style="CURSOR: pointer" onclick="mt_search5('可超链接')">可超链接</LI>
				<LI style="CURSOR: pointer" onclick="mt_search5('不能带网址')">不能带网址</LI>
			</UL>
		</TD>
	</TR>
	</TBODY>
</table>
