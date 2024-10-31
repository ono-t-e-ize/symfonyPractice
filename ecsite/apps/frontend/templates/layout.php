<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo stylesheet_path('main') ?>">
    <?php include_javascripts() ?>
    <?php include_stylesheets() ?>
</head>
<body>
    <header>
        <div class="header-content">
            <h1>店舗管理</h1>
        </div>
        <form action="<?php echo url_for('user/logout') ?>" method="post">
            <button type="submit">ログアウト</button>
        </form>
        <form action="<?php echo url_for('orderDetail/index') ?>" method="post">
            <button type="submit">注文一覧</button>
        </form>
        <form action="<?php echo url_for('product/index') ?>" method="post">
            <button type="submit">商品一覧</button>
        </form>
    </header>

    <main>
        <?php echo $sf_content ?>
    </main>

    <footer>
        <p>&copy; <?php echo date('Y') ?> ECサイト</p>
    </footer>
</body>
</html>
