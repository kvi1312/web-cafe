<?php

include_once 'dbconnect.php';

include_once dirname(__DIR__).'/models/ProductModel.php';

class ProductDAO {

    private static function queryAll($sql) {
        global $conn;

        $result = $conn->query($sql);

        $listProduct = array();

        while ($row = $result->fetch_assoc()) { 
            array_push($listProduct, new ProductModel($row));
        }

        return $listProduct;
    }

    private static function queryTop($sql) {
        
        global $conn;

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // thanh cong
            $row = $result->fetch_assoc();
            return new ProductModel($row);
        } else {
            // that bai
            return null;
        }

    }

    public static function findById($id) {
        $sql = "SELECT * FROM PRODUCT WHERE P_ID = $id";
        return ProductDAO::queryTop($sql);
    }

    public static function findAllByName($name) {
        $sql = "SELECT * FROM PRODUCT WHERE P_NAME = '$name'";
        return ProductDAO::queryAll($sql);
    }

    public static function count() {
        global $conn;
        $sql = "SELECT COUNT(*) as nb FROM PRODUCT ";
        $result = $conn-> query($sql);
        if ($result ->num_rows >0){
            return $result ->fetch_assoc()['nb'];
        }
        return 0;
    }

    public static function countGroupByName() {
        global $conn;
        $sql = "SELECT * FROM PRODUCT GROUP BY P_NAME";
        $result = $conn-> query($sql);
        $count=0;
        while ($row = $result->fetch_assoc()) { 
            $count++;
        }
        return $count;
    }

    public static function countByCagetoryGroupByName($cagetory) {
        global $conn;
        $cagetory_id= $cagetory->id;
        $sql = "SELECT * FROM PRODUCT GROUP BY P_NAME having C_ID= $cagetory_id";
        $result = $conn-> query($sql);
        $count=0;
        while ($row = $result->fetch_assoc()) { 
            $count++;
        }
        return $count++;
    }

    public static function findAll() {
        $sql = "SELECT * FROM PRODUCT";
        return ProductDAO::queryAll($sql);
    }
    
    public static function findAllLimit($offset, $limit) {
        $sql = "SELECT * FROM PRODUCT group by P_NAME order by P_ID LIMIT $limit OFFSET $offset";
        return ProductDAO::queryAll($sql);
    }

    public static function findAllByCagetoryLimit($cagetory, $offset, $limit) {
        $cagetory_id = $cagetory->id;
        $sql = "SELECT * FROM PRODUCT where c_id= $cagetory_id group by P_NAME order by P_ID LIMIT $limit OFFSET $offset";
        return ProductDAO::queryAll($sql);
    }

    public static function FindQueryString($queryString){
        $sql ="SELECT * FROM PRODUCT WHERE P_NAME LIKE '%$queryString%'";
            return ProductDAO::queryAll($sql);
    }

    
}
