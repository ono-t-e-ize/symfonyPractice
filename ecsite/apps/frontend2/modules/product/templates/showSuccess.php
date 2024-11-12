<?php use_stylesheet('product.css'); // カスタムCSSファイルを読み込む ?>
<div class="product-detail-container">
  <h1>商品詳細</h1>
  
  <table class="product-detail-table">
    <tbody>
      <tr>
        <th>Id:</th>
        <td><?php echo $product->getId() ?></td>
      </tr>
      <tr>
        <th>Name:</th>
        <td><?php echo $product->getName() ?></td>
      </tr>
      <tr>
        <th>Price:</th>
        <td><?php echo number_format($product->getPrice(), 0, '.', ',') ?> 円</td>
      </tr>
      <tr>
        <th>Description:</th>
        <td><?php echo nl2br($product->getDescription()) ?></td>
      </tr>
      <tr>
        <th>Image:</th>
        <td><img src="<?php echo $product->getImage() ?>" alt="商品画像" class="product-image" /></td>
      </tr>
    </tbody>
  </table>
  
  <!-- 商品かごに追加フォーム -->
  <div class="add-to-cart-form">
    <form action="<?php echo url_for('cart/create') ?>" method="post">
        <input type="hidden" name="userId" value="<?php echo $userId ?>" />
        <input type="hidden" name="productId" value="<?php echo $product->getId() ?>" />
        <button type="submit" class="add-to-cart-button">商品かごに追加</button>
    </form>
  </div>
</div>

<Style>

    /* 商品詳細ページの全体的なレイアウト */
.product-detail-container {
  width: 80%;
  margin: 20px auto;
  font-family: Arial, sans-serif;
}

h1 {
  font-size: 2em;
  text-align: center;
  margin-bottom: 20px;
}

/* 商品詳細テーブルのスタイル */
.product-detail-table {
  width: 100%;
  border-collapse: collapse;
  margin-bottom: 30px;
}

.product-detail-table th,
.product-detail-table td {
  padding: 10px;
  text-align: left;
  vertical-align: top;
}

.product-detail-table th {
  background-color: #f4f4f4;
  width: 30%;
}

.product-detail-table td {
  background-color: #fff;
}

.product-image {
  max-width: 200px;
  max-height: 200px;
  object-fit: cover;
}

/* ボタンのスタイル */
.add-to-cart-form {
  text-align: center;
}

.add-to-cart-button {
  background-color: #28a745;
  color: white;
  padding: 10px 20px;
  font-size: 16px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.add-to-cart-button:hover {
  background-color: #218838;
}



</style>