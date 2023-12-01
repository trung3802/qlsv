<?php
    $sql_sua_covanhoctap = "SELECT macvht, tencvht, sdtcvht, emailcvht FROM cvht WHERE macvht='$_GET[macvht]' LIMIT 1";
    $query_sua_covanhoctap = mysqli_query($mysqli, $sql_sua_covanhoctap);
?>
<p>Sửa thông tin cố vấn<p>
<table width="50%" border="1" style="border-collapse:collapse;">
<form method="POST" action="modules/quanlycovanhoctap/xuly.php?idcvht=<?php echo $_GET['macvht']?>">
    <?php
    while($dong=mysqli_fetch_array($query_sua_covanhoctap)){
    ?>
    <tr>
        <td>Mã cố vấn học tập</td>
        <td><input type="text" value="<?php echo $dong['macvht'] ?>" name="macvht"></td>
    </tr>
    <tr>
        <td>Tên cố vấn học tập</td>
        <td><input type="text" value="<?php echo $dong['tencvht'] ?>" name="tencvht"></td>
    </tr>
    <tr>
        <td> SĐT vấn học tập</td>
        <td><input type="text" value="<?php echo $dong['sdtcvht'] ?>" name="sdtcvht"></td>
    </tr>
    <tr>
        <td>Email cố vấn học tập</td>
        <td><input type="text" value="<?php echo $dong['emailcvht'] ?>" name="emailcvht"></td>
    </tr>
    <tr>
        <td colspan="2"><input type="submit" name="sua" value="Sửa Thông Tin"></td>
    </tr>
    <?php
    }
    ?>
</form>
</table>