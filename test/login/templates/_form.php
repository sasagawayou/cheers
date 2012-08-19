<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('login/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('login/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'login/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['user_name']->renderLabel() ?></th>
        <td>
          <?php echo $form['user_name']->renderError() ?>
          <?php echo $form['user_name'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['show_name']->renderLabel() ?></th>
        <td>
          <?php echo $form['show_name']->renderError() ?>
          <?php echo $form['show_name'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['password']->renderLabel() ?></th>
        <td>
          <?php echo $form['password']->renderError() ?>
          <?php echo $form['password'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['address']->renderLabel() ?></th>
        <td>
          <?php echo $form['address']->renderError() ?>
          <?php echo $form['address'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['email']->renderLabel() ?></th>
        <td>
          <?php echo $form['email']->renderError() ?>
          <?php echo $form['email'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['twitter']->renderLabel() ?></th>
        <td>
          <?php echo $form['twitter']->renderError() ?>
          <?php echo $form['twitter'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['mixi']->renderLabel() ?></th>
        <td>
          <?php echo $form['mixi']->renderError() ?>
          <?php echo $form['mixi'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['facebook']->renderLabel() ?></th>
        <td>
          <?php echo $form['facebook']->renderError() ?>
          <?php echo $form['facebook'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['google']->renderLabel() ?></th>
        <td>
          <?php echo $form['google']->renderError() ?>
          <?php echo $form['google'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['last_login']->renderLabel() ?></th>
        <td>
          <?php echo $form['last_login']->renderError() ?>
          <?php echo $form['last_login'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['created_at']->renderLabel() ?></th>
        <td>
          <?php echo $form['created_at']->renderError() ?>
          <?php echo $form['created_at'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['updated_at']->renderLabel() ?></th>
        <td>
          <?php echo $form['updated_at']->renderError() ?>
          <?php echo $form['updated_at'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
