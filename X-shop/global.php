<?php
    session_start();


    $ROOT_URL='/X-shop';
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
?>