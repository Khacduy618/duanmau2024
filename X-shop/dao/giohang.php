<?php
    require_once 'pdo.php';
    
    function update_cart($add = false){
        foreach ($_POST['soluong'] as $MaSP => $soluong) {
            if($soluong<=0){
                unset($_SESSION['mycart'][$MaSP]);
            }else{if($add){
                $_SESSION['mycart'][$MaSP]+=$soluong;
            }else{
                $_SESSION['mycart'][$MaSP]=$soluong;
            }
            }
        } 
    }
    function bill_insert_id($MaHD, $MaND, $name, $Email, $SDT, $GhiChu, $DiaChi, $PhuongThucTT, $tong, $TrangThai){
        $sql = "INSERT INTO donhang(MaHD, MaND, NguoiNhan, Email, SDT, GhiChu, DiaChi, PhuongThucTT, TongTien, TrangThai) 
                VALUES (?,?,?,?,?,?,?,?,?,?)";
        return pdo_execute_id($sql, $MaHD, $MaND, $name, $Email, $SDT, $GhiChu, $DiaChi, $PhuongThucTT, $tong, $TrangThai);
    }
    function insert_cart($string){
        $sql= "INSERT INTO chitietdonhang(MaHD, MaSP, SoLuong, DonGia) VALUES $string";
        pdo_execute($sql);
    }
?>