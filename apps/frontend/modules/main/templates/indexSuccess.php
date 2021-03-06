<?php slot('title', '菩萨在线' ) ?>
<?php use_javascript('address.js') ?>
<?php use_javascript("jqueryui/ui/jquery-ui.js")?>
<?php use_javascript("jqueryui/ui/i18n/jquery-ui-i18n.js")?>
<!--content-->
<div id="content" class="index"><!--幻灯片广告、登录-->
<div class="row row1 clearfix">
<div class="main fl">
<div class="slideShow">
<?php include_component('adv', 'slider',array('adv'=>array(1,2,3)));?>
</div>
</div>
<div class="side fr box user">
	<div class="cont">
		<div class="titleBar cus-bar">
			<p>礼佛三炷香 心愿自然成</p>
		</div>
		<?php if(!$sf_user->isAuthenticated()) {?> 
		<?php use_helper('I18N') ?>
		<?php echo include_partial('main/signin_form', array('form' => $form)) ?>
		<?php } else { ?>
		<div class="userInfo">
		<?php include_partial('main/user_info', array('myuser'=>$myuser)) ?>
		</div>
		<?php }?>
		<?php include_partial('main/menu', array())?>
		<div class="userNote">
		<p>您可以：</p>
		<p>在线拜菩萨，保全家积德积财平安健康</p>
		<p>网上建寺庙，让信徒超越时空成全心愿</p>
		<p>在线英烈馆，让英烈永垂不朽代代缅怀</p>
		<p>网上纪念馆，在线祭祀让逝者安享天堂</p>
		</div>
	</div>
</div>
</div>
<!--/幻灯片广告、登录--> <!--网上礼佛、佛教资讯-->
<div class="row row2 clearfix">
<?php include_component('main', 'buddha') ?>
<?php include_component('main','fjzx') ?>
</div>
<!--/网上礼佛、佛教资讯--> <!--名山名寺、慈善救助-->
<div class="row row3 clearfix">
<?php include_component('main', 'temple') ?>
<?php include_component('main', 'csjz')?>
</div>
<!--/名山名寺、慈善救助--> <!--在线纪念、追忆祭文-->
<div class="row row4 clearfix">
<?php include_component('main', 'memorial')?>
<?php include_component('main', 'zyjw') ?>
<!--/在线纪念、追忆祭文--> <!--搜索逝者-->
<div class="row">

<div class="searchPeople box">
<div class="cont">
<form method="GET" action="<?php echo url_for('memorial/index')?>">
	<table>
		<tbody>
			<tr>
				<td>逝者姓名</td>
				<td>逝者籍贯</td>
				<td>忌日</td>
				<td>生日</td>
				<td>纪念馆名称</td>
				<td>纪念馆编号</td>
				<td>纪念馆分类</td>
				<td>建馆者姓名</td>
				<td rowspan="2"><input class="btnPurple" type="submit" value="搜索"></td>
			</tr>
			<tr>
				<td><input placeholder="逝者姓名" name="die_name" type="text" style="width: 80px"></td>
				<td>
					<select id="province" name="province" >
					</select> 
					<select id="city" name="city">
					</select> 
					<select id="block" style="display: none" >
					</select>
				</td>
				<td><input  style="width:75px;" type="text" id="die_day" name="die_day" /></td>
				<td><input  style="width:75px;" type="text" id="born_day" name="born_day" /></td>
				<td><input  id="mname" name="mname" type="text" style="width: 100px"></td>
				<td><input  id="mid" name="mid" type="text" style="width: 80px"></td>
				<td>
				<select id="category" name="category">
					<option>纪念馆分类</option>
					<?php include_component('memorial', 'category') ?>
				</select>
				</td>
				<td><input placeholder="创建者" name="creator" type="text" style="width: 90px"></td>
			</tr>
		</tbody>
	</table>
</form>
</div>
</div>
</div>
<!--/搜索逝者--> <!--祭品商店、同城活动-->
<div class="row row5 clearfix">
<?php include_component('main', 'oblation')?>
<?php include_component('main', 'tchd') ?>
</div>
<!--/祭品商店、同城活动--></div>
<!--content end-->
</div>

<script>

	$.address('province','city','block');
	
	$( "#die_day" ).datepicker({
		changeMonth: true,
		changeYear: true
	});
	$( "#born_day" ).datepicker({
		changeMonth: true,
		changeYear: true
	});
</script>