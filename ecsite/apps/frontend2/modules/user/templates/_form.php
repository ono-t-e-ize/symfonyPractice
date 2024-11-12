<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('user/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
  <?php if (!$form->getObject()->isNew()): ?>
    <input type="hidden" name="sf_method" value="put" />
  <?php endif; ?>

  <div class="form-container">
    <h1><?php echo $form->getObject()->isNew() ? '新規ユーザー作成' : 'ユーザー編集' ?></h1>

    <table class="form-table">
      <tbody>
        <?php foreach ($form as $field): ?>
          <tr class="form-group">
            <td class="label">
              <?php echo $field->renderLabel() ?>
            </td>
            <td class="input">
              <?php echo $field->render() ?>
              <?php if ($field->hasError()): ?>
                <div class="error"><?php echo $field->getError() ?></div>
              <?php endif; ?>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
      <tfoot>
        <tr>
          <td colspan="2">
            <a href="<?php echo url_for('user/index') ?>" class="back-link">一覧に戻る</a>
            <?php if (!$form->getObject()->isNew()): ?>
              <a href="<?php echo url_for('user/delete?id='.$form->getObject()->getId()) ?>" class="delete-link" onclick="return confirm('本当に削除しますか？')">削除</a>
            <?php endif; ?>
            <input type="submit" value="アカウント作成" class="submit-button" />
          </td>
        </tr>
      </tfoot>
    </table>
  </div>
</form>

<style>

    /* フォーム全体のスタイル */
body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: flex-start;
    height: 100vh;
}

/* フォームコンテナ */
.form-container {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    padding: 30px;
    width: 100%;
    max-width: 600px;
}

/* フォームの見出し */
h1 {
    font-size: 2em;
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

/* フォームテーブル */
.form-table {
    width: 100%;
    border-spacing: 0;
    margin-top: 20px;
}

.form-group {
    margin-bottom: 20px;
}

.label {
    font-weight: bold;
    text-align: right;
    padding-right: 10px;
    width: 30%;
    vertical-align: middle;
    color: #333;
}

.input {
    width: 70%;
}

/* 入力フィールドのスタイル */
input[type="text"],
input[type="password"],
input[type="email"],
input[type="submit"],
textarea {
    width: 100%;
    padding: 12px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-top: 5px;
}

input[type="submit"] {
    background-color: #007bff;
    color: white;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}

/* エラーメッセージ */
.error {
    color: #e74c3c;
    font-size: 0.9em;
}

/* リンクのスタイル */
a {
    text-decoration: none;
    color: #007bff;
}

a:hover {
    text-decoration: underline;
}

.back-link {
    margin-right: 20px;
}

.delete-link {
    color: #e74c3c;
}

.delete-link:hover {
    color: #c0392b;
}

/* レスポンシブデザイン */
@media (max-width: 768px) {
    .form-table {
        font-size: 14px;
    }

    .label {
        text-align: left;
        width: 100%;
    }

    .input {
        width: 100%;
    }
}


</style>