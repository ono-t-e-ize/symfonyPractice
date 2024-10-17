<h1>Edit Product</h1>

<form action="<?php echo url_for('product/edit?id=' . $product->getId()) ?>" method="post">
    <?php echo $form['name']->renderLabel() ?>
    <?php echo $form['name']->render() ?>

    <?php echo $form['price']->renderLabel() ?>
    <?php echo $form['price']->render() ?>

    <?php echo $form['description']->renderLabel() ?>
    <?php echo $form['description']->render() ?>

    <?php echo $form['image']->renderLabel() ?>
    <?php echo $form['image']->render() ?>

    <input type="submit" value="Edit" />
</form>

<a href="<?php echo url_for('product/index') ?>">商品一覧へ戻る</a>