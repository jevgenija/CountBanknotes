<?php
require_once 'CountBanknotes.php';
session_start();
$postPrice = (int)filter_input(INPUT_POST, 'price', FILTER_DEFAULT);
if (!empty($postPrice)) {
    $_SESSION['price'] = $postPrice;
    
    $banknotes = CountBanknotes::Instance();
    $result = $banknotes->count($postPrice);
    $_SESSION['result'] = $result;
    
    header('Location: index.php');
    exit();
}

if(isset($_SESSION['result']) && !empty($_SESSION['result'])){
    $result = $_SESSION['result'];
    unset($_SESSION['result']);
}

if(isset($_SESSION['price']) && !empty($_SESSION['price'])){
    $price = $_SESSION['price'];
    unset($_SESSION['price']);
}else{
    $price = 0;
}

include_once('view.php');
