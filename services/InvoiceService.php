<?php

include_once dirname(__DIR__).'/dao/InvoiceDAO.php';
include_once dirname(__DIR__).'/dao/PurchaseDetailDAO.php';
include_once dirname(__DIR__).'/models/UserModel.php';

class InvoiceService {

    public static function findCart() {
        return InvoiceDAO::findNewestUncheckoutInvoice();
    }

    public static function addToCart($invoiceId, $productId, $amount) {
        $detail = PurchaseDetailDAO::findById($invoiceId, $productId);
        if ($detail != null) {
            $oldAmount = $detail->amount;
            return PurchaseDetailDAO::save($invoiceId, $productId, $oldAmount + $amount);
        } else return PurchaseDetailDAO::save($invoiceId, $productId, $amount);
        
    } 
    
    public static function removeProduct($invoiceId, $productId) {
        return PurchaseDetailDAO::delete($invoiceId, $productId);
    }

    public static function setAmount($invoiceId, $productId, $amount){
        return PurchaseDetailDAO::save($invoiceId, $productId, $amount);
    }

    public static function createInvoice() {
        return InvoiceDAO::createEmpty();
    }    

    public static function computeTotal($invoiceId){
        $details = PurchaseDetailDAO::findAllByInvoice($invoiceId);
        $sum= 0;
        foreach ($details as $detail){
            $sum += $detail ->amount * $detail ->price;
        }
        return $sum;
    }

    public static function getDetails($invoiceId){
        return PurchaseDetailDAO::findAllByInvoice($invoiceId);
    }

    public static function checkout($invoiceId, $address, $total) {
        return InvoiceDAO::close($invoiceId, $address, $total);
    }

    // public static function checkout($invoiceId){
    //     $total = computeTotal($invoiceId)
    //     return InvoiceDAO::checkout($total);
    // }
}

