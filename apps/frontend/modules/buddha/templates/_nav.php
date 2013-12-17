<div class="titleBar">
<h2 class="title">
<a href="<?php echo url_for('buddha/index')?>">拜佛首页</a> 
<a href="<?php echo url_for('buddha/description?id='.$buddha->getId()) ?>">佛主介绍</a> 
<a id="open-music-box" href="javascript:void(0);">在线佛乐</a>
</h2>
<?php include_partial('global/audio')?>
</div>
