<h1>Products List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Price</th>
      <th>Description</th>
      <th>Image</th>
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