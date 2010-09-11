<?php /* Smarty version Smarty3-b8, created on 2010-09-06 00:51:01
         compiled from "/media/work_study/work/soone/xgm/./Www/template/default/Good_changecar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13672267454c83ca75d5d1d5-76891254%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3de1f96f185751967e39a24d3f04b0889c37a13c' => 
    array (
      0 => '/media/work_study/work/soone/xgm/./Www/template/default/Good_changecar.tpl',
      1 => 1283705392,
    ),
  ),
  'nocache_hash' => '13672267454c83ca75d5d1d5-76891254',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<h3 class="topmenu">修改分车(订单号<?php echo $_smarty_tpl->getVariable('oid')->value;?>
)</h3>
<form action="index.php?control=good&action=changecar&oid=<?php echo $_smarty_tpl->getVariable('oid')->value;?>
" method="post">
<table class="slist">
	<tr>
		<th><label>原指定车牌</label></th>
		<td><?php echo $_smarty_tpl->getVariable('car')->value;?>
</td>
	</tr>
	<tr>
		<th><label>指定新车牌：</label></th>
		<td>
			<select name="cp">
				<option value="">请选择</option>
				<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['cp']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['cp']['name'] = 'cp';
$_smarty_tpl->tpl_vars['smarty']->value['section']['cp']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('cpInfo')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['cp']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['cp']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cp']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cp']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['cp']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cp']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['cp']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['cp']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['cp']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cp']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['cp']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['cp']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['cp']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['cp']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['cp']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cp']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['cp']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['cp']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['cp']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['cp']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['cp']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['cp']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['cp']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cp']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cp']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cp']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['cp']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cp']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cp']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['cp']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cp']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['cp']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['cp']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['cp']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['cp']['total']);
?>
				<option value="<?php echo $_smarty_tpl->getVariable('cpInfo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['cp']['index']][0];?>
"><?php echo $_smarty_tpl->getVariable('cpInfo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['cp']['index']][1];?>
</option>
				<?php endfor; endif; ?>
			</select>
		</td>
	</tr>
	<tr>
		<th></th>
		<td colspan="3"><input type="submit" name="submit" value="修改分车信息" /></td>
	</tr>
</table>
</form>
<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

