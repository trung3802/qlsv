<?php 
    if(isset($_GET['dangxuat'])&& $_GET['dangxuat'] ==1){
            unset($_SESSION['dangnhap']);
            header("Location: ../index.php");
          }
?>
<div class="menu">
    <ul class = "ulmenu">
                    <li><a href="index.php"><b>Trang chủ</b></a></li>
                    <li><a href="index.php?action=xemthongtinlop"><b>Xem Thông Tin Lớp</b></a></li>
                    <li><a href="index.php?action=xemdiemlop"><b>Xem Điểm lớp</b></a></li>
                    <li><a href="index.php?dangxuat=1"> <b>Đăng xuất : <?php if(isset($_SESSION['dangnhap'])) {
                        echo $_SESSION['dangnhap'];
                    }?></b></a></li>
        </ul>
</div>