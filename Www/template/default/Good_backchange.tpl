<!--{include file="header.tpl"}-->
<h3 class="topmenu">配送单作废操作(订单号<!--{$orderNo}-->)</h3>
<form action="index.php?control=good&action=backchange&go=<!--{$orderNo}-->&id=<!--{$id}-->" method="post">
<table class="slist">
	<tr>
		<th><label>作废类型：</label></th><td colspan="2"><input type="radio" name="t" value="1" />部分送达&nbsp;&nbsp;<input type="radio" name="t" value="2" checked="checked" />全部退货</td>
	</tr>
	<tr>
		<th>物品</th>
		<th>原数量</th>
		<th>送达数量</th>
	</tr>
	<!--{section name=s loop=$gInfo}-->
	<tr>
		<td><!--{$gInfo[s].2}--></td>
		<td><!--{$gInfo[s].1}--></td>
		<td><input type="text" class="text" value="0" style="width:120px;" name="oknum[<!--{$gInfo[s].0}-->]" /></td>
	</tr>
	<!--{/section}-->
	<tr>
		<td colspan="3"><input type="submit" name="submit" value="作废配送单并通知库管回收物品" /></td>
	</tr>
</table>
</form>
<script language="javascript" type="text/javascript">
$('input[name="t"]').bind('change', function(){
	if($('input[name="t"]').attr('checked') === true)
		$('input[name="submit"]').val('作废配送单并生成异常配送单同时通知库管回收物品');
	else
		$('input[name="submit"]').val('作废配送单并通知库管回收物品');
});
</script>
<!--{include file="footer.tpl"}-->
