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

    /**
     * [createTransaction description]
     * Solicita la creación de una transacción. En los datos de la solicitud se especifica quién es el pagador, el comprador y el despacho.
     * Así mismo para cuál de los bancos habilitados se hace la petición y a que URL de retorno debe el banco redirigir al cuenta habiente.
     * @param  [type] $objData [description]
     * @return [type]          [description]
     */
    public function createTransaction($objData) {

    }

}
