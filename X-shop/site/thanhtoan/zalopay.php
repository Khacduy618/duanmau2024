<?php


$config = [
    "app_id" => 2553,
    "key1" => "PcY4iZIKFCIdgZvA6ueMcMHHUbRLYjPL",
    "key2" => "kLtgPl8HHhfvMuDHPwKfgfsY4Ydm9eIz",
    "endpoint" => "https://sb-openapi.zalopay.vn/v2/create"
];

$embeddata = json_encode(['redirecturl' => 'https://x-shop.kesug.com/site/thanhtoan/hoadon.php?MaHD='.$MaHD]); // Merchant's data
$items = '[]'; // Merchant's data
$transID = rand(00,999999); //Random trans id
$order = [
    "app_id" => $config["app_id"],
    "app_time" => round(microtime(true) * 1000), // miliseconds
    "app_trans_id" => date("ymd") . "_" . $transID, // translation missing: vi.docs.shared.sample_code.comments.app_trans_id
    "app_user" => "user123",
    "item" => $items,
    "embed_data" => $embeddata,
    "amount" => 50000,
    "description" => "Lazada - Payment for the order #$transID",
    "bank_code" => "zalopayapp"
];

// appid|app_trans_id|appuser|amount|apptime|embeddata|item
$data = $order["app_id"] . "|" . $order["app_trans_id"] . "|" . $order["app_user"] . "|" . $order["amount"]
    . "|" . $order["app_time"] . "|" . $order["embed_data"] . "|" . $order["item"];
$order["mac"] = hash_hmac("sha256", $data, $config["key1"]);

$context = stream_context_create([
    "http" => [
        "header" => "Content-type: application/x-www-form-urlencoded\r\n",
        "method" => "POST",
        "content" => http_build_query($order)
    ]
]);

$resp = file_get_contents($config["endpoint"], false, $context);
$result = json_decode($resp, true);
if($result['return_code'] ==1){
    header('location: ' .$result['order_url']);
    exit;
}
foreach ($result as $key => $value) {
    echo "$key: $value<br>";
}

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
        }
?>