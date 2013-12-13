<?php use_javascript('address.js') ?>
<?php slot('title','名山名寺-菩萨在线') ?>
<div id="content" class="temple">
<div class="row clearfix">
<div class="main fl">
<div class="banner">
<?php include_component('adv', 'slider',array('adv'=>array(16,17,18)));?>
</div>
</div>
<div class="side fr box">
<div class="cont">
<div class="bannerTip tc mb15 static-border">
山西五台山  浙江普陀山<br><br>
四川峨眉山  安徽九华山
</div>
<div class="bannerNote">
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;您可以建网上名山寺庙，让人们超越时空也能领略名山秀丽风景.让人们在线祭拜名山菩萨神仙,同时您可以获得祭祀消费金币的10%作为回报.金币满一定数目可以提现.</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;互联网超越时空无处不在的信息传播媒介,佛主菩萨在广阔的天堂宇宙管理我们,已经早早使用互联网工具,所以与佛主菩萨的最好沟通方式就是通过互联网平台.</p>
</div>
<a class="buildBtn btnPurple" href="<?php echo url_for('temple/new') ?>">创建寺庙</a></div>
</div>
</div>
<div class="row box">
<div class="titleBar">
	<a class="btnWhite" href="<?php echo url_for('temple/index?xh=yes'.urldecode($search_url)) ?>">香火最旺</a>
	<a class="btnWhite" href="<?php echo url_for('temple/index?rq=yes'.urldecode($search_url)) ?>">人气最旺</a>
	<a class="btnWhite" href="<?php echo url_for('temple/index?last=yes'.urldecode($search_url)) ?>">最新创建</a>
<div class="search fr">
<form method="GET" action="<?php echo url_for('temple/index') ?>">
<select id="province" name="province" >
</select> 
<select id="city" name="city">
</select> 
<select id="block" name="block" >
</select>
<input type="text" value="<?php echo $name ?>" name="name" /> 
<input type="text" value="<?php echo $creator?>" name="creator"/> 
<input class="btnPurple" type="submit" value="搜索" />
</form>
</div>
</div>
<div class="cont">
<div class="pages"><?php include_partial('temple/pager', array('pg'=>$pg,'search_url'=>$search_url)) ?></div>
<div class="imgList">
<ul class="clearfix">
	<?php foreach($result as $one) { ?>
	<li>
		<a href="<?php echo url_for('temple/detail?id='.$one['id']) ?>"> 
			<?php echo image_tag('../uploads/temple/'.$one['img_one']) ?>
			<p><?php $des = strip_tags($one->getDescription(ESC_RAW)); echo mb_substr($des, 0, 160)."..." ?></p>
		</a>
	</li>
<?php }?>
</ul>
</div>
<div class="pages"><?php include_partial('temple/pager', array('pg'=>$pg,'search_url'=>$search_url))?></div>
</div>
</div>
</div>
<script>
$.address('province','city','block','<?php echo $province ?>','<?php echo $city ?>','<?php echo $block ?>');
</script>