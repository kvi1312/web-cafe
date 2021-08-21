<?php
class PurchaseDetailModel {
   
    public $id;
    public $productId;
    
    public $amount;
    public $price;

	// P_ID	I_ID	PD_AMOUNT	PD_PRICE


    // $data la mot array
    function __construct($data) {
        $this->productId = $data['P_ID'];
        $this->id = $data['I_ID'];
        $this->amount = $data['PD_AMOUNT'];
        $this->price = $data['PD_PRICE'];
        
    }

}