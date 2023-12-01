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

    if ($tam == 'quanlycovanhoctap' && $query == 'them') {
        include ("modules/quanlycovanhoctap/them.php");
        include ("modules/quanlycovanhoctap/lietke.php");
    } elseif ($tam == 'quanlycovanhoctap' && $query == 'xoa') {
        include ("modules/quanlycovanhoctap/them.php");
        include ("modules/quanlycovanhoctap/lietke.php");
    } elseif(($tam == 'quanlycovanhoctap' && $query == 'sua')){
        include ("modules/quanlycovanhoctap/sua.php");
    }

    elseif($tam == 'quanlyphuhuynh' && $query == 'them') {
        include ("modules/quanlyphuhuynh/them.php");
        include ("modules/quanlyphuhuynh/lietke.php");
    } elseif ($tam == 'quanlyphuhuynh' && $query == 'xoa') {
        include ("modules/quanlyphuhuynh/them.php");
        include ("modules/quanlyphuhuynh/lietke.php");
    } elseif(($tam == 'quanlyphuhuynh' && $query == 'sua')){
        include ("modules/quanlyphuhuynh/sua.php");
    }
    
    
    
    
    elseif(($tam == 'lop' && $query == 'xem')){
        include ("lop/themsv_dslop.php");
        include ("lop/xemdssv.php");
    }elseif(($tam == 'lop' && $query == 'themsinhvien')){
        include ("lop/themsv_dslop.php");
    }elseif($tam == 'lop'&& $query == 'sua'){
        include("modules/lop/sua_ttsv.php");
    }elseif($tam == 'lop'&& $query == 'themlopmoi'){
        include("modules/lop/themlopmoi.php");
    }elseif($tam == 'lop'){
        include("modules/lop/lietke_dslop.php");
    }

    
    elseif($tam == 'lophocphan'&& $query == 'themlophocphanmoi'){
        include("modules/lophocphan/themlophocphan.php");
    }elseif($tam == 'lophocphan'){
        include("modules/lophocphan/dslophocphan.php");
    }


    elseif($tam == 'quanlydiem'){
        include("modules/quanlydiem/danhsach.php");
    }elseif($tam == 'quanlydiem' && $query == 'xem'){
        include("modules/quanlydiem/danhsach.php");
        include("modules/quanlydiem/danhsachdiemlhp.php");
    }else {
        include("modules/dashboard.php");
    }
    ?>
</div>