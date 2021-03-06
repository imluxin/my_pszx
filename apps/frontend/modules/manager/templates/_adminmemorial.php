<div class="admin_memorial_audit admin_box">
<div class="subTitle">纪念馆审核</div>
<div class="cont">
<?php include_partial('global/notice')?>
<div class="subTitle">待审核</div>
<ul class="imgList clearfix memorial-img">
	<?php foreach($memorial as $one):?>
	<li>
	<table>
		<tr>
			<td><?php echo image_tag('../uploads/memorial/'.$one->getDiePhotoOne()) ?></td>
			<td>
				<a href="#">浏览</a>
				<?php echo jq_link_to_remote('同意', 
											array(
												'url' => 'memorialmanager/approve?id='.$one->getId(),
												'confirm' => '确定要同意吗？',
												'success' => 'if(data == 1) { location.reload() } else { alert(data); }'
											), array())?>
				<?php echo jq_link_to_remote('打回', 
											array(
												'url' => 'memorialmanager/reject?id='.$one->getId(),
												'confirm' => '确定要打回吗？',
												'success' => 'if(data == 1) { location.reload() } else { alert(data); }'
											), array())?>
				<?php echo jq_link_to_remote('删除', 
											array(
												'url' => 'ajax/delMemorial?id='.$one->getId(),
												'confirm' => '确定要删除吗？',
												'success' => 'if(data == 1) { location.reload() } else { alert(data); } }'
											), array())?>
			</td>
		</tr>
		<tr>
			<td>
			<p><?php echo $one->getMName() ?></p>
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
<ul class="imgList clearfix memorial-img">
	<?php foreach($reject_memorial as $one):?>
	<li>
	<table>
		<tr>
			<td><?php echo image_tag('../uploads/memorial/'.$one->getDiePhotoOne()) ?></td>
			<td>
				<a href="#">浏览</a>
				<?php echo jq_link_to_remote('删除', 
											array(
												'url' => 'ajax/delMemorial?id='.$one->getId(),
												'confirm' => '确定要删除吗？',
												'success' => 'if(data == 1) { location.reload() } else { alert(data); } }'
											), array())?>
			</td>
		</tr>
		<tr>
			<td>
			<p><?php echo $one->getMName() ?></p>
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
<ul class="imgList clearfix memorial-img">
	<?php foreach($approve_memorial as $one):?>
	<li>
	<table>
		<tr>
			<td><?php echo image_tag('../uploads/memorial/'.$one->getDiePhotoOne()) ?></td>
			<td>
				<a href="#">浏览</a>
				<?php echo jq_link_to_remote('打回', 
											array(
												'url' => 'memorialmanager/reject?id='.$one->getId(),
												'confirm' => '确定要打回吗？',
												'success' => 'if(data == 1) { location.reload() } else { alert(data); }'
											), array())?>
				<?php echo jq_link_to_remote('删除', 
											array(
												'url' => 'ajax/delMemorial?id='.$one->getId(),
												'confirm' => '确定要删除吗？',
												'success' => 'if(data == 1) { location.reload() } else { alert(data); } }'
											), array())?>
			</td>
		</tr>
		<tr>
			<td>
			<p><?php echo $one->getMName() ?></p>
			</td>
			<td>&nbsp;</td>
		</tr>
	</table>
	</li>
	<?php endforeach;?>
</ul>
</div>
</div>
