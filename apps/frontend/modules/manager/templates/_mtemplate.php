<div class=" admin_memorial admin_box">
<div class="subTitle">
纪念馆模板管理
-
<span style="font-size:14px;text-decoration: underline;"><?php echo link_to('建立模板','mtemplate/new')?></span>
</div>
<div class="cont">

<?php include_partial('global/notice')?>

<ul class="imgList clearfix  fix-w160-h107">
	<?php foreach($res as $one): ?>
	<li>
	<table>
		<tr>
			<td><?php echo image_tag($one->getPicture('jng_path', true)) ?></td>
			<td>
				<a href="<?php echo url_for('mtemplate/edit?id='.$one->getId()) ?>">修改</a>
				<?php echo jq_link_to_remote('删除', 
											array(
												'url' => 'ajax/DelMtemplate?id='.$one->getId(),
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
