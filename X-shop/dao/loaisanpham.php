<?php
require_once 'pdo.php';

/**
 * Thêm loại sản phẩm mới
 */
function loaisanpham_insert($TenLSP, $HinhAnh, $MoTa, $DM_ID){
    $sql = "INSERT INTO loaisanpham(TenLSP, HinhAnh, MoTa, DM_ID) VALUES(?,?,?,?)";
    pdo_execute($sql, $TenLSP, $HinhAnh, $MoTa, $DM_ID);
}
/**
 * Cập nhật loại sản phẩm
 */
function loaisanpham_update($MaLSP, $TenLSP, $HinhAnh, $MoTa, $DM_ID){
    if($HinhAnh!=""){
        $sql = "UPDATE loaisanpham SET TenLSP='".$TenLSP."', HinhAnh='".$HinhAnh."', MoTa='".$MoTa."', DM_ID='".$DM_ID."' WHERE MaLSP='".$MaLSP."'";
    }else{
        $sql = "UPDATE loaisanpham SET TenLSP='".$TenLSP."', MoTa='".$MoTa."', DM_ID='".$DM_ID."' WHERE MaLSP='".$MaLSP."'";
    }
    pdo_execute($sql);
    
    
}
/**
 * Xóa một hoặc nhiều loại sản phẩm
 */
function loaisanpham_delete($MaLSP){
    $sql = "DELETE FROM loaisanpham WHERE MaLSP=?";
    if(is_array($MaLSP)){
        foreach ($MaLSP as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $MaLSP);
    }
}
/**
 * Truy vấn tất cả các loại
 * @return array mảng loại truy vấn được
 * @throws PDOException lỗi truy vấn
 */
function loaisanpham_select_all(){
    $sql="select * from loaisanpham";
    return pdo_query($sql);
}
function loaisanpham_page($kyw="", $orderCondition="", $item_per_page="", $offset=""){
    $sql="select * from loaisanpham where 1";
    if($kyw!=""){
        $sql .=" and TenLSP like '%".$kyw."%'";
    }
    $sql.=" ".$orderCondition." limit ".$item_per_page." offset ".$offset ;
    return pdo_query($sql);
}
function record1(){
    $conn=pdo_get_connection();
    $sql="select COUNT(*) as TenLSP from loaisanpham";
    $stmt = $conn->query($sql);
    $totalrecord = $stmt->fetchColumn();
    return $totalrecord;
    
}
/**
 * Truy vấn một loại sản phẩm theo mã
 */
function loaisanpham_select_by_id($MaLSP){
    $sql = "SELECT * FROM loaisanpham WHERE MaLSP=?";
    return pdo_query_one($sql, $MaLSP);
}
/**
 * Kiểm tra sự tồn tại của một loại sản phẩm
 */
function loaisanpham_exist($TenLSP){
    $sql = "SELECT count(*) FROM loaisanpham WHERE TenLSP=?";
    return pdo_query_value($sql, $TenLSP) > 0;
}
