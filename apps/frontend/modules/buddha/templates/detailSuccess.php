<?php use_javascript('../flash/swfobject.js')?>
<?php use_javascript('../flash/history/history.js')?>
<?php use_stylesheet('../flash/history/history.css')?>
<?php slot('title',$buddha->getName().'-菩萨在线') ?>
<div id="content" class="build">
<div class="row box">

	<?php include_partial('nav', array('buddha' => $buddha))?>

<!--flash-->
<div class="flash">
<?php include_partial('global/js_for_flash', array('myuser'=>$myuser))?>
<script type="text/javascript">

	function getScene() {
		return '<?php echo sfConfig::get('app_site_domain').'/uploads/buddha/'.$buddha->getImages() ?>';
	}
	
	function getDeskInfo() {
		return ['<?php echo $buddha->getPicture('zhuozi', true); ?>', 150, 430];
	}
	
	function getInitUrl() {
		return '<?php echo sfConfig::get('app_site_domain').url_for('owtr/buddhainit?bhid='.$buddha->getId(), array(), true)?>';
	}

</script>

<div id="flashContent" style="z-index: 0;">
	<p>
        To view this page ensure that Adobe Flash Player version 
		11.6.0 or greater is installed. 
	</p>
    <script type="text/javascript"> 
           var pageHost = ((document.location.protocol == "https:") ? "https://" : "http://"); 
           document.write("<a href='http://www.adobe.com/go/getflashplayer'><img src='" 
                                + pageHost + "www.adobe.com/images/shared/download_buttons/get_flash_player.gif' alt='Get Adobe Flash player' /></a>" ); 
    </script> 
</div>

</div>

<!--/flash--></div>
<?php include_component('main', 'obls');?>

<script>
function owtr(oid) {
	<?php if(!$sf_user) {echo 'alert("请登录后再来进贡。");location.href="'.url_for('@sf_guard_signin').'"';} ?>

	var wish = $('#wish').val();
	if(wish == '') {alert('请输入您的许愿描述'); $('#wish').focus(); return false; }
	var url = '<?php echo url_for('owtr/buddha')?>?oid='+oid+'&txt='+wish+'&bid=<?php echo $buddha->getId()?>';

	$.ajax({
		type: "post",
		url: url,
		beforeSend: function(XMLHttpRequest){
			$( "#dialog" ).dialog( "close" );
		},
		success: function(data, textStatus){
			var result = eval ("(" + data + ")");

			if(result.error == '') {
				var type_id = result.type_id;  // 物品类别id
				var gid = result.gid;  // 物品id
				var bless = result.bless;  // 祝福语
				var user_id = result.user_id; // 用户id
				var px = result.px;  
				var py = result.py;  
				var sx = result.sx;
				var sy = result.sy;
				document.getElementById("FO").addGoods(type_id,user_id,gid,bless,px,py,sx,sy);
				document.getElementById("FO").effect();
			} else {
				alert(result.error);
				
				if(result.error == '请先登录!') {
					location.href = '<?php echo url_for('@sf_guard_signin') ?>';
				}
			}
		},
		complete: function(XMLHttpRequest, textStatus){
		},
		error: function(){
		}
	});
}

function move(sid,ggid,uid,x,y,sx,sy) {

	var url = '<?php echo url_for('owtr/buddhamove')?>?sid=' + sid + '&id=' + ggid + '&uid='+uid+'&px='+x+'&py='+y+'&sx='+sx+'&sy='+sy;
	
	$.ajax({
		type: "post",
		url: url,
		beforeSend: function(XMLHttpRequest){
		},
		success: function(data, textStatus){
			var result = eval ("(" + data + ")");
			if(result.error == '') {
				// alert('success');
			} else {
				alert(result.error);
			}
		},
		complete: function(XMLHttpRequest, textStatus){
		},
		error: function(){
		}
	});
}

</script>

<div class="row">
<div class="baifoTable">
<table>
	<tr>
		<th>礼佛ID</th>
		<th>昵称/姓名</th>
		<th>性别</th>
		<th>年龄</th>
		<th>来自何方</th>
		<th>拜佛许愿描述</th>
		<th>拜佛许愿时间</th>
	</tr>
	<?php foreach($result as $one):?>
	<tr>
		<td><?php echo $one->getUserId() ?></td>
		<td><?php echo $one->getSfGuardUser()->getUserName() ?></td>
		<td><?php echo $one->getSfGuardUser()->getGender() == 1 ? '男':'女' ?></td>
		<td><?php echo $one->getSfGuardUser()->getAge() ?></td>
		<td><?php echo $one->getSfGuardUser()->getProvince().','.$one->getSfGuardUser()->getCity() ?></td>
		<td><?php echo $one->getTxt() ?></td>
		<td><?php echo $one->getCreatedAt() ?></td>
	</tr>
	<?php endforeach;?>
</table>
<div class="pages">
<?php if(count($pg)>0): ?>
<?php if($pg->getPage()==1): ?>
<!-- 如果当前是第1页 -->
<a class="disabled">首页</a>
<a class="disabled">前一页</a>
<?php else : ?>
<a href="<?php echo url_for('buddha/detail?id='.$buddha->getId().'&page=1') ?>">首页</a>
<a
	href="<?php echo url_for('buddha/detail?id='.$buddha->getId().'&page='.$pg->getPreviousPage()) ?>">前一页</a>
<!-- 前一页号 -->
<?php endif; ?>
<?php foreach ($pg->getLinks() as $page): ?>
<!-- 页号集合 -->
<?php if($page==$pg->getPage()): ?>
<a class="current"><?php echo $page ?></a>
<?php else: ?>
<a href="<?php echo url_for('buddha/detail?id='.$buddha->getId().'&page='.$page) ?>"><?php echo $page ?></a>
<?php endif; ?>
<?php endforeach; ?>
<?php if($pg->getPage()==$pg->getLastPage()): ?>
<!-- 最后一页页号 -->
<a class="disabled">后一页</a>
<a class="disabled">尾页</a>
<?php else : ?>
<a href="<?php echo url_for('buddha/detail?id='.$buddha->getId().'&page='.$pg->getNextPage()) ?>">后一页</a>
<!-- 下一页页号 -->
<a href="<?php echo url_for('buddha/detail?id='.$buddha->getId().'&page='.$pg->getLastPage()) ?>">尾页</a>
<?php endif; ?>
<?php endif;?>
</div>
</div>
</div>
</div>
