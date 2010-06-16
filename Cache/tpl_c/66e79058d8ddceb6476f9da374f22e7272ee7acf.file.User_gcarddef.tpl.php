<?php /* Smarty version Smarty3-b8, created on 2010-06-17 02:16:20
         compiled from "/media/work_study/work/soone/xgm/./Www/template/default/User_gcarddef.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4676177974c1914f4f31594-33521908%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66e79058d8ddceb6476f9da374f22e7272ee7acf' => 
    array (
      0 => '/media/work_study/work/soone/xgm/./Www/template/default/User_gcarddef.tpl',
      1 => 1276711831,
    ),
  ),
  'nocache_hash' => '4676177974c1914f4f31594-33521908',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<h3 class="topmenu">礼品卡定义</h3>
<div class="divform">
  <form action="index.php" method="POST">
  	<p>
      	<label>礼品卡名称：</label><input type="text" name="ciname" class="text" value="<?php echo $_smarty_tpl->getVariable('data')->value[1];?>
" />
    	</p>
  	<p>
      	<label>礼品卡面值：</label><input value="<?php echo $_smarty_tpl->getVariable('data')->value[2];?>
" type="text" name="cimoney" class="text" style="width:120px;" />
    	</p>
  	<p>
          <label>分类：</label>
		  <select name="citype">
		  	<option <?php if ($_smarty_tpl->getVariable('data')->value[5]==1){?>selected="selected" <?php }?>value="1">储值卡</option>
		  	<option <?php if ($_smarty_tpl->getVariable('data')->value[5]==3){?>selected="selected" <?php }?>value="3">储物卡</option>
		  </select>
    	</p>
  	<p>
      	<label>卡外观：</label>
		<select name="cviewid">
			<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['v']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['name'] = 'v';
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('cview')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['total']);
?>
			<option <?php if ($_smarty_tpl->getVariable('data')->value[2]==$_smarty_tpl->getVariable('cview')->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']][0]){?>selected="selected" <?php }?>value="<?php echo $_smarty_tpl->getVariable('cview')->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']][0];?>
"><?php echo $_smarty_tpl->getVariable('cview')->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']][1];?>
</option>
			<?php endfor; endif; ?>
		</select>
    	</p>
  	<p>
          <label>配置信息：</label><br /><textarea name="cidesc"><?php echo $_smarty_tpl->getVariable('data')->value[6];?>
</textarea>
    	</p>
  	<p>
      	<label>备注：</label><br /><textarea name="cimark"><?php echo $_smarty_tpl->getVariable('data')->value[7];?>
</textarea>
    	</p>
      <p>
	  	<input type="hidden" name="action" value="gcarddef" />
		<input type="hidden" name="cviewinfo" value='<?php echo $_smarty_tpl->getVariable('cviewinfo')->value;?>
' />
	  <?php if ($_smarty_tpl->getVariable('edit')->value==1){?>
	  	<input type="hidden" name="ciid" value="<?php echo $_smarty_tpl->getVariable('data')->value[0];?>
" />
      	<input type="submit" name="submit" value="修改" />
	  <?php }else{ ?>
      	<input type="submit" name="submit" value="添加" />
        <input type="reset" value="清空" />
	  <?php }?>
      </p>
  </form>
</div>
<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

