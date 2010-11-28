<?php /* Smarty version Smarty3-b8, created on 2010-11-29 00:25:43
         compiled from "/media/work_study/work/soone/xgm/./Www/template/default/Good_orderinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2480617444cf28287887649-72952703%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d658c374eaac4b85ccc265fbda70929e5b22ac6' => 
    array (
      0 => '/media/work_study/work/soone/xgm/./Www/template/default/Good_orderinfo.tpl',
      1 => 1290961538,
    ),
  ),
  'nocache_hash' => '2480617444cf28287887649-72952703',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<h3 class="topmenu">配送单详情(<?php echo $_GET['go'];?>
)</h3>
<div class="divform">
	<table class="slist">
		<tr>
			<td><b>下单时间</b></td>
			<td><?php echo $_smarty_tpl->getVariable('orderInfo')->value[3];?>
</td>
			<td><b>订单状态</b></td>
			<td>
				<?php if ($_smarty_tpl->getVariable('orderInfo')->value[5]==1){?>未配送<?php }?>
				<?php if ($_smarty_tpl->getVariable('orderInfo')->value[5]==2){?>配送完成<?php }?>
				<?php if ($_smarty_tpl->getVariable('orderInfo')->value[5]==3){?>作废<?php }?>
				<?php if ($_smarty_tpl->getVariable('orderInfo')->value[5]==6){?>正在配送<?php }?>
			</td>
			<td><b>卡号</b></td>
			<td><?php echo $_smarty_tpl->getVariable('cardNo')->value;?>
</td>
			<td><b>配送单类型</b></td>
			<td>
				<?php if ($_smarty_tpl->getVariable('orderInfo')->value[15]==1){?>储物卡配送单<?php }?>
				<?php if ($_smarty_tpl->getVariable('orderInfo')->value[15]==2){?>储值卡配送单<?php }?>
				<?php if ($_smarty_tpl->getVariable('orderInfo')->value[15]==3){?>零散配送单<?php }?>
				<?php if ($_smarty_tpl->getVariable('orderInfo')->value[15]==4){?>补送配送单<?php }?>
				<?php if ($_smarty_tpl->getVariable('orderInfo')->value[15]==5){?>投诉补送配送单<?php }?>
				<?php if ($_smarty_tpl->getVariable('orderInfo')->value[15]==6){?>报损配送单<?php }?>
				<?php if ($_smarty_tpl->getVariable('orderInfo')->value[15]==7){?>返厂配送单<?php }?>
			</td>
			<td><b>配送日期</b></td>
			<td><?php echo $_smarty_tpl->getVariable('orderInfo')->value[7];?>
</td>
			<td><b>订单总金额</b></td>
			<td><?php echo $_smarty_tpl->getVariable('orderInfo')->value[18];?>
</td>
		</tr>
		<tr>
			<td><b>代收金额</b></td>
			<td><?php echo $_smarty_tpl->getVariable('orderInfo')->value[19];?>
</td>
			<td><b>折扣率</b></td>
			<td><?php echo $_smarty_tpl->getVariable('orderInfo')->value[20];?>
</td>
			<td><b>远程费</b></td>
			<td><?php echo $_smarty_tpl->getVariable('orderInfo')->value[14];?>
</td>
			<td><b>远程备注</b></td>
			<td colspan="5"><?php echo $_smarty_tpl->getVariable('orderInfo')->value[22];?>
</td>
		</tr>
		<tr>
			<td><b>收款方式</b></td>
			<td>
				<?php if ($_smarty_tpl->getVariable('orderInfo')->value[8]==1){?>司机代收<?php }?>
				<?php if ($_smarty_tpl->getVariable('orderInfo')->value[8]==2){?>支付宝<?php }?>
				<?php if ($_smarty_tpl->getVariable('orderInfo')->value[8]==3){?>其他<?php }?>
			</td>
			<td><b>收费备注</b></td>
			<td colspan="9"><?php echo $_smarty_tpl->getVariable('orderInfo')->value[9];?>
</td>
		</tr>
		<tr>
			<td><b>客户姓名</b></td>
			<td><?php echo $_smarty_tpl->getVariable('orderInfo')->value[16];?>
</td>
			<td><b>客户手机</b></td>
			<td><?php echo $_smarty_tpl->getVariable('orderInfo')->value[4];?>
</td>
			<td><b>收货人信息</b></td>
			<td colspan="7">姓名：<?php echo $_smarty_tpl->getVariable('orderInfo')->value[17][2];?>
<br />地址：<?php echo $_smarty_tpl->getVariable('orderInfo')->value[17][3];?>
<br />手机：<?php echo $_smarty_tpl->getVariable('orderInfo')->value[17][4];?>
</td>
		</tr>
		<tr>
			<td><b>配送车号</b></td>
			<td><?php echo $_smarty_tpl->getVariable('orderInfo')->value[12];?>
</td>
			<td><b>送货备注</b></td>
			<td colspan="4"><?php echo $_smarty_tpl->getVariable('orderInfo')->value[21];?>
</td>
			<td><b>其他备注</b></td>
			<td colspan="4"><?php echo $_smarty_tpl->getVariable('orderInfo')->value[23];?>
</td>
		</tr>
		<tr>
			<td><b>配送单物品详情</b></td>
			<td colspan="11">
				<table>
					<tr>
						<th>名称</th>
						<th>数量</th>
					</tr>
					<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['t']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['name'] = 't';
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('goInfo')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total']);
?>
					<tr>
						<td><?php echo $_smarty_tpl->getVariable('goInfo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']][2];?>
</td>
						<td><?php echo $_smarty_tpl->getVariable('goInfo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']][1];?>
</td>
					</tr>
					<?php endfor; endif; ?>
				</table>
			</td>
		</tr>
	</table>
</div>
<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

