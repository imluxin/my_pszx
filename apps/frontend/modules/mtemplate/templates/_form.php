<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('mtemplate/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
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
        <th><?php echo $form['name']->renderLabel() ?></th>
        <td>
          <?php echo $form['name'] ?>
        </td>
        <td>
          <?php echo $form['name']->renderError() ?>
        </td>
      </tr>
      
       <tr>
        <th><?php echo $form['is_free']->renderLabel() ?></th>
        <td>
          <?php echo $form['is_free'] ?>
        </td>
        <td>
          <?php echo $form['is_free']->renderError() ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['price']->renderLabel() ?></th>
        <td>
          <?php echo $form['price'] ?>
        </td>
        <td>
          <?php echo $form['price']->renderError() ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['jng_path']->renderLabel() ?></th>
        <td>
          <?php echo $form['jng_path'] ?>
        </td>
        <td>
          <?php echo $form['jng_path']->renderError() ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['lw_name']->renderLabel() ?></th>
        <td>
          <?php echo $form['lw_name'] ?>
        </td>
        <td>
          <?php echo $form['lw_name']->renderError() ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['lw_path']->renderLabel() ?></th>
        <td>
          <?php echo $form['lw_path'] ?>
        </td>
        <td>
          <?php echo $form['lw_path']->renderError() ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['gm_name']->renderLabel() ?></th>
        <td>
          <?php echo $form['gm_name'] ?>
        </td>
        <td>
          <?php echo $form['gm_name']->renderError() ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['gm_path']->renderLabel() ?></th>
        <td>
          <?php echo $form['gm_path'] ?>
        </td>
        <td>
          <?php echo $form['gm_path']->renderError() ?>
        </td>
      </tr>
    </tbody>
  </table>
  <br />
  	<?php if ($form->getObject()->isNew()):?>
   <input class="btnPurple" type="submit" value="确认创建" />
   <?php else: ?>
   <input class="btnPurple" type="submit" value="确认修改" />
   <input class="btnPurple" type="button" value="返回管理中心" onclick="location.href='<?php echo url_for('manager/mtemplate') ?>'" />
   <?php endif;?>
</form>