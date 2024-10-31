<h1>商品注文</h1>

<table>
  <thead>
    <tr>
      <th>商品名</th>
      <th>価格</th>
    </tr>
  </thead>
  <tbody>
        <?php foreach ($products as $product): ?>
            <tr>
              <td><?php echo $product['name'] ?></td>
              <td><?php echo $product['price'] ?></td>
            </tr>
        <?php endforeach; ?>
        <tr>
          <td>
           合計金額：
           <?php echo $totalAmount ?>
          <td>
        </tr>
  </tbody>
  <tfoot>
   <tr>
     <td>
       <form action="<?php echo url_for('orderDetail/create') ?>" method="post">
         <input type="hidden" name="productNames" value='<?php echo htmlspecialchars($productNames, ENT_QUOTES, 'UTF-8') ?>' />
         <input type="hidden" name="totalAmount" value='<?php echo $totalAmount ?>' />
         <input type="hidden" name="customerName" value='<?php echo $customerName ?>' />
         <input type="hidden" name="userId" value='<?php echo $userId ?>' />
         <div>
           お届け先住所
         </div>
         <input name="deliveryAddress" />
         <input type="submit" value="注文確定" />
       </form>
      </td>
   </tr>
  </tfoot>
</table>
