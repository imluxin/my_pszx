<?php if ($sf_user->hasFlash('success')): ?>
	<div class="alert alert-success mt5 mb">
		<?php echo $sf_user->getFlash('success'); ?>
	</div>
<?php endif;?><?php if ($sf_user->hasFlash('error')): ?>
	<div class="alert alert-error mt5 mb">
		<?php echo $sf_user->getFlash('error'); ?>
	</div>
<?php endif;?>