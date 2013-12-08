<div class="side fr box">
<div class="titleBar">
<h2 class="title">佛教资讯</h2>
</div>
<div class="cont">
<div class="imgList">
<ul class="clearfix">
	<?php foreach($fjzxa1 as $one):?>
	<li>
		<a href="<?php echo lx::getUrl($one->getUrl()); ?>" class="w125"> 
			<?php echo image_tag($one->getPicture('true')) ?>
		</a>
	</li>
	<?php endforeach; ?>
	<?php foreach($fjzxa2 as $one):?>
	<li>
		<a href="<?php echo lx::getUrl($one->getUrl()); ?>" class="w125"> 
			<?php echo image_tag($one->getPicture('true')) ?>
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
				<?php echo mb_substr($one->getTitle(), 0, 17, 'UTF-8').'...' ?>
			</a>
		</li>
	<?php endforeach;?>
</ul>
</div>
</div>
</div>