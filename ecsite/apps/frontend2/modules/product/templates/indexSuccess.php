<h1>商品一覧</h1>

<!-- 商品一覧を表示するためのテーブル -->
<table class="product-table">
  <thead>
    <tr>
      <th>Id</th>
      <th>商品名</th>
      <th>価格</th>
      <th>商品説明</th>
      <th>イメージ</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($products as $product): ?>
    <tr>
      <td><a href="<?php echo url_for('product/show?id=' . $product->getId()) ?>" class="product-link"><?php echo $product->getId() ?></a></td>
      <td><?php echo $product->getName() ?></td>
      <td><?php echo number_format($product->getPrice()) ?>円</td> <!-- 価格にフォーマットを追加 -->
      <td><?php echo $product->getDescription() ?></td>
      <td><img src="<?php echo $product->getImage() ?>" alt="<?php echo $product->getName() ?>" class="product-image" /></td> <!-- 画像を表示 -->
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<style>
  /* 商品テーブルのスタイル */
  .product-table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    background-color: #f9f9f9;
  }

  .product-table th, .product-table td {
    padding: 10px;
    border: 1px solid #ddd;
    text-align: left;
  }

  .product-table th {
    background-color: #4CAF50;
    color: white;
  }

  .product-table td {
    background-color: #fff;
  }

  .product-table tr:nth-child(even) {
    background-color: #f2f2f2;
  }

  .product-link {
    color: #007BFF;
    text-decoration: none;
  }

  .product-link:hover {
    text-decoration: underline;
  }

  .product-image {
    width: 50px;
    height: 50px;
    object-fit: cover;
  }

  /* モバイル向けのレスポンシブデザイン */
  @media (max-width: 768px) {
    .product-table {
      font-size: 12px;
    }

    .product-image {
      width: 40px;
      height: 40px;
    }
  }
</style>
