<!--{include file="header.tpl"}-->
<form>
<label>配送日期：</label><input type="text" name="date" onFocus="WdatePicker({lang:'zh_cn',skin:'whyGreen'})" class="text" /><input type="hidden" name="control" value="good" /><input type="hidden" name="action" value="toprint" /><input type="submit" name="submit" value="搜索" />
</form>
<h3 class="topmenu">发货物品统计汇总表</h3>
<table class="slist">
	<thead>
		<tr>
			<th>物品</th>
			<th>总量</th>
		</tr>
	</thead>
	<tbody>
		<!--{section name=ac loop=$aCll}-->
		<tr>
			<td><!--{$aCll[ac].0}--></td>
			<td><!--{$aCll[ac].1}--></td>
		</tr>
		<!--{/section}-->
	</tbody>
</table>
<h3 class="topmenu">发货物品分车汇总表</h3>
<table class="slist">
	<thead>
		<tr>
			<th>物品</th>
			<!--{section name=cn loop=$cNos}-->
			<th><!--{$cNos[cn]}--></th>
			<!--{/section}-->
		</tr>
	</thead>
	<tbody>
		<!--{section name=ag loop=$aGll}-->
		<tr>
			<!--{section name=eg loop=$aGll[ag]}-->
			<td><!--{$aGll[ag][eg]}--></td>
			<!--{/section}-->
		</tr>
		<!--{/section}-->
	</tbody>
</table>
<script language="javascript" type="text/javascript">
function setthis(obj)
{
	var s = parseInt($(obj).val());
	if(!isNaN(s) && (s == 3 || s == 5))
	{
		if(s == 5 && !confirm('确定将该订单作废？？'))
			return false;

		location.href="index.php?control=card&action=cstatus&s="+s+"&coid="+$('#coid').val();
	}
}
</script>
<script type="text/javascript" language="javascript" src="images/datePicker/WdatePicker.js"></script>
<link href="images/datePicker/skin/WdatePicker.css" rel="stylesheet" type="text/css" />
<!--{include file="footer.tpl"}-->
