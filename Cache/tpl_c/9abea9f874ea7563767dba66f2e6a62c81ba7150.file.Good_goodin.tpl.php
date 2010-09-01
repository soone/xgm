<?php /* Smarty version Smarty3-b8, created on 2010-09-01 14:10:45
         compiled from "/media/work_study/work/soone/xgm/./Www/template/default/Good_goodin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8186281434c7dee652bdcc4-39794946%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9abea9f874ea7563767dba66f2e6a62c81ba7150' => 
    array (
      0 => '/media/work_study/work/soone/xgm/./Www/template/default/Good_goodin.tpl',
      1 => 1280594036,
    ),
  ),
  'nocache_hash' => '8186281434c7dee652bdcc4-39794946',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

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
      	<label>状态：</label>
		<select name="state"> 
			<option value="1">可用</option>
			<option value="0">不可用</option>
		</select>
    	</p>
	<p>
      	<label>供应商：</label>
		<select name="sp_id">
			<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['s']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['name'] = 's';
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('slist')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['total']);
?>
			<option value="<?php echo $_smarty_tpl->getVariable('slist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']][0];?>
"><?php echo $_smarty_tpl->getVariable('slist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']][1];?>
</option>
			<?php endfor; endif; ?>
		</select>&nbsp;&nbsp;
		<label>生产日期：</label><input type="text" name="createdate" class="text" style="width:120px" onFocus="WdatePicker({lang:'zh_cn',skin:'whyGreen'})" />
		</p>
  	<p>
      	<label>厂商建议价：</label><input type="text" name="adprice" class="text" style="width:120px" />&nbsp;&nbsp;
      	<label>保质期：</label><input type="text" name="expirdate" class="text" onFocus="WdatePicker({lang:'zh_cn',skin:'whyGreen'})" style="width:120px" />&nbsp;&nbsp;
      	<label>进货单号：</label><input type="text" name="order" class="text" value="<?php echo $_smarty_tpl->getVariable('olist')->value[0][1];?>
" style="width:120px" />&nbsp;&nbsp;
    	</p>
      <p>
	  	<input type="hidden" name="action" value="goodin" />
		<input type="hidden" name="giid" value="<?php echo $_GET['giid'];?>
" />
      	<input type="submit" name="submit" value="<?php if (!$_GET['giid']){?>添加<?php }else{ ?>修改<?php }?>" />
	  	<input type="hidden" name="control" value="good" />
      </p>
  </form>
  <?php if ($_smarty_tpl->getVariable('data')->value){?>
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
		<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['cl']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['name'] = 'cl';
$_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('data')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['cl']['total']);
?>
		<tr>
			<td><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['cl']['index']][1];?>
</td>
			<td><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['cl']['index']][4];?>
</td>
			<td><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['cl']['index']][2];?>
</td>
			<td><a href="index.php?control=good&action=cate&gcid=<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['cl']['index']][0];?>
">编辑</a>&nbsp;|&nbsp;<a href="index.php?control=good&action=del&gcid=<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['cl']['index']][0];?>
" onclick="return confirm('确定删除？？')">删除</a></td>
		</tr>
		<?php endfor; endif; ?>
	</tbody>
  </table>
  <?php }?>
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
<script type="text/javascript" language="javascript" src="images/datePicker/WdatePicker.js"></script>
<link href="images/datePicker/skin/WdatePicker.css" rel="stylesheet" type="text/css" />
<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

