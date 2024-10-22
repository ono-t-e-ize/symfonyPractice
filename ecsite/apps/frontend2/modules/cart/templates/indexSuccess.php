<h1>Carts List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>User</th>
      <th>Product</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($carts as $cart): ?>
    <tr>
      <td><a href="<?php echo url_for('cart/show?id=' . $cart->getId()) ?>"><?php echo $cart->getId() ?></a></td>
      <td><?php echo $cart->getUserId() ?></td>
      <td><?php echo $cart->getProductId() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a href="<?php echo url_for('cart/new') ?>">New</a>
