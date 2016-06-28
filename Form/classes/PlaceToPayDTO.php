<?php

include_once 'Auth.php';
include_once 'Util.php';
include_once 'Item.php';

/**
 * Description of PlaceToPayDTO
 *
 * @author Alexander Londoño Espejo
 */
class PlaceToPayDTO {

    /**
     * Metodo para validar los datos
     * [validData description]
     * @param  [type] $objParams [description]
     * @return [type]            [description]
     */
    public function validData($objParams) {
        return true;
    }

    /**
     * Metodo para poder obtener la lista de bancos disponibles
     * [getDataBankList description]
     * @return [type] [description]
     */
    public function getDataBankList() {
        $objReponse = new stdClass();
        $objReponse->auth = $this->getAuth();
        return $objReponse;
    }

    /**
     * Metodo para realizar la autenticacion al servicio
     * [getAuth description]
     * @return [type] [description]
     */
    public function getAuth() {
        $objAuth = new Auth ();
        $strSeed = Util::instance()->getSeed();
        $objAuth->login = Util::instance()->strLogin;
        $objAuth->seed = $strSeed;
        $objAuth->tranKey = Util::instance()->getTranKey(
                Util::instance()->strTranKey, $strSeed);
        $objAuth->additional [] = new Item();
        return $objAuth;
    }

    /**
     * Metodo para realizar la trasaccion
     * [getTransaction description]
     * @return [type] [description]
     */
    public function getTransaction() {
        $objPayer = new Person();
        $objPayer->documentType = '';
        $objPayer->document = '';
        $objPayer->firstName = '';
        $objPayer->lastName = '';
        $objPayer->company = '';
        $objPayer->emailAddress = '';
        $objPayer->address = '';
        $objPayer->city = '';
        $objPayer->province = '';
        $objPayer->country = '';
        $objPayer->phone = '';
        $objPayer->mobile = '';

        $objBuyer = new Person();
        $objBuyer->documentType = '';
        $objBuyer->document = '';
        $objBuyer->firstName = '';
        $objBuyer->lastName = '';
        $objBuyer->company = '';
        $objBuyer->emailAddress = '';
        $objBuyer->address = '';
        $objBuyer->city = '';
        $objBuyer->province = '';
        $objBuyer->country = '';
        $objBuyer->phone = '';
        $objBuyer->mobile = '';

        $objShipping = new Person();
        $objShipping->documentType = '';
        $objShipping->document = '';
        $objShipping->firstName = '';
        $objShipping->lastName = '';
        $objShipping->company = '';
        $objShipping->emailAddress = '';
        $objShipping->address = '';
        $objShipping->city = '';
        $objShipping->province = '';
        $objShipping->country = '';
        $objShipping->phone = '';
        $objShipping->mobile = '';

        $objTransaction = new Transaction();
        $objTransaction->bankCode = '';
        $objTransaction->bankInterface = '';
        $objTransaction->returnURL = '';
        $objTransaction->reference = '';
        $objTransaction->description = '';
        $objTransaction->language = '';
        $objTransaction->currency = '';
        $objTransaction->totalAmount = '';
        $objTransaction->taxAmount = '';
        $objTransaction->devolutionBase = '';
        $objTransaction->tipAmount = '';
        $objTransaction->payer = $objPayer;
        $objTransaction->bayer = $objBuyer;
        $objTransaction->shipping = $objShipping;
        $objTransaction->ipAddress = '';
        $objTransaction->userAgent = '';

        $objResponse = new stdClass();
        $objResponse->auth = $this->getAuth();
        $objResponse->transaction = $objTransaction;
    }

}
