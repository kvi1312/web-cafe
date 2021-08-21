<?php 

include_once './models/UserModel.php';
include_once './services/InvoiceService.php';
include_once './services/ProductService.php';
include './prehandle/requireLogin.php';

$invoice = InvoiceService::findCart();

if($invoice != null){
    $details = InvoiceService::getDetails($invoice->id);
    $products = array();
    // print_r(($details));
    foreach ($details as $index => $detail){
        $products[$index] = ProductService::findById($detail->productId);
    }
    $total = InvoiceService::computeTotal($invoice->id);
}

// echo $total;

include_once './views/mybag.php';
