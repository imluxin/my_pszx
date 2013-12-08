<div class="admin_temple admin_box">
<div class="subTitle">
佛殿管理
 - 
<span style="font-size:14px;text-decoration: underline;"><?php echo link_to('创建佛殿','buddha/new')?></span>
</div>

<div class="cont">
<div class="subTitle">待审核</div>
<ul class="imgList clearfix fix-w160-h160">
	<?php foreach($buddha as $one):?>
	<li>
	<table>
		<tr>
			<td><img src="<?php echo $one->getPicture('hp_img', true) ?>" /></td>
			<td>
				<a href="<?php echo url_for('buddha/edit?id='.$one->getId()) ?>">修改</a>
				&nbsp;
				<?php echo jq_link_to_remote('删除', 
											array(
												'url' => 'ajax/DelBuddha?id='.$one->getId(),
												'confirm' => '确定要删除吗？',
												'success' => 'if(data == 1) { location.reload() }'
											), array())?>
			</td>
		</tr>
		<tr>
			<td>
			<p><?php echo $one->getName() ?></p>
			</td>
			<td>&nbsp;</td>
		</tr>
	</table>
	</li>
	<?php endforeach;?>
</ul>
</div>

<div class="cont">
<div class="subTitle">打回</div>
<ul class="imgList clearfix fix-w160-h160">
	<?php foreach($reject_buddha as $one):?>
	<li>
	<table>
		<tr>
			<td><img src="<?php echo $one->getPicture('hp_img', true) ?>" /></td>
			<td>
				<a href="<?php echo url_for('buddha/edit?id='.$one->getId()) ?>">修改</a>
				&nbsp;
				<?php echo jq_link_to_remote('删除', 
											array(
												'url' => 'ajax/DelBuddha?id='.$one->getId(),
												'confirm' => '确定要删除吗？',
												'success' => 'if(data == 1) { location.reload() }'
											), array())?>
			</td>
		</tr>
		<tr>
			<td>
			<p><?php echo $one->getName() ?></p>
			</td>
			<td>&nbsp;</td>
		</tr>
	</table>
	</li>
	<?php endforeach;?>
</ul>
</div>

<div class="cont">
<div class="subTitle">通过审核</div>
<ul class="imgList clearfix fix-w160-h160">
	<?php foreach($approve_buddha as $one):?>
	<li>
	<table>
		<tr>
			<td><img src="<?php echo $one->getPicture('hp_img', true) ?>" /></td>
			<td>
				<a href="<?php echo url_for('buddha/edit?id='.$one->getId()) ?>">修改</a>
				&nbsp;
				<?php echo jq_link_to_remote('删除', 
											array(
												'url' => 'ajax/DelBuddha?id='.$one->getId(),
												'confirm' => '确定要删除吗？',
												'success' => 'if(data == 1) { location.reload() }'
											), array())?>
			</td>
		</tr>
		<tr>
			<td>
			<p><?php echo $one->getName() ?></p>
			</td>
			<td>&nbsp;</td>
		</tr>
	</table>
	</li>
	<?php endforeach;?>
</ul>
</div>

</div>
