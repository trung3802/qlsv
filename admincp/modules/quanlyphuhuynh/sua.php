<?php
    $sql_sua_phuhuynh = "SELECT maphuhuynh, tenphuhuynh, sdtphuhuynh, emailphuhuynh FROM phuhuynh WHERE maphuhuynh='$_GET[maphuhuynh]' LIMIT 1";
    $query_sua_phuhuynh = mysqli_query($mysqli, $sql_sua_phuhuynh);
?>
<p>Sửa Phụ Huynh<p>
<table width="50%" border="1" style="border-collapse:collapse;">
<form method="POST" action="modules/quanlyphuhuynh/xuly.php?maphuhuynh=<?php echo $_GET['maphuhuynh']?>">
    <?php
    while($dong=mysqli_fetch_array($query_sua_phuhuynh)){
    ?>
    <tr>
        <td>Mã Phụ Huynh</td>
        <td><input type="text" value="<?php echo $dong['maphuhuynh'] ?>" name="maphuhuynh"></td>
    </tr>
    <tr>
        <td>Tên Phụ Huynh</td>
        <td><input type="text" value="<?php echo $dong['tenphuhuynh'] ?>" name="tenphuhuynh"></td>
    </tr>
    <tr>
        <td> SĐT Phụ Huynh</td>
        <td><input type="text" value="<?php echo $dong['sdtphuhuynh'] ?>" name="sdtphuhuynh"></td>
    </tr>
    <tr>
        <td>Email Phụ Huynh</td>
        <td><input type="text" value="<?php echo $dong['emailphuhuynh'] ?>" name="emailphuhuynh"></td>
    </tr>
    <tr>
        <td colspan="2"><input type="submit" name="sua" value="Sửa Thông Tin"></td>
    </tr>
    <?php
    }
    ?>
</form>
</table>