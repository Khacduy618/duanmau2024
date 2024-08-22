<?php
    session_start();

    $ROOT_URL='https://x-shop.kesug.com';
    $CSS_ADMIN_URL = "$ROOT_URL/assets/admin/css";
    $FONT_ADMIN_URL= "$ROOT_URL/assets/admin/fonts";
    $IMAGE_ADMIN_URL= "$ROOT_URL/assets/admin/images";
    $JS_ADMIN_URL= "$ROOT_URL/assets/admin/js";
    $CSS_SITE_URL = "$ROOT_URL/assets/site/css";
    $FONT_SITE_URL= "$ROOT_URL/assets/site/fonts";
    $IMAGE_SITE_URL= "$ROOT_URL/assets/site/images";
    $JS_SITE_URL= "$ROOT_URL/assets/site/js";
    $ADMIN_URL= "$ROOT_URL/admin";
    $SITE_URL= "$ROOT_URL/site";
    $UPLOAD_URL= "../../uploaded/";


    $IMAGE_DIR = $_SERVER['DOCUMENT_ROOT'] . $IMAGE_ADMIN_URL;


    $VIEW_NAME = "index.php";
    $MESSAGE= "";
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    function exist_param($fieldname){
        return array_key_exists($fieldname, $_REQUEST);
    }


    function save_file($fieldname, $target_dir){
        $file_uploaded = $_FILES[$fieldname];
        $file_name = basename($file_uploaded['name']);
        $target_path = $target_dir . $file_name;
        move_uploaded_file($file_uploaded['tmp_name'], $target_path);
        return $file_name;
    }

    function add_cookie($name, $value, $day) {
        setcookie($name, $value, time() + (86400 * $day));
    }

    function delete_cookie($name){
        add_cookie($name, "", -1);
    }

    function get_cookie($name){
        return $_COOKIE[$name]??'';
    }

    function check_login() {
        global $SITE_URL;
        if (isset($_SESSION['nguoidung'])) {
            if ($_SESSION['nguoidung']['Quyen_ID'] == 1 || $_SESSION['nguoidung']['Quyen_ID'] == 2) {
                return;
            }
            if(strpos($_SERVER['REQUEST_URI'], 'admin/trangchinh/') == FALSE){
                return;
            }
        }
        $_SESSION['request_uri'] = $_SERVER['REQUEST_URI'];
        header('location: '. $SITE_URL. '/taikhoan');
    }
    function check_admin_permission() {
        global $SITE_URL;
        if (isset($_SESSION['nguoidung'])) {
            if ($_SESSION['nguoidung']['Quyen_ID'] == 1) {
                return true; // Admin can perform any action
            }
            if ($_SESSION['nguoidung']['Quyen_ID'] == 2) {
                return false; // Non-admin cannot delete admin
            }
        }
        $_SESSION['request_uri'] = $_SERVER['REQUEST_URI'];
        header('location: '. $SITE_URL. '/trangchinh');
        exit;
    }
    function execPostRequest($url, $data)
        {
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                    'Content-Type: application/json',
                    'Content-Length: ' . strlen($data))
            );
            curl_setopt($ch, CURLOPT_TIMEOUT, 5);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
            //execute post
            $result = curl_exec($ch);
            //close connection
            curl_close($ch);
            return $result;
        }
        // test momo:
        // NGUYEN VAN A
        // 9704 0000 0000 0018
        // 03/07
        // OTP
        
        // test vnpay:
        // (vnp_TmnCode): CGXZLS0Z
        // (vnp_HashSecret): XNBCJFAKAZQSGTARRLGCHVZWCIOIGSHN
        // Ngân hàng: NCB
        // Số thẻ: 9704198526191432198
        // Tên chủ thẻ:NGUYEN VAN A
        // Ngày phát hành:07/15
        // Mật khẩu OTP:123456
?>