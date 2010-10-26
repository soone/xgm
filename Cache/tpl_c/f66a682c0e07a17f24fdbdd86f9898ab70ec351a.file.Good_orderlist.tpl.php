<?php /* Smarty version Smarty3-b8, created on 2010-10-26 12:26:31
         compiled from "/media/work_study/work/soone/xgm/./Www/template/default/Good_orderlist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8787086934cc658771a8205-19581179%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f66a682c0e07a17f24fdbdd86f9898ab70ec351a' => 
    array (
      0 => '/media/work_study/work/soone/xgm/./Www/template/default/Good_orderlist.tpl',
      1 => 1288022740,
    ),
  ),
  'nocache_hash' => '8787086934cc658771a8205-19581179',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<h3 class="topmenu">配送单列表</h3>
<div>
<form>
	<label>客户电话：</label><input type="text" class="text" name="cphone" style="width:120px;" value="<?php echo $_GET['cphone'];?>
" />&nbsp;&nbsp;
	<label>客户姓名：</label><input type="text" class="text" name="cname" style="width:120px;" value="<?php echo $_GET['cname'];?>
" />&nbsp;&nbsp;
	<label>配送日期：</label><input type="text" class="text" name="sdate" style="width:120px;" onFocus="WdatePicker({lang:'zh_cn',skin:'whyGreen'})" value="<?php echo $_GET['cdate'];?>
" /><br />
	<label>下单日期：</label><input type="text" class="text" name="cdate" style="width:120px;" onFocus="WdatePicker({lang:'zh_cn',skin:'whyGreen'})" value="<?php echo $_GET['cdate'];?>
" /><br />
	<label>订单状态：</label>
	<select name="cstatus">
		<option value="">请选择</option>
		<option <?php if ($_GET['cstatus']==1){?>selected="selected" <?php }?>value="1">未配送</option>
		<option <?php if ($_GET['cstatus']==2){?>selected="selected" <?php }?>value="2">配送完成</option>
		<option <?php if ($_GET['cstatus']==3){?>selected="selected" <?php }?>value="3">作废</option>
		<option <?php if ($_GET['cstatus']==6){?>selected="selected" <?php }?>value="6">正在配送</option>
	</select>
	<input type="hidden" name="control" value="good" />
	<input type="hidden" name="action" value="orderlist" />
	<input type="submit" name="submit" value="查看" />
</form>
</div>
<table class="slist">
	<thead>
		<tr>
			<th>单号</th>
			<th>总价</th>
			<th>类型</th>
			<th>下单人</th>
			<th>状态</th>
			<th>预定配送时间</th>
			<th>操作</th>
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
						<li><a href="index.php?control=good&action=orderlist">|<</a></li>
						<li><a href="index.php?control=good&action=orderlist&page=<?php echo $_smarty_tpl->getVariable('page')->value['prevPage'];?>
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
						<li><a href="index.php?control=good&action=orderlist&page=<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['p']['index'];?>
"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['p']['index'];?>
</a></li>
						<?php endfor; endif; ?>
						<li><a href="index.php?control=goodaction=orderlist&page=<?php echo $_smarty_tpl->getVariable('page')->value['nextPage'];?>
">>></a></li>
						<li><a href="index.php?control=goodaction=orderlist&page=<?php echo $_smarty_tpl->getVariable('page')->value['allPages'];?>
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
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('golist')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
			<td><?php echo $_smarty_tpl->getVariable('golist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']][1];?>
</td>
			<td><?php echo $_smarty_tpl->getVariable('golist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']][6];?>
</td>
			<td><?php if ($_smarty_tpl->getVariable('golist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']][4]==1){?>储物卡配送单<?php }elseif($_smarty_tpl->getVariable('golist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']][4]==2){?>储值卡配送单<?php }elseif($_smarty_tpl->getVariable('golist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']][4]==3){?>零散配送单<?php }elseif($_smarty_tpl->getVariable('golist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']][4]==4){?>补送配送单<?php }elseif($_smarty_tpl->getVariable('golist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']][4]==5){?>投诉补送配送单<?php }elseif($_smarty_tpl->getVariable('golist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']][4]==7){?>返厂配送单<?php }?></td>
			<td><?php echo $_smarty_tpl->getVariable('golist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']][2];?>
</td>
			<td><?php if ($_smarty_tpl->getVariable('golist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']][3]==1){?>未配送<?php }elseif($_smarty_tpl->getVariable('golist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']][3]==2){?>配送完成<?php }elseif($_smarty_tpl->getVariable('golist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']][3]==3){?>作废<?php }elseif($_smarty_tpl->getVariable('golist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']][3]==4){?>退货<?php }elseif($_smarty_tpl->getVariable('golist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']][3]==5){?>换货<?php }elseif($_smarty_tpl->getVariable('golist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']][3]==6){?>配送中<?php }?></td>
			<td><?php echo $_smarty_tpl->getVariable('golist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']][5];?>
</td>
			<td>
				<?php if ($_smarty_tpl->getVariable('golist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']][3]!=2){?>
				<select onchange="javascript:setthis(<?php echo $_smarty_tpl->getVariable('golist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']][0];?>
);" id="aType_<?php echo $_smarty_tpl->getVariable('golist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']][0];?>
" name="aType">
					<option value="">选择操作</option>
					<option value="2">配送完成</option>
					<option value="3">作废</option>
				</select><br />
				<input type="hidden" id="coid" value="<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']][0];?>
" />
				<?php }?>
				<?php if ($_smarty_tpl->getVariable('golist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']][3]==1){?><a href="index.php?control=good&action=gout&go=<?php echo $_smarty_tpl->getVariable('golist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']][1];?>
">出库配送</a><br /><?php }?><a href="">查看详情</a><br /><?php if ($_smarty_tpl->getVariable('golist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']][3]==6){?><a href="index.php?control=good&action=changecar&oid=<?php echo $_smarty_tpl->getVariable('golist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']][1];?>
">修改分车</a><?php }?>
			</td>
		</tr>
		<?php endfor; endif; ?>
	</tbody>
</table>
<script language="javascript" type="text/javascript">
function setthis(id)
{
	var aType = $('#aType_'+id).val();
	if(aType == '2')
		var url = 'index.php?control=good&action=gochange';
	else
		var url = 'index.php?control=good&action=backchange';

	url += '&id='+id;

	if(aType)
	{
		url += '&t='+aType;
		location.href=url;
	}
	else
		alert('请选择相应的操作');
}
</script>
<script type="text/javascript" language="javascript" src="images/datePicker/WdatePicker.js"></script>
<link href="images/datePicker/skin/WdatePicker.css" rel="stylesheet" type="text/css" />
<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

