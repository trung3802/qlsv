
<form method ="POST" action ="">
<p class ="tieudethemcvht">HÃY NHẬP MÃ LỚP CỦA BẠN</p>
<input type="text" autocomplete = "off" value ="" name ="malop">
<p class ="tieudethemcvht">NHẬP MÃ MÔN HỌC</p>
<input type="text" autocomplete = "off" value ="" name ="malophocphan">
<input type="submit" value ="OK" name ="gui">
</form>
<?php
$malop = isset($_POST['malop']) ? $_POST['malop'] : '';
$malophocphan = isset($_POST['malophocphan']) ? $_POST['malophocphan'] : '';
?>
<?php
   $sql_lietke_danhsachsinhvien = "SELECT sv.masinhvien, sv.tensinhvien, lhp.tenlophocphan, kq.diem
   FROM sinhvien sv
   JOIN ketqua kq ON sv.masinhvien = kq.masinhvien
   JOIN lophocphan lhp ON kq.malophocphan = lhp.malophocphan
   WHERE sv.malop = '$malop' AND kq.malophocphan = '$malophocphan'";
$query_lietke_danhsachsinhvien = mysqli_query($mysqli, $sql_lietke_danhsachsinhvien);
?>
<p class ="tieudethemcvht">Danh Sách Điểm Lớp: <?php echo $malop   ?></p>
<table width="50%" border="1" style="border-collapse: collapse;">
    <form method="" action="">
        <tr>
            <td>STT</td>
            <td>Mã Sinh Viên</td>
            <td>Tên Sinh Viên</td>
            <td>Tên Lớp Học Phần</td>
            <td>Điểm</td>
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
                <td><?php echo $row['tenlophocphan'] ?></td>
                <td><?php echo $row['diem'] ?></td>
        <?php
        };
        ?>
    </form>
</table>