<?php
include('../../config/config.php');

$masv = $_POST['masinhvien'];
$tensv = $_POST['tensinhvien'];
$sdt = $_POST['sdtsinhvien'];
$email = $_POST['emailsinhvien'];
$gioitinh = $_POST['gioitinh'];
$ngaysinh = $_POST['ngaysinh'];
$malop = $_POST['malop'];
$macvht = $_POST['macvht'];
$maphuhuynh = $_POST['maphuhuynh'];

if (isset($_POST['themsv'])) {
    // Thêm sinh viên
    $sql_them = "INSERT INTO sinhvien(masinhvien, tensinhvien, sdtsinhvien, emailsinhvien, gioitinh, ngaysinh, malop, macvht, maphuhuynh) 
                VALUES('$masv', '$tensv', '$sdt', '$email', '$gioitinh', '$ngaysinh', '$malop', '$macvht', '$maphuhuynh')";
    if (mysqli_query($mysqli, $sql_them)) {
        echo 'Thêm sinh viên thành công';
        header('Location:../../index.php?action=danhsachsinhvien&query=them');
    } else {
        echo 'Lỗi khi thêm sinh viên: ' . mysqli_error($mysqli);
    }
} elseif (isset($_POST['suasinhvien'])) {
    // Sửa sinh viên
    $sql_sua = "UPDATE sinhvien SET masinhvien='$masv', tensinhvien='$tensv', sdtsinhvien='$sdt', emailsinhvien='$email', 
                gioitinh='$gioitinh', ngaysinh='$ngaysinh', malop='$malop', macvht='$macvht', maphuhuynh='$maphuhuynh' 
                WHERE masinhvien='$_GET[masinhvien]'";
    if (mysqli_query($mysqli, $sql_sua)) {
        echo 'Sửa sinh viên thành công';
    } else {
        echo 'Lỗi khi sửa sinh viên: ' . mysqli_error($mysqli);
    }
} else {
    // Xóa sinh viên
    $id = $_GET['masinhvien'];
    $sql_xoa = "DELETE FROM sinhvien WHERE masinhvien='$id'";
    if (mysqli_query($mysqli, $sql_xoa)) {
        echo 'Xóa sinh viên thành công';
    } else {
        echo 'Lỗi khi xóa sinh viên: ' . mysqli_error($mysqli);
    }
}

?>

