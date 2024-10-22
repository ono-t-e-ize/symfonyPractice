<table>
  <thead>
    <tr>
      <th>name</th>
      <th>price</th>
      <th>image</th>
    </tr>
  </thead>
  <tbody>
        <?php foreach ($products as $product): ?>
            <tr>
             <td><?php echo $product->getName() ?></td>
             <td><?php echo $product->getPrice() ?></td>
             <td><?php echo $product->getImage() ?></td>
            </tr>
        <?php endforeach; ?>
  </tbody>
</table>
<a href="<?php echo url_for('cart/orderRegister') ?>">注文画面へ</a>