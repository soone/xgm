<!--{include file="header.tpl"}-->
<h3 class="topmenu">礼品卡定义</h3>
<div class="divform">
  <form action="index.php" method="POST">
  	<p>
      	<label>礼品卡名称：</label><input type="text" name="ciname" class="text" value="<!--{$data[1]}-->" />
    	</p>
  	<p>
      	<label>礼品卡面值：</label><input value="<!--{$data[2]}-->" type="text" name="cimoney" class="text" style="width:120px;" />
    	</p>
  	<p>
          <label>分类：</label>
		  <select name="citype">
		  	<option <!--{if $data[5] == 1}-->selected="selected" <!--{/if}-->value="1">储值卡</option>
		  	<option <!--{if $data[5] == 3}-->selected="selected" <!--{/if}-->value="3">储物卡</option>
		  </select>
    	</p>
  	<p>
      	<label>卡外观：</label>
		<select name="cviewid">
			<!--{section name=v loop=$cview}-->
			<option <!--{if $data[2] == $cview[v].0}-->selected="selected" <!--{/if}-->value="<!--{$cview[v].0}-->"><!--{$cview[v].1}--></option>
			<!--{/section}-->
		</select>
    	</p>
  	<p>
          <label>配置信息：</label><br /><textarea name="cidesc"><!--{$data[6]}--></textarea>
    	</p>
  	<p>
      	<label>备注：</label><br /><textarea name="cimark"><!--{$data[7]}--></textarea>
    	</p>
      <p>
	  	<input type="hidden" name="action" value="gcarddef" />
		<input type="hidden" name="cviewinfo" value='<!--{$cviewinfo}-->' />
	  <!--{if $edit == 1}-->
	  	<input type="hidden" name="ciid" value="<!--{$data[0]}-->" />
      	<input type="submit" name="submit" value="修改" />
	  <!--{else}-->
      	<input type="submit" name="submit" value="添加" />
        <input type="reset" value="清空" />
	  <!--{/if}-->
      </p>
  </form>
</div>
<!--{include file="footer.tpl"}-->
