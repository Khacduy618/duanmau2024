<?php
$endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";
$partnerCode = 'MOMOBKUN20180529';
$accessKey = 'klm05TvNBzhg7h7j';
$secretKey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';
$orderInfo = "Thanh toán qua MoMo";
$amount = "10000";
$orderId = rand(00,99999);
$redirectUrl = "https://x-shop.kesug.com/site/thanhtoan/hoadon.php?MaHD=".$MaHD;
$ipnUrl = "https://x-shop.kesug.com/site/thanhtoan/hoadon.php?MaHD=".$MaHD;
$extraData = "";


$partnerCode = $partnerCode;
$accessKey = $accessKey;
$serectkey = $secretKey;
$orderId = $orderId; // Mã đơn hàng
$orderInfo = $orderInfo;
$amount = $amount;
$ipnUrl = $ipnUrl;
$redirectUrl = $redirectUrl;
$extraData = $extraData;

$requestId = time() . "";
$requestType = "payWithATM";
// $extraData = ($_POST["extraData"] ? $_POST["extraData"] : "");
//before sign HMAC SHA256 signature
$rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
$signature = hash_hmac("sha256", $rawHash, $serectkey);
$data = array('partnerCode' => $partnerCode,
    'partnerName' => "Test",
    "storeId" => "MomoTestStore",
    'requestId' => $requestId,
    'amount' => $amount,
    'orderId' => $orderId,
    'orderInfo' => $orderInfo,
    'redirectUrl' => $redirectUrl,
    'ipnUrl' => $ipnUrl,
    'lang' => 'vi',
    'extraData' => $extraData,
    'requestType' => $requestType,
    'signature' => $signature);
$result = execPostRequest($endpoint, json_encode($data));
$jsonResult = json_decode($result, true);  // decode json

//Just a example, please check more in there

header('Location: ' . $jsonResult['payUrl']);

if(isset($jsonResult['payUrl'])){
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
}
?>