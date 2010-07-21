<!--{include file="header.tpl"}-->
<h3 class="topmenu">配送单列表(订单号<!--{$orderNo}-->)</h3>
<form action="index.php?control=good&action=gout&go=<!--{$orderNo}-->" method="post">
<table class="slist">
	<tr>
		<th width="20%">物品</th>
		<th width="10%">需求量</th>
		<th width="70%">现有库存情况</th>
	</tr>
	<!--{section name=s loop=$goInfo}-->
	<tr>
		<td><!--{$goInfo[s].1}--></td>
		<td><!--{$goInfo[s].2}--></td>
		<td>
			<!--{if $goInfo[s].3}-->
			<!--{section name=ts loop=$goInfo[s].3}-->
			<b>进货单号:</b><!--{$goInfo[s].3[ts].1}-->&nbsp;&nbsp;
			<b>进货时间:</b><!--{$goInfo[s].3[ts].3}-->&nbsp;&nbsp;
			<b>余量:</b><!--{$goInfo[s].3[ts].2}-->&nbsp;&nbsp;
			<b>出库量:</b><input type="text" name="yl[<!--{$goInfo[s].0}-->][<!--{$goInfo[s].3[ts].0}-->]" value="0" class="text" style="width:50px;" /><br />
			<!--{/section}-->
			<!--{/if}-->
		</td>
	</tr>
	<!--{/section}-->
<table>
<table class="slist">
	<!--{if $cpInfo}-->
	<tr>
		<th><label>指定车牌：</label></th>
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
		<th>远程费：</th>
		<td colspan="3"><input type="text" name="yc" value="0" class="text" style="width:120px;" /></td>
	</tr>
	<tr>
		<th>备注：</th>
		<td colspan="3"><textarea name="omark"><!--{$oMark}--></textarea></td>
	</tr>
	<tr>
		<th></th>
		<td colspan="3"><input type="submit" name="submit" value="确认出库并分车" /></td>
	</tr>
	<!--{else}-->
	<tr>
		<td colspan="4">目前还没有司机和车的资料，请<a href="index.php?control=other&action=scman">点击这里</a>填写</td>
	</tr>
	<!--{/if}-->
</table>
</form>
<!--{include file="footer.tpl"}-->
