	<h2 class="title">
		<a href="<?php echo url_for('memorial/detail?id='.$id)?>">首页</a>
		<a href="<?php echo url_for('memorial/zxlw?id='.$id) ?>">在线灵位</a>
		<a href="<?php echo url_for('memorial/zxgm?id='.$id) ?>">在线公墓</a>
		<a href="<?php echo url_for('memorial/lifetime?id='.$id) ?>">生平</a>
		<a href="<?php echo url_for('memorial/photo?id='.$id) ?>">照片</a>
		<a href="<?php echo url_for('memorial/lifetime?id='.$id) ?>">视频</a>
		<a href="<?php echo url_for('memorial/message?id='.$id) ?>">留言</a>
		<a href="<?php echo url_for('memorial/lifetime?id='.$id) ?>">追忆祭文</a>
		<a href="#">背景音乐</a>
		<?php include_partial('global/audio')?>
	 </h2>
<a class="btnPurple buildBtn" href="#">写追忆祭文</a>