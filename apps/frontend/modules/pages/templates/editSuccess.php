<?php slot('title','修改文章-菩萨在线')?>
<?php use_javascript("jqueryui/ui/jquery-ui.js")?>
<?php use_javascript("jqueryui/ui/i18n/jquery-ui-i18n.js")?>
<?php use_javascript("tiny_mce/tiny_mce.js")?>
<div id="content" class="build">
<div class="row box clearfix">
<div class="side fl"><?php include_partial('temple/user_info', array('myuser'=>$myuser))?>
</div>
<div class="main fr">
<div class="cont">
<h3 class="subTitle">修改文章</h3>

<?php include_partial('global/notice')?>

<div class="buildForm fix-img-400">
	<?php include_partial('pages/form', array('form'=>$form))?>
</div>
</div>
</div>
</div>
</div>
