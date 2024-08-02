<?php
    require '../../global.php';
    require '../../dao/sanpham.php';
    require '../../dao/binhluan.php';
    require '../../dao/nguoidung.php';

    extract($_REQUEST);
    
    $MaSP = $_GET['MaSP'];

    $sanpham = sanpham_select_by_id($MaSP);
    
    sanpham_tang_LuotXem($MaSP);
    

    if(exist_param('btn_noidung')){
        $NoiDung = $_POST['NoiDung'];
        $ND_ID = $_SESSION['nguoidung']['MaND'];
        binhluan_insert($ND_ID, $MaSP, $NoiDung);
    }
    $binhluan_list = binhluan_select_by_sanpham($MaSP);
    $VIEW_NAME = 'sanpham/chitiet.php';

    require '../layout.php';
?>

?>