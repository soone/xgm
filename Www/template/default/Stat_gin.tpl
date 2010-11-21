<!--{include file="header.tpl"}-->
<h3 class="topmenu">对应进货单列表(<!--{$gName}-->)</h3>
<div>
<form>
	<label>进货时间：</label><input type="text" class="text" name="sdate" style="width:120px;" onFocus="WdatePicker({lang:'zh_cn',skin:'whyGreen'})" value="<!--{$smarty.get.sd}-->" />-><input type="text" class="text" name="edate" style="width:120px;" onFocus="WdatePicker({lang:'zh_cn',skin:'whyGreen'})" value="<!--{$smarty.get.ed}-->" /><br />
	<label>供应商：</label>
	<select name="sp">
		<!--{section name=s loop=$sp}-->
		<option value="<!--{$sp[s].0}-->"><!--{$sp[s].1}--></option>
		<!--{/section}-->
	</select>&nbsp;&nbsp;
	<label>物品名称：</label><input type="text" class="text" name="cphone" style="width:120px;" value="<!--{$smarty.get.cphone}-->" />&nbsp;&nbsp;
	<input type="hidden" name="control" value="stat" />
	<input type="hidden" name="action" value="gin" />
	<input type="submit" name="submit" value="查看" />
</form>
</div>
<table class="slist">
	<thead>
		<tr>
			<th>进货单号</th>
			<th>供应商</th>
			<th>物品名称</th>
			<th>数量</th>
			<th>进货价格</th>
			<th>进货日期</th>
		</tr>
	</thead>
	<tbody>
		<!--{section name=l loop=$goodList}-->
		<tr>
			<td><!--{$goodList[l].0}--></td>
			<td><!--{$goodList[l].1}--></td>
			<td><!--{$goodList[l].1}--></td>
			<td><!--{$goodList[l].1}--></td>
			<td><!--{$goodList[l].1}--></td>
			<td><!--{$goodList[l].1}--></td>
		</tr>
		<!--{/section}-->
	</tbody>
</table>
<script type="text/javascript" language="javascript" src="images/datePicker/WdatePicker.js"></script>
<link href="images/datePicker/skin/WdatePicker.css" rel="stylesheet" type="text/css" />
<!--{include file="footer.tpl"}-->
