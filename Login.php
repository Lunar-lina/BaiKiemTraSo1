
 <?php require('./includes/Header.php'); ?>
  <?php 
  
  $pass = isset($_COOKIE['password']);
  $mail = isset($_COOKIE['email']);
$username = isset($_COOKIE['username']);

 
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $error = [];
     $email = htmlspecialchars($_POST["email"]);
     $password = htmlspecialchars($_POST["password"]);

     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $error["email"] = "Email sai cú pháp.";
    } elseif ($email != $mail) {
      $error["email"] = "Email không tồn tại.";
    }

    if (empty($password)) {
      $error["password"] = "Vui lòng nhập Mật Khẩu."; 
    } elseif (strlen($password) <= 6) {
      $error["password"] = "Vui lòng nhập Mật Khẩu dài hơn 6 ký tự.";
    }

    if (empty($error) && $email == $mail && $password == $pass) {
      $error["success"] = "Đăng Nhập Thành Công";
      header('Location:./Dashboard.php');
    }
    
    if ($email == $mail && $password == $pass) {
      header('Location:./Dashboard.php');
    }
  }
  if (empty($username)) {

  } else {
    header('Location:./Dashboard.php');
  }
  ?>

  <head>
    <link rel="stylesheet" href="style/Login&Register.css" />
    <link rel="stylesheet" href="style/FPstyle.css" />
    <title>Login Page</title>
  </head>
  <body>
  
    <div class="wrapper" style="margin-top: 100px;">
      <div id="form-content" class="fade-in second">
        <a href="./login.php">
          <h2 class="active" style="pointer-events: none;cursor: default;">Đăng nhập</h2>
        </a>
        <a href="./register.php">
          <h2 class="inactive underline-hover">Đăng ký</h2>
        </a>
        <form action="" method="POST">
          <a style="padding:5px;border-radius:4px" class="fade-in second">Email</a>
        <input
          type="email"
          id="Email"
          class="fade-in second"
          name="email"
          placeholder="Email"
          value="<?php echo isset($email) ? $email : ''; ?>" ; 
          />
        <span class="error" style="color:#f56642;font-weight:bold;"> <?php echo $error["email"] ?? ""; ?> </span><br>
        <a style="padding:5px;border-radius:4px;" class="fade-in second">Mật Khẩu</a>
          <input
            type="password"
            id="password"
            class="fade-in third"
            name="password"
            placeholder="Mật khẩu"
          />
          <span class="error" style="color:#f56642;font-weight:bold;"> <?php echo $error["password"] ?? ""; ?> </span><br>
          <a class="underline-hover fade-in second" href="./Reset-password.php" style="color:#FFD2A0">Quên mật khẩu?</a>
          <input type="submit" class="fade-in five" value="Đăng Nhập" />
          <span class="error" style="color:#f56642;font-weight:bold;"> <?php echo $error["success"] ?? ""; ?> </span>
        </form>

        <div id="form-footer">
          <a style="color:white;"> Chưa có tài khoản?-</a><a class="underline-hover" href="./Register.php">Đăng Ký ngay</a>
          
        </div>
      </div>
    </div>
  </body>
  <?php require('./includes/Footer.php')?>
