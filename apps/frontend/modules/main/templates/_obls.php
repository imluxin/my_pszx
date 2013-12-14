<?php use_javascript('jqueryui/ui/jquery-ui.js') ?>
<?php use_javascript('jqueryui/ui/jquery.ui.dialog.js') ?>
<div class="mb20">
	<div class="shopSort">
		<?php $m = $sf_params->get('module'); 
			if ($m == 'buddha') {
				$cats = $cats_b;
			}
		?>
		<?php foreach ($cats as $c):?>
			<a href="javascript:getObls('<?php echo $c['id']?>');"><?php echo $c['name']?></a>
		<?php endforeach; ?>
	</div>
	许愿描述：<textarea id="wish" style="width:1000px;">身体健康</textarea>(输入您的许愿描述，然后点击下方的按钮。)
	
	<div id="dialog" title="祭品列表" style="z-index: 9999;">
  		
	</div>
	
	
</div>
<script type="text/javascript">
$(document).ready(function() {
    $( "#dialog" ).dialog({
      	autoOpen: false,
      	show: {
        	effect: "blind",
        	duration: 400
      	},
      	hide: {
        	effect: "explode",
        	duration: 300
      	},
      	width: 1000,
      	close: function(event, ui){$(this).text(' ');},
		buttons: [
					{
						text: "取消",
						click: function() {
							$( this ).dialog( "close" );
						}
					}
		]
    });
 
  });
  
function getObls(c_id){
	<?php if(!$sf_user) {echo 'alert("请登录后再来进贡。");location.href="'.url_for('@sf_guard_signin').'"';} ?>
	var wish = $('#wish').val();
	if(wish == '') {alert('请输入您的许愿描述'); $('#wish').focus(); return false; }
	var url = "<?php echo url_for('ajax/getObls');?>?cid="+c_id;
	$.ajax({
		type: "post",
		url: url,
		dataType: 'json',
		beforeSend: function(XMLHttpRequest){
			$( "#dialog" ).text(' ').append("<div id='loader' class='shopSort'><img src='/images/ajax-loader.gif' /></div>").dialog('open');
		},
		success: function(data){
			$('#loader').hide();
			if(data.status == 'ko') {
				$( "#dialog" ).append(data.message);
			} else {
				console.log(data.message);
				$('#dialog').append(data.html);
			}
		},
		complete: function(XMLHttpRequest, textStatus){
			 event.preventDefault();
		},
		error: function(){
		}
	});
}
</script>