<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $order_detail->getId() ?></td>
    </tr>
    <tr>
      <th>Product name:</th>
      <td><?php echo $order_detail->getProductName() ?></td>
    </tr>
    <tr>
      <th>Total amount:</th>
      <td><?php echo $order_detail->getTotalAmount() ?></td>
    </tr>
    <tr>
      <th>Customer name:</th>
      <td><?php echo $order_detail->getCustomerName() ?></td>
    </tr>
    <tr>
      <th>Delivery address:</th>
      <td><?php echo $order_detail->getDeliveryAddress() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('orderDetail/edit?id=' . $order_detail->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('orderDetail/index') ?>">List</a>
