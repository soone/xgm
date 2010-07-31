<!--{include file="header.tpl"}-->
<h3 class="topmenu">售卡订单</h3>
<div class="divform">
  <form action="index.php" method="POST"> <p>
      	<label>客户名称：</label>中文：<input type="text" name="cname" class="text" style="width:120px" />&nbsp;&nbsp;拼音：<input type="text" name="cpinyin" class="text" style="width:120px"/>&nbsp;&nbsp;<a href="javascript:void(0);" id="check">查询</a>
    	</p>
  	<p>
      	<label>客户公司：</label><input type="text" name="ccom" class="text" />
    	</p>
  	<p>
      	<label>性别：</label><select name="sex"><option id="male" value="1">男</option><option id="woman" value="2">女</option></select>
		</p>
	<p>
          <label>联系电话1：</label><input type="text" name="tel1" class="text" style="width:120px;" />&nbsp;&nbsp;
          <label>联系电话2：</label><input type="text" name="tel2" class="text" style="width:120px;" />
    	</p>
  	<p>
      	<label>邮箱：</label><input type="text" name="email" class="text" />
    	</p>
  	<p>
      	<label>网址：</label><input type="text" name="website" class="text" />
    	</p>
  	<p>
      	<label>MSN：</label><input type="text" name="msn" class="text" style="width:120px;" />&nbsp;&nbsp;
          <label>QQ：</label><input type="text" name="qq" class="text" style="width:120px;" />&nbsp;&nbsp;
          <label>淘宝：</label><input type="text" name="taobao" class="text" style="width:120px;" />&nbsp;&nbsp;
          <label>飞信：</label><input type="text" name="fetion" class="text" style="width:120px;" />&nbsp;&nbsp;
    	</p>
  	<p>
      	<label>银行名称：</label><input type="text" name="bname" class="text" />
    	</p>
  	<p>
      	<label>结算账号：</label><input type="text" name="bno" class="text" />
    	</p>
  	<p>
      	<label>备注：</label>
          <br />
          <textarea name="mark"></textarea>
    	</p>
  	<p>
      	<label>礼品卡名称：</label>
		<select name="ciid" id="ciid">
			<!--{section name=c loop=$cdata}-->
			<option value="<!--{$cdata[c].0}-->"><!--{$cdata[c].1}--></option>
			<!--{/section}-->
		</select>
		&nbsp;&nbsp;
		面值：
		<!--{section name=m loop=$cdata}-->
		<span id="ciid<!--{$cdata[m].0}-->" class="r" <!--{if $smarty.section.m.index != 0}-->style="display:none"<!--{/if}-->><input type="text" name="cmoney" value="<!--{$cdata[m].2}-->" class="text" style="width:120px" readonly="readonly" /></span>
		<!--{/section}-->
		&nbsp;&nbsp;
      	<label>数量：</label><input type="text" name="nums" class="text" style="width:120px" value="1000" id="nums" />
    	</p>
  	<p>
      	<label>订单售价：</label><input type="text" name="omoney" class="text" style="width:120px" id="omoney" />&nbsp;&nbsp;
      	<label>单卡均价：</label><input type="text" name="emoney" class="text" style="width:120px" value="0" id="emoney" readonly="readonly" />&nbsp;&nbsp;
      	<label>过期日期：</label><input type="text" name="expdate" onFocus="WdatePicker({lang:'zh_cn',skin:'whyGreen'})" class="text" style="width:120px" />&nbsp;&nbsp;
      	<label>发票：</label><select name="invoc" id="ginvoc"><option value="0">否</option><option value="1">是</option></select>
    	</p>
  	<p style="display:none" id="invoctext">
      	<label>发票内容：</label><br />
		<textarea name="invoctext"></textarea>
    	</p>
  	<p>
      	<label>备注：</label><br />
		<textarea name="mark"></textarea>
    	</p>
  	<p>
		<input type="button" id="sx" name="gocard" value="卡号筛选" class="button" />
    	</p>
  	<div style="display:none" id="cardchoose">
      	<label>卡号起始：</label><input type="text" id="cardstart" name="cardstart" class="text" style="width:120px" />&nbsp;&nbsp;
      	<label>卡号结束：</label><input type="text" id="cardend" name="cardend" class="text" style="width:120px" />&nbsp;&nbsp;
		<a href="javascript:void(0);" id="cardadd">添加</a>&nbsp;&nbsp;<a href="javascript:void(0);" id="clearcard">清空卡号</a>
		<div>
      	<label>可用卡号：</label><label>总<b id="cardnums">0</b>张可用卡号</label>&nbsp;&nbsp;点击卡号置为不可用<br />
		<div id="usecard"></div><br />
      	<label>挑出不可用卡号：</label>点击卡号置为可用<br />
		<div id="uncard"></div>
		</div><br />
		<input type="hidden" name="cards" id="cards" value="" />
    	</div>
      <p>
	  	<input type="hidden" name="action" value="order" />
      	<input type="submit" name="submit" value="添加" />
        <input type="reset" value="清空" />
	  	<input type="hidden" name="control" value="card" />
      </p>
  </form>
