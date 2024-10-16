<h1>Order details List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Product name</th>
      <th>Total amount</th>
      <th>Customer name</th>
      <th>Delivery address</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($order_details as $order_detail): ?>
    <tr>
      <td><a href="<?php echo url_for('orderDetail/show?
Deprecated: preg_replace(): The /e modifier is deprecated, use preg_replace_callback instead in C:\xampp\htdocs\development\sfprojects\ecsite\lib\vendor\symfony\lib\util\sfToolkit.class.php on line 362

Deprecated: preg_replace(): The /e modifier is deprecated, use preg_replace_callback instead in C:\xampp\htdocs\development\sfprojects\ecsite\lib\vendor\symfony\lib\util\sfToolkit.class.php on line 362
id='.$order_detail->getId()) ?>"><?php echo $order_detail->get
Deprecated: preg_replace(): The /e modifier is deprecated, use preg_replace_callback instead in C:\xampp\htdocs\development\sfprojects\ecsite\lib\vendor\symfony\lib\util\sfToolkit.class.php on line 362

Deprecated: preg_replace(): The /e modifier is deprecated, use preg_replace_callback instead in C:\xampp\htdocs\development\sfprojects\ecsite\lib\vendor\symfony\lib\util\sfToolkit.class.php on line 362
Id() ?></a></td>
      <td><?php echo $order_detail->get
Deprecated: preg_replace(): The /e modifier is deprecated, use preg_replace_callback instead in C:\xampp\htdocs\development\sfprojects\ecsite\lib\vendor\symfony\lib\util\sfToolkit.class.php on line 362

Deprecated: preg_replace(): The /e modifier is deprecated, use preg_replace_callback instead in C:\xampp\htdocs\development\sfprojects\ecsite\lib\vendor\symfony\lib\util\sfToolkit.class.php on line 362
ProductName() ?></td>
      <td><?php echo $order_detail->get
Deprecated: preg_replace(): The /e modifier is deprecated, use preg_replace_callback instead in C:\xampp\htdocs\development\sfprojects\ecsite\lib\vendor\symfony\lib\util\sfToolkit.class.php on line 362

Deprecated: preg_replace(): The /e modifier is deprecated, use preg_replace_callback instead in C:\xampp\htdocs\development\sfprojects\ecsite\lib\vendor\symfony\lib\util\sfToolkit.class.php on line 362
TotalAmount() ?></td>
      <td><?php echo $order_detail->get
Deprecated: preg_replace(): The /e modifier is deprecated, use preg_replace_callback instead in C:\xampp\htdocs\development\sfprojects\ecsite\lib\vendor\symfony\lib\util\sfToolkit.class.php on line 362

Deprecated: preg_replace(): The /e modifier is deprecated, use preg_replace_callback instead in C:\xampp\htdocs\development\sfprojects\ecsite\lib\vendor\symfony\lib\util\sfToolkit.class.php on line 362
CustomerName() ?></td>
      <td><?php echo $order_detail->get
Deprecated: preg_replace(): The /e modifier is deprecated, use preg_replace_callback instead in C:\xampp\htdocs\development\sfprojects\ecsite\lib\vendor\symfony\lib\util\sfToolkit.class.php on line 362

Deprecated: preg_replace(): The /e modifier is deprecated, use preg_replace_callback instead in C:\xampp\htdocs\development\sfprojects\ecsite\lib\vendor\symfony\lib\util\sfToolkit.class.php on line 362
DeliveryAddress() ?></td>
      <td><?php echo $order_detail->get
Deprecated: preg_replace(): The /e modifier is deprecated, use preg_replace_callback instead in C:\xampp\htdocs\development\sfprojects\ecsite\lib\vendor\symfony\lib\util\sfToolkit.class.php on line 362

Deprecated: preg_replace(): The /e modifier is deprecated, use preg_replace_callback instead in C:\xampp\htdocs\development\sfprojects\ecsite\lib\vendor\symfony\lib\util\sfToolkit.class.php on line 362
CreatedAt() ?></td>
      <td><?php echo $order_detail->get
Deprecated: preg_replace(): The /e modifier is deprecated, use preg_replace_callback instead in C:\xampp\htdocs\development\sfprojects\ecsite\lib\vendor\symfony\lib\util\sfToolkit.class.php on line 362

Deprecated: preg_replace(): The /e modifier is deprecated, use preg_replace_callback instead in C:\xampp\htdocs\development\sfprojects\ecsite\lib\vendor\symfony\lib\util\sfToolkit.class.php on line 362
UpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('orderDetail/new') ?>">New</a>
