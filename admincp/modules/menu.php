<?php 
    if(isset($_GET['dangxuat'])&& $_GET['dangxuat'] ==1){
            unset($_SESSION['dangnhap']);
            header("Location: ../index.php");
          }
?>
<div class="menu">
    <ul class = "ulmenu">
                    <li><a href="index.php"><b>Trang chủ</b></a></li>
                    <li><a href="index.php?action=quanlycovanhoctap&query=them"><b>Quản lý cố vấn học tập</b></a></li>
                    <li><a href="index.php?action=quanlyphuhuynh&query=them"><b>Quản lý phụ huynh</b></a></li>
                    <li><a href="index.php?action=lophocphan"><b>Quản Lý Lớp học phần</a></b></li>
                    <li><a href="index.php?action=lop"><b>Quản Lý Lớp</a></b></li>
                    <li><a href="index.php?action=quanlydiem"><b>Quản Lý Điểm</a></b></li>
                    <li><a href="index.php?dangxuat=1"> <b>Đăng xuất : <?php if(isset($_SESSION['dangnhap'])) {
                        echo $_SESSION['dangnhap'];
                    }?></b></a></li>
        </ul>
</div>