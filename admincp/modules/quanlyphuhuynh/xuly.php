<?php
include('../../config/config.php');

$maph=$_POST['maphuhuynh'];
$tenph=$_POST['tenphuhuynh'];
$sdtph=$_POST['sdtphuhuynh'];
$emailph=$_POST['emailphuhuynh'];
if(isset($_POST['themphuhuynh'])){
    //Thêm
    $sql_them=("INSERT into phuhuynh(maphuhuynh,tenphuhuynh,sdtphuhuynh,emailphuhuynh) value('".$maph."','".$tenph."','".$sdtph."','".$emailph."')");
    mysqli_query($mysqli,$sql_them);
    header('Location:../../index.php?action=quanlyphuhuynh&query=them');
}elseif(isset($_POST['sua'])){
    $sql_sua="UPDATE phuhuynh set maphuhuynh='".$maph."',tenphuhuynh='".$tenph."',sdtphuhuynh='".$sdtph."',emailphuhuynh='".$emailph."' where maphuhuynh='$_GET[maphuhuynh]'";
    mysqli_query($mysqli,$sql_sua);
    header('Location:../../index.php?action=quanlyphuhuynh&query=them');
}else{
    //Xóa
    $id=$_GET['maphuhuynh'];
    $sql_xoa="DELETE from phuhuynh where maphuhuynh='".$id."'";
    mysqli_query($mysqli,$sql_xoa);
    header('Location:../../index.php?action=quanlyphuhuynh&query=xoa');
}
?>