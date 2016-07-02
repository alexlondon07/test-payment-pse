<?php
include_once 'PlaceToPay.php';
$objRequest = new stdClass();
$objPlaceToPay = new PlaceToPay();
$response = $objPlaceToPay->createTransaction($objRequest);
if(isset($response)){
	if($response->returnCode === 'SUCCESS'){
		//Retornamos a la URL  del banco
		header ("Location: $response->bankURL");
	}
}
