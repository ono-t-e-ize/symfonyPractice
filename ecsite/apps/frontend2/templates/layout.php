<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo stylesheet_path('main') ?>">
    <?php include_javascripts() ?>
    <?php include_stylesheets() ?>
</head>
<body>
    <header class="site-header">
        <div class="header-content">
            <h1>店舗</h1>
        </div>
        <nav class="header-nav">
            <form action="<?php echo url_for('cart/cartStock') ?>" method="post" class="nav-form">
                <button type="submit" class="nav-button">商品かご</button>
            </form>
            <form action="<?php echo url_for('product/index') ?>" method="post" class="nav-form">
                <button type="submit" class="nav-button">商品一覧</button>
            </form>
            <form action="<?php echo url_for('user/logout') ?>" method="post" class="nav-form">
                <button type="submit" class="nav-button">ログアウト</button>
            </form>
        </nav>
    </header>

    <main class="main-content">
        <?php echo $sf_content ?>
    </main>

    <footer class="site-footer">
        <p>&copy; <?php echo date('Y') ?> ECサイト</p>
    </footer>
</body>
</html>

<style>

    /* 全体のスタイル設定 */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f9f9f9;
}

/* ヘッダー */
.site-header {
    background-color: skyblue;
    color: white;
    padding: 20px 0;
    text-align: center;
    position: relative;
}

.header-content h1 {
    margin: 0;
    font-size: 2.5em;
}

/* ナビゲーションバー */
.header-nav {
    margin-top: 15px;
}

.nav-form {
    display: inline-block;
    margin: 0 10px;
}

.nav-button {
    background-color: #ffffff;
    color: #007bff;
    padding: 12px 20px;
    font-size: 16px;
    border: 2px solid #007bff;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.nav-button:hover {
    background-color: #007bff;
    color: white;
}

/* メインコンテンツ */
.main-content {
    padding: 40px 20px;
    margin: 0 10%;
    background-color: #fff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    min-height: 400px; /* 最低高さを指定してコンテンツが少ない場合でも一定の高さに */
}

/* フッター */
.site-footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 20px 0;
    position: relative;
    bottom: 0;
    width: 100%;
}

.site-footer p {
    margin: 0;
    font-size: 1.2em;
}



</style>