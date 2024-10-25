<h1>Order details List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Product name</th>
      <th>Total amount</th>
      <th>Customer name</th>
      <th>Delivery address</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($order_details as $order_detail): ?>
    <tr>
      <td><a href="<?php echo url_for('orderDetail/show?id=' . $order_detail->getId()) ?>"><?php echo $order_detail->getId() ?></a></td>
      <td><?php echo $order_detail->getProductName() ?></td>
      <td><?php echo $order_detail->getTotalAmount() ?></td>
      <td><?php echo $order_detail->getCustomerName() ?></td>
      <td><?php echo $order_detail->getDeliveryAddress() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a href="<?php echo url_for('orderDetail/new') ?>">New</a>
