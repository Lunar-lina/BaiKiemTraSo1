<?php require('./includes/Header.php')?>
<link rel="stylesheet" href="style/Product.css" />
<img src="" style="margin-top:-10px;margin-bottom:-260px;border-radius: 0px 0px 10px 10px;object-fit: cover;" height='900px' width='100%' max-width='100%' max-height='100%' />
		   <div class="Content" style="text-align: center;margin-top:-400px;">
			<h1 style="border: 0px solid #000;margin-bottom:40px">Danh Sách Sản Phẩm</h1> 
		</div>
<?php	
$product1 = isset($_POST["product1"]);
$product2 = isset($_POST["product2"]);
$product3 = isset($_POST["product3"]);
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
                    <td><?php echo $product1[1] ?></td>
                    <td><?php echo $product1[2] ?> VND</td>
                    <td>
                        <a href="Product update.php" class="btn btn-edit">Sửa</a><br>
                        <a class="btn btn-delete">Xóa</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><?php echo $product2[1]  ?></td>
                    <td><?php echo $product2[2] ?> VND</td>
                    <td>
                        <a href="Product update.php" class="btn btn-edit">Sửa</a><br>
                        <a href="#" class="btn btn-delete">Xóa</a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><?php echo $product3[1]  ?></td>
                    <td><?php echo $product3[2] ?> VND</td>
                    <td>
                        <a href="Product update.php" class="btn btn-edit">Sửa</a><br>
                        <a href="#" class="btn btn-delete">Xóa</a>
                    </td>
                </tr>
            </tbody>
        </table>
        <a href="Products create.php" class="btn btn-add">Thêm Sản Phẩm</a>
	</div>
<?php require('./includes/Footer.php')?>
