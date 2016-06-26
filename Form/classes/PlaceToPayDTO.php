<?php
include_once 'Auth.php';
include_once 'Util.php';
include_once 'Item.php';
/**
 * Description of PlaceToPayDTO
 *
 * @author Alexander Londoño Espejo.
 */
class PlaceToPayDTO {

    //Se valida que los datos se han correctos
    public function validData($objParams) {
        return true;
    }

    /**
     * [getBankList description]
     * Obtiene la lista de bancos disponibles para el establecimiento de comercio en el sistema PSE de ACH Colombia.
     * @param  [type] $objData [description]
     * @return [type]          [description]
     */
    public function getDataBankList($objParams) {
        //en caso de que se necesite algùn item
        $objAuth = new Auth ();
        $strSeed = Util::instance()->getSeed();
        $objAuth->login =  Util::instance()->strLogin;
        $objAuth->seed = $strSeed;
        $objAuth->tranKey = Util::instance()->getTranKey(
                Util::instance()->strTranKey, $strSeed);
        $objAuth->additional [] = new Item();

        $objReponse = new stdClass();
        $objReponse->auth = $objAuth;
        return $objReponse;
    }

    /**
     * [createTransaction description]
     * Solicita la creación de una transacción. En los datos de la solicitud se especifica quién es el pagador, el comprador y el despacho.
     * Así mismo para cuál de los bancos habilitados se hace la petición y a que URL de retorno debe el banco redirigir al cuenta habiente.
     * @param  [type] $objData [description]
     * @return [type]          [description]
     */
    public function createDataTransaction($objParams) {
        $objAuth = new Auth ();
        $strSeed = Util::instance()->getSeed();
        $objAuth->login =  Util::instance()->strLogin;
        $objAuth->seed = $strSeed;
        $objAuth->tranKey = Util::instance()->getTranKey(
                Util::instance()->strTranKey, $strSeed);

        //Parametros de Entrada √
        $firstName = (isset($_POST['firstName']) ? $_POST['firstName'] : '');
        $documentType = (isset($_POST['documentType']) ? $_POST['documentType'] : 'CC');
        $document = (isset($_POST['document']) ? $_POST['document'] : '0');
        $emailAddress = (isset($_POST['emailAddress']) ? $_POST['emailAddress'] : '');
        $address= (isset($_POST['address']) ? $_POST['address'] : '');
        $city = (isset($_POST['city']) ? $_POST['city'] : '');
        $province = (isset($_POST['province']) ? $_POST['province'] : '');
        $country = (isset($_POST['country']) ? $_POST['country '] : '');
        $phone = (isset($_POST['phone']) ? $_POST['phone'] : '');
        $mobile = (isset($_POST['mobile']) ? $_POST['mobile'] : '');

        //Informacion del Banco
        $bankCode = (isset($_POST['bankCode']) ? $_POST['bankCode'] : '');
        $bankName= (isset($_POST['bankName']) ? $_POST['bankName'] : '');

        //CreditConcept
        $entityCode= (isset($_POST['entityCode']) ? $_POST['entityCode'] : '');
        $serviceCode= (isset($_POST['serviceCode']) ? $_POST['serviceCode'] : '');
        $amountValue= (isset($_POST['amountValue']) ? $_POST['amountValue'] : '');
        $taxValue= (isset($_POST['taxValue']) ? $_POST['taxValue'] : '');
        $taxValue= (isset($_POST['taxValue']) ? $_POST['taxValue'] : '');
        $taxValue= (isset($_POST['taxValue']) ? $_POST['taxValue'] : '');
        $description= (isset($_POST['description']) ? $_POST['description'] : '');

        //PSETransactionRequest
        $bankInterface= (isset($_POST['bankInterface']) ? $_POST['bankInterface'] : '');
        $returnURL= (isset($_POST['returnURL']) ? $_POST['returnURL'] : '');
        $reference= (isset($_POST['reference']) ? $_POST['reference'] : '');
        $language= (isset($_POST['language']) ? $_POST['language'] : '');
        $currency= (isset($_POST['currency']) ? $_POST['currency'] : 'COP');
        $totalAmount= (isset($_POST['totalAmount']) ? doubleval($_POST['totalAmount']) : 0);
        $taxAmount= (isset($_POST['taxAmount']) ? doubleval($_POST['taxAmount']) : 0);
        $devolutionBase= (isset($_POST['devolutionBase']) ? doubleval($_POST['devolutionBase']) : 0);

        $ipAddress= (isset($_POST['ipAddress']) ? ($_POST['ipAddress']) : '');
        $userAgent= (isset($_POST['userAgent']) ? ($_POST['userAgent']) : '');

        //Aqui hacemos el proceso de la Trasaccion.
        //code...
    }

}
