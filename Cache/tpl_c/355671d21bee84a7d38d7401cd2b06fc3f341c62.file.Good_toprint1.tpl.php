<?php /* Smarty version Smarty3-b8, created on 2010-11-12 15:26:01
         compiled from "/media/work_study/work/soone/xgm/./Www/template/default/Good_toprint1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6033806754cdcec09d7baf4-97630215%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '355671d21bee84a7d38d7401cd2b06fc3f341c62' => 
    array (
      0 => '/media/work_study/work/soone/xgm/./Www/template/default/Good_toprint1.tpl',
      1 => 1289546644,
    ),
  ),
  'nocache_hash' => '6033806754cdcec09d7baf4-97630215',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header1.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<h1>汇总单</h1>
<h3>配送日期：<?php echo $_GET['date'];?>
</h3>
<table class="slist">
	<thead>
		<tr>
			<th>下单日期</th>
			<th>礼品卡号</th>
			<th>订单内容</th>
			<th>订单类型</th>
			<th>订货人</th>
			<th>收货人</th>
			<th>收货人电话</th>
			<th>收货人地址</th>
			<th>付款方式</th>
			<th>远程费</th>
			<th>代收金额</th>
			<th>送货备注</th>
			<th>其他备注</th>
		</tr>
	</thead>
	<tbody>
		<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ao']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ao']['name'] = 'ao';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ao']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('allOrder')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ao']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ao']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ao']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ao']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ao']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ao']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ao']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ao']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ao']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ao']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ao']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ao']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ao']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ao']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ao']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ao']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ao']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ao']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ao']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ao']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ao']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ao']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ao']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ao']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ao']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ao']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ao']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ao']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ao']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ao']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ao']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ao']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ao']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ao']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ao']['total']);
?>
		<tr>
			<td><?php echo $_smarty_tpl->getVariable('allOrder')->value[$_smarty_tpl->getVariable('smarty')->value['section']['ao']['index']][12];?>
</td>
			<td><?php echo $_smarty_tpl->getVariable('allOrder')->value[$_smarty_tpl->getVariable('smarty')->value['section']['ao']['index']][18];?>
</td>
			<td>订单内容</td>
			<td>
				<?php if ($_smarty_tpl->getVariable('allOrder')->value[$_smarty_tpl->getVariable('smarty')->value['section']['ao']['index']][7]==1){?>储物卡<?php }?>
				<?php if ($_smarty_tpl->getVariable('allOrder')->value[$_smarty_tpl->getVariable('smarty')->value['section']['ao']['index']][7]==2){?>储值卡<?php }?>
				<?php if ($_smarty_tpl->getVariable('allOrder')->value[$_smarty_tpl->getVariable('smarty')->value['section']['ao']['index']][7]==3){?>零散配送单<?php }?>
				<?php if ($_smarty_tpl->getVariable('allOrder')->value[$_smarty_tpl->getVariable('smarty')->value['section']['ao']['index']][7]==4){?>补送配送单<?php }?>
				<?php if ($_smarty_tpl->getVariable('allOrder')->value[$_smarty_tpl->getVariable('smarty')->value['section']['ao']['index']][7]==6){?>异常配送单<?php }?>
				<?php if ($_smarty_tpl->getVariable('allOrder')->value[$_smarty_tpl->getVariable('smarty')->value['section']['ao']['index']][7]==7){?>返厂配送单<?php }?>
			</td>
			<td><?php echo $_smarty_tpl->getVariable('allOrder')->value[$_smarty_tpl->getVariable('smarty')->value['section']['ao']['index']][8];?>
</td>
			<td><?php echo $_smarty_tpl->getVariable('allOrder')->value[$_smarty_tpl->getVariable('smarty')->value['section']['ao']['index']][15];?>
</td>
			<td><?php echo $_smarty_tpl->getVariable('allOrder')->value[$_smarty_tpl->getVariable('smarty')->value['section']['ao']['index']][17];?>
</td>
			<td><?php echo $_smarty_tpl->getVariable('allOrder')->value[$_smarty_tpl->getVariable('smarty')->value['section']['ao']['index']][16];?>
</td>
			<td>
				<?php if ($_smarty_tpl->getVariable('allOrder')->value[$_smarty_tpl->getVariable('smarty')->value['section']['ao']['index']][4]==1){?>司机代收<?php }?>
				<?php if ($_smarty_tpl->getVariable('allOrder')->value[$_smarty_tpl->getVariable('smarty')->value['section']['ao']['index']][4]==2){?>支付宝<?php }?>
				<?php if ($_smarty_tpl->getVariable('allOrder')->value[$_smarty_tpl->getVariable('smarty')->value['section']['ao']['index']][4]==3){?>其他<?php }?>
			</td>
			<td><?php echo $_smarty_tpl->getVariable('allOrder')->value[$_smarty_tpl->getVariable('smarty')->value['section']['ao']['index']][6];?>
</td>
			<td><?php echo $_smarty_tpl->getVariable('allOrder')->value[$_smarty_tpl->getVariable('smarty')->value['section']['ao']['index']][13];?>
</td>
			<td><?php echo $_smarty_tpl->getVariable('allOrder')->value[$_smarty_tpl->getVariable('smarty')->value['section']['ao']['index']][10];?>
</td>
			<td><?php echo $_smarty_tpl->getVariable('allOrder')->value[$_smarty_tpl->getVariable('smarty')->value['section']['ao']['index']][11];?>
</td>
		</tr>
		<?php endfor; endif; ?>
	</tbody>
</table>
<table class="slist">
	<thead>
		<tr>
			<th>名称</th>
			<th>数量</th>
		</tr>
	</thead>
	<tbody>
		<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ag']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ag']['name'] = 'ag';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ag']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('allGood')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
			<td><?php echo $_smarty_tpl->getVariable('allGood')->value[$_smarty_tpl->getVariable('smarty')->value['section']['ag']['index']][1];?>
</td>
			<td><?php echo $_smarty_tpl->getVariable('allGood')->value[$_smarty_tpl->getVariable('smarty')->value['section']['ag']['index']][0];?>
</td>
		</tr>
		<?php endfor; endif; ?>
	</tbody>
</table>
<h3>分车汇总</h3>
<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['cc']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['cc']['name'] = 'cc';
$_smarty_tpl->tpl_vars['smarty']->value['section']['cc']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('cars')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['cc']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['cc']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cc']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cc']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['cc']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cc']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['cc']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['cc']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['cc']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cc']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['cc']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['cc']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['cc']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['cc']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['cc']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cc']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['cc']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['cc']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['cc']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['cc']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['cc']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['cc']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['cc']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cc']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cc']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cc']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['cc']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cc']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cc']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['cc']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cc']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['cc']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['cc']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['cc']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['cc']['total']);
?>
<h5><?php echo $_smarty_tpl->getVariable('cars')->value[$_smarty_tpl->getVariable('smarty')->value['section']['cc']['index']];?>
</h5>
<table class="slist">
	<thead>
		<tr>
			<th>下单日期</th>
			<th>礼品卡号</th>
			<th>订单内容</th>
			<th>订单类型</th>
			<th>订货人</th>
			<th>收货人</th>
			<th>收货人电话</th>
			<th>收货人地址</th>
			<th>付款方式</th>
			<th>远程费</th>
			<th>代收金额</th>
			<th>送货备注</th>
			<th>其他备注</th>
		</tr>
	</thead>
	<tbody>
		<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ao']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ao']['name'] = 'ao';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ao']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('carOrder')->value[$_smarty_tpl->getVariable('cars')->value[$_smarty_tpl->getVariable('smarty')->value['section']['cc']['index']]]) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ao']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ao']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ao']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ao']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ao']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ao']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ao']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ao']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ao']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ao']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ao']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ao']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ao']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ao']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ao']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ao']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ao']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ao']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ao']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ao']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ao']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ao']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ao']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ao']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ao']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ao']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ao']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ao']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ao']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ao']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ao']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ao']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ao']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ao']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ao']['total']);
?>
		<tr>
			<td><?php echo $_smarty_tpl->getVariable('carOrder')->value[$_smarty_tpl->getVariable('cars')->value[$_smarty_tpl->getVariable('smarty')->value['section']['cc']['index']]][$_smarty_tpl->getVariable('smarty')->value['section']['ao']['index']][12];?>
</td>
			<td><?php echo $_smarty_tpl->getVariable('carOrder')->value[$_smarty_tpl->getVariable('cars')->value[$_smarty_tpl->getVariable('smarty')->value['section']['cc']['index']]][$_smarty_tpl->getVariable('smarty')->value['section']['ao']['index']][18];?>
</td>
			<td>订单内容</td>
			<td>
				<?php if ($_smarty_tpl->getVariable('carOrder')->value[$_smarty_tpl->getVariable('cars')->value[$_smarty_tpl->getVariable('smarty')->value['section']['cc']['index']]][$_smarty_tpl->getVariable('smarty')->value['section']['ao']['index']][7]==1){?>储物卡<?php }?>
				<?php if ($_smarty_tpl->getVariable('carOrder')->value[$_smarty_tpl->getVariable('cars')->value[$_smarty_tpl->getVariable('smarty')->value['section']['cc']['index']]][$_smarty_tpl->getVariable('smarty')->value['section']['ao']['index']][7]==2){?>储值卡<?php }?>
				<?php if ($_smarty_tpl->getVariable('carOrder')->value[$_smarty_tpl->getVariable('cars')->value[$_smarty_tpl->getVariable('smarty')->value['section']['cc']['index']]][$_smarty_tpl->getVariable('smarty')->value['section']['ao']['index']][7]==3){?>零散配送单<?php }?>
				<?php if ($_smarty_tpl->getVariable('carOrder')->value[$_smarty_tpl->getVariable('cars')->value[$_smarty_tpl->getVariable('smarty')->value['section']['cc']['index']]][$_smarty_tpl->getVariable('smarty')->value['section']['ao']['index']][7]==4){?>补送配送单<?php }?>
				<?php if ($_smarty_tpl->getVariable('carOrder')->value[$_smarty_tpl->getVariable('cars')->value[$_smarty_tpl->getVariable('smarty')->value['section']['cc']['index']]][$_smarty_tpl->getVariable('smarty')->value['section']['ao']['index']][7]==6){?>异常配送单<?php }?>
				<?php if ($_smarty_tpl->getVariable('carOrder')->value[$_smarty_tpl->getVariable('cars')->value[$_smarty_tpl->getVariable('smarty')->value['section']['cc']['index']]][$_smarty_tpl->getVariable('smarty')->value['section']['ao']['index']][7]==7){?>返厂配送单<?php }?>
			</td>
			<td><?php echo $_smarty_tpl->getVariable('carOrder')->value[$_smarty_tpl->getVariable('cars')->value[$_smarty_tpl->getVariable('smarty')->value['section']['cc']['index']]][$_smarty_tpl->getVariable('smarty')->value['section']['ao']['index']][8];?>
</td>
			<td><?php echo $_smarty_tpl->getVariable('carOrder')->value[$_smarty_tpl->getVariable('cars')->value[$_smarty_tpl->getVariable('smarty')->value['section']['cc']['index']]][$_smarty_tpl->getVariable('smarty')->value['section']['ao']['index']][15];?>
</td>
			<td><?php echo $_smarty_tpl->getVariable('carOrder')->value[$_smarty_tpl->getVariable('cars')->value[$_smarty_tpl->getVariable('smarty')->value['section']['cc']['index']]][$_smarty_tpl->getVariable('smarty')->value['section']['ao']['index']][17];?>
</td>
			<td><?php echo $_smarty_tpl->getVariable('carOrder')->value[$_smarty_tpl->getVariable('cars')->value[$_smarty_tpl->getVariable('smarty')->value['section']['cc']['index']]][$_smarty_tpl->getVariable('smarty')->value['section']['ao']['index']][16];?>
</td>
			<td>
				<?php if ($_smarty_tpl->getVariable('carOrder')->value[$_smarty_tpl->getVariable('cars')->value[$_smarty_tpl->getVariable('smarty')->value['section']['cc']['index']]][$_smarty_tpl->getVariable('smarty')->value['section']['ao']['index']][4]==1){?>司机代收<?php }?>
				<?php if ($_smarty_tpl->getVariable('carOrder')->value[$_smarty_tpl->getVariable('cars')->value[$_smarty_tpl->getVariable('smarty')->value['section']['cc']['index']]][$_smarty_tpl->getVariable('smarty')->value['section']['ao']['index']][4]==2){?>支付宝<?php }?>
				<?php if ($_smarty_tpl->getVariable('carOrder')->value[$_smarty_tpl->getVariable('cars')->value[$_smarty_tpl->getVariable('smarty')->value['section']['cc']['index']]][$_smarty_tpl->getVariable('smarty')->value['section']['ao']['index']][4]==3){?>其他<?php }?>
			</td>
			<td><?php echo $_smarty_tpl->getVariable('carOrder')->value[$_smarty_tpl->getVariable('cars')->value[$_smarty_tpl->getVariable('smarty')->value['section']['cc']['index']]][$_smarty_tpl->getVariable('smarty')->value['section']['ao']['index']][6];?>
</td>
			<td><?php echo $_smarty_tpl->getVariable('carOrder')->value[$_smarty_tpl->getVariable('cars')->value[$_smarty_tpl->getVariable('smarty')->value['section']['cc']['index']]][$_smarty_tpl->getVariable('smarty')->value['section']['ao']['index']][13];?>
</td>
			<td><?php echo $_smarty_tpl->getVariable('carOrder')->value[$_smarty_tpl->getVariable('cars')->value[$_smarty_tpl->getVariable('smarty')->value['section']['cc']['index']]][$_smarty_tpl->getVariable('smarty')->value['section']['ao']['index']][10];?>
</td>
			<td><?php echo $_smarty_tpl->getVariable('carOrder')->value[$_smarty_tpl->getVariable('cars')->value[$_smarty_tpl->getVariable('smarty')->value['section']['cc']['index']]][$_smarty_tpl->getVariable('smarty')->value['section']['ao']['index']][11];?>
</td>
		</tr>
		<?php endfor; endif; ?>
	</tbody>
</table>
<table class="slist">
	<thead>
		<tr>
			<th>名称</th>
			<th>数量</th>
		</tr>
	</thead>
	<tbody>
		<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ag']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ag']['name'] = 'ag';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ag']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('allCarGood')->value[$_smarty_tpl->getVariable('cars')->value[$_smarty_tpl->getVariable('smarty')->value['section']['cc']['index']]]) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
			<td><?php echo $_smarty_tpl->getVariable('allCarGood')->value[$_smarty_tpl->getVariable('cars')->value[$_smarty_tpl->getVariable('smarty')->value['section']['cc']['index']]][$_smarty_tpl->getVariable('smarty')->value['section']['ag']['index']][1];?>
</td>
			<td><?php echo $_smarty_tpl->getVariable('allCarGood')->value[$_smarty_tpl->getVariable('cars')->value[$_smarty_tpl->getVariable('smarty')->value['section']['cc']['index']]][$_smarty_tpl->getVariable('smarty')->value['section']['ag']['index']][0];?>
</td>
		</tr>
		<?php endfor; endif; ?>
	</tbody>
</table>
<?php endfor; endif; ?>
<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

