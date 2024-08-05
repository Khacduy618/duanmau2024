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
        $sql= "INSERT INTO chitietdonhang(ID_HD, MaHD, MaSP, SoLuong, DonGia) VALUES $string";
        pdo_execute($sql);
    }
    function get_bill($MaHD) {
        $sql = "SELECT chitietdonhang.*, sanpham.TenSP, sanpham.HinhAnh1
            FROM chitietdonhang
            JOIN sanpham ON chitietdonhang.MaSP = sanpham.MaSP
            WHERE chitietdonhang.MaHD = '".$MaHD."'";
        return pdo_query($sql);
    }
    function get_bill_total($MaHD) {
        $sql = "SELECT * FROM donhang WHERE MaHD=?";
        return pdo_query_one($sql, $MaHD);
    }
?>