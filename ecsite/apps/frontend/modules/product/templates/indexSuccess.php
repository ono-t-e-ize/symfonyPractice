<h1>Products List</h1>
<table>
<tbody>
<?php if (!isset($products)): ?>
      <p>Product not found.</p>
<?php else: ?>
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
                <td>
                  <a href="<?php echo url_for('product/show?id='.$product->getId()) ?>">
                     <?php echo $product->getId(); ?>
                  </a>
                </td>
                <td><?php echo $product->getName(); ?></td>
                <td><?php echo $product->getPrice(); ?></td>
                <td><?php echo $product->getDescription(); ?></td>
                <td><?php echo $product->getImage(); ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php endif; ?>
  </tbody>
</table>


<a href="<?php echo url_for('product/new') ?>">商品登録</a>