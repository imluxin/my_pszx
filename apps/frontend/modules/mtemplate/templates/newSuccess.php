<?php slot('title','建纪念馆模板-菩萨在线')?>
<?php use_javascript("address.js")?>
<?php use_javascript("jqueryui/ui/jquery-ui.js")?>
<?php use_javascript("jqueryui/ui/i18n/jquery-ui-i18n.js")?>
<?php use_javascript("tiny_mce/tiny_mce.js")?>
<div id="content" class="build">
<div class="row box clearfix">
<div class="side fl"><?php include_partial('mtemplate/user_info', array('myuser'=>$myuser))?>
</div>
<div class="main fr">
<div class="cont">
<h3 class="subTitle">建纪念馆模板</h3>
<div class="buildForm fix-img-400">
	<?php include_partial('mtemplate/form', array('form'=>$form))?>
</div>
</div>
</div>
</div>
</div>
