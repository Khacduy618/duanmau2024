<?php
require_once 'pdo.php';

/**
 * Thêm sản phẩm mới
 */
function sanpham_insert($TenSP, $DonGia, $HinhAnh1, $HinhAnh2, $HinhAnh3, $GiamGia, $ThoiGian, $ThongTin, $DacBiet, $DMID, $LSP_ID){
    $sql = "INSERT INTO sanpham(TenSP, DonGia, HinhAnh1, HinhAnh2, HinhAnh3, GiamGia, ThoiGian, ThongTin, DacBiet, DMID, LSP_ID) VALUES(?,?,?,?,?,?,?,?,?,?,?)";
    pdo_execute($sql, $TenSP, $DonGia, $HinhAnh1, $HinhAnh2, $HinhAnh3, $GiamGia, $ThoiGian, $ThongTin, $DacBiet, $DMID, $LSP_ID);
}
/**
 * Cập nhật  sản phẩm
 */
function sanpham_update($MaSP, $TenSP, $DonGia, $HinhAnh1, $HinhAnh2, $HinhAnh3, $GiamGia, $ThoiGian, $ThongTin, $DacBiet, $DMID, $LSP_ID){
    if($HinhAnh1!="" && $HinhAnh2!="" && $HinhAnh3!=""){
        $sql = "UPDATE sanpham SET TenSP='".$TenSP."', DonGia='".$DonGia."', HinhAnh1='".$HinhAnh1."', HinhAnh2='".$HinhAnh2."', HinhAnh3='".$HinhAnh3."', GiamGia='".$GiamGia."', DacBiet='".$DacBiet."', ThoiGian='".$ThoiGian."', ThongTin='".$ThongTin."', DMID='".$DMID."', LSP_ID='".$LSP_ID."' WHERE MaSP='".$MaSP."'";
    }elseif($HinhAnh1!="" && $HinhAnh2!=""){
        $sql = "UPDATE sanpham SET TenSP='".$TenSP."', DonGia='".$DonGia."', HinhAnh1='".$HinhAnh1."', HinhAnh2='".$HinhAnh2."', GiamGia='".$GiamGia."', DacBiet='".$DacBiet."', ThoiGian='".$ThoiGian."', ThongTin='".$ThongTin."', DMID='".$DMID."', LSP_ID='".$LSP_ID."' WHERE MaSP='".$MaSP."'";
    }elseif ($HinhAnh1!="" && $HinhAnh3!="") {
        $sql = "UPDATE sanpham SET TenSP='".$TenSP."', DonGia='".$DonGia."', HinhAnh1='".$HinhAnh1."', HinhAnh2='".$HinhAnh3."', GiamGia='".$GiamGia."', DacBiet='".$DacBiet."', ThoiGian='".$ThoiGian."', ThongTin='".$ThongTin."', DMID='".$DMID."', LSP_ID='".$LSP_ID."' WHERE MaSP='".$MaSP."'";
    }elseif ($HinhAnh2!="" && $HinhAnh3!="") {
        $sql = "UPDATE sanpham SET TenSP='".$TenSP."', DonGia='".$DonGia."', HinhAnh2='".$HinhAnh2."', HinhAnh3='".$HinhAnh3."', GiamGia='".$GiamGia."', DacBiet='".$DacBiet."', ThoiGian='".$ThoiGian."', ThongTin='".$ThongTin."', DMID='".$DMID."', LSP_ID='".$LSP_ID."' WHERE MaSP='".$MaSP."'";
    }elseif ($HinhAnh1!="") {
        $sql = "UPDATE sanpham SET TenSP='".$TenSP."', DonGia='".$DonGia."', HinhAnh1='".$HinhAnh1."', GiamGia='".$GiamGia."', DacBiet='".$DacBiet."', ThoiGian='".$ThoiGian."', ThongTin='".$ThongTin."', DMID='".$DMID."', LSP_ID='".$LSP_ID."' WHERE MaSP='".$MaSP."'";
    }elseif ($HinhAnh2!="") {
        $sql = "UPDATE sanpham SET TenSP='".$TenSP."', DonGia='".$DonGia."', HinhAnh2='".$HinhAnh1."', GiamGia='".$GiamGia."', DacBiet='".$DacBiet."', ThoiGian='".$ThoiGian."', ThongTin='".$ThongTin."', DMID='".$DMID."', LSP_ID='".$LSP_ID."' WHERE MaSP='".$MaSP."'";
    }elseif ($HinhAnh3!="") {
        $sql = "UPDATE sanpham SET TenSP='".$TenSP."', DonGia='".$DonGia."', HinhAnh3='".$HinhAnh1."', GiamGia='".$GiamGia."', DacBiet='".$DacBiet."', ThoiGian='".$ThoiGian."', ThongTin='".$ThongTin."', DMID='".$DMID."', LSP_ID='".$LSP_ID."' WHERE MaSP='".$MaSP."'";
    }
    else{
        $sql = "UPDATE sanpham SET TenSP='".$TenSP."', DonGia='".$DonGia."', GiamGia='".$GiamGia."', DacBiet='".$DacBiet."', ThoiGian='".$ThoiGian."', ThongTin='".$ThongTin."', DMID='".$DMID."', LSP_ID='".$LSP_ID."' WHERE MaSP='".$MaSP."'";
    }
    pdo_execute($sql);
}
/**
 * Xóa một hoặc nhiều  sản phẩm
 */
