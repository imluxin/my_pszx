<div class="main fl box index_temple">
<div class="titleBar">
<h2 class="title"><a href="<?php echo url_for('temple/index')?>">名山名寺</a></h2>

<span class="title-ad">修建网上寺庙  &nbsp;&nbsp;积德积财还能分享网站收益</span>
<a class="more" href="<?php echo url_for('temple/index')?>">更多</a></div>
<div class="cont">
<div class="imgList">
<ul class="clearfix">
	<?php foreach($temple as $one): ?>
	<li>
	<a href="<?php echo url_for('temple/detail?id='.$one->getId()) ?>"> 
		<?php echo image_tag('../uploads/temple/'.$one->getImgOne()) ?>
		<p><?php echo $one->getName() ?></p>
	</a>
	</li>
	<?php endforeach; ?>
</ul>
</div>
</div>
</div>
