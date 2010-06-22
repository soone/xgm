<!--{include file="header.tpl"}-->
<h3 class="topmenu">物品入库操作</h3>
<div class="divform">
  <form action="index.php" method="POST">
  	<p>
      	<label>物品名称：</label><input type="text" id="goodname" name="goodname" class="text" style="width:120px" />&nbsp;&nbsp;<a href="javascript:void(0);" id="ckgood">查看</a>
    	</p>
	<div style="display:none">
		<p>
			<label>物品简称：</label><input type="text" name="shortname" class="text" style="width:120px" />简称不超过10个汉字
		</p>
		<p>
			<label>品牌：</label><input type="text" name="proname" class="text" style="width:120px" />&nbsp;&nbsp;
			<label>产地：</label><input type="text" name="factory" class="text" style="width:120px" />&nbsp;&nbsp;
			<label>所属分类：</label>
			<select name="cate"></select>
		</p>
		<p>
			<label>物品类型：</label>
			<select name="type"></select>&nbsp;&nbsp;
			<label>毛重：</label><input type="text" name="weigth" class="text" style="width:120px" />&nbsp;&nbsp;
			<label>净重：</label><input type="text" name="netweigth" class="text" style="width:120px" />&nbsp;&nbsp;
		</p>
		<p>
			<label>单位：</label><input type="text" name="pername" class="text" style="width:120px" />&nbsp;&nbsp;
			<label>厂家参考价：</label><input type="text" name="facprice" class="text" style="width:120px" />&nbsp;&nbsp;
		</p>
		<p>
			<label>包装：</label><br />
			<textarea name="bz"></textarea>
		</p>
		<p>
			<label>猫零售价：</label><input type="text" name="myprice" class="text" style="width:120px" />&nbsp;&nbsp;
			<label>库存报警：</label><input type="text" name="libwarn" class="text" style="width:120px" />&nbsp;&nbsp;
			<select name="warntype">
				<option value="1">按数量</option>
				<option value="3">按重量</option>
			</select>
		</p>
		<p>
			<label>备注：</label><br />
			<textarea name="mark"></textarea>
		</p>
	</div>
  	<p>
      	<label>数量：</label><input type="text" name="nums" class="text" style="width:120px" />&nbsp;&nbsp;
      	<label>进货价：</label><input type="text" name="oprice" class="text" style="width:120px" />&nbsp;&nbsp;
      	<label>供应商：</label>
		<select name="sp">
			<!--{section name=s loop=$slist}-->
			<option value="<!--{$slist[s].0}-->"><!--{$slist[s].1}--></option>
			<!--{/section}-->
		</select>
    	</p>
  	<p>
      	<label>保质期：</label><input type="text" name="expirdate" class="text" style="width:120px" />&nbsp;&nbsp;
      	<label>进货单号：</label><input type="text" name="order" class="text" style="width:120px" />
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
<script language="javascript" type="text/javascript">
$('#ckgood').bind('click', function(){
	var gname = $('#goodname').val();
	if(!gname)
	{
		alert('请输入物品名称');
		$('#goodname').focus();
		return false;
	}

	$.getJSON('index.php?control=good&action=getlib', {gn : gname}, function(data){
		alert('fsda');
	});
});
</script>
<!--{include file="footer.tpl"}-->
