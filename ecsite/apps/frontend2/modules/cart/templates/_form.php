<?php use_stylesheets_for_form($form); ?>
<?php use_javascripts_for_form($form); ?>

<form action="<?php echo url_for('cart/' . ($form->getObject()->isNew() ? 'create' : 'update') . (!$form->getObject()->isNew() ? '?id=' . $form->getObject()->getId() : '')); ?>" 
      method="post" 
      <?php if ($form->isMultipart()): ?> 
          enctype="multipart/form-data" 
      <?php endif; ?>>
  
    <?php if (!$form->getObject()->isNew()): ?>
        <input type="hidden" name="sf_method" value="put" />
    <?php endif; ?>

    <table>
        <tfoot>
            <tr>
                <td colspan="2">
                    &nbsp;<a href="<?php echo url_for('cart/index'); ?>">Back to list</a>
                    <?php if (!$form->getObject()->isNew()): ?>
                        &nbsp;<?php echo link_to('Delete', 'cart/delete?id=' . $form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')); ?>
                    <?php endif; ?>
                    <input type="submit" value="Save" />
                </td>
            </tr>
        </tfoot>
        <tbody>
            <?php echo $form; ?>
        </tbody>
    </table>
</form>
