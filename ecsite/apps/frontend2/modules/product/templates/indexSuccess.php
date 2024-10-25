<h1>商品一覧</h1>

<table>
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
      <td><a href="<?php echo url_for('product/show?id=' . $product->getId()) ?>"><?php echo $product->getId() ?></a></td>
      <td><?php echo $product->getName() ?></td>
      <td><?php echo $product->getPrice() ?></td>
      <td><?php echo $product->getDescription() ?></td>
      <td><?php echo $product->getImage() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
