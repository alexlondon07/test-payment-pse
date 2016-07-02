<?php
include_once 'classes/PlaceToPay.php';
if (isset($_POST)) {
    //$objRequest = (object)$_POST;
	//print_r($objForm);
	$objRequest = new stdClass();
	$objPlaceToPay = new PlaceToPay();

	$response = $objPlaceToPay->createTransaction($objRequest);
	if(isset($response)){
		if($response->returnCode === 'SUCCESS'){
			//Retornamos a la URL  del banco
			header ("Location: $response->bankURL");
		}
	}
}


