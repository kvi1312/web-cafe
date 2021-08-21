<?php
class InvoiceModel {
   
    public $id;
    // public $cagetory;
    public $userID;
    public $createTime;
    public $closeTime;
    public $status;
    public $address;
    public $total;
    
	// I_ID	U_ID	I_OPEN_TIME	I_CHECKOUT_TIME	I_STATUS	I_SHIPPING_ADDRESS	I_TOTAL


    // $data la mot array
    function __construct($data) {
        $this->id = $data['I_ID'];
        // $this->cagetory = $data['C_ID'];
        $this->userID = $data['U_ID'];
        $this->createTime = $data['I_OPEN_TIME'];
        $this->closeTime = $data['I_CHECKOUT_TIME'];
        $this->status = $data['I_STATUS'];
        $this->address = $data['I_SHIPPING_ADDRESS'];
        $this->total = $data['I_TOTAL'];
    }

}