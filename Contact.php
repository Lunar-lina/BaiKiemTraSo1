<?php require('./includes/Header.php')?>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./Login&Register.css" />
    <link rel="stylesheet" href="./FPstyle.css" />
    <title>Login Page</title>
  </head>
  <body>
  
    <div class="wrapper fade-in-down" style="margin-top: 100px;">
      <div id="form-content">
        <a href="./login.php">
          <h2 class="active">Liên Hệ</h2>
        </a>
        <form action="" method="POST">
          <a style="padding:5px;border-radius:4px" class="fade-in second">Họ và Tên</a>
        <input
		 type="email"
          id="Email"
		class="fade-in second"
          placeholder="Họ và Tên"
          />
        <a style="padding:5px;border-radius:4px;" class="fade-in second">Email</a>
          <input
		   type="text"
          id="Email"
		  class="fade-in third"
            placeholder="Email"
          />
		  <a style="padding:5px;border-radius:4px;" class="fade-in second">Chủ Đề</a>
          <input
		   type="text"
          id="Email"
		  class="fade-in third"
            placeholder="Chủ Đề"
          />
		  <a style="padding:5px;border-radius:4px;" class="fade-in second">Nội Dung</a>
		  <textarea
    id="Email"
    class="fade-in third"
    style="overflow:hidden; resize:none;border: 6px solid rgba(246, 246, 246, 0);border-radius: 5px;font-size: 1rem;text-align: left;text-decoration: none;display: inline-block;padding: 2px"
    rows="10"
    cols="42"
    wrap="soft"
></textarea>
          <input type="submit" class="fade-in five" value="Gửi Tin Nhắn" />
        </form>

        <div id="form-footer">
          <a style="color:white;"> Liên Hệ Trực Tiếp:</a>‎ <a class="underline-hover" href="tel:+0947707856">0947707856</a>
          
        </div>
      </div>
    </div>
  </body>
<?php require('./includes/Footer.php')?>
