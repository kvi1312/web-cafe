<?php
if(session_id() == ''){
    //session has not started
    session_start();
}

if (isset($_SESSION['user']) && ($_SESSION['user']->role == 'admin')) {
    // print_r($_SESSION['user']);
    $user = $_SESSION['user'];
} else {
    header('Location: /htdocs-update/index.php');
}