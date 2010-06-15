<!--{include file="header.tpl"}-->
<h3 class="topmenu">供应商添加</h3>
<div class="divform">
  <form action="index.php" method="POST">
  	<p>
      	<label>公司名称：</label><input type="text" name="comname" class="text" />
    	</p>
  	<p>
      	<label>联络人1：</label><input type="text" name="cname1" class="text" style="width:120px;" />&nbsp;&nbsp;
          <label>联系电话1：</label><input type="text" name="cnametel1" class="text" style="width:120px;" />&nbsp;&nbsp;
          <label>联系电话2：</label><input type="text" name="cnametel2" class="text" style="width:120px;" />
    	</p>
  	<p>
      	<label>联络人2：</label><input type="text" name="cname2" class="text" style="width:120px;" />&nbsp;&nbsp;
          <label>联系电话1：</label><input type="text" name="cnametel1" class="text" style="width:120px;" />&nbsp;&nbsp;
          <label>联系电话2：</label><input type="text" name="cnametel2" class="text" style="width:120px;" />
    	</p>
  	<p>
      	<label>供货主管：</label><input type="text" name="manager" class="text" style="width:120px" />&nbsp;&nbsp;
          <label>主管手机：</label><input type="text" name="mtel" class="text" style="width:120px" />
    	</p>
  	<p>
      	<label>MSN：</label><input type="text" name="mmsn" class="text" style="width:120px;" />&nbsp;&nbsp;
          <label>QQ：</label><input type="text" name="mqq" class="text" style="width:120px;" />&nbsp;&nbsp;
          <label>淘宝：</label><input type="text" name="mtaobao" class="text" style="width:120px;" />&nbsp;&nbsp;
          <label>飞信：</label><input type="text" name="mfetion" class="text" style="width:120px;" />
    	</p>
  	<p>
      	<label>办公地址：</label><input type="text" name="address" class="text" />
    	</p>
  	<p>
      	<label>仓库地址：</label><input type="text" name="libaddr" class="text" />
    	</p>
  	<p>
      	<label>网址：</label><input type="text" name="website" class="text" />
    	</p>
  	<p>
          <label>电子邮件：</label><input type="text" name="email" class="text" />
    	</p>
  	<p>
      	<label>结算账号：</label><input type="text" name="account" class="text" />
    	</p>
  	<p>
      	<label>主营产品及备注：</label>
          <br />
          <textarea></textarea>
    	</p>
      <p>
	  	<input type="hidden" name="control" value="user" />
	  	<input type="hidden" name="action" value="supplier" />
      	<input type="submit" name="submit" value="添加" />
          <input type="reset" value="清空" />
      </p>
  </form>
</div>
<!--{include file="footer.tpl"}-->
