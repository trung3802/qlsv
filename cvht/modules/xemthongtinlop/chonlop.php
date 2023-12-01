<p class ="tieudethemcvht">HÃY NHẬP MÃ LỚP CỦA BẠN</p>
<form method ="POST" action ="">
<input type="text" autocomplete = "off" value ="" name ="malop">
<input type="submit" value ="OK" name ="gui">
</form>
<?php
$malop = isset($_POST['malop']) ? $_POST['malop'] : '';
?>
<?php
    $sql_lietke_danhsachsinhvien = "SELECT * FROM sinhvien WHERE malop = '$malop'";
    $query_lietke_danhsachsinhvien = mysqli_query($mysqli, $sql_lietke_danhsachsinhvien);
?>
<p class ="tieudethemcvht">Danh Sách Lớp: <?php echo $malop ?></p>
<table width="50%" border="1" style="border-collapse: collapse;">
    <form method="" action="">
        <tr>
            <td>STT</td>
            <td>Mã Sinh Viên</td>
            <td>Tên Sinh Viên</td>
            <td>SĐT Sinh Viên</td>
            <td>Email Sinh Viên</td>
            <td>Giới Tính</td>
            <td>Ngày Sinh</td>
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
                <td><?php echo $row['gioitinh'] ?></td>
                <td><?php echo $row['ngaysinh'] ?></td>
        </tr>

        <?php
        };
        ?>
    </form>
</table>