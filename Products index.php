<?php require('./includes/Header.php')?>

<link rel="stylesheet" href="style/Product.css" />
<div style="position: relative;">
<img src="images/6876899.jpg" style="border-radius: 0px 0px 10px 10px;object-fit: cover;" height='1200hv' width='100%' max-width='100%' max-height='100%' />
		   <div class="Content" style="text-align:center;position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);">
			<h1 style="border: 0px solid #000;margin-bottom:40px">Danh Sách Sản Phẩm</h1> 
		
<?php
$products = [];	
if (isset($_COOKIE['product1'])) {
    $product1_data = explode(',', $_COOKIE['product1']);
    $products[1] = [
        'name' => $product1_data[0] ?? 'Unknown Product',
        'price' => $product1_data[1] ?? '0'
    ];
}else {
    $products[1] = ['name' => 'Sản phẩm 1', 'price' => '0'];
}
if (isset($_COOKIE['product2'])) {
    $product2_data = explode(',', $_COOKIE['product2']);
    $products[2] = [
        'name' => $product2_data[0] ?? 'Unknown Product',
        'price' => $product2_data[1] ?? '0'
    ];
}else {
    $products[2] = ['name' => 'Sản phẩm 1', 'price' => '0'];
}
if (isset($_COOKIE['product3'])) {
    $product3_data = explode(',', $_COOKIE['product3']);
    $products[3] = [
        'name' => $product3_data[0] ?? 'Unknown Product',
        'price' => $product3_data[1] ?? '0'
    ];
}else {
    $products[3] = ['name' => 'Sản phẩm 1', 'price' => '0'];
}
?>
<div class="box">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên Sản Phẩm</th>
                    <th>Giá</th>
                    <th>Hành Động</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td><?php echo htmlspecialchars($products[1]['name']); ?></td>
                    <td><?php echo htmlspecialchars($products[1]['price']); ?> VND</td>
                    <td>
                        <a href="Products update.php" class="btn btn-edit">Sửa</a>
                        <a class="btn btn-delete">Xóa</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><?php echo htmlspecialchars($products[2]['name']);  ?></td>
                    <td><?php echo htmlspecialchars($products[2]['price']); ?> VND</td>
                    <td>
                        <a href="Products update.php" class="btn btn-edit">Sửa</a>
                        <a href="#" class="btn btn-delete">Xóa</a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><?php echo htmlspecialchars($products[3]['name']);  ?></td>
                    <td><?php echo htmlspecialchars($products[3]['price']); ?> VND</td>
                    <td>
                        <a href="Products update.php" class="btn btn-edit">Sửa</a>
                        <a href="#" class="btn btn-delete">Xóa</a>
                    </td>
                </tr>
            </tbody>
        </table>
        <a href="Products create.php" class="btn btn-add">Thêm Sản Phẩm</a>
	</div>
</div>
</div>
<?php require('./includes/Footer.php')?>
