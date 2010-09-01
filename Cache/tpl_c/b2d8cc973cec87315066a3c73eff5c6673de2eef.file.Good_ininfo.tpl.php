<?php /* Smarty version Smarty3-b8, created on 2010-09-01 22:59:06
         compiled from "/media/work_study/work/soone/xgm/./Www/template/default/Good_ininfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5066923544c7e6a3aeec768-47222471%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2d8cc973cec87315066a3c73eff5c6673de2eef' => 
    array (
      0 => '/media/work_study/work/soone/xgm/./Www/template/default/Good_ininfo.tpl',
      1 => 1283322069,
    ),
  ),
  'nocache_hash' => '5066923544c7e6a3aeec768-47222471',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<h3 class="topmenu">进货单详细信息(<?php echo $_smarty_tpl->getVariable('order')->value;?>
)</h3>
<table class="slist">
	<thead>
		<tr>
			<th>物品名称</th>
			<th>供货商名称</th>
			<th>进货数量</th>
			<th>剩余数量</th>
			<th>进货价</th>
			<th>建议价</th>
			<th>生产日期</th>
			<th>过期日期</th>
			<th>操作</th>
		</tr>
	</thead>
	<tbody>
		<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['l']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['name'] = 'l';
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('inInfo')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total']);
?>
		<form action="index.php?control=good&action=egin" method="post">
		<tr>
			<td><?php echo $_smarty_tpl->getVariable('inInfo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']][11];?>
</td>
			<td>
			<select name="sp">
			<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['g']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['g']['name'] = 'g';
$_smarty_tpl->tpl_vars['smarty']->value['section']['g']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('sInfo')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['g']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['g']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['g']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['g']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['g']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['g']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['g']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['g']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['g']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['g']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['g']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['g']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['g']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['g']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['g']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['g']['total']);
?>
			<option <?php if ($_smarty_tpl->getVariable('inInfo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']][1]==$_smarty_tpl->getVariable('sInfo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['g']['index']][0]){?>selected="selected"<?php }?> value="<?php echo $_smarty_tpl->getVariable('sInfo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['g']['index']][0];?>
"><?php echo $_smarty_tpl->getVariable('sInfo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['g']['index']][1];?>
</option>
			<?php endfor; endif; ?>
			</select>
			</td>
			<td><input type="text" style="width:80px;" name="nums" value="<?php echo $_smarty_tpl->getVariable('inInfo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']][5];?>
" /></td>
			<td><?php echo $_smarty_tpl->getVariable('inInfo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']][10];?>
</td>
			<td><input type="text" style="width:60px;" name="inprice" value="<?php echo $_smarty_tpl->getVariable('inInfo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']][3];?>
" /></td>
			<td><input type="text" style="width:60px;" name="adprice" value="<?php echo $_smarty_tpl->getVariable('inInfo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']][4];?>
" /></td>
			<td><input type="text" style="width:90px;" name="prodate" onFocus="WdatePicker({lang:'zh_cn',skin:'whyGreen'})" value="<?php echo $_smarty_tpl->getVariable('inInfo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']][12];?>
" /></td>
			<td><input type="text" style="width:90px;" name="edate" onFocus="WdatePicker({lang:'zh_cn',skin:'whyGreen'})" value="<?php echo $_smarty_tpl->getVariable('inInfo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']][2];?>
" /></td>
			<td><input type="hidden" value="<?php echo $_smarty_tpl->getVariable('inInfo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']][0];?>
" name="gid" /><input type="submit" name="submit" value="修改" /></a>&nbsp;&nbsp;<a href="index.php?control=good&action=gindel&gid=<?php echo $_smarty_tpl->getVariable('inInfo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']][0];?>
">删除</a></td>
		</tr>
		</form>
		<?php endfor; endif; ?>
	</tbody>
</table>
<script type="text/javascript" language="javascript" src="images/datePicker/WdatePicker.js"></script>
<link href="images/datePicker/skin/WdatePicker.css" rel="stylesheet" type="text/css" />
<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

