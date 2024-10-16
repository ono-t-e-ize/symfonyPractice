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
            <th>Created at</th>
            <th>Updated at</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($products as $product): ?>
            <tr>
                <td><?php echo $product->getId(); ?></td>
                <td><?php echo $product->getName(); ?></td>
                <td><?php echo $product->getPrice(); ?></td>
                <td><?php echo $product->getDescription(); ?></td>
                <td><?php echo $product->getImage(); ?></td>
                <td><?php echo $product->getCreatedAt(); ?></td>
                <td><?php echo $product->getUpdatedAt(); ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php endif; ?>
  </tbody>
</table>


<a href="<?php echo url_for('product/new') ?>">New</a>