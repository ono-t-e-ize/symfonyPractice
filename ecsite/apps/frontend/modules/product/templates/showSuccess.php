<table>
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
      <td><?php echo $product->getPrice() ?></td>
    </tr>
    <tr>
      <th>Description:</th>
      <td><?php echo $product->getDescription() ?></td>
    </tr>
    <tr>
      <th>Image:</th>
      <td><img src="<?php echo $product->getImage() ?>" alt="<?php echo $product->getName() ?>" /></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('product/edit?id=' . $product->getId()) ?>">編集</a>
&nbsp;
<a href="<?php echo url_for('product/index') ?>">商品一覧へ戻る</a>
