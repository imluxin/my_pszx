<?php slot('title',$memorial->getMName().'-生平-菩萨在线') ?>
<div id="content" class="build sp">
<div class="row box clearfix">
<div class="titleBar">
				<?php include_partial('memorial/nav', array('id'=>$memorial->getId()))?>
</div>

<div class="side fl">
	<div class="cont">
		<div class="peopleImg"><?php echo image_tag('../uploads/memorial/'.$memorial['die_photo_one'], array('class'=>'w')) ?></div>
		<div class="peopleInfo">
			<?php include_partial('memorial/die_info', array('memorial'=>$memorial, 'p'=>'one'))?>
		</div>
	</div>
	<?php if (!empty($memorial['die_name_two'])): ?>
	<div class="cont">
		<div class="peopleImg">
			<?php echo image_tag('../uploads/memorial/'.$memorial['die_photo_two'], array('class'=>'w')) ?>
		</div>
		<div class="peopleInfo">
			<?php include_partial('memorial/die_info', array('memorial'=>$memorial, 'p'=>'two'))?>
		</div>
	</div>
	<?php endif;?>
</div>
<div class="main fr">
	<div class="cont">
		<h3 class="subTitle">生平简介</h3>
		<div class="cont">
			<?php echo $memorial->getRaw('description') ?>
		</div>
	</div>
</div>

</div>
</div>
