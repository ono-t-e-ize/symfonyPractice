<h1>アカウント登録</h1>

<form action="<?php echo url_for('user/register') ?>" method="post">
    <?php echo $form['last_name']->renderLabel() ?>
    <?php echo $form['last_name']->render() ?>

    <?php echo $form['first_name']->renderLabel() ?>
    <?php echo $form['first_name']->render() ?>

    <?php echo $form['email']->renderLabel() ?>
    <?php echo $form['email']->render() ?>

    <?php echo $form['phone']->renderLabel() ?>
    <?php echo $form['phone']->render() ?>

    <?php echo $form['address']->renderLabel() ?>
    <?php echo $form['address']->render() ?>

    <?php echo $form['password']->renderLabel() ?>
    <?php echo $form['password']->render() ?>

    <?php echo $form['password_confirm']->renderLabel() ?>
    <?php echo $form['password_confirm']->render() ?>

    <input type="submit" value="Register" />
</form>