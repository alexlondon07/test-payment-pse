<?php
/**
 * Description of Person
 * Clase para reflejar la información de una persona involucrada en una transacción
 * @author Alexander Londoño Espejo.
 */
class Person {
    /**
     * Tipo de documento de identificación de la persona [CC, CE, TI, PPN].
     * CC = Cédula de ciudanía colombiana
     * CE = Cédula de extranjería
     * TI = Tarjeta de identidad PPN = Pasaporte
     * NIT = Número de identificación tributaria
     * SSN = Social Security Number
     * @var string $documentType
     */
    public $documentType;

    /**
     * Número de identificación de la persona
     * @var string $document
     */
    public $document;

    /**
     *
     * @var string $firstName
     */
    public $firstName;

    /**
     *
     * @var string $lastName
     */
    public $lastName;

    /**
     *
     * @var string $company
     */
    public $company;

    /**
     *
     * @var string $emailAddress
     */
    public $emailAddress;

    /**
     *
     * @var string $address
     */
    public $address;

    /**
     *
     * @var string $city
     */
    public $city;

    /**
     *
     * @var string $province
     */
    public $province;

    /**
     *
     * @var string $country
     */
    public $country;

    /**
     *
     * @var string $phone
     */
    public $phone;

    /**
     *
     * @var string $mobile
     */
    public $mobile;

}
