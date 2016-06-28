<?php
/**
 * Description of Test
 *
 * @author Alexander Londoño Espejo.
 */
class Test {

  /**
   * Metodo para traer los Bancos de forma manual, ya que el servicio no conecta.
   * [getBankTest description]
   * @return [type] [description]
   */
    public function getBankTest(){

        $arrresponse = array();

        $objBank1 = new stdClass();
        $objBank1->bankCode = 1040;
        $objBank1->bankName = 'BANCO AGRARIO';
        $arrresponse[] = $objBank1;

        $objBank2 = new stdClass();
        $objBank2->bankCode = 1032;
        $objBank2->bankName = 'BANCO CAJA SOCIAL';
        $arrresponse[] = $objBank2;

        $objBank3 = new stdClass();
        $objBank3->bankCode = 1132;
        $objBank3->bankName = 'BANCO CAJA SOCIAL DESARROLLO';
        $arrresponse[] = $objBank3;

        $objBank4 = new stdClass();
        $objBank4->bankCode = 1019;
        $objBank4->bankName = 'BANCO COLPATRIA DESARROLLO';
        $arrresponse[] = $objBank4;

        $objBank5 = new stdClass();
        $objBank5->bankCode = 1078;
        $objBank5->bankName = 'BANCO COLPATRIA UAT';
        $arrresponse[] = $objBank5;

        $objBank6 = new stdClass();
        $objBank6->bankCode = 1052;
        $objBank6->bankName = 'BANCO COMERCIAL AVVILLAS S.A.';
        $arrresponse[] = $objBank6;

        $objBank7 = new stdClass();
        $objBank7->bankCode = 1061;
        $objBank7->bankName = 'Banco Coomeva S.A., Bancoomeva';
        $arrresponse[] = $objBank7;

        $objBank8 = new stdClass();
        $objBank8->bankCode = 1016;
        $objBank8->bankName = 'BANCO COOPERATIVO COOPCENTRAL';
        $arrresponse[] = $objBank8;

        $objBank9 = new stdClass();
        $objBank9->bankCode = 1006;
        $objBank9->bankName = 'Banco Corpbanca';
        $arrresponse[] = $objBank9;

        $objBank10 = new stdClass();
        $objBank10->bankCode = 1099;
        $objBank10->bankName = 'Banco Corpbanca (Migracion)';
        $arrresponse[] = $objBank10;

        $objBank10 = new stdClass();
        $objBank10->bankCode = 1051;
        $objBank10->bankName = 'BANCO DAVIVIENDA';
        $arrresponse[] = $objBank10;

        $objBank11 = new stdClass();
        $objBank11->bankCode = 10512;
        $objBank11->bankName = 'BANCO DAVIVIENDA Desarrollo';
        $arrresponse[] = $objBank11;

        $objBank12 = new stdClass();
        $objBank12->bankCode = 8888;
        $objBank12->bankName = 'BANCO DE BOGOTA 3.0';
        $arrresponse[] = $objBank12;

        $objBank13 = new stdClass();
        $objBank13->bankCode = 1001;
        $objBank13->bankName = 'BANCO DE BOGOTA DESARROLLO 2013';
        $arrresponse[] = $objBank13;

        $objBank14 = new stdClass();
        $objBank14->bankCode = 1037;
        $objBank14->bankName = 'BANCO DE BOGOTA PRUEBAS 3.0';
        $arrresponse[] = $objBank14;

        $objBank15 = new stdClass();
        $objBank15->bankCode = 3333;
        $objBank15->bankName = 'BANCO DE BOGOTA PRUEBAS 3.0';
        $arrresponse[] = $objBank15;

        $objBank16 = new stdClass();
        $objBank16->bankCode = 1023;
        $objBank16->bankName = 'BANCO DE OCCIDENTE';
        $arrresponse[] = $objBank16;

        $objBank17 = new stdClass();
        $objBank17->bankCode = 1010;
        $objBank17->bankName = 'BANCO GNB COLOMBIA (ANTES HSBC)';
        $arrresponse[] = $objBank17;

        $objBank18 = new stdClass();
        $objBank18->bankCode = 1062;
        $objBank18->bankName = 'Banco Falabella';
        $arrresponse[] = $objBank18;

        $objBank19 = new stdClass();
        $objBank19->bankCode = 1012;
        $objBank19->bankName = 'Banco GNB Sudameris';
        $arrresponse[] = $objBank19;

        $objBank20 = new stdClass();
        $objBank20->bankCode = 1077;
        $objBank20->bankName = 'Banco Mis Ahorritos';
        $arrresponse[] = $objBank20;

        $objBank21 = new stdClass();
        $objBank21->bankCode = 1060;
        $objBank21->bankName = 'Banco Pichincha S.A';
        $arrresponse[] = $objBank21;

        $objBank22 = new stdClass();
        $objBank22->bankCode = 1002;
        $objBank22->bankName = 'BANCO POPULAR';
        $arrresponse[] = $objBank22;

        $objBank23 = new stdClass();
        $objBank23->bankCode = 10029;
        $objBank23->bankName = 'BANCO POPULAR WSE 3.0';
        $arrresponse[] = $objBank23;

        $objBank24 = new stdClass();
        $objBank24->bankCode = 1012;
        $objBank24->bankName = 'Banco GNB Sudameris';
        $arrresponse[] = $objBank24;

        $objBank25 = new stdClass();
        $objBank25->bankCode = 1101;
        $objBank25->bankName = 'Banco PSE';
        $arrresponse[] = $objBank25;

        $objBank26 = new stdClass();
        $objBank26->bankCode = 1035;
        $objBank26->bankName = 'Banco Tequendama';
        $arrresponse[] = $objBank26;

        $objBank27 = new stdClass();
        $objBank27->bankCode = 1022;
        $objBank27->bankName = 'Banco Union Colombiano';
        $arrresponse[] = $objBank27;

        $objBank28 = new stdClass();
        $objBank28->bankCode = 1055;
        $objBank28->bankName = 'Banco Web Service ACH';
        $arrresponse[] = $objBank28;

        $objBank29 = new stdClass();
        $objBank29->bankCode = 3155;
        $objBank29->bankName = 'Banco Web Service ACH WSE 3.0';
        $arrresponse[] = $objBank29;

        $objBank30 = new stdClass();
        $objBank30->bankCode = 10072;
        $objBank30->bankName = 'BANCOLOMBIA DATAPOWER';
        $arrresponse[] = $objBank30;

        $objBank31 = new stdClass();
        $objBank31->bankCode = 10071;
        $objBank31->bankName = 'BANCOLOMBIA DESARROLLO';
        $arrresponse[] = $objBank31;

        $objBank32 = new stdClass();
        $objBank32->bankCode = 1007;
        $objBank32->bankName = 'BANCOLOMBIA QA';
        $arrresponse[] = $objBank32;

        $objBank33 = new stdClass();
        $objBank33->bankCode = 1013;
        $objBank33->bankName = 'BBVA COLOMBIA S.A.';
        $arrresponse[] = $objBank33;

        $objBank34 = new stdClass();
        $objBank34->bankCode = 1009;
        $objBank34->bankName = 'Citibank Colombia S.A.';
        $arrresponse[] = $objBank34;

        $objBank35 = new stdClass();
        $objBank35->bankCode = 1014;
        $objBank35->bankName = 'HELM BANK S.A. WSE 3.0';
        $arrresponse[] = $objBank35;

        $objBank36 = new stdClass();
        $objBank36->bankCode = 1098;
        $objBank36->bankName = 'HELM BANK S.A...';
        $arrresponse[] = $objBank36;

        $objBank37 = new stdClass();
        $objBank37->bankCode = 1011;
        $objBank37->bankName = 'Proyecto antifraude- entidad financiera';
        $arrresponse[] = $objBank37;

        return $arrresponse;
    }
}
