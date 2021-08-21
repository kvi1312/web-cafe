<?php

include_once '../models/UserModel.php';
include_once '../services/InvoiceService.php';
include_once '../models/ResponseAPI.php';
include '../prehandle/getCurrentUser.php';

 if (session_id() == '') {
     session_start();
 }

if (!isset($_SESSION['user'])){
    echo ResponseAPI::Error(1, 'Require Login Api');
    die;
}

if (isset($_GET['action']) && $_GET['action'] == 'list') {
    $query = $_GET['queryString'];
    $products = ProductService::searchProduct($query);
    echo json_encode($products);
}



if (isset($_POST['action']) && $_POST['action'] == 'add-to-cart') {
    // print_r(($_POST));    
    $invoice = InvoiceService::findCart();
    if ($invoice == null){
        $invoice = InvoiceService::createInvoice();
    }
    $productId = $_POST['productId'];
    $amount = $_POST['amount'];
    InvoiceService::addToCart($invoice->id, $productId, $amount);
    echo ResponseAPI::Success('Add to cart successfully', null);
}

if (isset($_POST['action']) && $_POST['action'] == 'change-amount') {
    // print_r(($_POST));    
    $invoice = InvoiceService::findCart();
    if ($invoice == null){
        $invoice = InvoiceService::createInvoice();
    }
    $productId = $_POST['productId'];
    $amount = $_POST['amount'];
    InvoiceService::setAmount($invoice->id, $productId, $amount);
    echo ResponseAPI::Success('Change Amount successfully', null);
}

if (isset($_POST['action']) && $_POST['action'] == 'delete-product') {
    // print_r(($_POST));    
    $invoice = InvoiceService::findCart();
    // print_r($invoice);
    $productId = $_POST['productId'];
    InvoiceService::removeProduct($invoice->id, $productId);
    echo ResponseAPI::Success('Delete product from cart successfully', null);
}

// if (isset($_POST['action']) && $_POST['action'] == 'add to-cart') {
//         $invoice = InvoiceService::findCart();
//         InvoiceService::checkout($invoice->id);
// }
    

