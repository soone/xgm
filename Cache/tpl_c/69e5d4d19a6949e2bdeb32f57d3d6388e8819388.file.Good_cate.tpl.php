<?php /* Smarty version Smarty3-b8, created on 2010-07-06 23:23:25
         compiled from "/media/work_study/work/soone/xgm/./Www/template/default/Good_cate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7046084994c334a6db23393-15438863%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69e5d4d19a6949e2bdeb32f57d3d6388e8819388' => 
    array (
      0 => '/media/work_study/work/soone/xgm/./Www/template/default/Good_cate.tpl',
      1 => 1277149394,
    ),
  ),
  'nocache_hash' => '7046084994c334a6db23393-15438863',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<h3 class="topmenu">物品分类管理</h3>
<div class="divform">
  <form action="index.php" method="POST">
  	<p>
      	<label>分类名称：</label><input type="text" name="catname" value="<?php echo $_smarty_tpl->getVariable('cur')->value[1];?>
" <?php if ($_smarty_tpl->getVariable('cur')->value[1]){?>readonly="readonly" <?php }?>class="text" style="width:120px" />&nbsp;&nbsp;
		<label>上级分类：</label>
		<select name="pid">
			<option value="0">一级分类</option>
			<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['c']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['name'] = 'c';
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('data')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total']);
?>
			<?php if ($_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']][3]==0&&$_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']][0]!=$_GET['gcid']&&$_GET['gcid']!=$_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']][3]){?>
			<option <?php if ($_smarty_tpl->getVariable('cur')->value[3]==$_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']][0]){?>selected="selected" <?php }?>value="<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']][0];?>
"><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']][1];?>
</option>
			<?php }?>
			<?php endfor; endif; ?>
		</select>
    	</p>
  	<p>
      	<label>备注：</label><br />
		<textarea name="mark"><?php echo $_smarty_tpl->getVariable('cur')->value[4];?>
</textarea>
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
<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

