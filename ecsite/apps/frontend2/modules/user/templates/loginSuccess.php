<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo stylesheet_path('main') ?>">
    <?php include_javascripts() ?>
    <?php include_stylesheets() ?>
</head>
<body>
    <div class="login-container">
        <h1>ログイン</h1>
        <form action="<?php echo url_for('user/login') ?>" method="post" class="login-form">
            <?php echo $form->renderGlobalErrors() ?>
            <div class="form-group">
                <?php echo $form['email']->renderLabel() ?>
                <?php echo $form['email'] ?>
                <?php echo $form['email']->renderError() ?>
            </div>
            <div class="form-group">
                <?php echo $form['password']->renderLabel() ?>
                <?php echo $form['password'] ?>
                <?php echo $form['password']->renderError() ?>
            </div>
            <div class="form-group">
                <input type="submit" value="ログイン" class="btn-submit" />
            </div>
        </form>
        <a href="<?php echo url_for('user/new') ?>">アカウント新規作成</a>
    </div>
</body>
</html>

<style>

/* ログインページ全体のスタイル */
body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

/* ログインフォームコンテナ */
.login-container {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    padding: 30px;
    width: 100%;
    max-width: 400px;
}

/* フォームのタイトル */
h1 {
    font-size: 2em;
    text-align: center;
    color: #333;
    margin-bottom: 20px;
}

/* フォーム内のグループ */
.form-group {
    margin-bottom: 20px;
}

/* ラベルのスタイル */
label {
    font-weight: bold;
    display: block;
    margin-bottom: 5px;
    color: #333;
}

/* 入力フィールド */
input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 12px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-top: 5px;
}

input[type="text"]:focus,
input[type="password"]:focus {
    border-color: #007bff;
    outline: none;
}

/* エラーメッセージ */
form .error {
    color: #e74c3c;
    font-size: 0.9em;
}

/* ログインボタン */
.btn-submit {
    width: 100%;
    background-color: #007bff;
    color: white;
    padding: 12px 20px;
    font-size: 16px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn-submit:hover {
    background-color: #0056b3;
}



</style>