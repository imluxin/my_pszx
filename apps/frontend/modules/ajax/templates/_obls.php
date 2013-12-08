<div class="shopSort">
	<ul>
		<?php foreach ($obls as $o):?>
			<li>
				<img alt="" src="<?php echo $o->getPicture(true); ?>" class="w80 h80">
				<span><?php echo $o['price'].'金币';?></span>
		 		<a class="btnPurple buildBtn" href="javascript:owtr('<?php echo $o['id']?>');" style="color: #fff;">
		 			购买
		 		</a>
	 		</li>
	 	<?php endforeach; ?>
	</ul>
</div>