<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title><?php include_partial('global/title') ?></title>
    <link rel="stylesheet" href="<?php echo stylesheet_path('main') ?>">
</head>
<body>
    <header>
        <div class="header-content">
            <h1>ECサイト</h1>
            <div class="product-info">
                <?php if (isset($product)): ?>
                    <p>商品名: <?php echo $product->getName() ?></p>
                    <p>価格: <?php echo $product->getPrice() ?>円</p>
                <?php else: ?>
                    <p>商品情報はありません</p>
                <?php endif; ?>
            </div>
            <div class="order-info">
                <a href="<?php echo url_for('@order') ?>" class="button">注文情報</a>
            </div>
        </div>
    </header>

    <main>
        <?php echo $sf_content ?>
    </main>

    <footer>
        <p>&copy; <?php echo date('Y') ?> ECサイト</p>
    </footer>
</body>
</html>