<?php
require_once 'pdo.php';

function nguoidung_insert($MatKhau, $TaiKhoan, $Ho, $Ten, $GioiTinh, $SDT, $Email, $DiaChi, $Hinh, $Quyen_ID, $TrangThai){
    $sql = "INSERT INTO nguoidung(MatKhau, TaiKhoan, Ho, Ten, GioiTinh, SDT, Email, DiaChi, Hinh, Quyen_ID, TrangThai) VALUES (?, ?, ?, ?, ? ,?, ?, ?,?,?,?)";
    pdo_execute($sql, $MatKhau, $TaiKhoan, $Ho,  $Ten, $GioiTinh, $SDT, $Email, $DiaChi, $Hinh,  $Quyen_ID, $TrangThai);
}

function nguoidung_update($MaND, $MatKhau, $TaiKhoan, $Ho, $Ten, $GioiTinh, $SDT, $Email, $DiaChi, $Hinh, $Quyen_ID, $TrangThai){
    if($Hinh!=""){
        $sql = "UPDATE nguoidung SET MatKhau='".$MatKhau."', TaiKhoan='".$TaiKhoan."', Ho='".$Ho."', Ten='".$Ten."', GioiTinh='".$GioiTinh."', SDT='".$SDT."', Email='".$Email."', DiaChi='".$DiaChi."', Hinh='".$Hinh."', Quyen_ID='".$Quyen_ID."', TrangThai='".$TrangThai."' WHERE MaND='".$MaND."'";
    }else{
        $sql = "UPDATE nguoidung SET MatKhau='".$MatKhau."', TaiKhoan='".$TaiKhoan."', Ho='".$Ho."', Ten='".$Ten."', GioiTinh='".$GioiTinh."', SDT='".$SDT."', Email='".$Email."', DiaChi='".$DiaChi."', Quyen_ID='".$Quyen_ID."', TrangThai='".$TrangThai."' WHERE MaND='".$MaND."'";
    }
    pdo_execute($sql);
}

function nguoidung_delete($MaND){
    $sql = "DELETE FROM nguoidung  WHERE MaND=?";
    if(is_array($MaND)){
        foreach ($MaND as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $MaND);
    }
}
function loaduser_limit(){
    $sql="select * from nguoidung order by MaND desc limit 10";
    $user=pdo_query($sql);
    return $user;
}
function nguoidung_select_all($kyw="", $orderCondition="", $item_per_page="", $offset=""){
    $sql="select * from nguoidung where 1";
    
    if($kyw!=""){
        $sql .=" and TenND like '%".$kyw."%'";
    }
    $sql.=" ".$orderCondition." limit ".$item_per_page." offset ".$offset ;
    return pdo_query($sql);
}


function record2(){
    $conn=pdo_get_connection();
    $sql="select COUNT(*) as TenND from nguoidung";
    $stmt = $conn->query($sql);
    $totalrecord = $stmt->fetchColumn();
    return $totalrecord;
    
}
function nguoidung_select_by_id($MaND){
    $sql = "SELECT * FROM nguoidung WHERE MaND=?";
    return pdo_query_one($sql, $MaND);
}

function nguoidung_select_by_taikhoan($TaiKhoan){
    $sql = "SELECT * FROM nguoidung WHERE TaiKhoan=?";
    return pdo_query_one($sql, $TaiKhoan);
}

function nguoidung_exist($TaiKhoan){
    $sql = "SELECT count(*) FROM nguoidung WHERE TaiKhoan=?";
    return pdo_query_value($sql, $TaiKhoan) > 0;
}

function nguoidung_select_by_role($Quyen_ID){
    $sql = "SELECT * FROM nguoidung WHERE Quyen_ID=?";
    return pdo_query($sql, $Quyen_ID);
}

function nguoidung_change_password($MaND, $MatKhau_moi){
    $sql = "UPDATE nguoidung SET MatKhau=? WHERE MaND=?";
    pdo_execute($sql, $MatKhau_moi, $MaND);
}

function nguoidung_update_matkhau($TaiKhoan, $MatKhau2){
    $sql = "UPDATE nguoidung SET MatKhau=? WHERE TaiKhoan=?";
    pdo_execute($sql, $MatKhau2, $TaiKhoan);
}