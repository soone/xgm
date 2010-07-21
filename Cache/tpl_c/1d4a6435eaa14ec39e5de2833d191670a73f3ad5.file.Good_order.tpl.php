<?php /* Smarty version Smarty3-b8, created on 2010-07-20 23:13:58
         compiled from "/media/work_study/work/soone/xgm/./Www/template/default/Good_order.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14771826114c45bd36b2ee84-29193720%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d4a6435eaa14ec39e5de2833d191670a73f3ad5' => 
    array (
      0 => '/media/work_study/work/soone/xgm/./Www/template/default/Good_order.tpl',
      1 => 1278949957,
    ),
  ),
  'nocache_hash' => '14771826114c45bd36b2ee84-29193720',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<h3 class="topmenu">配送单登记</h3>
<div class="divform">
	<form action="index.php" method="POST">
		<p>
			<label>配送单类型：</label>
			<select name="otype">
				<option value="0">请选择</option>
				<option value="1">储物卡配送单</option>
				<option value="2">储值卡配送单</option>
				<option value="3">零散配送单</option>
				<option value="4">补送配送单</option>
				<option value="5">投诉补送配送单</option>
			</select>
		</p>
		<p>
			<label>手机：</label><input type="text" name="mobile" class="text" style="width:120px" id="mobile" />&nbsp;&nbsp;<a href="javascript:void(0);" id="checkphone">查看</a>
		</p>
		<p>
			<label>订货人姓名：</label><input type="text" name="truename" class="text" style="width:120px" id="truename" />&nbsp;&nbsp;
			<label>拼音：</label><input type="text" name="pinname" class="text" style="width:120px" id="pinname" />
		</p>
		<p>
			<label>用户EMAIL：</label><input type="text" name="email" class="text" id="email" />&nbsp;&nbsp;
			<label>电话：</label><input type="text" name="phone" class="text" style="width:120px" id="phone" />
		</p>
		<p>
			<input type="submit" name="submit" value="下一步为客户选择物品" id="thenext" />
			<input type="hidden" name="total" id="total" />
			<input type="hidden" name="ouid" id="ouid" />
			<input type="hidden" name="action" value="order" />
			<input type="hidden" name="control" value="good" />
		</p>
	</form>
</div>
<script language="javascript" type="text/javascript">
$('#checkphone').click(function(){
	var phone = $('#mobile').val();
	if(!phone)
	{
		alert('请填写订货人手机');
		return false;
	}

	$.getJSON('index.php', {control:"good",action:"getpinfo",ou_phone:phone}, function(data){
		if(data == 0)
			alert('暂无该客户信息');
		else
		{
			$('#truename').val(data[0]);
			$('#pinname').val(data[1]);
			$('#email').val(data[2]);
			$('#phone').val(data[3]);
			$('#total').val(data[4]);
			$('#ouid').val(data[5]);
		}
	});
});
</script>
<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

