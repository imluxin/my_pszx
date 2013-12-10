<?php slot('title',$temple->getName().'介绍-菩萨在线') ?>
<div id="content" class="build">
<div class="row box">
<div class="titleBar">
<h2 class="title">
<a href="<?php echo url_for('temple/index')?>">拜佛首页</a> 
<a href="<?php echo url_for('temple/description?id='.$temple['id']) ?>">寺庙介绍</a>
<a href="#">背景佛乐</a>
</h2>
</div>
	<div style="width:998px;margin:0px auto;margin-top:10px;text-align: center;margin-bottom:10px;">
		<?php echo image_tag('../uploads/temple/'.$temple['img_one'], array('class'=>'w700')) ?>
		<br /><br />
		<p style="font-weight: bold;font-size:20px;"><?php echo $temple->getName() ?></p>
		<br /><br />
		<p style="width:500px;margin:0px auto;text-align: left;text-indent: 25px;"><?php echo $temple->getRaw('description') ?></p>
	</div>
</div>
</div>