<?php /* Smarty version Smarty3-b8, created on 2010-06-17 01:03:23
         compiled from "/media/work_study/work/soone/xgm/./Www/template/default/User_cardface.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17587031294c1903dbe9cbb6-36528361%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0caf475bbaa958ca728b16ebb1a7850cdebcdefb' => 
    array (
      0 => '/media/work_study/work/soone/xgm/./Www/template/default/User_cardface.tpl',
      1 => 1276706503,
    ),
  ),
  'nocache_hash' => '17587031294c1903dbe9cbb6-36528361',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<h3 class="topmenu">卡外观定义</h3>
<div class="divform">
  <form action="index.php" method="POST">
  	<p>
      	<label>名称：</label><input type="text" name="facename" class="text" value="<?php echo $_smarty_tpl->getVariable('cData')->value[1];?>
" />
    	</p>
  	<p>
      	<label>备注：</label><br /><textarea name="facemark"><?php echo $_smarty_tpl->getVariable('cData')->value[2];?>
</textarea>
    	</p>
      <p>
	  	<input type="hidden" name="action" value="cardface" />
	  <?php if ($_smarty_tpl->getVariable('edit')->value==1){?>
	  	<input type="hidden" name="cviewid" value="<?php echo $_smarty_tpl->getVariable('cData')->value[0];?>
" />
      	<input type="submit" name="submit" value="修改" />
	  <?php }else{ ?>
      	<input type="submit" name="submit" value="添加" />
        <input type="reset" value="清空" />
	  <?php }?>
      </p>
  </form>
</div>
<h3 class="topmenu">卡外观列表</h3>
<table class="slist">
	<thead>
		<tr>
			<th width="15%">名称</th>
			<th width="50%">备注</th>
			<th>添加时间</th>
			<th>操作</th>
		</tr>
	</thead>
	<tbody>
		<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['l']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['name'] = 'l';
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('data')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
		<tr>
			<td><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']][1];?>
</td>
			<td><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']][2];?>
</td>
			<td><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']][3];?>
</td>
			<td><a href="index.php?action=cardface&cviewid=<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']][0];?>
">修改</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="index.php?action=delcf&cviewid=<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']][0];?>
"">删除</a></td>
		</tr>
		<?php endfor; endif; ?>
	</tbody>
</table>
<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

