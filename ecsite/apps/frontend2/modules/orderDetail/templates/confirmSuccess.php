<?php use_stylesheet('order.css'); // カスタムCSSファイルを読み込む ?>
<div class="order-container">
    <h1>商品注文</h1>

    <table class="order-table">
        <thead>
            <tr>
                <th>商品名</th>
                <th>価格</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
                <tr>
                    <td><?php echo htmlspecialchars($product['name'], ENT_QUOTES, 'UTF-8') ?></td>
                    <td><?php echo number_format($product['price'], 0, '.', ',') ?> 円</td>
                </tr>
            <?php endforeach; ?>
            <tr>
                <td><strong>合計金額：</strong></td>
                <td><strong><?php echo number_format($totalAmount, 0, '.', ',') ?> 円</strong></td>
            </tr>
        </tbody>
    </table>

    <!-- 注文フォーム -->
    <div class="order-form">
        <form action="<?php echo url_for('orderDetail/create') ?>" method="post">
            <input type="hidden" name="productNames" value='<?php echo htmlspecialchars($productNames, ENT_QUOTES, 'UTF-8') ?>' />
            <input type="hidden" name="totalAmount" value='<?php echo $totalAmount ?>' />
            <input type="hidden" name="customerName" value='<?php echo $customerName ?>' />
            <input type="hidden" name="userId" value='<?php echo $userId ?>' />

            <div class="form-group">
                <label for="deliveryAddress">お届け先住所</label>
                <input type="text" name="deliveryAddress" id="deliveryAddress" class="form-control" required />
            </div>

            <div class="form-group">
                <button type="submit" class="btn-submit">注文確定</button>
            </div>
        </form>
    </div>
</div>

<style>

   /* 注文ページの全体的なレイアウト */
.order-container {
  width: 90%;
  max-width: 1000px;
  margin: 30px auto;
  font-family: Arial, sans-serif;
}

h1 {
  font-size: 2em;
  text-align: center;
  margin-bottom: 20px;
  color: #333;
}

/* 商品リストのテーブル */
.order-table {
  width: 100%;
  border-collapse: collapse;
  margin-bottom: 30px;
}

.order-table th,
.order-table td {
  padding: 12px;
  text-align: center;
  vertical-align: middle;
  border: 1px solid #ddd;
}

.order-table th {
  background-color: #f4f4f4;
  font-size: 1.2em;
}

.order-table td {
  background-color: #fff;
}

.order-table td strong {
  font-size: 1.1em;
  color: #007bff;
}

/* 注文フォームのスタイル */
.order-form {
  margin-top: 30px;
  background-color: #f9f9f9;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.form-group {
  margin-bottom: 15px;
}

label {
  display: block;
  font-weight: bold;
  margin-bottom: 8px;
  color: #333;
}

input[type="text"] {
  width: 100%;
  padding: 12px;
  font-size: 16px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

input[type="text"]:focus {
  border-color: #007bff;
  outline: none;
}

.btn-submit {
  background-color: #007bff;
  color: white;
  padding: 12px 24px;
  font-size: 16px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  width: 100%;
  transition: background-color 0.3s ease;
}

.btn-submit:hover {
  background-color: #0056b3;
}


</style>