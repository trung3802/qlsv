<?php
    $sql_lietke_danhsachsinhvien = "SELECT * FROM sinhvien WHERE malop = '$_GET[malop]'";
    $query_lietke_danhsachsinhvien = mysqli_query($mysqli, $sql_lietke_danhsachsinhvien);
?>
<p class ="tieudethemcvht">Danh Sách Lớp: <?php echo "$_GET[malop]"?></p>
<table width="50%" border="1" style="border-collapse: collapse;">
    <form method="POST" action="modules/lop/xuly.php">
        <tr>
            <td>STT</td>
            <td>Mã Sinh Viên</td>
            <td>Tên Sinh Viên</td>
            <td>SĐT Sinh Viên</td>
            <td>Email Sinh Viên</td>
        </tr>
        <?php
        $i = 0;
        while ($row = mysqli_fetch_array($query_lietke_danhsachsinhvien)) {
            $i++;
        ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $row['masinhvien'] ?></td>
                <td><?php echo $row['tensinhvien'] ?></td>
                <td><?php echo $row['sdtsinhvien'] ?></td>
                <td><?php echo $row['emailsinhvien'] ?></td>
                <td><a href="?action=lop&query=sua&masinhvien=<?php echo $row['masinhvien'] ?>">Sửa</a>|<a href="?action=lop&query=xoattsv&masinhvien=<?php echo $row['masinhvien']?>">Xóa</a>
        </tr>

        <?php
        };
        ?>
    </form>
</table>