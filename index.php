<?php
session_start();
include('config/config.php');

if (isset($_POST['dangnhap'])) {
    $taikhoan = $_POST['username'];
    $matkhau = ($_POST['password']);
    $sql = "SELECT * FROM taikhoan WHERE tendangnhap = '$taikhoan' AND matkhau = '$matkhau' LIMIT 1";
    $result = mysqli_query($mysqli, $sql);

    if ($result) {
        $vaitro = mysqli_fetch_assoc($result);

        if ($vaitro) {
            $_SESSION['dangnhap'] = $taikhoan;
            $_SESSION['vaitro'] = $vaitro['vaitro']; // Cột lưu trữ vai trò trong cơ sở dữ liệu

            switch ($_SESSION['vaitro']) {
                case 'ad':
                    header("Location: admincp/index.php");
                    break;
                case 'gv':
                    header("Location: giangvien/index.php");
                    break;
                case 'ph':
                    header("Location: phuhuynh/index.php");
                    break;
                case 'cvht':
                    header("Location: cvht/index.php");
                    break;
            }
            exit();
        } else {
            $error = "Tài khoản hoặc mật khẩu không đúng.";
        }
    } else {
        echo "Query failed: " . mysqli_error($mysqli);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="CSS/stylead.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="css/csslogin.css">
</head>
<body>
<div class="login__main">
<div class="login">
    <div class="login__heading">
      ĐĂNG NHẬP
    </div>
    <form action="" autocomplete="off" method="POST">
    <div class="login__field">
      <i class="fa-solid fa-envelope login-icon"></i>
      <input  name="username" class="login__input" placeholder="Tài khoản">
    </div>
    <div class="login__field">
      <i class="fa-solid fa-lock login__icon"></i>
      <input type="password" name="password" class="login__input" placeholder="Mật khẩu">
    </div>
    <a href="#" class="login__forgot--password">Quên mật khẩu?</a>
    <button class="login__submit" name="dangnhap">Đăng nhập</button>
    </form>
  </div>
  </div>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>  

</body>
</html>

