<?php /* Smarty version Smarty3-b8, created on 2010-12-29 01:00:22
         compiled from "/media/work_study/work/soone/xgm/./Www/template/default/Card_search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11865067164d1a17a6df9f43-00805492%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee15f0c1fd6fe236c67dc13f3519c3e10d551a03' => 
    array (
      0 => '/media/work_study/work/soone/xgm/./Www/template/default/Card_search.tpl',
      1 => 1290926247,
    ),
  ),
  'nocache_hash' => '11865067164d1a17a6df9f43-00805492',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<h3 class="topmenu">礼品卡查询</h3>
<div class="divform">
	<form action="index.php" method="GET">
		<p>
			<label>卡号：</label><input type="text" name="cardno" class="text" value="<?php echo $_smarty_tpl->getVariable('info')->value[0];?>
" />&nbsp;&nbsp;
			<input type="submit" name="submit" value="查询" />
			<input type="hidden" name="control" value="card" />
			<input type="hidden" name="action" value="search" />
		</p>
	</form>
	<?php if ($_smarty_tpl->getVariable('card')->value){?>
	<?php if ($_smarty_tpl->getVariable('card')->value[9]>0&&$_smarty_tpl->getVariable('card')->value[5]==1){?>
	<h5>点击<a href="index.php?control=good&action=order&clnum=<?php echo $_smarty_tpl->getVariable('card')->value[3];?>
&clid=<?php echo $_smarty_tpl->getVariable('card')->value[1];?>
&balance=<?php echo $_smarty_tpl->getVariable('card')->value[9];?>
&ctype=<?php echo $_smarty_tpl->getVariable('cType')->value[6];?>
">这里</a>开始登记配送单信息</h5>
	<?php }?>
	<table class="slist">
		<tr>
			<td><b>卡号</b></td>
			<td><?php echo $_smarty_tpl->getVariable('card')->value[3];?>
</td>
			<td><b>卡面值</b></td>
			<td><?php echo $_smarty_tpl->getVariable('card')->value[8];?>
</td>
			<td><b>卡余额</b></td>
			<td><?php echo $_smarty_tpl->getVariable('card')->value[9];?>
</td>
			<td><b>卡状态</b></td>
			<td><?php if ($_smarty_tpl->getVariable('card')->value[5]==1){?>已出卡可用<?php }?><?php if ($_smarty_tpl->getVariable('card')->value[5]==0){?>作废<?php }?><?php if ($_smarty_tpl->getVariable('card')->value[5]==2){?>回收<?php }?><?php if ($_smarty_tpl->getVariable('card')->value[6]=='0000-00-00 00:00:00'){?>(未出卡)<?php }?></td>
			<td><b>卡名称</b></td>
			<td><?php echo $_smarty_tpl->getVariable('cType')->value[1];?>
</td>
			<td><b>卡类型</b></td>
			<td><?php if ($_smarty_tpl->getVariable('cType')->value[6]==1){?>储物卡<?php }else{ ?>储值卡<?php }?></td>
		</tr>
		<tr>
			<td><b>有效期</b></td>
			<td><?php echo $_smarty_tpl->getVariable('card')->value[7];?>
</td>
			<td><b>卡外观</b></td>
			<td><?php echo $_smarty_tpl->getVariable('cType')->value[4];?>
</td>
			<td><b>生成日期</b></td>
			<td><?php echo $_smarty_tpl->getVariable('card')->value[4];?>
</td>
			<td><b>售卡订单号</b></td>
			<td colspan="5"><?php echo $_smarty_tpl->getVariable('card')->value[10];?>
</td>
		</tr>
		<tr>
			<td><b>订卡客户名称</b></td>
			<td colspan="4"><?php echo $_smarty_tpl->getVariable('cardOrder')->value[10];?>
</td>
			<td><b>套餐编号</b></td>
			<td colspan="6"><?php echo $_smarty_tpl->getVariable('card')->value[11];?>
</td>
		</tr>
		<tr>
			<td><b>配置信息</b></td>
			<td colspan="11"><?php echo $_smarty_tpl->getVariable('cType')->value[7];?>
</td>
		</tr>
		<tr>
			<td><b>以往配送单记录</b></td>
			<td colspan="11">
				<?php if ($_smarty_tpl->getVariable('orders')->value){?>
				<table width="98%" align="center">
					<thead>
						<tr>
							<td><b>配送单号</b></td>
							<td><b>下单日期</b></td>
							<td><b>配送日期</b></td>
							<td><b>状态</b></td>
						</tr>
					</thead>
					<tbody>
						<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['o']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['name'] = 'o';
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('orders')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['o']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['o']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['o']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['o']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['o']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['o']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['total']);
?>
						<tr>
							<td><a href="index.php?control=good&action=order&goid=<?php echo $_smarty_tpl->getVariable('orders')->value[$_smarty_tpl->getVariable('smarty')->value['section']['o']['index']][0];?>
"><?php echo $_smarty_tpl->getVariable('orders')->value[$_smarty_tpl->getVariable('smarty')->value['section']['o']['index']][1];?>
</a></td>
							<td><?php echo $_smarty_tpl->getVariable('orders')->value[$_smarty_tpl->getVariable('smarty')->value['section']['o']['index']][2];?>
</td>
							<td><?php echo $_smarty_tpl->getVariable('orders')->value[$_smarty_tpl->getVariable('smarty')->value['section']['o']['index']][3];?>
</td>
							<td><?php if ($_smarty_tpl->getVariable('orders')->value[$_smarty_tpl->getVariable('smarty')->value['section']['o']['index']][4]==1){?>未配送<?php }elseif($_smarty_tpl->getVariable('orders')->value[$_smarty_tpl->getVariable('smarty')->value['section']['o']['index']][4]==2){?>配送完成<?php }elseif($_smarty_tpl->getVariable('orders')->value[$_smarty_tpl->getVariable('smarty')->value['section']['o']['index']][4]==3){?>作废<?php }elseif($_smarty_tpl->getVariable('orders')->value[$_smarty_tpl->getVariable('smarty')->value['section']['o']['index']][4]==4){?>退货<?php }elseif($_smarty_tpl->getVariable('orders')->value[$_smarty_tpl->getVariable('smarty')->value['section']['o']['index']][4]==5){?>换货<?php }?></td>
						</tr>
						<?php endfor; endif; ?>
					</tbody>
				</table>
				<?php }?>
			</td>
		</tr>
		<tr>
			<td colspan="12">
			<form action="index.php" method="GET">
				<b>套餐编号</b>
				<input type="text" name="cl_flag" value="<?php echo $_smarty_tpl->getVariable('card')->value[11];?>
" />
				<b>卡状态修改</b>
				<select name="cl_state">
					<option value="2">回收</option>
					<option value="0">作废</option>
				</select>
				<input type="hidden" name="cl_id" value="<?php echo $_smarty_tpl->getVariable('card')->value[1];?>
" />
				<input type="hidden" name="control" value="card" />
				<input type="hidden" name="action" value="chstatus" />
				<input type="submit" name="gosubmit" value="提交修改" onclick="return confirm('确定提交？');" />
			</form>
			</td>
		</tr>
	</table>
	<?php }?>
</div>
<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

