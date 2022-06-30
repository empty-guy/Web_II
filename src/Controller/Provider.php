<?php

namespace APP\Controller;

use APP\Model\Address;
use APP\Model\Product;
use APP\Model\Provider;
use APP\Utils\Redirect;
use APP\Model\Validation;

require '../../vendor/autoload.php';

if (empty($_POST)) {
    session_start();
    // Redirecionar o usuário
    Redirect::redirect(
        type: 'error',
        message: 'Requisição inválida!!!'
    );
}

$providerName = $_POST["name"];
$providerPhone = $_POST["phone"];
$providerCnpj = $_POST["cnpj"];
$providerPublicPlace = $_POST["publicPlace"];
$providerNumberOfStreet = $_POST["numberOfStreet"];
$providerComplement = $_POST["complement"];
$providerNeighborhood = $_POST["neighborhood"];
$providerCity = $_POST["city"];
$providerZipCode = $_POST["zipCode"];

$error = array();

if ($error) {
    Redirect::redirect(
        message: $error,
        type: 'warning'
    );
} else {
    $provider = new Provider(
        name: $providerName,
        phone: $providerPhone,
        cnpj: $providerCnpj,
        address: new Address(
        publicPlace: $providerPublicPlace,
        numberOfStreet: $providerNumberOfStreet,
        complement: $providerComplement,
        neighborhood: $providerNeighborhood,
        city: $providerCity,
        zipCode: $providerZipCode,
        )
    );
    Redirect::redirect(
        message: "O fornecedor $providerName foi cadastrado com sucesso!!!"
    );
}
