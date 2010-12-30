<!--{include file="header.tpl"}-->
<h3 class="topmenu">下单客户资料列表</h3>
<table class="slist">
	<thead>
		<tr>
			<th>用户名</th>
			<th>姓名</th>
			<th>姓名拼音</th>
			<th>手机</th>
			<th>电话</th>
			<th>总消费金额</th>
			<th>用户邮箱</th>
			<th>注册时间</th>
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
						<li><a href="index.php?action=orderuser">|<</a></li>
						<li><a href="index.php?action=orderuser&page=<!--{$page['curPage']-1}-->"><<</a></li>
						<!--{section name=p loop=$page['max']+$page['min'] start=$page['min'] max=$page['max']}-->
						<li><a href="index.php?action=orderuser&page=<!--{$smarty.section.p.index}-->"><!--{$smarty.section.p.index}--></a></li>
						<!--{/section}-->
						<li><a href="index.php?action=orderuser&page=<!--{$page['curPage']+1}-->">>></a></li>
						<li><a href="index.php?action=orderuser&page=<!--{$page['allPages']}-->">>|</a></li>
					
					</ul>
				</div>
			</td>
		</tr>
	</tfoot>
	<!--{/if}-->
	<tbody>
		<!--{section name=l loop=$data}-->
		<tr>
			<td><!--{$data[l].1}--></td>
			<td><!--{$data[l].2}--></td>
			<td><!--{$data[l].3}--></td>
			<td><!--{$data[l].4}--></td>
			<td><!--{$data[l].5}--></td>
			<td><!--{$data[l].6}--></td>
			<td><!--{$data[l].9}--></td>
			<td><!--{$data[l].8}--></td>
			<td><a href="index.php?control=user&action=orderuseredit&ouid=<!--{$data[l].0}-->">修改</a></td>
		</tr>
		<!--{/section}-->
	</tbody>
</table>
<!--{include file="footer.tpl"}-->
