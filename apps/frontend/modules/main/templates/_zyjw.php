<div class="side fr box">
<div class="titleBar">
<h2 class="title"><a href="<?php echo url_for('article/index')?>">追忆祭文</a></h2>
</div>
<div class="cont">
<div class="imgList">
<ul class="clearfix">
	<?php foreach($zyjwa5 as $one): ?>
	<li>
		<a href="<?php echo lx::getUrl($one->getUrl()); ?>" class="w125"> 
			<?php echo image_tag($one->getPicture('true')) ?>
		</a>
	</li>
	<?php endforeach; ?>
	<?php foreach($zyjwa6 as $one): ?>
	<li>
		<a href="<?php echo lx::getUrl($one->getUrl()); ?>" class="w125"> 
			<?php echo image_tag($one->getPicture('true')) ?>
		</a>
	</li>
	<?php endforeach; ?>
</ul>
</div>
<div class="txtList">
<ul>
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
</div>