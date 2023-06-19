<?php  
 session_start();  
 if(isset($_SESSION["user"]))  
 {  
    header("location: home.php");  
 }  
 
 ?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Log in</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link rel="stylesheet" href="/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/css/base.css">
    <link rel="stylesheet" href="/assets/css/main.css">
	<link rel="stylesheet" href="/assets/css/login.css">
	</head>
	<body>
          <div class="login__container">
            <div class="login__inner">
                <div class="login__img">
                    <img src="/assets/imgs/about2.jpg" alt="image">
                </div>

                <form class="login__form" method="POST">
                    <h3 class="login__title">
                        Đăng nhập quyền quản trị
                    </h3>
                    <input class="login__input login__username" type="text" name="username" id="username" placeholder="Username" required>
                    <input class="login__input login__password" type="password" name="password" id="password" placeholder="Password" required>

                    <input class="login__input login__submit-btn" type="submit" value="Đăng nhập">
                </form>
            </div>
          </div>
	</body>
</html>


<?php
   include('connect.php');
  
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      $username = mysqli_real_escape_string($con,$_POST['username']);
      $password = mysqli_real_escape_string($con,$_POST['password']); 
      
      $query = "SELECT id FROM taikhoan WHERE taiKhoan='$username' AND matKhau='$password'";
      $result = mysqli_query($con,$query);
      
      $count = mysqli_num_rows($result);
		
      if($count == 1) {
         $_SESSION['user'] = $username;
         header("location: home.php");
      }else {
         echo '<script>alert("Tên tài khoản hoặc mật khẩu không chính xác!")</script>' ;
      }
   }
?>