</div>
<script language="javascript" type="text/javascript">
$('#ciid').bind('change', function(){
	var id = $('#ciid').val();
	$('span:.r').hide();
	$('#ciid'+id).show();
});
$('#nums').bind('change', function(){
	if(isNaN(parseInt($('#nums').val())))
	{
		alert('数量必须为数字');
		return false;
	}
});
$('#omoney').bind('change', function(){
	var an = parseInt($('#nums').val());
	var om = parseInt($('#omoney').val());
	if(isNaN(om))
	{
		alert('订单总价必须为数字');
		return false;
	}

	$('#emoney').val((om/an)*100/100);
});
$('#ginvoc').bind('change', function(){
	var gi = $('#ginvoc').val();
	if(gi == 1)
		$('#invoctext').show();
	else
		$('#invoctext').hide();
});
$('#sx').bind('click', function(){
	var an = parseInt($('#nums').val());
	if(an == 0 || isNaN(an))
	{
		alert('请填写数量');
	}
	else
	{
		$('#cardchoose').show();
	}
});
$('#check').bind('click', function(){
	var name = $("input[name='cname']").val();
	if(!name)
		alert('请填写客户名称');
	else
	{
		$.getJSON('index.php', {control:"card",action:"check",cname:name}, function(data){
			if(data == 0)
				alert('暂无该客户信息');
			else
			{
				$("input[name='cpinyin']").val(data[2]);
				$("input[name='ccom']").val(data[3]);
				if(data[4] == 1)
					$('#male').attr('selected', true);
				else
					$('#woman').attr('selected', true);

				data[6] ? $("input[name='tel1']").val(data[6]) : '';
				data[7] ? $("input[name='tel2']").val(data[7]) : '';
				data[8] ? $("input[name='email']").val(data[8]) : '';
				data[9] ? $("input[name='website']").val(data[9]) : '';
				data[10] ? $("input[name='msn']").val(data[10]) : '';
				data[11] ? $("input[name='qq']").val(data[11]) : '';
				data[12] ? $("input[name='taobao']").val(data[12]) : '';
				data[13] ? $("input[name='fetion']").val(data[13]) : '';
				data[15] ? $("input[name='bname']").val(data[15]) : '';
				data[14] ? $("input[name='bno']").val(data[14]) : '';
				data[16] ? $("textarea[name='mark']").val(data[16]) : '';
			}
		});
	}
});
$('#cardadd').bind('click', function(){
	var cs = parseInt($('#cardstart').val());
	var ce = parseInt($('#cardend').val());
	if(cs == 0 || isNaN(cs) || ce == 0 || isNaN(ce) || ce < cs)
	{
		alert("请检查起始和结束卡号");
	}
	else
	{
		var tmpusec = $('#usecard').html();
		var tmpunc = $('#uncard').html();
		var cards = $('#cards').val();
		var usec=unc='';
		var j = 0
		for(var i=cs; i <= ce; i++)
		{
			i += "";
			if(tmpusec.indexOf(i) != -1 || tmpunc.indexOf(i) != -1)
				continue;

			if(i.indexOf('4') == -1)
			{
				usec += "<span onclick='remove(1, this.id)' id='"+i+"'>"+i+"&nbsp;&nbsp;</span>";
				cards += (',' + i);
				j++;
			}
			else
				unc += "<span onclick='remove(2, this.id)' id='"+i+"'>"+i+"&nbsp;&nbsp;</span>";
		}

		$('#usecard').html(usec+tmpusec);
		$('#uncard').html(unc+tmpunc);
		$('#cardnums').html(parseInt($('#cardnums').html())+j);
		$('#cards').val(cards);
	}
});

function remove(type, id)
{
	var c = cid = t = '';
	if(type == 2)
	{
		c = $('#usecard').html();
		cid = 'usecard';
		t = 1;
	}
	else
	{
		c = $('#uncard').html();
		cid = 'uncard';
		t = 2;
	}

	$('#'+id).remove();
	if(c.indexOf(id) == -1)
	{
		a = "<span onclick='remove("+t+", "+id+")'id='"+id+"'>"+id+"&nbsp;&nbsp;</span>"+c;
		$('#'+cid).html(a);
		var cards = $('#cards').val();
		if(type == 1)
		{
			var arrCards = cards.split(',');
			var count = arrCards.length;
			var newCards = new Array();
			for(var j = 0; j < count; j++)
			{
				if(arrCards[j] == id) continue;
				newCards.push(arrCards[j]);
			}

			$('#cards').val(newCards.toString());
			$('#cardnums').html(parseInt($('#cardnums').html())-1);
		}
		else
		{
			$('#cards').val(cards + ',' + id);
			$('#cardnums').html(parseInt($('#cardnums').html())+1);
		}
	}
}
$('#clearcard').bind('click', function(){
	if(confirm('确定清空？？'))
	{
		$('#usecard').html('');
		$('#uncard').html('');
		$('#cardnums').html(0);
		$('#cards').val('');
	}
});
</script>
<script type="text/javascript" language="javascript" src="images/datePicker/WdatePicker.js"></script>
<link href="images/datePicker/skin/WdatePicker.css" rel="stylesheet" type="text/css" />
<!--{include file="footer.tpl"}-->
