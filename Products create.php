
  <?php 
  require('./includes/Header.php');
  function setProductCookie($product) {
    $counter = 1;
    while (isset($_COOKIE["product" . $counter])) {
        $counter++;
    }
    $cookieName = "product" . $counter;
    setcookie($cookieName, $product, time() + (86400 * 30), "/");
    $product = " ";
}

function setPriceCookie($price) {
  $counter1 = 1;
  while (isset($_COOKIE["price" . $counter1])) {
      $counter1++;
  }
  $cookieName2 = "price" . $counter1;
  setcookie($cookieName2, $price, time() + (86400 * 30), "/");
  $product = " ";
}
 
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $error = [];
     $product = htmlspecialchars($_POST["Product"]);
     $price = htmlspecialchars($_POST["price"]);

     if (empty($product)) {
      $error["product"] = "Vui Lòng Nhập Tên Sản Phẩm";
    } else {
    setProductCookie($product);
    $product = " ";
  }

    if (empty($price)) {
      $error["price"] = "Vui lòng nhập Giá."; 
    } elseif ($price < 1000) {
      $error["price"] = "Vui lòng nhập Giá cao hơn 1000";
    } else {
      setPriceCookie($price);
      $price = " ";
    }

    if (empty($error)) {
      $product = " ";
      $error["success"] = "Tạo Thành Công";
    }
    
  }
  ?>

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./Login&Register.css" />
    <link rel="stylesheet" href="./FPstyle.css" />
    <title>Login Page</title>
  </head>
  <body>
  
    <div class="wrapper" style="margin-top: 100px;">
      <div id="form-content" class="fade-in second">
        <a href="./register.php">
          <h2 class="active">Tạo Sản Phẩm</h2>
        </a>
        <form action="" method="POST">
          <a style="padding:5px;border-radius:4px" class="fade-in second">Tên Sản Phẩm</a>
        <input
          type="text"
          id="Product"
          class="fade-in second"
          name="Product"
          placeholder="Tên Sản Phẩm"
          />
        <span class="error" style="color:#f56642;font-weight:bold;"> <?php echo $error["product"] ?? ""; ?> </span><br>
        <a style="padding:5px;border-radius:4px;" class="fade-in second">Giá Tiền</a>
          <input
            type="text"
            id="price"
            class="fade-in third"
            name="price"
            placeholder="Giá Tiền"
          />
          <span class="error" style="color:#f56642;font-weight:bold;"> <?php echo $error["price"] ?? ""; ?> </span><br>
          <input type="submit" class="fade-in five" value="Tạo Sản Phẩm" />
          <span class="error" style="color:#f56642;font-weight:bold;"> <?php echo $error["success"] ?? ""; ?> </span>
        </form>
        <div id="form-footer">
        </div>
      </div>
    </div>
  </body>
  <?php require('./includes/Footer.php')?>
