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
      <td><?php echo $product->getImage() ?></td>
    </tr>
  </tbody>
</table>
<form action="<?php echo url_for('cart/create') ?>" method="post">
    <input type="hidden" name="userId" value="<?php echo $userId ?>" />
    <input type="hidden" name="productId" value="<?php echo $product->getId() ?>" />
    <input type="submit" value="商品かごに追加" />
</form>
<!-- <form id="add-to-cart-form" action="<?php echo url_for('cart/create') ?>" method="post">
    <input type="hidden" name="user_id" value="<?php echo $userId ?>" />
    <input type="hidden" name="product_id" value="<?php echo $product->getId() ?>" />
    <input type="submit" value="商品かごに追加" />
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('#add-to-cart-form').on('submit', function(e) {
            e.preventDefault(); // デフォルトの送信を防ぐ

            $.ajax({
                url: $(this).attr('action'),
                type: 'POST',
                data: $(this).serialize(), // フォームデータをシリアライズ
                success: function(response) {
                    // 成功時の処理
                    alert('商品がカートに追加されました！');
                },
                error: function(xhr, status, error) {
                    // エラー時の処理
                    alert('エラーが発生しました。');
                }
            });
        });
    });
</script> -->

<hr />

