<?php
class ResponseAPI {
    
    public $errorCode; // 0 for success, != 0 if has error 
    public $message; // message to so if nessesary
    public $data; // null or array of json object

    function __construct($errorCode, $message, $data){
        $this->errorCode = $errorCode;
        $this->message = isset($message) ? $message: 'Api response message';
        $this->data = (isset($data) && $data->length > 0) ? $data: null;
    }

    public static function Success($message, $data) {
        return json_encode(new ResponseAPI(0, $message, $data));
    }

    public static function Error($code, $message) {
        return json_encode(new ResponseAPI($code, $message, null));
    }

}