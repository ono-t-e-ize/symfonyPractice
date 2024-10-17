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
            <h1>ECサイト</h1>
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