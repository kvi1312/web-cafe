<?php

include_once 'dbconnect.php';

include_once dirname(__DIR__).'/models/InvoiceModel.php';
include_once dirname(__DIR__).'/models/PurchaseDetailModel.php';
include_once dirname(__DIR__).'/dao/ProductDAO.php';

class PurchaseDetailDAO {

    private static function queryAll($sql) {
        global $conn;

        $result = $conn->query($sql);

        $listUser = array();

        while ($row = $result->fetch_assoc()) { 
            array_push($listUser, new PurchaseDetailModel($row));
        }

        return $listUser;
    }

    private static function queryTop($sql) {
        global $conn;
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // thanh cong
            $row = $result->fetch_assoc();
            return new PurchaseDetailModel($row);
        } else {
            // that bai
            return null;
        }

    }

    public static function findById($invoiceId, $productId) {
        $sql = "SELECT * FROM PURCHASE_DETAIL WHERE I_ID = $invoiceId AND P_ID= $productId";
        return PurchaseDetailDAO::queryTop($sql);
    }

    public static function save($invoiceId, $productId, $amount){
        global $conn;
        $detail = PurchaseDetailDAO::findById($invoiceId, $productId);
        $product = ProductDAO::findById($productId);
        $price = $product->price;
        if($detail != null){
            $sql = "UPDATE purchase_detail SET PD_AMOUNT = $amount WHERE I_ID = $invoiceId AND P_ID= $productId";
        } else {
            $sql = "INSERT INTO purchase_detail(I_ID, P_ID, PD_AMOUNT, PD_PRICE) VALUE ($invoiceId, $productId, $amount, $price)";
        }
        $result =$conn-> query($sql);
        if ($result == TRUE){
            //thanh cong
            return PurchaseDetailDAO::findById($invoiceId, $productId);
        } else{
            //thatbai
            return null;
        }
    }

    public static function findAllByInvoice($invoiceId){
        $sql = "SELECT * FROM PURCHASE_DETAIL WHERE I_ID = $invoiceId";
        return PurchaseDetailDAO::queryAll($sql);
    }

    public static function delete($invoiceId, $productId) {
        global $conn;
        $detail = PurchaseDetailDAO::findById($invoiceId, $productId);
        $sql = "DELETE FROM purchase_detail WHERE I_ID = $invoiceId AND P_ID = $productId";
        $result = $conn->query($sql);
        if ($result == TRUE) {
            return $detail;
        } else {
            // that bai
            return null;
        }
    }
}