<!--{include file="header.tpl"}-->
<h3 class="topmenu">卡外观定义</h3>
<div class="divform">
  <form action="index.php" method="POST">
  	<p>
      	<label>名称：</label><input type="text" name="facename" class="text" value="<!--{$cData[1]}-->" />
    	</p>
  	<p>
      	<label>备注：</label><br /><textarea name="facemark"><!--{$cData[2]}--></textarea>
    	</p>
      <p>
	  	<input type="hidden" name="action" value="cardface" />
	  <!--{if $edit == 1}-->
	  	<input type="hidden" name="cviewid" value="<!--{$cData[0]}-->" />
      	<input type="submit" name="submit" value="修改" />
	  <!--{else}-->
      	<input type="submit" name="submit" value="添加" />
        <input type="reset" value="清空" />
	  <!--{/if}-->
      </p>
  </form>
</div>
<h3 class="topmenu">卡外观列表</h3>
<table class="slist">
	<thead>
		<tr>
			<th width="15%">名称</th>
			<th width="50%">备注</th>
			<th>添加时间</th>
			<th>操作</th>
		</tr>
	</thead>
	<tbody>
		<!--{section name=l loop=$data}-->
		<tr>
			<td><!--{$data[l].1}--></td>
			<td><!--{$data[l].2}--></td>
			<td><!--{$data[l].3}--></td>
			<td><a href="index.php?action=cardface&cviewid=<!--{$data[l].0}-->">修改</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="index.php?action=delcf&cviewid=<!--{$data[l].0}-->"">删除</a></td>
		</tr>
		<!--{/section}-->
	</tbody>
</table>
<!--{include file="footer.tpl"}-->
