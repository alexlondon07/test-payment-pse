<?php
include_once 'PlaceToPay.php';
$objRequest = new stdClass();
$objPlaceToPay = new PlaceToPay();
//$arrBank = $objPlaceToPay->getBankList($objRequest);

echo '<pre>' . __FILE__ . ':' . __LINE__ . ' {' . print_r($objPlaceToPay->createTransaction($objRequest), true) . '}';
    exit;

//
//echo '<pre>';
//print_r($data);
//echo '<pre>';

include_once 'Test.php';
//$objTest = new Test();

//$arrBank = $objTest->getBankTest();
//Mostramos la lista de bancos disponibles
$optionBank = '';
foreach ($arrBank as $key => $value) {
    $optionBank .= "<option value='" . $value->bankCode . "'>" . $value->bankName . "</option>";
}
?>


