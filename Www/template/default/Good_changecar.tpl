<!--{include file="header.tpl"}-->
<h3 class="topmenu">修改分车(订单号<!--{$oid}-->)</h3>
<form action="index.php?control=good&action=changecar&oid=<!--{$oid}-->" method="post">
<table class="slist">
	<tr>
		<th><label>原指定车牌</label></th>
		<td><!--{$car}--></td>
	</tr>
	<tr>
		<th><label>指定新车牌：</label></th>
		<td>
			<select name="cp">
				<option value="">请选择</option>
				<!--{section name=cp loop=$cpInfo}-->
				<option value="<!--{$cpInfo[cp].0}-->"><!--{$cpInfo[cp].1}--></option>
				<!--{/section}-->
			</select>
		</td>
	</tr>
	<tr>
		<th></th>
		<td colspan="3"><input type="submit" name="submit" value="修改分车信息" /></td>
	</tr>
</table>
</form>
<!--{include file="footer.tpl"}-->
