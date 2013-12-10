<div id="slides">

<?php foreach($advs as $one):?>
	<?php $u = $one->getUrl();
	?>
	<a href="<?php echo lx::getUrl($u); ?>" title="<?php echo $one->getTitle() ?>" rel="external">
	<?php echo image_tag('../uploads/adv/'.$one['images'],array('alt'=> $one->getTitle())) ?>
	</a>
<?php endforeach;?>

</div>
<script type="text/javascript">
	$(function(){
		$('#slides').slidesjs({
			width: 712,
			height: 352,
	        navigation: false,
	        start: 3,
	        play: {
	          auto: true
	        }
            });
        });
</script>
