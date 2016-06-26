<?php
include_once 'PlaceToPay.php';
$objRequest = new stdClass();
$objPlaceToPay = new PlaceToPay();
$var = $objPlaceToPay->getBankList($objRequest);
print_r($var);