function sanpham_delete($MaSP){
    $sql = "DELETE FROM sanpham WHERE MaSP=?";
    if(is_array($MaSP)){
        foreach ($MaSP as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $MaSP);
    }
}
/**
 * Truy vấn tất cả các 
 * @return array mảng  truy vấn được
 * @throws PDOException lỗi truy vấn
 */
function sanpham_select_all(){
    $sql = "SELECT * FROM sanpham order by MaSP DESC";
    return pdo_query($sql);
}
/**
 * Truy vấn một  sản phẩm theo mã
 */
function sanpham_select_by_id($MaSP){
    $sql = "SELECT * FROM sanpham WHERE MaSP=?";
    return pdo_query_one($sql, $MaSP);
}
/**
 * Kiểm tra sự tồn tại của một  sản phẩm
 */
function sanpham_exist($TenSP){
    $sql = "SELECT count(*) FROM sanpham WHERE TenSP=?";
    return pdo_query_value($sql, $TenSP) > 0;
}
function sanpham_tang_LuotXem($MaSP){
    $sql = "UPDATE sanpham SET LuotXem = LuotXem + 1 WHERE MaSP=?";
    pdo_execute($sql, $MaSP);
}

function sanpham_select_top10_LuotXem(){
    $sql = "SELECT * FROM sanpham 
        WHERE LuotXem > 0 
        ORDER BY LuotXem DESC 
        LIMIT 0, 10";
    return pdo_query($sql);
}

function sanpham_select_DacBiet(){
    $sql = "SELECT * FROM sanpham WHERE DacBiet=1";
    return pdo_query($sql);
}

function sanpham_select_sale(){
    $sql = "SELECT * FROM sanpham WHERE GiamGia > 0";
    return pdo_query($sql);
}

function sanpham_select_top10_BanChay(){
    $sql = "SELECT SP.*, COUNT(DH.MaSP) as SoLuongBan
            FROM sanpham SP
            JOIN chitietdonhang DH ON SP.MaSP = DH.MaSP
            GROUP BY SP.MaSP
            ORDER BY SoLuongBan DESC
            LIMIT 0, 10";
    return pdo_query($sql);
}

function sanpham_select_danhmuc($DMID) {
    $sql = "SELECT * FROM sanpham WHERE DMID=?";
    return pdo_query($sql, $DMID);
}

function sanpham_select_by_loaisanpham($LSP_ID){
    $sql = "SELECT * FROM sanpham WHERE LSP_ID=?";
    return pdo_query($sql, $LSP_ID);
}

function sanpham_select_keyword($keyword){
    $sql = "SELECT * FROM sanpham SP "
            . " JOIN loaisanpham LSP ON LSP.MaLSP=SP.LSP_ID "
            . " WHERE TenSP LIKE ? OR TenLSP LIKE ?";
    return pdo_query($sql, '%'.$keyword.'%', '%'.$keyword.'%');
}

function sanpham_select_page(){
    if(!isset($_SESSION['page_no'])){
        $_SESSION['page_no'] = 0;
    }
    if(!isset($_SESSION['page_count'])){
        $row_count = pdo_query_value("SELECT count(*) FROM sanpham");
        $_SESSION['page_count'] = ceil($row_count/10.0);
    }
    if(exist_param("page_no")){
        $_SESSION['page_no'] = $_REQUEST['page_no'];
    }
    if($_SESSION['page_no'] < 0){
        $_SESSION['page_no'] = $_SESSION['page_count'] - 1;
    }
    if($_SESSION['page_no'] >= $_SESSION['page_count']){
        $_SESSION['page_no'] = 0;
    }
    $sql = "SELECT * FROM sanpham ORDER BY MaSP LIMIT ".$_SESSION['page_no'].", 10";
    return pdo_query($sql);
}

function loadall_product($kyw="", $orderCondition="", $DMID=0, $LSP_ID=0, $item_per_page="", $offset=""){
    $sql="select * from sanpham where 1";
    if($LSP_ID>0){
        $sql .=" and LSP_ID=".$LSP_ID;
    }
    if($DMID>0){
        $sql .=" and DMID=".$DMID;
    }
    if($kyw!=""){
        $sql .=" and TenSP like '%".$kyw."%'";
    }
    $sql.=" ".$orderCondition." limit ".$item_per_page." offset ".$offset ;
    $danhsachSP=pdo_query($sql);
    return $danhsachSP;
}

function record(){
    $conn=pdo_get_connection();
    $sql="select COUNT(*) as TenSP from sanpham";
    $stmt = $conn->query($sql);
    $totalrecord = $stmt->fetchColumn();
    return $totalrecord;
    
}