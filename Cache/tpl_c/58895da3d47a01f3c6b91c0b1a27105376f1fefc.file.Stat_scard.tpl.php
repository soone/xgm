<?php /* Smarty version Smarty3-b8, created on 2010-12-06 00:16:58
         compiled from "/media/work_study/work/soone/xgm/./Www/template/default/Stat_scard.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17906220614cfbbafa6fe1b3-98256345%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58895da3d47a01f3c6b91c0b1a27105376f1fefc' => 
    array (
      0 => '/media/work_study/work/soone/xgm/./Www/template/default/Stat_scard.tpl',
      1 => 1291565800,
    ),
  ),
  'nocache_hash' => '17906220614cfbbafa6fe1b3-98256345',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<h3 class="topmenu">售卡订单详情查询</h3>
<div>
<form>
	<label>购卡客户姓名：</label><input type="text" class="text" name="buyname" style="width:120px;" value="<?php echo $_GET['buyname'];?>
" />&nbsp;&nbsp;
	<label>卡有效日期：</label><input type="text" class="text" name="exp" style="width:120px;" onFocus="WdatePicker({lang:'zh_cn',skin:'whyGreen'})" value="<?php echo $_GET['exp'];?>
" /><br />
	<label>卡价值：</label><input type="text" class="text" name="cvalue" style="width:120px;" value="<?php echo $_GET['cvalue'];?>
" />
	<label>卡状态：</label>
	<select name="cstatus">
		<option value="">请选择</option>
		<option <?php if ($_GET['cstatus']==1){?>selected="selected"<?php }?>value="1">出卡可用</option>
		<option <?php if ($_GET['cstatus']===0){?>selected="selected"<?php }?>value="0">作废</option>
		<option <?php if ($_GET['cstatus']==2){?>selected="selected"<?php }?>value="2">回收</option>
	</select>
	<input type="hidden" name="control" value="stat" />
	<input type="hidden" name="action" value="scard" />
	<input type="submit" name="submit" value="统计" />
</form>
</div>
<table class="slist">
	<thead>
		<tr>
			<th>订单号</th>
			<th>卡号</th>
			<th>卡名称</th>
			<th>卡外观</th>
			<th>购卡客户</th>
			<th>出卡日期</th>
			<th>有效期</th>
			<th>状态</th>
		</tr>
	</thead>
	<?php if ($_smarty_tpl->getVariable('page')->value){?>
	<tfoot>
		<tr>
			<td colspan="8">
				<div class="page">
					<ul>
						<li class="all">总<?php echo $_smarty_tpl->getVariable('page')->value['allPages'];?>
页</li>
						<li><a href="index.php?control=stat&action=scard&buyname=<?php echo $_GET['buyname'];?>
&exp=<?php echo $_GET['exp'];?>
&cvalue=<?php echo $_GET['cvalue'];?>
&cstatus=<?php echo $_GET['cstatus'];?>
">|<</a></li>
						<li><a href="index.php?control=stat&action=scard&buyname=<?php echo $_GET['buyname'];?>
&exp=<?php echo $_GET['exp'];?>
&cvalue=<?php echo $_GET['cvalue'];?>
&cstatus=<?php echo $_GET['cstatus'];?>
&page=<?php echo $_smarty_tpl->getVariable('page')->value['prevPage'];?>
"><<</a></li>
						<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['p']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['name'] = 'p';
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('page')->value['max']+$_smarty_tpl->getVariable('page')->value['min']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['start'] = (int)$_smarty_tpl->getVariable('page')->value['min'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['max'] = (int)$_smarty_tpl->getVariable('page')->value['max'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total']);
?>
						<li><a href="index.php?control=stat&action=scard&buyname=<?php echo $_GET['buyname'];?>
&exp=<?php echo $_GET['exp'];?>
&cvalue=<?php echo $_GET['cvalue'];?>
&cstatus=<?php echo $_GET['cstatus'];?>
&page=<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['p']['index'];?>
"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['p']['index'];?>
</a></li>
						<?php endfor; endif; ?>
						<li><a href="index.php?control=stat&action=scard&buyname=<?php echo $_GET['buyname'];?>
&exp=<?php echo $_GET['exp'];?>
&cvalue=<?php echo $_GET['cvalue'];?>
&cstatus=<?php echo $_GET['cstatus'];?>
&page=<?php echo $_smarty_tpl->getVariable('page')->value['nextPage'];?>
">>></a></li>
						<li><a href="index.php?control=stat&action=scard&buyname=<?php echo $_GET['buyname'];?>
&exp=<?php echo $_GET['exp'];?>
&cvalue=<?php echo $_GET['cvalue'];?>
&cstatus=<?php echo $_GET['cstatus'];?>
&page=<?php echo $_smarty_tpl->getVariable('page')->value['allPages'];?>
">>|</a></li>
					
					</ul>
				</div>
			</td>
		</tr>
	</tfoot>
	<?php }?>
	<tbody>
		<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['l']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['name'] = 'l';
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('cardlist')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
			<td><?php echo $_smarty_tpl->getVariable('cardlist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']][0];?>
</td>
			<td><?php echo $_smarty_tpl->getVariable('cardlist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']][1];?>
</td>
			<td><?php echo $_smarty_tpl->getVariable('cardlist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']][2];?>
</td>
			<td><?php echo $_smarty_tpl->getVariable('cardlist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']][3];?>
</td>
			<td><?php echo $_smarty_tpl->getVariable('cardlist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']][4];?>
</td>
			<td><?php echo $_smarty_tpl->getVariable('cardlist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']][5];?>
</td>
			<td><?php echo $_smarty_tpl->getVariable('cardlist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']][6];?>
</td>
			<td>
				<?php if ($_smarty_tpl->getVariable('cardlist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']][7]==1){?>出卡可用<?php }?>
				<?php if ($_smarty_tpl->getVariable('cardlist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']][7]==0){?>作废<?php }?>
				<?php if ($_smarty_tpl->getVariable('cardlist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']][7]==2){?>回收<?php }?>
			</td>
		</tr>
		<?php endfor; endif; ?>
	</tbody>
</table>
<script type="text/javascript" language="javascript" src="images/datePicker/WdatePicker.js"></script>
<link href="images/datePicker/skin/WdatePicker.css" rel="stylesheet" type="text/css" />
<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

