<?php

    $stripe_secret_key = "sk_test_51P9P1MCPJ7CfSlogLWk63GhiV73uyKcWvhxzm7gbYy7jdJi8bZQUibwP4sS4kS513E5YEDkC6abM3gV7QGomWAWT00YtCTxSXB";

    \Stripe\Stripe::setApiKey($stripe_secret_key);

    $checkout_session = \Stripe\Checkout\Session::create([
        "mode" => "payment",
        "success_url" => "https://x-shop.kesug.com/site/thanhtoan/hoadon.php?MaHD=".$MaHD,
        "line_items" => [
            [
                "quantity" => 1,
                "price_data" => [
                    "currency" => "vnd",
                    "unit_amount" => 34000000,
                    "product_data" => [
                        "name" => "iPhone 15 Pro Max",
                        //"images" => ["https://example.com/t-shirt.jpg"]
                    ]
                ]
            ]
        ]
                    ]);
                    http_response_code(303);
                    var_dump($checkout_session);
    header("Location: " . $checkout_session->url);

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