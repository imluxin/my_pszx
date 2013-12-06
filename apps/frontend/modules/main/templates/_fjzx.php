<div class="side fr box">
<div class="titleBar">
<h2 class="title">佛教资讯</h2>
</div>
<div class="cont">
<div class="imgList">
<ul class="clearfix">
	<?php foreach($fjzxa1 as $one):?>
	<li>
		<a href="<?php echo url_for('article/details?id='.$one->getId()) ?>" class="w125"> 
			<?php echo image_tag('../uploads/article/'.$one->getImgOne()) ?>
			<span><?php echo lx::get_substr($one->getTitle(), '15') ?></span>
		</a>
	</li>
	<?php endforeach; ?>
	<?php foreach($fjzxa2 as $one):?>
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
<ul class="clearfix">
	<?php foreach($article as $one):?>
		<li>
			<a href="<?php echo url_for('article/details?id='.$one->getId()) ?>">
			<marquee direction="right"><?php echo $one->getTitle() ?></marquee> 
			</a>
		</li>
	<?php endforeach;?>
</ul>
</div>
</div>
</div>