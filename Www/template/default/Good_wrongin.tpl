<!--{include file="header.tpl"}-->
<h3 class="topmenu">作废配送单列表</h3>
<table class="slist">
	<thead>
		<tr>
			<th>单号</th>
			<th>类型</th>
			<th>状态</th>
			<th>生成时间</th>
			<th>操作</th>
		</tr>
	</thead>
	<!--{if $page}-->
	<tfoot>
		<tr>
			<td colspan="8">
				<div class="page">
					<ul>
						<li class="all">总<!--{$page['allPages']}-->页</li>
						<li><a href="index.php?control=good&action=wrongin">|<</a></li>
						<li><a href="index.php?control=good&action=wrongin&page=<!--{$page['prevPage']}-->"><<</a></li>
						<!--{section name=p loop=$page['max']+$page['min'] start=$page['min'] max=$page['max']}-->
						<li><a href="index.php?control=good&action=wrongin&page=<!--{$smarty.section.p.index}-->"><!--{$smarty.section.p.index}--></a></li>
						<!--{/section}-->
						<li><a href="index.php?control=goodaction=wrongin&page=<!--{$page['nextPage']}-->">>></a></li>
						<li><a href="index.php?control=goodaction=wrongin&page=<!--{$page['allPages']}-->">>|</a></li>
					
					</ul>
				</div>
			</td>
		</tr>
	</tfoot>
	<!--{/if}-->
	<tbody>
		<!--{section name=l loop=$gelist}-->
		<tr>
			<td><!--{$gelist[l].1}--></td>
			<td><!--{if $gelist[l].3 == 1}-->部分退货<!--{else if $gelist[l].3 == 2}-->全部退货<!--{/if}--></td>
			<td><!--{if $gelist[l].2 == 1}-->回收完成<!--{else}-->未完成回收<!--{/if}--></td>
			<td><!--{$gelist[l].4}--></td>
			<td><a href="index.php?control=good&action=gowrongin&order=<!--{$gelist[l].1}-->&geid=<!--{$gelist[l].0}-->">退货入库操作</a></td>
		</tr>
		<!--{/section}-->
	</tbody>
</table>
<!--{include file="footer.tpl"}-->
