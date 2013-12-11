<div class="main fl box index_memorial">
<div class="titleBar">
<h2 class="title"><a href="<?php echo url_for('memorial/index')?>">在线纪念</a></h2>

<span class="title-ad">菩萨守护的天堂 &nbsp;&nbsp;是每个逝者的最好家园</span>
<a class="more" href="<?php echo url_for('memorial/index')?>">更多</a></div>
<div class="cont">
<div class="imgList">
<ul class="clearfix">
	<?php foreach($memorial as $one): ?>
	<li>
	<a href="<?php echo url_for('memorial/detail?id='.$one->getId()) ?>"> 
		<?php echo image_tag('../uploads/memorial/'.$one->getDiePhotoOne()) ?>
		<p><?php echo $one->getDieNameOne() ?></p>
	</a>
	</li>
	<?php endforeach; ?>
</ul>
</div>
</div>
</div>