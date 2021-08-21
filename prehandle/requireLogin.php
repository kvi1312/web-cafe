<?php
if(session_id() == ''){
    //session has not started
    session_start();
}

if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
} else {
    header ('Location: /htdocs-update/login.php') ;
}