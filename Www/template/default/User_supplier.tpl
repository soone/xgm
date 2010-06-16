<!--{include file="header.tpl"}-->
<h3 class="topmenu"><!--{if $edit == 1}-->修改供应商资料<!--{else}-->供应商添加<!--{/if}--></h3>
<div class="divform">
  <form action="index.php" method="POST">
  	<p>
      	<label>公司名称：</label><input type="text" name="comname" class="text" value="<!--{$info[0]}-->" />
    	</p>
  	<p>
      	<label>联络人1：</label><input value="<!--{$info[1]}-->" type="text" name="cname1" class="text" style="width:120px;" />&nbsp;&nbsp;
          <label>联系电话1：</label><input value="<!--{$info[3]}-->" type="text" name="cname1tel1" class="text" style="width:120px;" />&nbsp;&nbsp;
          <label>联系电话2：</label><input value="<!--{$info[4]}-->" type="text" name="cname1tel2" class="text" style="width:120px;" />
    	</p>
  	<p>
      	<label>联络人2：</label><input value="<!--{$info[2]}-->" type="text" name="cname2" class="text" style="width:120px;" />&nbsp;&nbsp;
          <label>联系电话1：</label><input value="<!--{$info[5]}-->" type="text" name="cname2tel1" class="text" style="width:120px;" />&nbsp;&nbsp;
          <label>联系电话2：</label><input value="<!--{$info[6]}-->" type="text" name="cname2tel2" class="text" style="width:120px;" />
    	</p>
  	<p>
      	<label>供货主管：</label><input value="<!--{$info[7]}-->" type="text" name="manager" class="text" style="width:120px" />&nbsp;&nbsp;
          <label>主管手机：</label><input value="<!--{$info[8]}-->" type="text" name="mtel" class="text" style="width:120px" />
    	</p>
  	<p>
      	<label>MSN：</label><input value="<!--{$info[9]}-->" type="text" name="mmsn" class="text" style="width:120px;" />&nbsp;&nbsp;
          <label>QQ：</label><input value="<!--{$info[10]}-->" type="text" name="mqq" class="text" style="width:120px;" />&nbsp;&nbsp;
          <label>淘宝：</label><input value="<!--{$info[11]}-->" type="text" name="mtaobao" class="text" style="width:120px;" />&nbsp;&nbsp;
    	</p>
  	<p>
      	<label>办公地址：</label><input value="<!--{$info[12]}-->" type="text" name="address" class="text" />
    	</p>
  	<p>
      	<label>仓库地址：</label><input value="<!--{$info[13]}-->" type="text" name="libaddr" class="text" />
    	</p>
  	<p>
      	<label>网址：</label><input value="<!--{$info[14]}-->" type="text" name="website" class="text" />
    	</p>
  	<p>
          <label>电子邮件：</label><input value="<!--{$info[15]}-->" type="text" name="email" class="text" />
    	</p>
  	<p>
      	<label>银行名称：</label><input value="<!--{$info[17]}-->" type="text" name="bname" class="text" />
    	</p>
  	<p>
      	<label>结算账号：</label><input value="<!--{$info[16]}-->" type="text" name="bno" class="text" />
    	</p>
  	<p>
      	<label>主营产品及备注：</label>
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
