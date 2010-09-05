<!--{include file="header.tpl"}-->
<h3 class="topmenu">即将过期物品提示列表</h3>
<table class="slist">
	<thead>
		<tr>
			<th>名称</th>
			<th>过期时间</th>
			<th>剩余量</th>
			<th>供应商名称</th>
			<th>进货单号</th>
		</tr>
	</thead>
	<tbody>
		<!--{section name=l loop=$liblist}-->
		<tr>
			<td><!--{$liblist[l].0}--></td>
			<td><!--{$liblist[l].1}--></td>
			<td><!--{$liblist[l].2}--></td>
			<td><!--{$liblist[l].4}--></td>
			<td><!--{$liblist[l].3}--></td>
		</tr>
		<!--{/section}-->
	</tbody>
</table>
<!--{include file="footer.tpl"}-->
