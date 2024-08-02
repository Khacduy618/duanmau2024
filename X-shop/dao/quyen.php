<?php
require_once 'pdo.php';

/**
 * Thêm danh mục mới
 */
function phanquyen_insert($TenQuyen){
    $sql = "INSERT INTO phanquyen(TenQuyen) VALUES(?)";
    pdo_execute($sql, $TenQuyen);
}
/**
 * Cập nhật danh mục
 */
function phanquyen_update($MaQuyen, $TenQuyen){
    $sql = "UPDATE phanquyen SET TenQuyen=? WHERE MaQuyen=?";
    pdo_execute($sql, $TenQuyen, $MaQuyen);
}
/**
 * Xóa một hoặc nhiều danh mục
 */
function phanquyen_delete($MaQuyen){
    $sql = "DELETE FROM phanquyen WHERE MaQuyen=?";
    if(is_array($MaQuyen)){
        foreach ($MaQuyen as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $MaQuyen);
    }
}
/**
 * Truy vấn tất cả các danh mục
 */
function phanquyen_select_all(){
    $sql = "SELECT * FROM phanquyen";
    return pdo_query($sql);
}
/**
 * Truy vấn một danh mục theo mã
 */
function phanquyen_select_by_id($MaQuyen){
    $sql = "SELECT * FROM phanquyen WHERE MaQuyen=?";
    return pdo_query_one($sql, $MaQuyen);
}
/**
 * Kiểm tra sự tồn tại của một danh mục
 */
function phanquyen_exist($MaQuyen){
    $sql = "SELECT count(*) FROM phanquyen WHERE MaQuyen=?";
    return pdo_query_value($sql, $MaQuyen) > 0;
}
/**
 * riêng
 */