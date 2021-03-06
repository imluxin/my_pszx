<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('temple/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php  echo $form->renderHiddenFields(false) ?>
          <?php /*if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'temple/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif;*/ ?>
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
        <td><?php echo $form['name']->renderError() ?></td>
      </tr>
      <tr>
      	<td>寺庙所在地区：</td>
        <td>
        	<?php echo $form['province'] ?>&nbsp;
         	<?php echo $form['city'] ?>&nbsp;
           	<?php echo $form['block'] ?>
        </td>
        <td>
          <?php echo $form['province']->renderError() ?>&nbsp;
          <?php echo $form['city']->renderError() ?>&nbsp;
          <?php echo $form['block']->renderError() ?>
         </td>
      </tr>
      <tr>
        <th><?php echo $form['img_one']->renderLabel() ?></th>
        <td>
          <?php echo $form['img_one'] ?>
        </td>
        <td><?php echo $form['img_one']->renderError() ?></td>
      </tr>
      <tr>
        <th><?php echo $form['img_two']->renderLabel() ?></th>
        <td>
          <?php echo $form['img_two'] ?>
        </td>
        <td> <?php echo $form['img_two']->renderError() ?></td>
      </tr>
      <tr>
        <th><?php echo $form['img_three']->renderLabel() ?></th>
        <td>
          <?php echo $form['img_three'] ?>
        </td>
        <td><?php echo $form['img_three']->renderError() ?></td>
      </tr>
      <tr>
        <th><?php echo $form['description']->renderLabel() ?></th>
        <td>
          &nbsp;
        </td>
        <td><?php echo $form['description']->renderError() ?></td>
      </tr>
    </tbody>
  </table>
  <div>
  <?php echo $form['description'] ?>
  </div><br />
  <input class="btnPurple" type="submit" value="确认创建" />
  <input class="btnPurple" type="button" value="返回" onclick="history.go(-1);" />
</form>
<script>
$.address('temple_province','temple_city','temple_block');
</script>