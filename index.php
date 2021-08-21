<?php
include_once './services/CagetoryService.php';
include_once './services/ProductService.php';
include_once './models/UserModel.php';
include './prehandle/getCurrentUser.php';



$DEFAULT_PAGING_LIMIT = 6; //so luong item moi trang

$NB_PAGE_SHOW = 6;
$list_cagetory = CagetoryService::findAll();

if(isset($_GET['page'])&& isset($_GET['limit'])){
    $page = $_GET['page'];
    $limit = $_GET['limit'];
} else if (isset($_GET['page'])){
    $page = $_GET['page'];
    $limit = $DEFAULT_PAGING_LIMIT;
} else if (isset($_GET['page'])){
    $page = 1;
    $limit = $_GET['limit'];
} else {
    $page = 1;
    $limit = $DEFAULT_PAGING_LIMIT;
}

if(isset($_GET['cagetory'])){
    $cagetory_code = $_GET['cagetory'];
    $list_product = ProductService::findAllByCagetoryLimit($cagetory_code,$page, $limit);
    $total_page =  ProductService:: findTotalPageByCagetory($cagetory_code,$limit); //dem tong so trang tren so tong san phan grp by cagetory
}else{
    $list_product = ProductService::findAllLimit($page, $limit);
    $total_page =  ProductService:: findTotalPage($limit);
}





include './views/homepage.php';