<?php
class UserModel {
   
    public $id;
    public $fullname;
    public $email;
    public $password;
    // public $address;
    public $role;
    public $phone;

    // $data la mot array
    function __construct($data) {
        if ($data == null) return;
        $this->id = $data['U_ID'];
        $this->fullname = $data['U_NAME'];
        $this->email= $data['U_EMAIL'];
        $this->password = $data['U_PASSWORD'];
        // $this->address = $data['U_ADDRESS'];
        $this->role = $data['U_ROLE'];
        $this->phone= $data['U_PHONE'];
    }

}