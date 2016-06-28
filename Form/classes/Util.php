<?php
date_default_timezone_set("America/Bogota");

/**
 * Description of Util
 * Funcion donde configuramos la Informacion de nuestro servicio
 * @author Alexander Londoño Espejo.
 */
class Util {

    /**
     *
     * @var string $strUrlPlaceToPay;
     */
    public $strUrlPlaceToPay = 'placetopay.wsdl';

    /**
     *
     * @var string $strTranKey
     */
    public $strTranKey = '024h1IlD';


     /**
     *
     * @var string $strLogin
     */
    public $strLogin = '6dd490faf9cb87a9862245da41170ff2';
    /**
     *
     * @var object $_singleton
     */
    private static $_singleton;

    public static function instance() {
        if (!isset(self::$_singleton)) {
            self::$_singleton = new Util();
        }
        return self::$_singleton;
    }

    /**
     * Método para return el tranKey con sha1
     * [getTranKey description]
     * @param  [type] $strTranKey [description]
     * @param  [type] $strSeed    [description]
     * @return [type]             [description]
     */
    public function getTranKey($strTranKey, $strSeed) {
        $strResponse = '';
        if ($strTranKey !== '' && $strSeed !== '') {
            $strResponse = sha1($strSeed . $strTranKey, false);
        }
        return $strResponse;
    }

    /**
     * Método para retornar la semilla
     * [getSeed description]
     * @return [type] [description]
     */
    public function getSeed() {
        return date('c');
    }

    /**
     * Metodo para obtener la Ip del usuario
     * [getUserIP description]
     * @return [type] [description]
     */
    public function getUserIP() {
        $client = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote = $_SERVER['REMOTE_ADDR'];

        if (filter_var($client, FILTER_VALIDATE_IP)) {
            $ip = $client;
        } elseif (filter_var($forward, FILTER_VALIDATE_IP)) {
            $ip = $forward;
        } else {
            $ip = $remote;
        }
        return $ip;
    }

}
