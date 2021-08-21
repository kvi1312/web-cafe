<?php

include_once dirname(__DIR__).'/dao/UserDAO.php';

class UserService {

    public static function login($username, $password) {
        return UserDAO::findAllByEmailAndPassword($username, $password);
    }

    public static function register($user) {
        return UserDAO::save($user);
    }    

}