<div class="main fl box index_shop">
<div class="titleBar">
<h2 class="title"><a href="<?php echo url_for('oblation/index')?>">祭品商店</a></h2>

<span class="title-ad">让住在天堂的亲人也分享美好的生活</span>
<a class="more" href="<?php echo url_for('oblation/index')?>">更多</a></div>
<div class="cont">
<div class="shopList">
<ul class="clearfix fix-w133-h133">
	<?php foreach($oblation as $one):?>
	<li>
	<div class="shopList_img">
	<?php echo image_tag('../uploads/oblation/'.$one->getImages()) ?>
	</div>
	<div class="shopList_info">
	<table>
		<tr>
			<td>名称：</td>
			<td><?php echo $one->getName() ?></td>
		</tr>
		<tr>
			<td>价格：</td>
			<td><?php echo $one->getPrice() ?>金币</td>
		</tr>
		<tr>
			<td>时间：</td>
			<td><?php echo $one->getTimes()?>天</td>
		</tr>
		<tr>
			<td colspan="2"><a class="btnPurple" href="<?php echo url_for('buddha/index')?>">购买</a></td>
		</tr>
	</table>
	</div>
	</li>
	<?php endforeach;?>
</ul>
</div>
</div>
</div>
