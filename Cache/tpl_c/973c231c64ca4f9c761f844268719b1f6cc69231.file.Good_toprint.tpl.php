<?php /* Smarty version Smarty3-b8, created on 2010-07-22 00:48:12
         compiled from "/media/work_study/work/soone/xgm/./Www/template/default/Good_toprint.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7908823594c4724ccda7e46-13272977%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '973c231c64ca4f9c761f844268719b1f6cc69231' => 
    array (
      0 => '/media/work_study/work/soone/xgm/./Www/template/default/Good_toprint.tpl',
      1 => 1279730842,
    ),
  ),
  'nocache_hash' => '7908823594c4724ccda7e46-13272977',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<form>
<label>配送日期：</label><input type="text" name="date" class="text" /><input type="hidden" name="control" value="good" /><input type="hidden" name="action" value="toprint" /><input type="submit" name="submit" value="搜索" />
</form>
<h3 class="topmenu">发货物品统计汇总表</h3>
<table class="slist">
	<thead>
		<tr>
			<th>物品</th>
			<th>总量</th>
		</tr>
	</thead>
	<tbody>
		<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ac']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ac']['name'] = 'ac';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ac']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('aCll')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ac']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ac']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ac']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ac']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ac']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ac']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ac']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ac']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ac']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ac']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ac']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ac']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ac']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ac']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ac']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ac']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ac']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ac']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ac']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ac']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ac']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ac']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ac']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ac']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ac']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ac']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ac']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ac']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ac']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ac']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ac']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ac']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ac']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ac']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ac']['total']);
?>
		<tr>
			<td><?php echo $_smarty_tpl->getVariable('aCll')->value[$_smarty_tpl->getVariable('smarty')->value['section']['ac']['index']][0];?>
</td>
			<td><?php echo $_smarty_tpl->getVariable('aCll')->value[$_smarty_tpl->getVariable('smarty')->value['section']['ac']['index']][1];?>
</td>
		</tr>
		<?php endfor; endif; ?>
	</tbody>
</table>
<h3 class="topmenu">发货物品分车汇总表</h3>
<table class="slist">
	<thead>
		<tr>
			<th>物品</th>
			<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['cn']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['cn']['name'] = 'cn';
$_smarty_tpl->tpl_vars['smarty']->value['section']['cn']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('cNos')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['cn']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['cn']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cn']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cn']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['cn']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cn']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['cn']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['cn']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['cn']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cn']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['cn']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['cn']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['cn']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['cn']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['cn']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cn']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['cn']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['cn']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['cn']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['cn']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['cn']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['cn']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['cn']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cn']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cn']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cn']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['cn']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cn']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cn']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['cn']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cn']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['cn']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['cn']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['cn']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['cn']['total']);
?>
			<th><?php echo $_smarty_tpl->getVariable('cNos')->value[$_smarty_tpl->getVariable('smarty')->value['section']['cn']['index']];?>
</th>
			<?php endfor; endif; ?>
		</tr>
	</thead>
	<tbody>
		<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ag']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ag']['name'] = 'ag';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ag']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('aGll')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ag']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ag']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ag']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ag']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ag']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ag']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ag']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ag']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ag']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ag']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ag']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ag']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ag']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ag']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ag']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ag']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ag']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ag']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ag']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ag']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ag']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ag']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ag']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ag']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ag']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ag']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ag']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ag']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ag']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ag']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ag']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ag']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ag']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ag']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ag']['total']);
?>
		<tr>
			<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['eg']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['eg']['name'] = 'eg';
$_smarty_tpl->tpl_vars['smarty']->value['section']['eg']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('aGll')->value[$_smarty_tpl->getVariable('smarty')->value['section']['ag']['index']]) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['eg']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['eg']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['eg']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['eg']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['eg']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['eg']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['eg']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['eg']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['eg']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['eg']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['eg']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['eg']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['eg']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['eg']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['eg']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['eg']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['eg']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['eg']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['eg']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['eg']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['eg']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['eg']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['eg']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['eg']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['eg']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['eg']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['eg']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['eg']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['eg']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['eg']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['eg']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['eg']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['eg']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['eg']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['eg']['total']);
?>
			<td><?php echo $_smarty_tpl->getVariable('aGll')->value[$_smarty_tpl->getVariable('smarty')->value['section']['ag']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['eg']['index']];?>
</td>
			<?php endfor; endif; ?>
		</tr>
		<?php endfor; endif; ?>
	</tbody>
</table>
<script language="javascript" type="text/javascript">
function setthis(obj)
{
	var s = parseInt($(obj).val());
	if(!isNaN(s) && (s == 3 || s == 5))
	{
		if(s == 5 && !confirm('确定将该订单作废？？'))
			return false;

		location.href="index.php?control=card&action=cstatus&s="+s+"&coid="+$('#coid').val();
	}
}
</script>
<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

