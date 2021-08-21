<?php

include_once 'dbconnect.php';

include_once dirname(__DIR__).'/models/CagetoryModel.php';

class CagetoryDAO {

    private static function queryAll($sql) {
        global $conn;

        $result = $conn->query($sql);

        $listProduct = array();

        while ($row = $result->fetch_assoc()) { 
            array_push($listProduct, new CagetoryModel($row));
        }

        return $listProduct;
    }

    private static function queryTop($sql) {
        
        global $conn;

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // thanh cong
            $row = $result->fetch_assoc();
            return new CagetoryModel($row);
        } else {
            // that bai
            return null;
        }

    }

    public static function findAll() {
        $sql = "SELECT * FROM CAGETORY";
        return CagetoryDAO::queryAll($sql);
    }
    
    public static function findOneByCode($code) {
        $sql = "SELECT * FROM CAGETORY where C_CODE = '$code'";
        return CagetoryDAO::queryTop($sql);
    }
}
