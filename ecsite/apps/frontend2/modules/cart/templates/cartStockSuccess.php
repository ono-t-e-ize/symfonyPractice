<?php use_stylesheet('cart.css'); // カスタムCSSファイルを読み込む ?>
<div class="cart-container">
    <h1>カートの中身</h1>
    
    <!-- 商品リストのテーブル -->
    <table class="cart-table">
        <thead>
            <tr>
                <th>商品名</th>
                <th>価格</th>
                <th>イメージ</th>
                <th>削除</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
                <tr>
                    <td><?php echo htmlspecialchars($product['name'], ENT_QUOTES, 'UTF-8') ?></td>
                    <td><?php echo number_format($product['price'], 0, '.', ',') ?> 円</td>
                    <td><img src="<?php echo htmlspecialchars($product['image'], ENT_QUOTES, 'UTF-8') ?>" alt="商品画像" class="product-image" /></td>
                    <td>
                        <form action="<?php echo url_for('cart/delete') ?>" method="post">
                            <input type="hidden" name="id" value='<?php echo $product['cartId'] ?>' />
                            <button type="submit" class="delete-button">削除</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <!-- 注文画面へ進むフォーム -->
    <div class="checkout-form">
        <form action="<?php echo url_for('orderDetail/confirm') ?>" method="post">
            <input type="hidden" name="productDetail" value='<?php echo htmlspecialchars($jsonProducts, ENT_QUOTES, 'UTF-8') ?>' />
            <input type="hidden" name="userId" value='<?php echo $userId ?>' />
            <button type="submit" class="checkout-button">注文画面へ</button>
        </form>
    </div>
</div>

<style>

    /* カートページのレイアウト */
.cart-container {
  width: 90%;
  max-width: 1200px;
  margin: 30px auto;
  font-family: Arial, sans-serif;
}

h1 {
  font-size: 2em;
  text-align: center;
  margin-bottom: 20px;
  color: #333;
}

/* 商品テーブルのスタイル */
.cart-table {
  width: 100%;
  border-collapse: collapse;
  margin-bottom: 30px;
}

.cart-table th,
.cart-table td {
  padding: 12px;
  text-align: center;
  vertical-align: middle;
  border: 1px solid #ddd;
}

.cart-table th {
  background-color: #f4f4f4;
  font-size: 1.2em;
}

.cart-table td {
  background-color: #fff;
}

.product-image {
  max-width: 100px;
  height: auto;
}

/* 削除ボタン */
.delete-button {
  background-color: #dc3545;
  color: white;
  padding: 8px 16px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 14px;
  transition: background-color 0.3s ease;
}

.delete-button:hover {
  background-color: #c82333;
}

/* 注文画面へ進むボタン */
.checkout-form {
  text-align: center;
}

.checkout-button {
  background-color: #007bff;
  color: white;
  padding: 12px 24px;
  font-size: 16px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.checkout-button:hover {
  background-color: #0056b3;
}


</style>