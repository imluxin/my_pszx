
<div class="titleBar">
<h2 class="title">
<a href="<?php echo url_for('temple/index')?>">拜佛首页</a> 
<a href="<?php echo url_for('temple/description?id='.$id) ?>">寺庙介绍</a>
<a id="open-music-box" href="javascript:void(0);">背景佛乐</a>
<?php include_partial('global/audio', array('left' => '245px'))?>
</h2>
</div>