<?php
include('../../config/config.php');

$masinhvien=$_POST['masinhvien'];
$tensinhvien=$_POST['tensinhvien'];
$sdtsinhvien=$_POST['sdtsinhvien'];
$emailsinhvien=$_POST['emailsinhvien'];
$gioitinh=$_POST['gioitinh'];
$ngaysinh=$_POST['ngaysinh'];
$malop=$_POST['malop'];
$macvht=$_POST['macvht'];
$maphuhuynh=$_POST['maphuhuynh'];
$tenlop=$_POST['tenlop'];
$nambatdau=$_POST['nambatdau'];
$id=$_GET['masinhvien'];

if(isset($_POST['themsv'])){
    //Thêm
    $sql_themsv = "INSERT INTO sinhvien (masinhvien, tensinhvien, sdtsinhvien, emailsinhvien, gioitinh, ngaysinh, malop, macvht, maphuhuynh)
               VALUES ('$masinhvien', '$tensinhvien', '$sdtsinhvien', '$emailsinhvien', '$gioitinh', '$ngaysinh', '$malop', '$macvht', '$maphuhuynh')";
    mysqli_query($mysqli,$sql_themsv);
    header("Location: ../../index.php?action=lop");
}
elseif(isset($_POST['suattsv'])){
    $sql_suattsv="UPDATE sinhvien set masinhvien='".$masinhvien."',tensinhvien='".$tensinhvien."',sdtsinhvien='".$sdtsinhvien."',emailsinhvien='".$emailsinhvien."',gioitinh='".$gioitinh."',ngaysinh='".$ngaysinh."',malop='".$malop."',macvht='".$macvht."',maphuhuynh='".$maphuhuynh."' where masinhvien='$_GET[masinhvien]'";
    mysqli_query($mysqli,$sql_suattsv);
    header('Location:../../index.php?action=lop');
}elseif(isset($_POST['themlopmoi'])){
    //Thêm
    $sql_themlopmoi = "INSERT INTO lop(malop, tenlop, nambatdau) VALUES ('$malop','$tenlop','$nambatdau')";
    mysqli_query($mysqli,$sql_themlopmoi);
    header("Location: ../../index.php?action=lop");
}elseif(isset($_POST['xoattsv'])) {
    $_GET=['masinhvien'];
    $sql_xoaketqua = "DELETE FROM ketqua WHERE masinhvien='$masinhvien'";
    mysqli_query($mysqli, $sql_xoaketqua);
    $sql_xoasv = "DELETE FROM sinhvien WHERE masinhvien='$masinhvien';";
    mysqli_query($mysqli, $sql_xoasv);
    header('Location:../../index.php?action=lop&query=xoa');
}

?>