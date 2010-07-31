<!--{include file="header.tpl"}-->
<h3>添加进货单</h3>
<div class="divform">
  <form action="index.php" method="POST">
  	<p>
      	<label>进货单号：</label><input type="text" name="io_no" class="text" value="<!--{$info[1]}-->" style="width:120px;" />&nbsp;&nbsp;
		<label>总价：</label><input value="<!--{$info[4]}-->" type="text" name="io_total" class="text" style="width:120px;" />&nbsp;&nbsp;
        <label>进货时间：</label><input value="<!--{$info[3]}-->" type="text" name="io_date" class="text" style="width:120px;" onFocus="WdatePicker({lang:'zh_cn',skin:'whyGreen'})" />
		  </p>
	<p>
          <label>备注：</label><br />
		  <textarea name="io_mark"><!--{$info[5]}--></textarea>
    	</p>
      <p>
		<input type="hidden" name="action" value="ioadd" />
	  <!--{if $info[0]}-->
	  	<input type="hidden" name="ioid" value="<!--{$info[0]}-->" />
      	<input type="submit" name="submit" value="修改" />
	  <!--{else}-->
      	<input type="submit" name="submit" value="添加" />
        <input type="reset" value="清空" />
	  <!--{/if}-->
	  	<input type="hidden" name="control" value="good" />
      </p>
	</form>
</div>
<script type="text/javascript" language="javascript" src="images/datePicker/WdatePicker.js"></script>
<link href="images/datePicker/skin/WdatePicker.css" rel="stylesheet" type="text/css" />
<!--{include file="footer.tpl"}-->
