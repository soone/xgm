<!--{include file="header.tpl"}-->
<h3 class="topmenu">对应进货单列表(<!--{$gName}-->)</h3>
<table class="slist">
	<thead>
		<tr>
			<th>进货单号</th>
			<th>进货日期</th>
		</tr>
	</thead>
	<tbody>
		<!--{section name=l loop=$inOrderList}-->
		<tr>
			<td><!--{$inOrderList[l].0}--></td>
			<td><!--{$inOrderList[l].1}--></td>
		</tr>
		<!--{/section}-->
	</tbody>
</table>
<!--{include file="footer.tpl"}-->