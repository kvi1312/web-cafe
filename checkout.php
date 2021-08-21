<?php

include_once './models/UserModel.php';
include_once './services/InvoiceService.php';
include_once './services/ProductService.php';
include './prehandle/requireLogin.php';

$invoice = InvoiceService::findCart();
if ($invoice != null) {
    $details = InvoiceService::getDetails($invoice->id);
    $products = array();
    foreach ($details as $index => $detail) {
       $products[$index] = ProductService::findById($detail->productId);
    }
    $total = InvoiceService::computeTotal($invoice->id);

    if (isset($_POST['action']) && $_POST['action'] == 'checkout') {
        $address = $_POST['address'];
        $checkedoutInvoice = InvoiceService::checkout($invoice->id, $address, $total);
        if ($checkedoutInvoice != null) {
            include_once './views/checkoutSuccess.php';        
            die;
        }
    }
}

include_once './views/checkout.php';