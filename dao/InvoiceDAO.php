<?php

include_once 'dbconnect.php';

include_once dirname(__DIR__).'/models/InvoiceModel.php';
include_once dirname(__DIR__).'/models/UserModel.php';
include_once dirname(__DIR__).'/models/PurchaseDetailModel.php';

include dirname(__DIR__).'/prehandle/getCurrentUser.php';

class InvoiceDAO {

    private static function queryAll($sql) {
        global $conn;

        $result = $conn->query($sql);

        $listUser = array();

        while ($row = $result->fetch_assoc()) { 
            array_push($listUser, new InvoiceModel($row));
        }

        return $listUser;
    }

    private static function queryTop($sql) {
        
        global $conn;

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // thanh cong
            $row = $result->fetch_assoc();
            return new InvoiceModel($row);
        } else {
            // that bai
            return null;
        }

    }

    public static function findById($id) {
        $sql = "SELECT * FROM invoice WHERE I_ID = $id";
        return InvoiceDAO::queryTop($sql);
    }

    public static function findNewestUncheckoutInvoice(){
        global $user;
        $sql = "SELECT * FROM invoice WHERE U_ID= '$user->id' AND I_STATUS = 'new' ORDER BY I_OPEN_TIME DESC";
        // echo $sql;
        return InvoiceDAO::queryTop($sql);
    }

    public static function createEmpty() {
        global $conn;
        global $user;
        $sql = "INSERT INTO invoice(U_ID, I_OPEN_TIME, I_STATUS) VALUES ($user->id, CURDATE(), 'new');";
        $result = $conn-> query($sql);
        if ($result == true) {
            $sql ="SELECT LAST_INSERT_ID() as id;";
            $result = $conn-> query($sql);
            $insertedId = $result->fetch_assoc()['id'];
            return InvoiceDAO::findById($insertedId);
        } else {
            // that bai
            return null;
        }
    }

    public static function close($invoiceId, $address, $total) {
        global $conn;
        $sql = "UPDATE INVOICE SET I_CHECKOUT_TIME = CURDATE(), I_STATUS = 'closed', I_TOTAL = '$total', I_SHIPPING_ADDRESS = '$address' WHERE I_ID = $invoiceId";
        $result = $conn->query($sql);
        if ($result == TRUE) {
            return InvoiceDAO::findById($invoiceId);
        } else {
            // that bai
            return null;
        }
    }
}