<?php
include('../../config/config.php');
$malophocphan=$_POST['malophocphan'];
$tenlophocphan=$_POST['tenlophocphan'];
$magiangvien = $_POST['magiangvien'];
$masinhvien=$_POST['masinhvien'];
if(isset($_POST['themlophocphanmoi'])){
    //Thêm
    $sql_themlophocphanmoi = "INSERT INTO lophocphan (malophocphan,tenlophocphan,magiangvien,masinhvien)
               VALUES ('$malophocphan','$tenlophocphan','$magiangvien','$masinhvien' )";
    mysqli_query($mysqli,$sql_themlophocphanmoi);
    header("Location: ../../index.php?action=lophocphan");
}
?>