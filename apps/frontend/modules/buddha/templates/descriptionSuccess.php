<?php slot('title',$bunddla_hall->getName().'介绍-菩萨在线') ?>
<div id="content" class="build">
<div class="row box">

	<?php include_partial('nav', array('buddha' => $bunddla_hall))?>
	<div style="width:998px;margin:0px auto;margin-top:10px;text-align: center;margin-bottom:10px;">
		<?php echo image_tag($bunddla_hall->getPicture('hp_img', true), array('class'=>'w700')) ?>
		<br /><br />
		<p style="font-weight: bold;font-size:20px;"><?php echo $bunddla_hall->getName() ?></p>
		<br /><br />
		<p style="width:500px;margin:0px auto;text-align: left;text-indent: 25px;"><?php echo $bunddla_hall->getRaw('description') ?></p>
	</div>
</div>
</div>