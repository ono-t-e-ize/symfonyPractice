<h1>Login</h1>
<form action="<?php echo url_for('user/orderRegister') ?>" method="post">
  <?php echo $form->renderGlobalErrors() ?>
  <div>
    <?php echo $form['deliveryAdress']->renderLabel() ?>
    <?php echo $form['deliveryAdress'] ?>
    <?php echo $form['deliveryAdress']->renderError() ?>
  </div>
  <div>
    <input type="submit" value="注文する" />
  </div>
</form>