<?php /* Smarty version Smarty3-b8, created on 2010-06-22 03:41:42
         compiled from "/media/work_study/work/soone/xgm/./Www/template/default/Good_goodin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7096546404c1fc0768e8921-29678482%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9abea9f874ea7563767dba66f2e6a62c81ba7150' => 
    array (
      0 => '/media/work_study/work/soone/xgm/./Www/template/default/Good_goodin.tpl',
      1 => 1277149301,
    ),
  ),
  'nocache_hash' => '7096546404c1fc0768e8921-29678482',
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
		</select>
    	</p>
  	<p>
      	<label>保质期：</label><input type="text" name="expirdate" class="text" style="width:120px" />&nbsp;&nbsp;
      	<label>进货单号：</label><input type="text" name="order" class="text" style="width:120px" />
    	</p>
      <p>
	  	<input type="hidden" name="action" value="cate" />
		<input type="hidden" name="gcid" value="<?php echo $_GET['gcid'];?>
" />
      	<input type="submit" name="submit" value="<?php if (!$_GET['gcid']){?>添加<?php }else{ ?>修改<?php }?>" />
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
});
</script>
<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

