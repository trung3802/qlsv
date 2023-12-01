<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/styleadmincp.css">
</head>
<body>
<div class="">
    <p class="tieudethemcvht">THÊM CỐ VẤN HỌC TẬP</p>
    <table class="bangthemcvht" width="50%" border="1" style="border-collapse: collapse;">
    <form method="POST" action="modules/quanlycovanhoctap/xuly.php">
        <tr>
            <td>Mã Cố Vấn Học Tập</td>
            <td><input type="text" name="macvht"></td>
        </tr>
        <tr>    
            <td>Tên Cố Vấn Học Tập</td>
            <td><input type="text" name="tencvht"></td>
            </tr>
        <tr>
        <tr>    
            <td>SĐT Cố Vấn Học Tập</td>
            <td><input type="text" name="sdtcvht"></td>
            </tr>
        <tr>
        <tr>    
            <td>Email Cố Vấn Học Tập</td>
            <td><input type="text" name="emailcvht"></td>
            </tr>
        <tr>
            <td colspan="2"><input type="submit" name="themcvht" value="Thêm"></td>
        </tr>
    </form>
    </table>
</div>
</body>
</html>