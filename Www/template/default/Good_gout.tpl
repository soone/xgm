<!--{include file="header.tpl"}-->
<h3 class="topmenu">配送单列表(订单号<!--{$orderNo}-->)</h3>
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
			<b>出库量:</b><input type="text" name="<!--{$goInfo[s].0}-->_<!--{$goInfo[s].3[ts].0}-->" value="0" class="text" style="width:50px;" /><br />
			<!--{/section}-->
			<!--{/if}-->
		</td>
	</tr>
	<!--{/section}-->
</table>
<!--{include file="footer.tpl"}-->
