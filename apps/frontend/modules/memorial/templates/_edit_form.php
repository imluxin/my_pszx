<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('memorial/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          <?php /*if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'memorial/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif;*/ ?>
          
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['m_name']->renderLabel() ?></th>
        <td>
          <?php echo $form['m_name'] ?>
        </td>
        <td>
          <?php echo $form['m_name']->renderError() ?>
        </td>
      </tr>
       <tr>
        <th><?php echo $form['category_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['category_id'] ?>
        </td>
        <td>
          <?php echo $form['category_id']->renderError() ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['is_secret']->renderLabel() ?></th>
        <td>
          <?php echo $form['is_secret'] ?>
        </td>
        <td>
          <?php echo $form['is_secret']->renderError() ?>
        </td>
      </tr>
      <tr>
      	<td rowspan="6">
      		逝者信息A
      	</td>
        <th><?php echo $form['die_name_one']->renderLabel() ?></th>
        <td>
          <?php echo $form['die_name_one'] ?>
        </td>
        <td>
          <?php echo $form['die_name_one']->renderError() ?>
        </td>
        
      </tr>
      <tr>
        <th><?php echo $form['die_province_one']->renderLabel() ?></th>
        <td>
          <?php echo $form['die_province_one'] ?>&nbsp;
          <?php echo $form['die_city_one'] ?>
        </td>
        <td>
          <?php echo $form['die_province_one']->renderError() ?>
          &nbsp;
          <?php echo $form['die_city_one']->renderError() ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['die_birth_one']->renderLabel() ?></th>
        <td>
          <?php echo $form['die_birth_one'] ?>
        </td>
        <td>
          <?php echo $form['die_birth_one']->renderError() ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['die_die_one']->renderLabel() ?></th>
        <td>
          <?php echo $form['die_die_one'] ?>
        </td>
        <td>
          <?php echo $form['die_die_one']->renderError() ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['die_nickname_one']->renderLabel() ?></th>
        <td>
          <?php echo $form['die_nickname_one'] ?>
        </td>
        <td>
          <?php echo $form['die_nickname_one']->renderError() ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['die_photo_one']->renderLabel() ?></th>
        <td id="die_photo_one">
          <?php echo image_tag('../uploads/memorial/'.$memorial->getDiePhotoOne())?>
          <?php echo $form['die_photo_one'] ?>
        </td>
        <td>
          <?php echo $form['die_photo_one']->renderError() ?>
        </td>
      </tr>
      <tr>
      	<td>&nbsp;</td>
      	<td>&nbsp;</td>
      	<td>&nbsp;</td>
      </tr>
      <tr>
      	<td rowspan="6">
      		逝者信息B
      	</td>
        <th><?php echo $form['die_name_two']->renderLabel() ?></th>
        <td>
          <?php echo $form['die_name_two'] ?>
        </td>
        <td>
          <?php echo $form['die_name_two']->renderError() ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['die_province_two']->renderLabel() ?></th>
        <td>
          <?php echo $form['die_province_two'] ?>
          <?php echo $form['die_city_two'] ?>
        </td>
        <td>
          <?php echo $form['die_province_two']->renderError() ?>
          <?php echo $form['die_city_two']->renderError() ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['die_birth_two']->renderLabel() ?></th>
        <td>
          <?php echo $form['die_birth_two'] ?>
        </td>
        <td>
          <?php echo $form['die_birth_two']->renderError() ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['die_die_two']->renderLabel() ?></th>
        <td>
          <?php echo $form['die_die_two'] ?>
        </td>
        <td>
          <?php echo $form['die_die_two']->renderError() ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['die_nickname_two']->renderLabel() ?></th>
        <td>
          <?php echo $form['die_nickname_two'] ?>
        </td>
        <td>
          <?php echo $form['die_nickname_two']->renderError() ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['die_photo_two']->renderLabel() ?></th>
        <td id="die_photo_two">
         <?php echo image_tag('../uploads/memorial/'.$memorial->getDiePhotoTwo())?>
          <?php echo $form['die_photo_two'] ?>
        </td>
        <td>
          <?php echo $form['die_photo_two']->renderError() ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['description']->renderLabel() ?></th>
        <td>
         &nbsp;
        </td>
        <td>
          <?php echo $form['description']->renderError() ?>
        </td>
      </tr>
    </tbody>
  </table>
   <div>
   <?php echo $form['description'] ?>
   </div>
  <br />
   <input class="btnPurple" type="submit" value="确认修改" />
   <input class="btnPurple" type="button" value="返回管理中心" onclick="location.href='<?php echo url_for('manager/memorial') ?>'" />
</form>
<select style="display:none" id="area_id"></select>
<script>

$(function() {
	var imgs1 = $('#die_photo_one img');
	$(imgs1[1]).css('display','none');

	var imgs2 = $('#die_photo_two img');
	$(imgs2[1]).css('display','none');
	
	$( "#memorial_die_birth_one" ).datepicker({
		changeMonth: true,
		changeYear: true,
		yearRange: "-100:+0"
	});
	$( "#memorial_die_die_one" ).datepicker({
		changeMonth: true,
		changeYear: true,
		yearRange: "-100:+0"
	});
	$( "#memorial_die_birth_two" ).datepicker({
		changeMonth: true,
		changeYear: true,
		yearRange: "-100:+0"
	});
	$( "#memorial_die_die_two" ).datepicker({
		changeMonth: true,
		changeYear: true,
		yearRange: "-100:+0" 
	});
});

$.address('memorial_die_province_one','memorial_die_city_one','area_id');
$.address('memorial_die_province_two','memorial_die_city_two','area_id');
</script>