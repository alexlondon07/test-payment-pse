<?php
include_once 'WebServicesClient.php';
include_once 'Util.php';
include_once 'PlaceToPayDTO.php';
include_once 'Person.php';
include_once 'Transaction.php';

/**
 * Description of ServicePlaceToPay
 *
 * @author Alexander Londoño Espejo.
 */
class PlaceToPay {
    /**
     * [getBankList description]
     * Obtiene la lista de bancos disponibles para el establecimiento de comercio en el sistema PSE de ACH Colombia.
     * @param  [type] $objData [description]
     * @return [type]          [description]
     */
    public function getBankList($objData) {

        $objWebService = new WebServicesClient();
        $url = Util::instance()->strUrlPlaceToPay;
        if ($objWebService->webServices($url) === true) {

            $method = 'getBankList';
            $objParams = new PlaceToPayDTO();

            if ($objParams->validData($objData) === true) {
                $objWebService->executeMethodWs($method
                        , $url
                        , $objParams->getDataBankList($objData));
                return $objWebService->response->getBankListResult->item;
            } else {
                echo 'Datos no validos para consultar bancos';
            }
        } else {
            echo 'Error validando url de web service';
        }
    }

    /**
     * Metodo para crear una transaccion
     * [createTransaction description]
     * @param  [type] $objData [description]
     * @return [type]          [description]
     */
    public function createTransaction($objData) {
        $objWebService = new WebServicesClient();
        if ($objWebService->webServices($this->_urlWebService) === true) {
            $method = 'createTransaction';
            $objParams = new PlaceToPayDTO();

            if ($objParams->validDataCreateTransaction($objData) === true) {
                $objWebService->executeMethodWs($method
                        , $this->_urlWebService
                        , $objParams->createTransaction($objData));
                return $objWebService->response->createTransactionResult;
            } else {
                echo 'Datos no validos para crear la transaction';
            }
        } else {
            echo 'Error validando url de web service';
        }
    }

}
