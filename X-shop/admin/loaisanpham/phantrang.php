<?php
    $orderCondition="ORDER BY MaLSP DESC";
    $orderField= isset($_GET['field']) ? $_GET['field'] : "";
    $orderSort= isset($_GET['sort']) ? $_GET['sort'] : "";
    if(!empty($orderField)&&!empty($orderSort)){
        $orderCondition="ORDER BY `loaisanpham`.`".$orderField."` ".$orderSort;
    }
    $item_per_page=!empty($_GET['per_page'])?$_GET['per_page']:8;
    $current_page=!empty($_GET['page'])?$_GET['page']:1;
    $offset = ($current_page-1)*$item_per_page;
    $totalrecord=record1();
    $totalpages=ceil($totalrecord/$item_per_page);
?>