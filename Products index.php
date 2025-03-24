<?php require('./includes/Header.php')?>
<link rel="stylesheet" href="Product.css" />
<img src="" style="margin-top:-10px;margin-bottom:-130px;border-radius: 0px 0px 10px 10px;object-fit: cover;" height='900px' width='100%' max-width='100%' max-height='100%' />
		   <div class="content" style="text-align: center;margin-top:-400px;">
			<h2 style="border: 0px solid #000">Danh Sách Sản Phẩm</h2> 
		</div>
<?php	
		for ($i = 1; $i <= 10; $i++) {
    $cookie_name = 'product' . $i;
    $product[$i] = isset($_COOKIE[$cookie_name]);
}

for ($y = 1; $y <= 10; $y++) {
    $cookie_name2 = 'price' . $i;
    $price[$y] = isset($_COOKIE[$cookie_name2]);
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
                    <td><?php ; echo $product[1] ?></td>
                    <td><?php echo $price[1] ?></td>
                    <td>
                        <a href="Product index.php" class="btn btn-edit">Sửa</a>
                        <a class="btn btn-delete">Xóa</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>?</td>
                    <td>500.000 VND</td>
                    <td>
                        <a href="Product index.php" class="btn btn-edit">Sửa</a>
                        <a href="#" class="btn btn-delete">Xóa</a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>?</td>
                    <td>800.000 VND</td>
                    <td>
                        <a href="Product index.php" class="btn btn-edit">Sửa</a>
                        <a href="#" class="btn btn-delete">Xóa</a>
                    </td>
                </tr>
            </tbody>
        </table>
        <a href="Products create.php" class="btn btn-add">Thêm Sản Phẩm</a>
	</div>
<?php require('./includes/Footer.php')?>
