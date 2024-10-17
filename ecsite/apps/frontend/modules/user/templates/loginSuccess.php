<h1>ログイン</h1>

<form action="<?php echo url_for('user/login') ?>" method="post">
    <?php echo $form->render() ?>
    <input type="submit" value="Login" />
</form>