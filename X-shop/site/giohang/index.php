<?php
    require '../../global.php';
    require '../../dao/pdo.php';
    require '../../dao/giohang.php';

    if(exist_param('delcart')){
        if(isset($_GET['MaSP'])){
            unset($_SESSION['mycart'][$_GET['MaSP']]);
        }
        header('location: index.php');
    }elseif (exist_param('addtocart')) {
        if(isset($_POST['addtocart'])&&($_POST['addtocart'])){
            update_cart(true);
            header('Location: index.php');
        }
    }elseif (exist_param('delall')) {
        if(isset($_GET['del'])&&($_GET['del']==1)){
            unset($_SESSION['mycart']);
            header('location: index.php');
        }
    }elseif (exist_param('sub')) {
        if(isset($_POST['update_click'])){
            update_cart();
    }
        header('location: index.php');
    }
    else{
        $VIEW_NAME='giohang.php';
    }
        
   
    
    require '../layout.php';
?>