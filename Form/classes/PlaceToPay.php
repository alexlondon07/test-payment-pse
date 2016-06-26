<?php
include_once 'WebServicesClient.php';
include_once 'Util.php';
include_once 'PlaceToPayDTO.php';

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

}
