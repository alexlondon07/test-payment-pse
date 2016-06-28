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
        $objTransaction->bankCode = '1022';
        $objTransaction->bankInterface = '0';
        $objTransaction->returnURL = '  http://localhost:8888/GitHub/test-payment-pse/Form/classes/returnUrl.php';


        $objTransaction->reference = '11vvv-95122';
//        $objTransaction->reference = Util::instance()->getSeed();
        $objTransaction->description = '';
        $objTransaction->language = '';
        $objTransaction->currency = 'COP';
        $objTransaction->totalAmount = '100';
        $objTransaction->taxAmount = '0';
        $objTransaction->devolutionBase = '0';
        $objTransaction->tipAmount = '0';
        $objTransaction->payer = $objPayer;
        $objTransaction->bayer = $objBuyer;
        $objTransaction->shipping = $objShipping;
        $objTransaction->ipAddress = Util::instance()->getUserIP();
        $objTransaction->userAgent = '';

        $objResponse = new stdClass();
        $objResponse->auth = $this->getAuth();
        $objResponse->transaction = $objTransaction;

        $objResponse = new stdClass();
        $objResponse->auth = $this->getAuth();
        $objResponse->transaction = $objTransaction;
    }

}
