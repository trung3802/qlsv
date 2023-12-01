<?php 
    if(isset($_GET['dangxuat'])&& $_GET['dangxuat'] ==1){
            unset($_SESSION['dangnhap']);
            header("Location: ../index.php");
          }
?>
<div class="menu">
    <ul class = "ulmenu">
                    <li><a href="index.php"><b>Trang chủ</b></a></li>
                    <li><a href="index.php?action=xemthongtin"><b>Xem Thông Tin Sinh Viên</b></a></li>
                    <li><a href="index.php"><b>Xem Điểm</b></a></li>
                    <li><a href="index.php?dangxuat=1"> <b>Đăng xuất : <?php if(isset($_SESSION['dangnhap'])) {
                        echo $_SESSION['dangnhap'];
                    }?></b></a></li>
        </ul>
</div>