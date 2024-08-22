<?php
    require_once '../../global.php';
    require_once '../../dao/pdo.php';
    require_once '../../dao/giohang.php';
    require '../../assets/site/vendor/autoload.php';
    if(exist_param('thanhtoan')){
        $Ho=$_POST['Ho'];
        $Ten=$_POST['Ten'];
        $Email=$_POST['Email'];
        $DiaChi=$_POST['DiaChi'];
        $SDT=$_POST['SDT'];
        $GhiChu= $_POST['GhiChu'];
        $PhuongThucTT = $_POST["PhuongThucTT"];
        $TrangThai = ($PhuongThucTT=="a")?"a":"b";
        $name = $Ho ." " . $Ten;
        $MaND=$_SESSION['nguoidung']['MaND'];
        $MaHD="X-SHOP - ".$MaND." - ".rand(1,1000)." - ".date("dmY");
        if(!empty($_POST['soluong'])){
            if(isset($_POST["PhuongThucTT"])&& $_POST["PhuongThucTT"] == "d"){
                require 'zalopay.php';
            }elseif(isset($_POST["PhuongThucTT"])&& $_POST["PhuongThucTT"] == "b"){
                require 'momo.php';
            }elseif(isset($_POST["PhuongThucTT"])&& $_POST["PhuongThucTT"] == "c"){
                require 'credit-card.php';
            }
            else{
                $conn=pdo_get_connection();
                    if(!empty($_SESSION['mycart'])){
                        $statement = $conn->query("SELECT * FROM `sanpham` WHERE `MaSP` IN (".implode(",", array_keys($_POST['soluong'])).")");
                        if ($statement) {
                            $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
                        $ttien=0;
                        $tong=0;
                            foreach ($rows as $row) {
                            if (is_array($row)){
                                extract($row);
                                $soluong=$_POST['soluong'][$MaSP];
                                $ttien=$DonGia*$soluong;
                                
                            }  $tong+= $ttien;
                            }       
                        }
                        $id_dh=bill_insert_id($MaHD, $MaND, $name, $Email, $SDT, $GhiChu, $DiaChi, $PhuongThucTT, $tong, $TrangThai);
                        $string="";
                        foreach ($rows as $key => $row) {
                            if (is_array($row)){
                                extract($row);
                                $soluong=$_POST['soluong'][$MaSP];
                                
                                $string.="('".$id_dh."', '".$MaHD."', '".$MaSP."', '".$soluong."', '".$DonGia."' )";
                                if($key != count($rows)-1){
                                    $string.=", ";
                                }
                            } 
                        }   
                        $insertOrDetail=insert_cart($string);
                        unset($_SESSION['mycart']);
                        header("location: hoadon.php?MaHD=$MaHD");
                        exit;
                    }
            }
            
        
        }else{
            $MESSAGE="Vui lòng thêm sản phẩm vào giỏ hàng !";
            $VIEW_NAME='thanhtoan.php';
        }
        
        
    }
    else{
        $VIEW_NAME='thanhtoan.php';
    }
        
   
    
    require_once '../layout.php';
?>