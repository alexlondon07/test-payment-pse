<?php
include_once 'PlaceToPay.php';
$objRequest = new stdClass();
$objPlaceToPay = new PlaceToPay();
$var = $objPlaceToPay->getBankList($objRequest);
//Mostramos la lista de bancos disponibles√
print_r($var);
