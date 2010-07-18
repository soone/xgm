<!--{include file="header.tpl"}-->
<h3 class="topmenu">司机和车牌管理</h3>
<form method="post" action="index.php?control=other&ac=scman">
	<table class="slist">
		<tr>
			<th><label>司机名字：</label></th><td><input type="text" name="sj" /></td>
			<th><label>车牌号：</label></th><td><input type="text" name="cp" /></td>
			<td><input type="hidden" value="scman" name="action" /><input type="hidden" value="other" name="control" /><input type="submit" name="submit" value="添加" /></td>
		</tr>
	</table>
</form>
<h3 class="topmenu">司机列表</h3>
<table class="slist">
	<thead>
		<tr>
			<th>名字</th>
			<th>状态</th>
			<th>添加时间</th>
			<th>操作</th>
		</tr>
	</thead>
	<tbody>
		<!--{section name=sj loop=$sjInfo}-->
		<tr>
			<td><input type="text" value="<!--{$sjInfo[sj].1}-->" name="sj_name" id="sj_name_<!--{$sjInfo[sj].0}-->" /></td>
			<td>
				<select name="sj_status" id="sj_status_<!--{$sjInfo[sj].0}-->">
					<option <!--{if $sjInfo[sj].2 == 1}-->selected="selected" <!--{/if}-->value="1">可用</option>
					<option <!--{if $sjInfo[sj].2 == 2}-->selected="selected" <!--{/if}-->value="2">不可用</option>
				</select>
			</td>
			<td><!--{$sjInfo[sj].3}--></td>
			<td><a href="index.php?control=other&action=scedit&type=sj&id=<!--{$sjInfo[sj].0}-->" onclick="javascript:return changeUrl('<!--{$sjInfo[sj].0}-->', 'sj')" id="sj_url_<!--{$sjInfo[sj].0}-->">修改</a></td>
		</tr>
		<!--{/section}-->
	</tbody>
</table>
<h3 class="topmenu">车牌列表</h3>
<table class="slist">
	<thead>
		<tr>
			<th>车牌</th>
			<th>状态</th>
			<th>添加时间</th>
			<th>操作</th>
		</tr>
	</thead>
	<tbody>
		<!--{section name=cp loop=$cpInfo}-->
		<tr>
			<td><input type="text" value="<!--{$cpInfo[cp].1}-->" name="cp_name" id="cp_name_<!--{$cpInfo[cp].0}-->" /></td>
			<td>
				<select name="cp_status" id="cp_status_<!--{$cpInfo[cp].0}-->">
					<option <!--{if $cpInfo[cp].2 == 1}-->selected="selected" <!--{/if}-->value="1">可用</option>
					<option <!--{if $cpInfo[cp].2 == 2}-->selected="selected" <!--{/if}-->value="2">不可用</option>
				</select>
			</td>
			<td><!--{$cpInfo[cp].3}--></td>
			<td><a href="index.php?control=other&action=scedit&type=cp&id=<!--{$cpInfo[cp].0}-->" onclick="javascript:return changeUrl('<!--{$cpInfo[cp].0}-->', 'cp')" id="cp_url_<!--{$cpInfo[cp].0}-->">修改</a></td>
		</tr>
		<!--{/section}-->
	</tbody>
</table>
<script language="javascript" type="text/javascript">
function changeUrl(id, type)
{
	var name = $('#'+type+'_name_'+id).val();
	var status = $('#'+type+'_status_'+id).val();
	var url = $('#'+type+'_url_'+id).attr('href');
	name ? url += '&name='+name : '';
	status ? url += '&status='+status : '';
	location.href=url;
	return false;
}
</script>
<!--{include file="footer.tpl"}-->
