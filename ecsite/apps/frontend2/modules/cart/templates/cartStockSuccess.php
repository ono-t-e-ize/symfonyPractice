<table>
  <thead>
    <tr>
      <th>商品名</th>
      <th>価格</th>
      <th>イメージ</th>
    </tr>
  </thead>
  <tbody>
        <?php foreach ($products as $product): ?>
            <tr>
              <td><?php echo $product['name'] ?></td>
              <td><?php echo $product['price'] ?></td>
             <td><?php echo $product['image'] ?></td>
             <td><form action="<?php echo url_for('cart/delete') ?>" method="post">
                   <input type="hidden" name="id" value='<?php echo $product['cartId'] ?>' />
                   <input type="submit" value="削除" />
                </form></td>
            </tr>
        <?php endforeach; ?>
  </tbody>
</table>

<form action="<?php echo url_for('orderDetail/confirm') ?>" method="post">
    <input type="hidden" name="productDetail" value='<?php echo htmlspecialchars($jsonProducts, ENT_QUOTES, 'UTF-8') ?>' />
    <input type="hidden" name="userId" value='<?php echo $userId ?>' />
    <input type="submit" value="注文画面へ" />
</form>