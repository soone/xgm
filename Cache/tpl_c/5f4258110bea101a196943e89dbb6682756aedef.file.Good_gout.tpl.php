<?php /* Smarty version Smarty3-b8, created on 2010-07-17 04:19:08
         compiled from "/media/work_study/work/soone/xgm/./Www/template/default/Good_gout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6076642984c40bebc5f5bd3-83230611%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f4258110bea101a196943e89dbb6682756aedef' => 
    array (
      0 => '/media/work_study/work/soone/xgm/./Www/template/default/Good_gout.tpl',
      1 => 1279311533,
    ),
  ),
  'nocache_hash' => '6076642984c40bebc5f5bd3-83230611',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<h3 class="topmenu">配送单列表(订单号<?php echo $_smarty_tpl->getVariable('orderNo')->value;?>
)</h3>
<table class="slist">
	<tr>
		<th width="20%">物品</th>
		<th width="10%">需求量</th>
		<th width="70%">现有库存情况</th>
	</tr>
	<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['s']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['name'] = 's';
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('goInfo')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
	<tr>
		<td><?php echo $_smarty_tpl->getVariable('goInfo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']][1];?>
</td>
		<td><?php echo $_smarty_tpl->getVariable('goInfo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']][2];?>
</td>
		<td>
			<?php if ($_smarty_tpl->getVariable('goInfo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']][3]){?>
			<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ts']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ts']['name'] = 'ts';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ts']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('goInfo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']][3]) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ts']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ts']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ts']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ts']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ts']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ts']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ts']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ts']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ts']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ts']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ts']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ts']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ts']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ts']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ts']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ts']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ts']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ts']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ts']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ts']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ts']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ts']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ts']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ts']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ts']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ts']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ts']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ts']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ts']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ts']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ts']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ts']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ts']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ts']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ts']['total']);
?>
			<b>进货单号:</b><?php echo $_smarty_tpl->getVariable('goInfo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']][3][$_smarty_tpl->getVariable('smarty')->value['section']['ts']['index']][1];?>
&nbsp;&nbsp;
			<b>进货时间:</b><?php echo $_smarty_tpl->getVariable('goInfo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']][3][$_smarty_tpl->getVariable('smarty')->value['section']['ts']['index']][3];?>
&nbsp;&nbsp;
			<b>余量:</b><?php echo $_smarty_tpl->getVariable('goInfo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']][3][$_smarty_tpl->getVariable('smarty')->value['section']['ts']['index']][2];?>
&nbsp;&nbsp;
			<b>出库量:</b><input type="text" name="<?php echo $_smarty_tpl->getVariable('goInfo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']][0];?>
_<?php echo $_smarty_tpl->getVariable('goInfo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']][3][$_smarty_tpl->getVariable('smarty')->value['section']['ts']['index']][0];?>
" value="0" class="text" style="width:50px;" /><br />
			<?php endfor; endif; ?>
			<?php }?>
		</td>
	</tr>
	<?php endfor; endif; ?>
</table>
<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

