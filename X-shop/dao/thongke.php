<?php
require_once 'pdo.php';

function thong_ke_sanpham(){
    $sql = "SELECT LSP.MaLSP, LSP.TenLSP,"
            . " COUNT(*) SoLuong,"
            . " MIN(SP.DonGia) gia_min,"
            . " MAX(SP.DonGia) gia_max,"
            . " AVG(SP.DonGia) gia_avg"
            . " FROM sanpham SP "
            . " JOIN loaisanpham LSP ON LSP.MaLSP=SP.LSP_ID "
            . " GROUP BY LSP.MaLSP, LSP.TenLSP";
    return pdo_query($sql);
}

function san_pham_ban_chay() {
    $sql = "SELECT SP.*, COUNT(DH.MaSP) as SoLuongBan
    FROM sanpham SP
    JOIN chitietdonhang DH ON SP.MaSP = DH.MaSP
    GROUP BY SP.MaSP
    ORDER BY SoLuongBan DESC";
    return pdo_query($sql);
}

function thong_ke_binhluan($kyw, $orderCondition, $item_per_page, $offset){
    $sql = "SELECT * FROM `view_binhluan` WHERE 1";
    if($kyw!=""){
        $sql .=" and TenSP like '%".$kyw."%'";
    }
    $sql.=" ".$orderCondition." limit ".$item_per_page." offset ".$offset ;
    return pdo_query($sql);
}

function record3(){
    $conn=pdo_get_connection();
    $sql="select COUNT(*) as TenSP from view_binhluan";
    $stmt = $conn->query($sql);
    $totalrecord = $stmt->fetchColumn();
    return $totalrecord;
    
}

function calculate_annual_revenue($year) {
    $conn = pdo_get_connection();
    $revenue = array();

    for ($month = 1; $month <= 12; $month++) {
        $sql = "SELECT SUM(TongTien) as DoanhThu FROM donhang 
                WHERE MONTH(NgayTaoDon) = :thang AND YEAR(NgayTaoDon) = :nam";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':thang', $month, PDO::PARAM_INT);
        $stmt->bindParam(':nam', $year, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $revenue[$month] = $result['DoanhThu'];
    }

    return $revenue;
}

function calculate_current_month_revenue() {
    $conn = pdo_get_connection();
    $current_month = date('n');
    $current_year = date('Y');

    $sql = "SELECT SUM(TongTien) as DoanhThu FROM donhang 
            WHERE MONTH(NgayTaoDon) = :thang AND YEAR(NgayTaoDon) = :nam";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':thang', $current_month, PDO::PARAM_INT);
    $stmt->bindParam(':nam', $current_year, PDO::PARAM_INT);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    return $result['DoanhThu'];
}

function calculate_total_comments() {
    $conn = pdo_get_connection();
    $sql = "SELECT COUNT(*) as TotalComments FROM binhluan";
    $stmt = $conn->query($sql);
    $totalComments = $stmt->fetchColumn();
    return $totalComments;
}

function calculate_total_orders() {
    $conn = pdo_get_connection();
    $sql = "SELECT COUNT(*) as TotalOrders FROM donhang";
    $stmt = $conn->query($sql);
    $totalOrders = $stmt->fetchColumn();
    return $totalOrders;
}

function get_total_users() {
    $conn = pdo_get_connection();

    $sql = "SELECT COUNT(*) as total_users FROM nguoidung";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result['total_users'];
}

function generate_category_revenue_report(){
    $sql = "SELECT c.TenDM AS category_name, SUM((dt.SoLuong*dt.DonGia)) AS total_revenue 
        FROM chitietdonhang dt JOIN sanpham sp ON dt.MaSP = sp.MaSP 
        JOIN danhmuc c ON sp.DMID = c.MaDM GROUP BY c.TenDM";
    return pdo_query($sql);
}

function san_pham_khong_co_luot_mua() {
    $sql = "SELECT SP.*
            FROM sanpham SP
            LEFT JOIN chitietdonhang DH ON SP.MaSP = DH.MaSP
            GROUP BY SP.MaSP
            HAVING SUM(DH.SoLuong) IS NULL OR SUM(DH.SoLuong) = 0";
    return pdo_query($sql);
}

function san_pham_moi_top_10() {
    $sql = "SELECT SP.*
            FROM sanpham SP
            ORDER BY SP.ThoiGian DESC
            LIMIT 10";
    return pdo_query($sql);
}