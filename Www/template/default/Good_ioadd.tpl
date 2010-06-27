<!--{include file="header.tpl"}-->
<h3>添加进货单</h3>
<div class="divform">
  <form action="index.php" method="POST">
  	<p>
      	<label>进货单号：</label><input type="text" name="comname" class="text" value="<!--{$info[0]}-->" style="width:120px;" />&nbsp;&nbsp;
		<label>总价：</label><input value="<!--{$info[1]}-->" type="text" name="cname1" class="text" style="width:120px;" />&nbsp;&nbsp;
        <label>进货时间：</label><input value="<!--{$info[3]}-->" type="text" name="cname1tel1" class="text" style="width:120px;" />
		  </p>
	<p>
          <label>备注：</label><br />
		  <textarea></textarea>
    	</p>
      <p>
	  <!--{if $edit == 1}-->
	  	<input type="hidden" name="spid" value="<!--{$spid}-->" />
	  	<input type="hidden" name="action" value="supdoedit" />
      	<input type="submit" name="submit" value="修改" />
	  <!--{else}-->
	  	<input type="hidden" name="action" value="supplier" />
      	<input type="submit" name="submit" value="添加" />
        <input type="reset" value="清空" />
	  <!--{/if}-->
	  	<input type="hidden" name="control" value="user" />
      </p>
	</form>
</div>
<h3 class="topmenu">进货单列表</h3>
<table class="slist">
	<thead>
		<tr>
			<th>单号</th>
			<th>总价</th>
			<th>进货时间</th>
			<th>备注</th>
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
						<li><a href="index.php?control=good&action=ioadd">|<</a></li>
						<li><a href="index.php?control=good&action=ioadd&page=<!--{$page['prevPage']}-->"><<</a></li>
						<!--{section name=p loop=$page['max']+$page['min'] start=$page['min'] max=$page['max']}-->
						<li><a href="index.php?control=good&action=ioadd&page=<!--{$smarty.section.p.index}-->"><!--{$smarty.section.p.index}--></a></li>
						<!--{/section}-->
						<li><a href="index.php?control=goodaction=ioadd&page=<!--{$page['nextPage']}-->">>></a></li>
						<li><a href="index.php?control=goodaction=ioadd&page=<!--{$page['allPages']}-->">>|</a></li>
					
					</ul>
				</div>
			</td>
		</tr>
	</tfoot>
	<!--{/if}-->
	<tbody>
		<!--{section name=l loop=$iolist}-->
		<tr>
			<td><!--{$iolist[l].1}--></td>
			<td><!--{$iolist[l].3}--></td>
			<td><!--{$iolist[l].2}--></td>
			<td><!--{$iolist[l].4}--></td>
			<td><a href="index.php?control=good&action=ioadd&ioid=<!--{$iolist[l].0}-->">修改</a></td>
		</tr>
		<!--{/section}-->
	</tbody>
</table>
<!--{include file="footer.tpl"}-->
