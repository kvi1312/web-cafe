<?php

include_once '../services/ProductService.php';

if (isset($_GET['action']) && $_GET['action'] == 'list') {
    $query = $_GET['queryString'];
    $products = ProductService::searchProduct($query);
    echo json_encode($products);
}

if (isset($_POST['action']) && $_POST['action'] == 'delete') {
    echo "detete api is working";
}

