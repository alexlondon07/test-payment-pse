<?php
/**
 * Description of Test
 *
 * @author Alexander Londoño Espejo.
 */
class Test {

  /**
   * Metodo para traer los Bancos de forma manual, ya que el servicio no conecta.
   * [getBank description]
   * @return [type] [description]
   */
    public function getBank(){

        $arrresponse = array();
        $objBank = new stdClass();

        $objBank->bankCode = 1040;
        $objBank->bankName = 'BANCO AGRARIO';
        $arrresponse[] = $objBank;

        $objBank->bankCode = 1032;
        $objBank->bankName = 'BANCO CAJA SOCIAL';
        $arrresponse[] = $objBank;

        $objBank->bankCode = 1132;
        $objBank->bankName = 'BANCO CAJA SOCIAL DESARROLLO';
        $arrresponse[] = $objBank;

        $objBank->bankCode = 1019;
        $objBank->bankName = 'BANCO COLPATRIA DESARROLLO';
        $arrresponse[] = $objBank;

        $objBank->bankCode = 1078;
        $objBank->bankName = 'BANCO COLPATRIA UAT';
        $arrresponse[] = $objBank;

        $objBank->bankCode = 1052;
        $objBank->bankName = 'BANCO COMERCIAL AVVILLAS S.A.';
        $arrresponse[] = $objBank;

        $objBank->bankCode = 1061;
        $objBank->bankName = 'Banco Coomeva S.A., Bancoomeva';
        $arrresponse[] = $objBank;

        $objBank->bankCode = 1016;
        $objBank->bankName = 'BANCO COOPERATIVO COOPCENTRAL';
        $arrresponse[] = $objBank;

        $objBank->bankCode = 1006;
        $objBank->bankName = 'Banco Corpbanca';
        $arrresponse[] = $objBank;

        $objBank->bankCode = 1099;
        $objBank->bankName = 'Banco Corpbanca (Migracion)';
        $arrresponse[] = $objBank;

        $objBank->bankCode = 1051;
        $objBank->bankName = 'BANCO DAVIVIENDA';
        $arrresponse[] = $objBank;

        $objBank->bankCode = 10512;
        $objBank->bankName = 'BANCO DAVIVIENDA Desarrollo';
        $arrresponse[] = $objBank;

        $objBank->bankCode = 8888;
        $objBank->bankName = 'BANCO DE BOGOTA 3.0';
        $arrresponse[] = $objBank;

        $objBank->bankCode = 1001;
        $objBank->bankName = 'BANCO DE BOGOTA DESARROLLO 2013';
        $arrresponse[] = $objBank;

        $objBank->bankCode = 1037;
        $objBank->bankName = 'BANCO DE BOGOTA PRUEBAS 3.0';
        $arrresponse[] = $objBank;

        $objBank->bankCode = 3333;
        $objBank->bankName = 'BANCO DE BOGOTA PRUEBAS 3.0';
        $arrresponse[] = $objBank;

        $objBank->bankCode = 1023;
        $objBank->bankName = 'BANCO DE OCCIDENTE';
        $arrresponse[] = $objBank;

        $objBank->bankCode = 1010;
        $objBank->bankName = 'BANCO GNB COLOMBIA (ANTES HSBC)';
        $arrresponse[] = $objBank;

        $objBank->bankCode = 1062;
        $objBank->bankName = 'Banco Falabella';
        $arrresponse[] = $objBank;

        $objBank->bankCode = 1012;
        $objBank->bankName = 'Banco GNB Sudameris';
        $arrresponse[] = $objBank;

        $objBank->bankCode = 1077;
        $objBank->bankName = 'Banco Mis Ahorritos';
        $arrresponse[] = $objBank;

        $objBank->bankCode = 1060;
        $objBank->bankName = 'Banco Pichincha S.A';
        $arrresponse[] = $objBank;

        $objBank->bankCode = 1002;
        $objBank->bankName = 'BANCO POPULAR';
        $arrresponse[] = $objBank;

        $objBank->bankCode = 10029;
        $objBank->bankName = 'BANCO POPULAR WSE 3.0';
        $arrresponse[] = $objBank;

        $objBank->bankCode = 1012;
        $objBank->bankName = 'Banco GNB Sudameris';
        $arrresponse[] = $objBank;

        $objBank->bankCode = 1101;
        $objBank->bankName = 'Banco PSE';
        $arrresponse[] = $objBank;

        $objBank->bankCode = 1035;
        $objBank->bankName = 'Banco Tequendama';
        $arrresponse[] = $objBank;

        $objBank->bankCode = 1022;
        $objBank->bankName = 'Banco Union Colombiano';
        $arrresponse[] = $objBank;

        $objBank->bankCode = 1055;
        $objBank->bankName = 'Banco Web Service ACH';
        $arrresponse[] = $objBank;

        $objBank->bankCode = 3155;
        $objBank->bankName = 'Banco Web Service ACH WSE 3.0';
        $arrresponse[] = $objBank;

        $objBank->bankCode = 10072;
        $objBank->bankName = 'BANCOLOMBIA DATAPOWER';
        $arrresponse[] = $objBank;

        $objBank->bankCode = 10071;
        $objBank->bankName = 'BANCOLOMBIA DESARROLLO';
        $arrresponse[] = $objBank;

        $objBank->bankCode = 1007;
        $objBank->bankName = 'BANCOLOMBIA QA';
        $arrresponse[] = $objBank;

        $objBank->bankCode = 1013;
        $objBank->bankName = 'BBVA COLOMBIA S.A.';
        $arrresponse[] = $objBank;

        $objBank->bankCode = 1009;
        $objBank->bankName = 'Citibank Colombia S.A.';
        $arrresponse[] = $objBank;

        $objBank->bankCode = 1014;
        $objBank->bankName = 'HELM BANK S.A. WSE 3.0';
        $arrresponse[] = $objBank;

        $objBank->bankCode = 1098;
        $objBank->bankName = 'HELM BANK S.A...';
        $arrresponse[] = $objBank;

        $objBank->bankCode = 1011;
        $objBank->bankName = 'Proyecto antifraude- entidad financiera';
        $arrresponse[] = $objBank;

        return $arrresponse;
    }
}
