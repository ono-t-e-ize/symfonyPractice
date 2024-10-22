<h1>Login</h1>
<form action="<?php echo url_for('user/login') ?>" method="post">
  <?php echo $form->renderGlobalErrors() ?>
  <div>
    <?php echo $form['email']->renderLabel() ?>
    <?php echo $form['email'] ?>
    <?php echo $form['email']->renderError() ?>
  </div>
  <div>
    <?php echo $form['password']->renderLabel() ?>
    <?php echo $form['password'] ?>
    <?php echo $form['password']->renderError() ?>
  </div>
  <div>
    <input type="submit" value="Login" />
  </div>
</form>