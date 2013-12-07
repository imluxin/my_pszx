<div class="shopSort">
	<?php foreach ($obls as $o):?>
 		<a href="javascript:owtr('<?php echo $o['id']?>');"><?php echo $o['name']?> (<?php echo $o['price'].'金币';?>)</a>
 	<?php endforeach; ?>
</div>