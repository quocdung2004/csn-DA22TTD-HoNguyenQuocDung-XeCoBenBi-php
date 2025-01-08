<?php
    include "copy_productClass.php";
    $product = new product;
    $datlich_id = $_GET['datlich_id'];
    $delete_datlich = $product->delete_datlich($datlich_id);
    header('Location:lsBaoDuong.php');
?>