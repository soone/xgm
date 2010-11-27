<?php /* Smarty version Smarty3-b8, created on 2010-11-27 02:19:48
         compiled from "/media/work_study/work/soone/xgm/./Www/template/default/Other_scman.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6292763284ceffa44455b59-12196231%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de8442df35a1a161e977798961ac61f9e850f52b' => 
    array (
      0 => '/media/work_study/work/soone/xgm/./Www/template/default/Other_scman.tpl',
      1 => 1288022740,
    ),
  ),
  'nocache_hash' => '6292763284ceffa44455b59-12196231',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

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
		<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['sj']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sj']['name'] = 'sj';
$_smarty_tpl->tpl_vars['smarty']->value['section']['sj']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('sjInfo')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sj']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sj']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sj']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sj']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sj']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sj']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['sj']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sj']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sj']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sj']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sj']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['sj']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sj']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sj']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['sj']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sj']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sj']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sj']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['sj']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sj']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['sj']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sj']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['sj']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sj']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sj']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sj']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['sj']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sj']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sj']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['sj']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sj']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sj']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sj']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sj']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['sj']['total']);
?>
		<tr>
			<td><input type="text" value="<?php echo $_smarty_tpl->getVariable('sjInfo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['sj']['index']][1];?>
" name="sj_name" id="sj_name_<?php echo $_smarty_tpl->getVariable('sjInfo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['sj']['index']][0];?>
" /></td>
			<td>
				<select name="sj_status" id="sj_status_<?php echo $_smarty_tpl->getVariable('sjInfo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['sj']['index']][0];?>
">
					<option <?php if ($_smarty_tpl->getVariable('sjInfo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['sj']['index']][2]==1){?>selected="selected" <?php }?>value="1">可用</option>
					<option <?php if ($_smarty_tpl->getVariable('sjInfo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['sj']['index']][2]==2){?>selected="selected" <?php }?>value="2">不可用</option>
				</select>
			</td>
			<td><?php echo $_smarty_tpl->getVariable('sjInfo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['sj']['index']][3];?>
</td>
			<td><a href="index.php?control=other&action=scedit&type=sj&id=<?php echo $_smarty_tpl->getVariable('sjInfo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['sj']['index']][0];?>
" onclick="javascript:return changeUrl('<?php echo $_smarty_tpl->getVariable('sjInfo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['sj']['index']][0];?>
', 'sj')" id="sj_url_<?php echo $_smarty_tpl->getVariable('sjInfo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['sj']['index']][0];?>
">修改</a></td>
		</tr>
		<?php endfor; endif; ?>
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
		<tr>
			<td><input type="text" value="<?php echo $_smarty_tpl->getVariable('cpInfo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['cp']['index']][1];?>
" name="cp_name" id="cp_name_<?php echo $_smarty_tpl->getVariable('cpInfo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['cp']['index']][0];?>
" /></td>
			<td>
				<select name="cp_status" id="cp_status_<?php echo $_smarty_tpl->getVariable('cpInfo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['cp']['index']][0];?>
">
					<option <?php if ($_smarty_tpl->getVariable('cpInfo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['cp']['index']][2]==1){?>selected="selected" <?php }?>value="1">可用</option>
					<option <?php if ($_smarty_tpl->getVariable('cpInfo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['cp']['index']][2]==2){?>selected="selected" <?php }?>value="2">不可用</option>
				</select>
			</td>
			<td><?php echo $_smarty_tpl->getVariable('cpInfo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['cp']['index']][3];?>
</td>
			<td><a href="index.php?control=other&action=scedit&type=cp&id=<?php echo $_smarty_tpl->getVariable('cpInfo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['cp']['index']][0];?>
" onclick="javascript:return changeUrl('<?php echo $_smarty_tpl->getVariable('cpInfo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['cp']['index']][0];?>
', 'cp')" id="cp_url_<?php echo $_smarty_tpl->getVariable('cpInfo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['cp']['index']][0];?>
">修改</a></td>
		</tr>
		<?php endfor; endif; ?>
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
<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

