<?php
    $sql_lietke_lop = "SELECT * from lop ";
    $query_lietke_lop = mysqli_query($mysqli,$sql_lietke_lop);
?>
<p class="tieudethemcvht">DANH SÁCH LỚP KHOA CNTT</p>
<table width="50%" border="1" style="border-collapse: collapse;">
<form method="POST" action="">
    <tr>
        <td>STT</td>
        <td>Tên Lớp: </td>
        <td>Mã Lớp</td>
        <td>Năm Nhập Học</td>
    </tr>
    <?php
    $i=0;
    while($row=mysqli_fetch_array($query_lietke_lop)){
        $i++;
    ?>
    <tr> 
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['tenlop'] ?></td>
        <td><?php echo $row['malop'] ?></td>
        <td><?php echo $row['nambatdau'] ?></td>
        <td>
        <a href="?action=lop&query=xem&malop=<?php echo $row['malop'] ?>">Xem Danh Sách </a>|<a href="?action=lop&query=themsinhvien&malop=<?php echo $row['malop']?>">Thêm Sinh Viên </a>
        </td>
    </tr>
    <tr>
    <?php
    };
    ?>
    <tr>
    <td>
    <a href="?action=lop&query=themlopmoi">Thêm lớp mới </a>
    </td>
    </tr>
</form>
</table>
