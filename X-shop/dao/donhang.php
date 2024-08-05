<?php
    require_once 'pdo.php';

    function Loadall_bill($MaND){
        $sql="select * from donhang WHERE MaND =? order by ID_DH desc";
        $bill=pdo_query($sql,$MaND);
        return $bill;
    }
    function bill_page($kyw="", $orderCondition="", $item_per_page="", $offset="") {
        $sql="select * from donhang where 1";
        if($kyw!=""){
            $sql .=" and MaHD like '%".$kyw."%'";
        }
        $sql.=" ".$orderCondition." limit ".$item_per_page." offset ".$offset ;
        $bill=pdo_query($sql);
        return $bill;
    }
    function record4(){
        $conn=pdo_get_connection();
        $sql="select COUNT(*) as MaHD from donhang";
        $stmt = $conn->query($sql);
        $totalrecord = $stmt->fetchColumn();
        return $totalrecord;
        
    }
    function delete_bill($ID_DH){
        $sql="delete from donhang where ID_DH=".$ID_DH;
        pdo_execute($sql);
    }
    function update_bill($ID_DH, $NguoiNhan, $SDT, $DiaChi, $ttdh){
        $sql= "update donhang set NguoiNhan='".$NguoiNhan."', SDT='".$SDT."' , DiaChi='".$DiaChi."', TrangThai='".$ttdh."' where ID_DH=".$ID_DH;
        pdo_execute($sql);
    }
    function loadone_bill($ID_DH){
        $sql="select * from donhang where ID_DH=".$ID_DH;
        $bill=pdo_query_one($sql);
        return $bill;
    }
    function Load_bill_limit(){
        $sql="select * from donhang order by ID_DH desc limit 10";
        $bill=pdo_query($sql);
        return $bill;
    }
    function get_ttdh($n){
        switch ($n) {
            case 'a':
                $tt="Chưa thanh toán";
                break;
            case 'b':
                $tt="Đã thanh toán";
                break;
            case 'c':
                $tt="Đã duyệt";
                break;
            case 'd':
                $tt="Đang vận chuyển";
                break;
            case 'e':
                $tt="Đã giao";
                break;
            default:
                $tt="Đơn hàng mới";
                break;
        }
        return $tt;
    }
    
?>