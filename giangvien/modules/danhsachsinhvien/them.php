<p class="tieudethemcvht">Thêm sinh viên</p>
<table width="50%" border="1" style="border-collapse: collapse;">
    <form method="POST" action="giangvien/modules/danhsachsinhvien/xuly.php">
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
            <td><input type="text" name="malop"></td>
        </tr>
        <tr>
            <td>Mã Cố Vấn Học Tập</td>
            <td><input type="text" name="macvht"></td>
        </tr>
        <tr>
            <td>Mã Phụ Huynh</td>
            <td><input type="text" name="maphuhuynh"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="themsv" value="Thêm"></td>
        </tr>
    </form>
</table>
