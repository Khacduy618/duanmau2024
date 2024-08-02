<?php
require_once 'pdo.php';

function binhluan_insert($ND_ID, $MaSP, $NoiDung){
    $sql = "INSERT INTO binhluan(ND_ID, MaSP, NoiDung) VALUES (?,?,?)";
    pdo_execute($sql, $ND_ID, $MaSP, $NoiDung);
}

function binhluan_update($MaBL, $ND_ID, $MaSP, $NoiDung){
    $sql = "UPDATE binhluan SET ND_ID=?,MaSP=?,NoiDung=? WHERE MaBL=?";
    pdo_execute($sql, $ND_ID, $MaSP, $NoiDung, $MaBL);
}

function binhluan_delete($MaBL){
    $sql = "DELETE FROM binhluan WHERE MaBL=?";
    if(is_array($MaBL)){
        foreach ($MaBL as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $MaBL);
    }
}

function binhluan_select_all(){
    $sql = "SELECT * FROM binhluan bl ORDER BY NgayBL DESC";
    return pdo_query($sql);
}

function binhluan_select_by_id($MaBL){
    $sql = "SELECT * FROM binhluan WHERE MaBL=?";
    return pdo_query_one($sql, $MaBL);
}

function binhluan_exist($MaBL){
    $sql = "SELECT count(*) FROM binhluan WHERE MaBL=?";
    return pdo_query_value($sql, $MaBL) > 0;
}
//-------------------------------//
function binhluan_select_by_sanpham($MaSP){
    $sql = "SELECT BL.*, SP.TenSP FROM binhluan BL JOIN sanpham SP ON SP.MaSP=BL.MaSP WHERE BL.MaSP=? ORDER BY NgayBL DESC";
    return pdo_query($sql, $MaSP);
}

function count_BL_SP($MaSP) {
    $sql = "SELECT COUNT(*) as total_BL FROM binhluan WHERE MaSP = ?";
    return pdo_query_value($sql, $MaSP);
}