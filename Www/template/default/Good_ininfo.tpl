<!--{include file="header.tpl"}-->
<h3 class="topmenu">进货单详细信息(<!--{$order}-->)</h3>
<table class="slist">
	<thead>
		<tr>
			<th>物品名称</th>
			<th>供货商名称</th>
			<th>进货数量</th>
			<th>剩余数量</th>
			<th>进货价</th>
			<th>建议价</th>
			<th>生产日期</th>
			<th>过期日期</th>
			<th>操作</th>
		</tr>
	</thead>
	<tbody>
		<!--{section name=l loop=$inInfo}-->
		<form action="index.php?control=good&action=egin" method="post">
		<tr>
			<td><!--{$inInfo[l].11}--></td>
			<td>
			<select name="sp">
			<!--{section name=g loop=$sInfo}-->
			<option <!--{if $inInfo[l].1 == $sInfo[g].0}-->selected="selected"<!--{/if}--> value="<!--{$sInfo[g].0}-->"><!--{$sInfo[g].1}--></option>
			<!--{/section}-->
			</select>
			</td>
			<td><input type="text" style="width:80px;" name="nums" value="<!--{$inInfo[l].5}-->" /></td>
			<td><!--{$inInfo[l].10}--></td>
			<td><input type="text" style="width:60px;" name="inprice" value="<!--{$inInfo[l].3}-->" /></td>
			<td><input type="text" style="width:60px;" name="adprice" value="<!--{$inInfo[l].4}-->" /></td>
			<td><input type="text" style="width:90px;" name="prodate" onFocus="WdatePicker({lang:'zh_cn',skin:'whyGreen'})" value="<!--{$inInfo[l].12}-->" /></td>
			<td><input type="text" style="width:90px;" name="edate" onFocus="WdatePicker({lang:'zh_cn',skin:'whyGreen'})" value="<!--{$inInfo[l].2}-->" /></td>
			<td><input type="hidden" value="<!--{$inInfo[l].0}-->" name="gid" /><input type="submit" name="submit" value="修改" /></a>&nbsp;&nbsp;<a href="index.php?control=good&action=gindel&gid=<!--{$inInfo[l].0}-->">删除</a></td>
		</tr>
		</form>
		<!--{/section}-->
	</tbody>
</table>
<script type="text/javascript" language="javascript" src="images/datePicker/WdatePicker.js"></script>
<link href="images/datePicker/skin/WdatePicker.css" rel="stylesheet" type="text/css" />
<!--{include file="footer.tpl"}-->
