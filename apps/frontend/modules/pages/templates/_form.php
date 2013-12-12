<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('pages/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>          
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th>标题:</th>
        <td>
          <?php echo $form->getObject()->getTitle(); ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['content']->renderLabel() ?></th>
        <td>
          <?php echo $form['content'] ?>
        </td>
        <td>
          <?php echo $form['content']->renderError() ?>
        </td>
      </tr>
    </tbody>
  </table>
  <br />
  	<?php if ($form->getObject()->isNew()):?>
   <input class="btnPurple" type="submit" value="确认创建" />
   <?php else: ?>
   <input class="btnPurple" type="submit" value="确认修改" />
   <input class="btnPurple" type="button" value="返回管理中心" onclick="location.href='<?php echo url_for('manager/index') ?>'" />
   <?php endif;?>
</form>