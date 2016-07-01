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

    /** se valida que los datos para crear la transaction todos esten corrector
     * [validDataCreateTransaction description]
     * @return [type] [description]
     */
    public function validDataCreateTransaction() {
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
        //$objAuth->additional [] = new Item();
        return $objAuth;
    }

    /**
     * Metodo para realizar la trasaccion
     * [createTransaction description]
     * @return [type] [description]
     */
    public function createTransaction() {
        $objPayer = new Person();
        $objPayer->documentType = 'CC';
        $objPayer->document = '1038114';
        $objPayer->firstName = 'Alexander';
        $objPayer->lastName = 'Londoño';
        $objPayer->company = 'placetopay';
        $objPayer->emailAddress = 'usuario@admin.com';
        $objPayer->address = 'San juan';
        $objPayer->city = 'Medellin';
        $objPayer->province = 'antioquia';
        $objPayer->country = 'colombia';
        $objPayer->phone = '32789008722';
        $objPayer->mobile = '3124354323';

        $objBuyer = new Person();
        $objBuyer->documentType = 'CC';
        $objBuyer->document = '1234561';
        $objBuyer->firstName = 'Pagos online';
        $objBuyer->lastName = 'medellin';
        $objBuyer->company = 'paga todo';
        $objBuyer->emailAddress = 'pagatodo@gmail.com';
        $objBuyer->address = 'Medellin san juan';
        $objBuyer->city = 'Medellin';
        $objBuyer->province = 'Antioquia';
        $objBuyer->country = 'Colombia';
        $objBuyer->phone = '2306646';
        $objBuyer->mobile = '3112569889';

        //envio o transporte
        $objShipping = new Person();
        $objShipping->documentType = 'CC';
        $objShipping->document = '1038114';
        $objShipping->firstName = 'Alexander';
        $objShipping->lastName = 'Londoño';
        $objShipping->company = 'placetopay';
        $objShipping->emailAddress = 'alexlondon07@gmail.com';
        $objShipping->address = 'Calle 44';
        $objShipping->city = 'Medellin';
        $objShipping->province = 'Antioquia';
        $objShipping->country = 'Colombia';
        $objShipping->phone = '3122195522';
        $objShipping->mobile = '3122195522';

        $objTransaction = new Transaction();
        $objTransaction->bankCode = '1022';
        $objTransaction->bankInterface = '0';
        //$objTransaction->returnURL = 'http://localhost:3000/GitHub/test-payment-pse/Form/classes/';
        $objTransaction->returnURL = 'http://produccion.secuencia24.com/alex';
        $objTransaction->reference = '4';
//        $objTransaction->reference = Util::instance()->getSeed();
        $objTransaction->description = 'Testing Payment';
        $objTransaction->language = 'ES';
        $objTransaction->currency = 'COP';
        $objTransaction->totalAmount = '120000';
        $objTransaction->taxAmount = '0';
        $objTransaction->devolutionBase = '0';
        $objTransaction->tipAmount = 'null';
        $objTransaction->payer = $objPayer;
        $objTransaction->buyer = $objBuyer;
        $objTransaction->shipping = $objShipping;
        $objTransaction->ipAddress = '190.159.71.15';
        //$objTransaction->ipAddress = Util::instance()->getUserIP();
        $objTransaction->userAgent = 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.103 Safari/537.36';

        $objResponse = new stdClass();
        $objResponse->auth = $this->getAuth();
        $objResponse->transaction = $objTransaction;

        $objResponse = new stdClass();
        $objResponse->auth = $this->getAuth();
        $objResponse->transaction = $objTransaction;

        // echo "<pre>";
        // print_r($objResponse);
        // exit();
        return $objResponse;
    }

}
