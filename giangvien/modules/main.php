<div>
    <?php
    // Kiểm tra xem 'action' có được đặt không trong URL
    if(isset($_GET['action'])){
        $tam = $_GET['action'];

        // Kiểm tra xem 'query' có được đặt không trong URL
        if(isset($_GET['query'])){
            $query = $_GET['query'];
        } else {
            $query = '';
        }
    } else {
        $tam = '';
        $query = '';
    }

    if ($tam == 'danhsachsinhvien') {
        include ("modules/danhsachsinhvien/danhsach.php");
      }  elseif($tam =='nhapdiemsinhvien'){
            include("modules/nhapdiemsinhvien/nhapdiem.php");
    } 


    elseif($tam == 'danhsachsinhvien' && $query == 'them') {
        include ("giangvien/modules/danhsachsinhvien/danhsach.php");
    } elseif ($tam == 'danhsachsinhvien' && $query == 'xoa') {
        include ("giangvien/modules/danhsachsinhvien/danhsach.php");
    } elseif(($tam == 'danhsachsinhvien' && $query == 'sua')){
        include ("giangvien/modules/danhsachsinhvien/danhsach.php");
    }  



    else{
        include("modules/dashboard.php");
}
    ?>
</div>