<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('adv/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          <input class="btnPurple" type="submit" value="确认修改" />
          <input class="btnPurple" type="button" onclick="location.href='<?php echo url_for('manager/adv')?>'" value="返回"/>
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['title']->renderLabel() ?></th>
        <td>
          <?php echo $form['title']->renderError() ?>
          <?php echo $form['title'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['start_date']->renderLabel() ?></th>
        <td>
          <?php echo $form['start_date']->renderError() ?>
          <?php echo $form['start_date'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['end_date']->renderLabel() ?></th>
        <td>
          <?php echo $form['end_date']->renderError() ?>
          <?php echo $form['end_date'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['url']->renderLabel() ?></th>
        <td>
          <?php echo $form['url']->renderError() ?>
          <?php echo $form['url'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['images']->renderLabel() ?></th>
        <td id="img">
          <?php echo $form['images']->renderError() ?>
          <?php echo image_tag('../uploads/adv/'.$adv['images']) ?>
          <?php echo $form['images'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
<script>
	$(function() {
		var imgs = $('#img img');
		$(imgs[1]).css('display','none');

		$( "#adv_start_date" ).datepicker({
			changeMonth: true,
			changeYear: true
		});
		
		$( "#adv_end_date" ).datepicker({
			changeMonth: true,
			changeYear: true
		});
	});
</script>