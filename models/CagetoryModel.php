<?php
class CagetoryModel {

    public $id;
    public $name;
    public $code;

    // $data la mot array
    function __construct($data) {
        $this->id = $data['C_ID'];
        $this->name = $data['C_NAME'];
        $this->code = $data['C_CODE'];
    }

}