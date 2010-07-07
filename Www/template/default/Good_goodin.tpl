<!--{include file="header.tpl"}-->
<h3 class="topmenu">物品入库操作</h3>
<div class="divform">
  <form action="index.php" method="POST">
  	<p>
      	<label>物品名称：</label><input type="text" id="goodname" name="goodname" class="text" style="width:120px" />&nbsp;&nbsp;<a href="javascript:void(0);" id="ckgood">查看</a>
    	</p>
		<p>
			<label>物品简称：</label><input id="shortname" type="text" name="shortname" class="text" style="width:120px" />简称不超过10个汉字
		</p>
		<p>
			<label>物品类型：</label>
			<select id="type" name="type"></select>&nbsp;&nbsp;
			<label>所属分类：</label>
			<select id="cate" name="cate"></select>
		</p>
		<p>
			<label>品牌：</label><input type="text" id="proname" name="proname" class="text" style="width:120px" />&nbsp;&nbsp;
			<label>产地：</label><input type="text" id="factory"name="factory" class="text" style="width:120px" />
		</p>
		<p>
			<label>毛重：</label><input type="text" id="weight" name="weight" class="text" style="width:120px" />&nbsp;&nbsp;
			<label>净重：</label><input type="text" id="netweight" name="netweight" class="text" style="width:120px" />
		</p>
		<p>
			<label>单位：</label><input type="text" id="pername" name="pername" class="text" style="width:120px" />&nbsp;&nbsp;
			<label>库存数量：</label><input type="text" id="leaves" name="leaves" class="text" value="0" style="width:120px" />
		</p>
		<p>
			<label>包装：</label><br />
			<textarea id="bz" name="bz"></textarea>
		</p>
		<p>
			<label>猫零售价：</label><input type="text" id="myprice" name="myprice" class="text" style="width:120px" />&nbsp;&nbsp;
			<label>是否特价：</label><select name="isspec"><option value="2">否</option><option value="1">是</option></select>&nbsp;&nbsp;
			<label>库存报警：</label><input type="text" id="libwarn" name="libwarn" class="text" style="width:120px" />&nbsp;&nbsp;
			<select id="warntype" name="warntype">
				<option value="1">按数量</option>
				<option value="3">按重量</option>
			</select>
		</p>
		<p>
			<label>备注：</label><br />
			<textarea id="mark" name="mark"></textarea>
		</p>
  	<p>
      	<label>数量：</label><input type="text" name="nums" class="text" style="width:120px" />&nbsp;&nbsp;
      	<label>进货价：</label><input type="text" name="oprice" class="text" style="width:120px" />&nbsp;&nbsp;
      	<label>供应商：</label>
		<select name="sp_id">
			<!--{section name=s loop=$slist}-->
			<option value="<!--{$slist[s].0}-->"><!--{$slist[s].1}--></option>
			<!--{/section}-->
		</select>&nbsp;&nbsp;
      	<label>状态：</label>
		<select name="state"> 
			<option value="1">可用</option>
			<option value="0">不可用</option>
		</select>
    	</p>
  	<p>
      	<label>厂商建议价：</label><input type="text" name="adprice" class="text" style="width:120px" />&nbsp;&nbsp;
      	<label>保质期：</label><input type="text" name="expirdate" class="text" style="width:120px" />&nbsp;&nbsp;
      	<label>进货单号：</label><input type="text" name="order" class="text" value="<!--{$olist[0][1]}-->" style="width:120px" />&nbsp;&nbsp;
    	</p>
      <p>
	  	<input type="hidden" name="action" value="goodin" />
		<input type="hidden" name="giid" value="<!--{$smarty.get.giid}-->" />
      	<input type="submit" name="submit" value="<!--{if !$smarty.get.giid}-->添加<!--{else}-->修改<!--{/if}-->" />
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
		if(data[0])
		{
			$('#shortname').val(data[0][2]);
			$('#proname').val(data[0][4]);
			$('#factory').val(data[0][5]);
			$('#leaves').val(data[0][14]);
			$('#leaves').attr('readonly', 'readonly');
			$('#weight').val(data[0][13]);
			$('#netweight').val(data[0][14]);
			$('#pername').val(data[0][7]);
			$('#bz').val(data[0][6]);
			$('#myprice').val(data[0][8]);
			$('#libwarn').val(data[0][9]);
			$('#warntype').val(data[0][10]);
			$('#mark').val(data[0][11]);
		}

		var cops = tops = "";
		$.each(data[1], function(i, n){
			if(n[2] == 0)
				tops += "<option "+((data[0][12] == n[1]) ? "selected='selected' " : "")+"value='"+n[0]+"'>"+n[1]+"</option>";
			else
				cops += "<option "+((data[0][12] == n[1]) ? "selected='selected'" : " ")+"value='"+n[0]+"'>"+n[1]+"</option>";
		});

		$('#cate').html('');
		$('#type').html('');

		$('#cate').append(cops);
		$('#type').append(tops);

		//$('#glib').show();
	});
});
</script>
<!--{include file="footer.tpl"}-->
