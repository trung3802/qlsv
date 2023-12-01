<form method="POST" action="">
    <p class="tieudethemgv">NHẬP MÃ Lớp Học Phần</p>
    <input type="text" autocomplete="off" value="" name="malophocphan">
    <input type="submit" value="OK" name="gui">
</form>
<?php
$lophocphan = isset($_POST['lophocphan']) ? $_POST['lophocphan'] : '';
$malophocphan = isset($_POST['malophocphan']) ? $_POST['malophocphan'] : '';

if (!empty($malophocphan)) {
    $sql_query = "SELECT lhp.tenlophocphan, sv.*
                  FROM lophocphan lhp
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
                <td>Email</td>
            </tr>';

        $i = 0;
        while ($row = mysqli_fetch_array($query_result)) {
            $i++;
            echo "<tr>
                    <td>$i</td>
                    <td>{$row['masinhvien']}</td>
                    <td>{$row['tensinhvien']}</td>
                    <td>{$row['tenlophocphan']}</td>
                    <td>{$row['emailsinhvien']}</td>
                </tr>";
        }

        echo '</table>';
    } else {
        echo "Query error: " . mysqli_error($mysqli);
    }
}
?>

<p class="tieudethemcvht">Thêm sinh viên</p>
<table width="50%" border="1" style="border-collapse: collapse;">
    <form method="POST" action="modules/danhsachsinhvien/xuly.php">
        <tr>
            <td>Mã Sinh Viên</td>
            <td><input type="text" name="masinhvien"></td>
        </tr>
        <tr>    
            <td>Tên Sinh Viên</td>
            <td><input type="text" name="tensinhvien"></td>
        </tr>
        <tr>
            <td>SĐT Sinh Viên</td>
            <td><input type="text" name="sdtsinhvien"></td>
        </tr>
        <tr>
            <td>Email Sinh Viên</td>
            <td><input type="text" name="emailsinhvien"></td>
        </tr>
        <tr>
            <td>Giới Tính</td>
            <td>
                <select name="gioitinh">
                    <option value="Nam">Nam</option>
                    <option value="Nữ">Nữ</option>
                    <option value="Khác">Khác</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Ngày Sinh</td>
            <td><input type="date" name="ngaysinh"></td>
        </tr>
        <tr>
            <td>Mã Lớp</td>
            <td>
                <select name="malop">
                    <?php
                        // Assuming you have a database connection established

                        // Thực hiện truy vấn để lấy danh sách Mã Lớp từ bảng Lớp
                        $sql_lay_malop = "SELECT malop FROM lop";
                        $query_lay_malop = mysqli_query($mysqli, $sql_lay_malop);

                        while ($row_malop = mysqli_fetch_array($query_lay_malop)) {
                            echo '<option value="' . $row_malop['malop'] . '">' . $row_malop['malop'] . '</option>';
                        }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Mã Cố Vấn Học Tập</td>
            <td>
                <select name="macvht">
                    <?php
                        // Thực hiện truy vấn để lấy danh sách Mã Cố Vấn Học Tập từ bảng Cố Vấn Học Tập
                        $sql_lay_macvht = "SELECT macvht FROM cvht";
                        $query_lay_macvht = mysqli_query($mysqli, $sql_lay_macvht);

                        while ($row_macvht = mysqli_fetch_array($query_lay_macvht)) {
                            echo '<option value="' . $row_macvht['macvht'] . '">' . $row_macvht['macvht'] . '</option>';
                        }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Mã Phụ Huynh</td>
            <td>
                <select name="maphuhuynh">
                    <?php
                        // Thực hiện truy vấn để lấy danh sách Mã Phụ Huynh từ bảng Phụ Huynh
                        $sql_lay_maphuhuynh = "SELECT maphuhuynh FROM phuhuynh";
                        $query_lay_maphuhuynh = mysqli_query($mysqli, $sql_lay_maphuhuynh);

                        while ($row_maphuhuynh = mysqli_fetch_array($query_lay_maphuhuynh)) {
                            echo '<option value="' . $row_maphuhuynh['maphuhuynh'] . '">' . $row_maphuhuynh['maphuhuynh'] . '</option>';
                        }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="themsv" value="Thêm"></td>
        </tr>
    </form>
</table>


<?php
    // Assuming you have a database connection established

    $sql_lietke_sinhvien = "SELECT * FROM sinhvien";
    $query_lietke_sinhvien = mysqli_query($mysqli, $sql_lietke_sinhvien);
?>

<p>Liệt kê sinh viên</p>
<table width="50%" border="1" style="border-collapse: collapse;">
    <tr>
        <td>STT</td>
        <td>Mã Sinh Viên</td>
        <td>Tên Sinh Viên</td>
        <td>SĐT Sinh Viên</td>
        <td>Email Sinh Viên</td>
        <td>Giới Tính</td>
        <td>Ngày Sinh</td>
        <td>Mã Lớp</td>
        <!-- Add more columns based on your database schema -->
    </tr>

    <?php
    $i = 0;
    while ($row = mysqli_fetch_array($query_lietke_sinhvien)) {
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
            <td><?php echo $row['malop'] ?></td>
            <!-- Add more cells based on your database schema -->
        </tr>
    <?php
    };
    ?>
</table>
