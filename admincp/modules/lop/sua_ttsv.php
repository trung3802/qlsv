<?php
    $sql_sua_thongtinsinhvien = "SELECT masinhvien, tensinhvien, sdtsinhvien, emailsinhvien, gioitinh, ngaysinh, malop, macvht, maphuhuynh FROM sinhvien WHERE masinhvien='$_GET[masinhvien]' LIMIT 1";
    $query_sua_thongtinsinhvien = mysqli_query($mysqli, $sql_sua_thongtinsinhvien);
?>
<p class = "tieudethemcvht">Sửa thông tin sinh viên<p>
<table width="50%" border="1" style="border-collapse:collapse;">
<form method="POST" action="modules/lop/xuly.php?masinhvien=<?php echo $_GET['masinhvien']?>">
    <?php
    while($dong=mysqli_fetch_array($query_sua_thongtinsinhvien)){
    ?>
    <tr>
        <td>Mã sinh viên</td>
        <td><input type="text" value="<?php echo $dong['masinhvien'] ?>" name="masinhvien"></td>
    </tr>
    <tr>
        <td>Tên sinh viên</td>
        <td><input type="text" value="<?php echo $dong['tensinhvien'] ?>" name="tensinhvien"></td>
    </tr>
    <tr>
        <td> SĐT </td>
        <td><input type="text" value="<?php echo $dong['sdtsinhvien'] ?>" name="sdtsinhvien"></td>
    </tr>
    <tr>
        <td>Email </td>
        <td><input type="text" value="<?php echo $dong['emailsinhvien'] ?>" name="emailsinhvien"></td>
    </tr>
    <tr>
        <td>Giới Tính</td>
        <td><input type="text" value="<?php echo $dong['gioitinh'] ?>" name="gioitinh"></td>
    </tr>
    <tr>
        <td>Ngày Sinh</td>
        <td><input type="text" value="<?php echo $dong['ngaysinh'] ?>" name="ngaysinh"></td>
    </tr>
    <tr>
        <td> Mã Lớp</td>
        <td><input type="text" value="<?php echo $dong['malop'] ?>" name="malop"></td>
    </tr>
    <tr>
        <td>Mã Cố Vấn</td>
        <td><input type="text" value="<?php echo $dong['macvht'] ?>" name="macvht"></td>
    </tr>
    <tr>
        <td>Mã Phụ Huynh</td>
        <td><input type="text" value="<?php echo $dong['maphuhuynh'] ?>" name="maphuhuynh"></td>
    </tr>
    <tr>
        <td colspan="2"><input type="submit" name="suattsv" value="Sửa Thông Tin"></td>
    </tr>
    <?php
    }
    ?>
</form>
</table>