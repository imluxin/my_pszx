<div class="side fr box">
<div class="titleBar">
<h2 class="title">慈善救助</h2>
</div>
<div class="cont">
<div class="imgList">
<ul class="clearfix">
	<?php foreach($csjza3 as $one):?>
	<li>
		<a href="<?php echo url_for('article/details?id='.$one->getId()) ?>" class="w125">
			<?php echo image_tag('../uploads/article/'.$one->getImgOne()) ?>
			<span><?php echo lx::get_substr($one->getTitle(), '10') ?></span>
		</a>
	</li>
	<?php endforeach; ?>
	<?php foreach($csjza4 as $one):?>
	<li>
		<a href="<?php echo url_for('article/details?id='.$one->getId()) ?>" class="w125">
			<?php echo image_tag('../uploads/article/'.$one->getImgOne()) ?>
			<span><?php echo lx::get_substr($one->getTitle(), '15') ?></span>
		</a>
	</li>
	<?php endforeach; ?>
</ul>
</div>
<div class="txtList">
<ul>
	<?php foreach ($article as $one):?>
		<li>
			<a href="<?php echo url_for('article/details?id='.$one->getId()) ?>">
				<marquee direction="right"><?php echo $one->getTitle() ?></marquee>
			</a>
		</li>
	<?php endforeach; ?>
</ul>
</div>
</div>
</div>