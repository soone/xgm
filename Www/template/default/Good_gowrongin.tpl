<!--{include file="header.tpl"}-->
<h3 class="topmenu">异常配送回库操作(<!--{$order}-->)</h3>
<form action="index.php?control=good&action=gowrongin&order=<!--{$order}-->" method="post">
<table class="slist">
	<tr>
		<th width="20%" style="text-align:center">物品</th>
		<th width="10%" style="text-align:center">需求量</th>
		<th width="20%" style="text-align:center">生产日期</th>
		<th width="50%" style="text-align:center">回收数量</th>
	</tr>
	<!--{section name=s loop=$orderInfo}-->
	<tr>
		<td><!--{$orderInfo[s].1}--></td>
		<td><!--{$orderInfo[s].3}--></td>
		<td><!--{$orderInfo[s].2}--></td>
		<td>
			<input type="text" name="yll[<!--{$orderInfo[s].0}-->]" disabled="disabled" value="<!--{$orderInfo[s].3}-->" class="text" style="width:50px;" />
			<input type="hidden" name="yl[<!--{$orderInfo[s].0}-->]" value="<!--{$orderInfo[s].3}-->" class="text" style="width:50px;" />
		</td>
	</tr>
	<!--{/section}-->
	<tr>
		<td colspan="4"><input type="submit" name="submit" value="提交物品回库" /></td>
	</tr>
</table>
</form>
<!--{include file="footer.tpl"}-->
