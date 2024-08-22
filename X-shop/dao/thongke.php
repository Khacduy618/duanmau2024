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

function getDaysInCurrentMonth() {
    $currentMonth = date('n');
    $currentYear = date('Y');
    $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $currentMonth, $currentYear);
    $days = [];
    for ($i = 1; $i <= $daysInMonth; $i++) {
        $days[] = $i;
    }
    return $days;
}

function get_years_for_report() {
    $current_year = date('Y');
    $start_year = $current_year - 5;
    $years = range($start_year, $current_year);
    return $years;
}

function san_pham_ban_chay() {
    $sql = "SELECT SP.*, COUNT(DH.MaSP) as SoLuongBan
    FROM sanpham SP
    JOIN chitietdonhang DH ON SP.MaSP = DH.MaSP
    GROUP BY SP.MaSP
    ORDER BY SoLuongBan DESC
    LIMIT 10";
    return pdo_query($sql);
}

function thong_ke_binhluan() {
    $sql = "SELECT SP.MaSP, SP.TenSP, COUNT(*) as so_luong, 
                       MIN(BL.NgayBL) as cu_nhat, MAX(BL.NgayBL) as moi_nhat 
                FROM binhluan BL 
                JOIN sanpham SP ON SP.MaSP = BL.MaSP 
                GROUP BY SP.MaSP, SP.TenSP 
                HAVING so_luong > 0";

    return pdo_query($sql);
}
function record3(){
    $conn=pdo_get_connection();
    $sql="select COUNT(*) as TenSP from view_binhluan";
    $stmt = $conn->query($sql);
    $totalrecord = $stmt->fetchColumn();
    return $totalrecord;
    
}
//doanh thu hàng tháng của năm hiện tại
function calculate_month_revenue() {
    $conn = pdo_get_connection();
    $year = date('Y');
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
//doanh thu tháng hiện tại
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
//tổng doanh thu của từng danh mục sản phẩm
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
            HAVING SUM(DH.SoLuong) IS NULL OR SUM(DH.SoLuong) = 0 LIMIT 10";
    return pdo_query($sql);
}

function san_pham_moi_top_10() {
    $sql = "SELECT SP.*
            FROM sanpham SP
            ORDER BY SP.ThoiGian DESC
            LIMIT 10";
    return pdo_query($sql);
}
//Doanh thu từng ngày của tháng và năm hiện tại
function calculate_current_month_daily_revenue() {
    $conn = pdo_get_connection();
    $current_month = date('n');
    $current_year = date('Y');
    $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $current_month, $current_year);
    $dailyRevenue = array();

    for ($day = 1; $day <= $daysInMonth; $day++) {
        $sql = "SELECT SUM(TongTien) as DoanhThu FROM donhang 
                WHERE DAY(NgayTaoDon) = :ngay AND MONTH(NgayTaoDon) = :thang AND YEAR(NgayTaoDon) = :nam";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':ngay', $day, PDO::PARAM_INT);
        $stmt->bindParam(':thang', $current_month, PDO::PARAM_INT);
        $stmt->bindParam(':nam', $current_year, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $dailyRevenue[$day] = $result['DoanhThu'];
    }

    return $dailyRevenue;
}

//doanh thu năm hiện tại trở về trước 5 năm
function calculate_annual_revenue() {
    $conn = pdo_get_connection();
    $current_year = date('Y');
    $start_year = $current_year - 5;
    $revenue = array();

    for ($year = $start_year; $year <= $current_year; $year++) {
        $sql = "SELECT SUM(TongTien) as DoanhThu FROM donhang 
                WHERE YEAR(NgayTaoDon) = :nam";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':nam', $year, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $revenue[$year] = $result['DoanhThu'];
    }

    return $revenue;
}