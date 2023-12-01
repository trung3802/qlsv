<?php
include('../../config/config.php');

$macvht=$_POST['macvht'];
$tencvht=$_POST['tencvht'];
$sdtcvht=$_POST['sdtcvht'];
$emailcvht=$_POST['emailcvht'];
if(isset($_POST['themcvht'])){
    //Thêm
    $sql_them=("INSERT into cvht(macvht,tencvht,sdtcvht,emailcvht) value('".$macvht."','".$tencvht."','".$sdtcvht."','".$emailcvht."')");
    mysqli_query($mysqli,$sql_them);
    header('Location:../../index.php?action=quanlycovanhoctap&query=them');
}elseif(isset($_POST['sua'])){
    $sql_sua = "UPDATE cvht SET macvht='$macvht', tencvht='$tencvht', sdtcvht='$sdtcvht', emailcvht='$emailcvht' WHERE macvht='$_GET[macvht]'";
    mysqli_query($mysqli,$sql_sua);
    header('Location:../../index.php?action=quanlycovanhoctap&query=them');
}else{
    //Xóa
    $id=$_GET['macvht'];
    $sql_xoa="DELETE from cvht where macvht='".$id."'";
    mysqli_query($mysqli,$sql_xoa);
    header('Location:../../index.php?action=quanlycovanhoctap&query=xoa');
}
?>