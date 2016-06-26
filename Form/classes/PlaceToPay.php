<?php
/**
 * Description of ServicePlaceToPay
 *
 * @author Alexander
 */
class PlaceToPay {

    public function getBankList() {
        $objWebService = new WebServicesClient();
        $url = 'http://www.gmail.com';
        if ($objWebService->executeMethodWs($url) === true) {
            $method = '';
            $objWebService->executeMethodWs($method, $url);
        }
    }

}
