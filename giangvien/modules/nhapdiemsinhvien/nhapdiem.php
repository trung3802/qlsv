<form method="POST" action="">
    <p class="tieudethemgv">NHẬP mã lớp học phần</p>
    <input type="text" autocomplete="off" value="" name="malophocphan">
    <input type="submit" value="OK" name="gui">
</form>
<?php
$lophocphan = isset($_POST['lophocphan']) ? $_POST['lophocphan'] : '';
$malophocphan = isset($_POST['malophocphan']) ? $_POST['malophocphan'] : '';

if (!empty($malophocphan)) {
    $sql_query = "SELECT lhp.tenlophocphan, kq.*,sv.*
                  FROM lophocphan lhp
                  JOIN ketqua kq ON lhp.masinhvien = kq.masinhvien
                  JOIN sinhvien sv ON lhp.masinhvien = sv.masinhvien
                  WHERE lhp.malophocphan = '$malophocphan'";

    $query_result = mysqli_query($mysqli, $sql_query);

    if ($query_result) {
        echo "<p class='tieudethemgv'>Danh Sách Sinh Viên: $lophocphan</p>";
        echo '<table width="50%" border="1" style="border-collapse: collapse;">';
        echo '<tr>
                <td>STT</td>
                <td>Mã Sinh Viên</td>
                <td>Tên Sinh Viên</td>
                <td>Tên Lớp Học Phần</td>
                <td>Điểm</td>
            </tr>';

        $i = 0;
        while ($row = mysqli_fetch_array($query_result)) {
            $i++;
            echo "<tr>
                    <td>$i</td>
                    <td>{$row['masinhvien']}</td>
                    <td>{$row['tensinhvien']}</td>
                    <td>{$row['tenlophocphan']}</td>
                    <td>{$row['diem']}</td>
                </tr>";
        }

        echo '</table>';
    } else {
        echo "Query error: " . mysqli_error($mysqli);
    }
}
?>
<?php
    // Assuming you have a database connection established

    $sql_lietke_sinhvien = "SELECT * FROM ketqua";
    $query_lietke_sinhvien = mysqli_query($mysqli, $sql_lietke_sinhvien);
?>

<p>Liệt kê điểm</p>
<table width="50%" border="1" style="border-collapse: collapse;">
    <tr>
    <td>STT</td>
        <td>Mã Kết quả</td>
        <td>Mã Sinh Viên</td>
        <td>Mã Lớp Học Phần</td>
        <td>Điểm</td>
        <!-- Add more columns based on your database schema -->
    </tr>

    <?php
    $i = 0;
    while ($row = mysqli_fetch_array($query_lietke_sinhvien)) {
        $i++;
    ?>
        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $row['maketqua'] ?></td>
            <td><?php echo $row['masinhvien'] ?></td>
            <td><?php echo $row['malophocphan'] ?></td>
            <td><?php echo $row['diem'] ?></td>
            <!-- Add more cells based on your database schema -->
        </tr>
    <?php
    };
    ?>
</table>
