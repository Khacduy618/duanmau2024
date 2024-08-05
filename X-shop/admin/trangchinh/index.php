<?php
    include_once "../../global.php";
    require_once "../../dao/thongke.php";
    require_once "../../dao/donhang.php";
    require_once "../../dao/nguoidung.php";

    check_login();
    $days = getDaysInCurrentMonth();
    $years = get_years_for_report();
    $annual_revenue = calculate_month_revenue();
    $doanhthu_ngay = calculate_current_month_daily_revenue();
    $doanhthu_nam = calculate_annual_revenue();
    $month_revenue = calculate_current_month_revenue();
    $total_bl = calculate_total_comments();
    $total_dh = calculate_total_orders();
    $total_user = get_total_users();
    $bill = Load_bill_limit();
    $user = loaduser_limit();
    $category_revenue_report = generate_category_revenue_report();
    $VIEW_NAME = "trangchinh/trangchu.php";
    require "../layout.php";

?>