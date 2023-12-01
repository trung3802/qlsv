<?php
    $sql_lietke_covanhoctap = "SELECT * from cvht ";
    $query_lietke_covanhoctap =mysqli_query($mysqli,$sql_lietke_covanhoctap);
?>
<p>Liệt kê cố vấn học tập</p>
<table width="50%" border="1" style="border-collapse: collapse;">
<form method="POST" action="modules/quanlycovanhoctap/xuly.php">
    <tr>
        <td>STT</td>
        <td>Mã Cố Vấn Học Tập</td>
        <td>Tên Cố Vấn Học Tập</td>
        <td>SĐT Cố Vấn Học Tập</td>
        <td>Email Cố Vấn Học Tập</td>
    </tr>
    <?php
    $i=0;
    while($row=mysqli_fetch_array($query_lietke_covanhoctap)){
        $i++;
    ?>
    <tr> 
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['macvht'] ?></td>
        <td><?php echo $row['tencvht'] ?></td>
        <td><?php echo $row['sdtcvht'] ?></td>
        <td><?php echo $row['emailcvht'] ?></td>
        <td>
            <a href="modules/quanlycovanhoctap/xuly.php?macvht=<?php echo $row['macvht']?>">Xóa</a> | <a href="?action=quanlycovanhoctap&query=sua&macvht=<?php echo $row['macvht'] ?>">Sửa </a>
        </td>
    </tr>
    
    <?php
    };
    ?>
</form>
</table>
