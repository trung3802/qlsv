<?php
    $sql_lietke_lophocphan = "SELECT giangvien.*, lophocphan.*
    FROM giangvien
    INNER JOIN lophocphan ON giangvien.magiangvien = lophocphan.magiangvien; ";
    $query_lietke_lophocphan = mysqli_query($mysqli,$sql_lietke_lophocphan);
?>
<p class ="tieudethemcvht">DANH SÁCH LỚP HỌC PHẦN THUỘC KHOA CNTT</p>
<table width="50%" border="1" style="border-collapse: collapse;">
<form method="POST" action="">
    <tr>
        <td>STT</td>
        <td>Mã Lớp </td>
        <td>Tên Lớp</td>
        <td>Giảng Viên</td>
    </tr>
    <?php
    $i=0;
    while($row=mysqli_fetch_array($query_lietke_lophocphan)){
        $i++;
    ?>
    <tr> 
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['malophocphan'] ?></td>
        <td><?php echo $row['tenlophocphan'] ?></td>
        <td><?php echo $row['tengiangvien'] ?></td>
    </tr>
    <tr>
    <tr>
    <?php
    };
    ?>
</form>
</table>
<a href="?action=lophocphan&query=themlophocphanmoi">Thêm lớp Học Phần Mới </a>