<table>
  <tbody>
    <tr>
      <th>Product:</th>
      <td><?php echo $cart->getProductId() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('cart/edit?id=' . $cart->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('cart/index') ?>">List</a>
