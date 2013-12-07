<div id="slides">
<div class="slides_container">

<?php foreach($advs as $one):?>
	<?php $u = $one->getUrl();
	?>
	<a href="<?php echo lx::getUrl($u); ?>" title="<?php echo $one->getTitle() ?>" rel="external">
	<?php echo image_tag('../uploads/adv/'.$one['images'],array('alt'=> $one->getTitle())) ?>
	</a>
<?php endforeach;?>

</div>
</div>
<script type="text/javascript">
	$(function(){
		$('#slides').slides({
 			preload: true,
			play: 5000,
			pause: 2500,
			hoverPause: true,
			fadeSpeed: 350,
			effect: 'fade'
            });
        });
</script>