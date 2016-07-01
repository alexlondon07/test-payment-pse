<?php
include_once 'PlaceToPay.php';
$objRequest = new stdClass();
$objPlaceToPay = new PlaceToPay();
//$arrBank = $objPlaceToPay->getBankList($objRequest);
$response = $objPlaceToPay->createTransaction($objRequest);
$response= (get_object_vars($response));
if(isset($response)){
	if($response['returnCode']=='SUCCESS'){
		//Retornamos a la URL  del banco
		$bankURL=$response['bankURL'];
		header ("Location: $bankURL");
	}
}

// include_once 'Test.php';
// //$objTest = new Test();

// //$arrBank = $objTest->getBankTest();
// //Mostramos la lista de bancos disponibles
// $optionBank = '';
// foreach ($arrBank as $key => $value) {
//     $optionBank .= "<option value='" . $value->bankCode . "'>" . $value->bankName . "</option>";
// }



