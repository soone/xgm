<!--{include file="header.tpl"}-->
<h3 class="topmenu">供应商列表</h3>
<table class="slist">
	<thead>
		<tr>
			<th>公司名称</th>
			<th>联络人1</th>
			<th>联络方式</th>
			<th>联络人2</th>
			<th>联络方式</th>
			<th>主管</th>
			<th>主管直线</th>
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
						<li><a href="index.php?action=suplist">|<</a></li>
						<li><a href="index.php?action=suplist&page=<!--{$page['curPage']-1}-->"><<</a></li>
						<!--{section name=p loop=$page['max']+$page['min'] start=$page['min'] max=$page['max']}-->
						<li><a href="index.php?action=suplist&page=<!--{$smarty.section.p.index}-->"><!--{$smarty.section.p.index}--></a></li>
						<!--{/section}-->
						<li><a href="index.php?action=suplist&page=<!--{$page['curPage']+1}-->">>></a></li>
						<li><a href="index.php?action=suplist&page=<!--{$page['allPages']}-->">>|</a></li>
					
					</ul>
				</div>
			</td>
		</tr>
	</tfoot>
	<!--{/if}-->
	<tbody>
		<!--{section name=l loop=$slist}-->
		<tr>
			<td><!--{$slist[l].1}--></td>
			<td><!--{$slist[l].2}--></td>
			<td><!--{$slist[l].3}--><br /><!--{$slist[l].4}--></td>
			<td><!--{$slist[l].5}--></td>
			<td><!--{$slist[l].6}--><br /><!--{$slist[l].7}--></td>
			<td><!--{$slist[l].8}--></td>
			<td><!--{$slist[l].9}--></td>
			<td><a href="index.php?action=supedit&spid=<!--{$slist[l].0}-->">修改</a></td>
		</tr>
		<!--{/section}-->
	</tbody>
</table>
<!--{include file="footer.tpl"}-->
