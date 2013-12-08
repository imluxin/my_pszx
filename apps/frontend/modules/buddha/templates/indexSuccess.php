<?php slot('title','网上礼佛-菩萨在线') ?>
<!-- content -->
<div id="content" class="buddha">
<div class="row clearfix">
<div class="main fl">
<div class="banner">
<?php include_component('adv', 'slider',array('adv'=>array(4,5,6)));?>
</div>
</div>
<div class="side fr box">
<div class="cont">
<div class="bannerTip static-border mb20 tc">
人行善 福未到  祸以远 <br>
人行恶 祸未到  福已远
</div>
<div class="bannerNote">
<p>网上礼佛让人们可以超越时空,随时随地向佛主跪拜祭祀,佛在心中，心在佛在，真正实现每个人的礼佛三炷香，心愿自然成的美好愿望.<br></p>
<p>您可以烧香拜佛祈求平安，让您万事如意，全家岁岁平安,积德积财,而网上香火不断更是超越地区,时时刻刻表达自己对佛主菩萨的感恩,佛在心中,也是供佛的最高境界.</p>
</div>
</div>
</div>
</div>
<div class="row box">
<div class="titleBar">
	<a class="btnWhite" href="<?php echo url_for('buddha/index?xh=yes') ?>">香火最旺</a>
	<a class="btnWhite" href="<?php echo url_for('buddha/index?rq=yes') ?>">人气最旺</a>
	<a class="btnWhite" href="<?php echo url_for('buddha/index?last=yes') ?>">最新创建</a>
<a class="btnPurple buildBtn fr"
	href="<?php echo url_for('buddha/new') ?>">创建佛殿</a></div>
<div class="cont">

<div class="pages"><?php include_partial('buddha/pager', array('pg'=>$pg,'search_url'=>$search_url))?></div>

<div class="imgList">
<ul class="clearfix">
<?php foreach($result as $one) { ?>
	<li>
		<a href="<?php echo url_for('buddha/detail?id='.$one['id']) ?>"> 
			<?php echo image_tag($one->getPicture('hp_img', true)) ?>
			<p><?php echo $one['name'] ?></p>
		</a>
	</li>
<?php }?>
</ul>
</div>
<!--p class="imgList_cout">排列6排合计18个</p -->
<div class="pages"><?php include_partial('buddha/pager', array('pg'=>$pg,'search_url'=>$search_url))?></div>
</div>
</div>
</div>
<!-- content end-->
<?php /**/?>