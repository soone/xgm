<!--{include file="header.tpl"}-->
<h3 class="topmenu">售卡订单</h3>
<div class="divform">
  <form action="index.php" method="POST">
  	<p>
      	<label>客户名称：</label><input type="text" name="cname" class="text" style="width:120px" />&nbsp;&nbsp;<input type="text" name="cpinyin" class="text" style="width:120px"/>
    	</p>
  	<p>
      	<label>客户公司：</label><input type="text" name="ccom" class="text" />
    	</p>
  	<p>
      	<label>性别：</label><select name="sex"><option value="1">男</option><option value="2">女</option></select>
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
          <textarea name="product"><!--{$info[18]}--></textarea>
    	</p>
      <p>
	  <!--{if $edit == 1}-->
	  	<input type="hidden" name="spid" value="<!--{$spid}-->" />
	  	<input type="hidden" name="action" value="supdoedit" />
      	<input type="submit" name="submit" value="修改" />
	  <!--{else}-->
	  	<input type="hidden" name="action" value="supplier" />
      	<input type="submit" name="submit" value="添加" />
        <input type="reset" value="清空" />
	  <!--{/if}-->
	  	<input type="hidden" name="control" value="user" />
      </p>
  </form>
</div>
<!--{include file="footer.tpl"}-->
