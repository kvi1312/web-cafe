<?php

include_once dirname(__DIR__).'/dao/CagetoryDAO.php';

class CagetoryService {
    public static function findAll() {
        return CagetoryDAO::findAll();
    }

    // public static function findAll() {
    //     $cthds = CTDH_DAO::findByMaHd($mahd);
    //     ....
    //     $tongtien;

    //     return $tongtien;
    // }

}