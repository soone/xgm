<!--{include file="header.tpl"}-->
<h3 class="topmenu">物品分类管理</h3>
<div class="divform">
  <form action="index.php" method="POST">
  	<p>
      	<label>分类名称：</label><input type="text" name="catname" value="<!--{$cur[1]}-->" <!--{if $cur[1]}-->readonly="readonly" <!--{/if}-->class="text" style="width:120px" />&nbsp;&nbsp;
		<label>上级分类：</label>
		<select name="pid">
			<option value="0">一级分类</option>
			<!--{section name=c loop=$data}-->
			<!--{if $data[c].3 == 0 && $data[c].0 != $smarty.get.gcid && $smarty.get.gcid != $data[c].3}-->
			<option <!--{if $cur[3] == $data[c].0}-->selected="selected" <!--{/if}-->value="<!--{$data[c].0}-->"><!--{$data[c].1}--></option>
			<!--{/if}-->
			<!--{/section}-->
		</select>
    	</p>
  	<p>
      	<label>备注：</label><br />
		<textarea name="mark"><!--{$cur[4]}--></textarea>
    	</p>
      <p>
	  	<input type="hidden" name="action" value="cate" />
		<input type="hidden" name="gcid" value="<!--{$smarty.get.gcid}-->" />
      	<input type="submit" name="submit" value="<!--{if !$smarty.get.gcid}-->添加<!--{else}-->修改<!--{/if}-->" />
	  	<input type="hidden" name="control" value="good" />
      </p>
  </form>
  <!--{if $data}-->
  <h2>分类列表</h2>
  <table class="slist">
  	<thead>
		<tr>
			<td>分类名称</td>
			<td>备注</td>
			<td>添加时间</td>
			<td>操作</td>
		</tr>
	</thead>
	<tbody>
		<!--{section name=cl loop=$data}-->
		<tr>
			<td><!--{$data[cl].1}--></td>
			<td><!--{$data[cl].4}--></td>
			<td><!--{$data[cl].2}--></td>
			<td><a href="index.php?control=good&action=cate&gcid=<!--{$data[cl].0}-->">编辑</a>&nbsp;|&nbsp;<a href="index.php?control=good&action=del&gcid=<!--{$data[cl].0}-->" onclick="return confirm('确定删除？？')">删除</a></td>
		</tr>
		<!--{/section}-->
	</tbody>
  </table>
  <!--{/if}-->
</div>
<!--{include file="footer.tpl"}-->
