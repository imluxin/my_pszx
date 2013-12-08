<form method="GET" action="<?php echo $url; ?>" class="mb20">
选择文章分类: 
<select id="province" name="cid">
	<option value="" selected="">显示所有</option>
	<?php foreach ($cats as $c):?>
		<option value="<?php echo $c['id']?>"><?php echo $c['name']?></option>
	<?php endforeach; ?>
</select> 

<input class="btnPurple" type="submit" value="搜索">
</form>