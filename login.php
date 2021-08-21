<?php
 
session_start();

include_once __DIR__.'/models/UserModel.php';
include_once __DIR__.'/services/UserService.php';

if(isset($_POST['action']) && $_POST['action']=='login'){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $user = UserService::login($username, $password);
    if ( $user != null){
        $_SESSION['user']= $user;
        header ("location: /htdocs-update/index.php");
        die;
    }
    else {
        $error_message = "ĐĂNG NHẬP THẤT BẠI";
    }

}

if(isset($_POST['action']) && $_POST['action']=='register'){
    $user = new UserModel(null);
    $user->email = $_POST['email'];
    $user->fullname = $_POST['fullname'];
    $user->phone = $_POST['phone'];
    $user->birthday = $_POST['birthday'];
    $user->password = $_POST['password'];
    
    


    if (UserService::register($user)) {
        header ("location: /htdocs-update/login.php");
        die;
    }
    else {
        $error_message = "ĐĂNG KÝ THẤT BẠI";
    }

}

include_once './views/login.php';