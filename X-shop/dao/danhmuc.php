<?php
require_once 'pdo.php';

/**
 * Thêm danh mục mới
 */
function danhmuc_insert($TenDM){
    $sql = "INSERT INTO danhmuc(TenDM) VALUES(?)";
    pdo_execute($sql, $TenDM);
}
/**
 * Cập nhật danh mục
 */
function danhmuc_update($MaDM, $TenDM){
    $sql = "UPDATE danhmuc SET TenDM=? WHERE MaDM=?";
    pdo_execute($sql, $TenDM, $MaDM);
}
/**
 * Xóa một hoặc nhiều danh mục
 */
function danhmuc_delete($MaDM){
    $sql = "DELETE FROM danhmuc WHERE MaDM=?";
    if(is_array($MaDM)){
        foreach ($MaDM as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $MaDM);
    }
}
/**
 * Truy vấn tất cả các danh mục
 */
function danhmuc_select_all(){
    $sql = "SELECT * FROM danhmuc";
    return pdo_query($sql);
}
/**
 * Truy vấn một danh mục theo mã
 */
function danhmuc_select_by_id($MaDM){
    $sql = "SELECT * FROM danhmuc WHERE MaDM=?";
    return pdo_query_one($sql, $MaDM);
}
/**
 * Kiểm tra sự tồn tại của một danh mục
 */
function danhmuc_exist($TenDM){
    $sql = "SELECT count(*) FROM danhmuc WHERE TenDM=?";
    return pdo_query_value($sql, $TenDM) > 0;
}