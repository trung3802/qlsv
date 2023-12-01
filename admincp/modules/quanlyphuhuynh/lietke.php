<?php
    $sql_lietke_phuhuynh = "SELECT * from phuhuynh ";
    $query_lietke_phuhuynh =mysqli_query($mysqli,$sql_lietke_phuhuynh);
?>
<p>Liệt kê phụ huynh</p>
<table width="50%" border="1" style="border-collapse: collapse;">
<form method="POST" action="modules/quanlyphuhuynh/xuly.php">
    <tr>
        <td>STT</td>
        <td>Mã Phụ Huynh</td>
        <td>Tên Phụ Huynh</td>
        <td>SĐT Phụ Huynh</td>
        <td>Email Phụ Huynh</td>
    </tr>
    <?php
    $i=0;
    while($row=mysqli_fetch_array($query_lietke_phuhuynh)){
        $i++;
    ?>
    <tr> 
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['maphuhuynh'] ?></td>
        <td><?php echo $row['tenphuhuynh'] ?></td>
        <td><?php echo $row['sdtphuhuynh'] ?></td>
        <td><?php echo $row['emailphuhuynh'] ?></td>
        <td>
            <a href="modules/quanlyphuhuynh/xuly.php?maphuhuynh=<?php echo $row['maphuhuynh']?>">Xóa</a> | <a href="?action=quanlyphuhuynh&query=sua&maphuhuynh=<?php echo $row['maphuhuynh'] ?>">Sửa </a>
        </td>
    </tr>
    
    <?php
    };
    ?>
</form>
</table>
