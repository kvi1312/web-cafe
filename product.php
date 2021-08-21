<?php
include_once './services/ProductService.php';
include_once './models/UserModel.php';

include './prehandle/getCurrentUser.php';

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $product = ProductService:: findById($id);
    // print_r($product);
    $listSizeProduct = ProductService::getListSize($product->name);
}else{
    header('location: /htdocs-update/index.php');
}

include './views/product-detail.php';