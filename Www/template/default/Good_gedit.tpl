<!--{include file="header.tpl"}-->
<h3 class="topmenu">物品详细信息</h3>
<div class="divform">
  	<p>
      	<label>物品名称：</label><!--{$gName}-->&nbsp;&nbsp;<a href="index.php?control=good&action=ginlist&name=<!--{$gName|escape:'url'}-->">(查看进货信息)</a>
    	</p>
		<p>
			<label>物品简称：</label><!--{$libInfo.2}-->
		</p>
		<p>
			<label>品牌：</label><!--{$libInfo.4}-->
			<label>产地：</label><!--{$libInfo.5}-->
		</p>
		<p>
			<label>毛重：</label><!--{$libInfo.13}-->
			<label>净重：</label><!--{$libInfo.14}-->
		</p>
		<p>
			<label>单位：</label><!--{$libInfo.7}-->
			<label>库存数量：</label><!--{$libInfo.15}-->
		</p>
		<p>
			<label>包装：</label><!--{$libInfo.6}-->
		</p>
		<p>
			<label>猫零售价：</label><!--{$libInfo.8}-->
			<label>是否特价：</label><!--{if $libInfo.16 == 1}-->是<!--{else}-->否<!--{/if}-->
			<label>库存报警(<!--{if $libInfo.10 == 1}-->按数量<!--{else}-->按重量<!--{/if}-->)：</label><!--{$libInfo.9}-->
		</p>
		<p>
			<label>备注：</label><!--{$libInfo.11}-->
		</p>
</div>
<!--{include file="footer.tpl"}-->
