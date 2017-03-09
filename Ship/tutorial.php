<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the fist needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientbase class each generated ServiceType class extends this class
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'wsdls/ShipService_v19.wsdl',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * );
 * etc....
 * ################################################################################
 * Don't forget to add wsdltophp/packagebase:dev-master to your main composer.json.
 * ################################################################################
 */
/**
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'wsdls/ShipService_v19.wsdl',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \NicholasCreativeMedia\FedExPHP\Ship\ClassMap::get(),
);
/**
 * Samples for Service ServiceType
 */
$service = new \NicholasCreativeMedia\FedExPHP\Ship\ServiceType\Service($options);
/**
 * Sample call for processTag operation/method
 */
if ($service->processTag(new \NicholasCreativeMedia\FedExPHP\Ship\StructType\ProcessTagRequest()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for processShipment operation/method
 */
if ($service->processShipment(new \NicholasCreativeMedia\FedExPHP\Ship\StructType\ProcessShipmentRequest()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for deleteTag operation/method
 */
if ($service->deleteTag(new \NicholasCreativeMedia\FedExPHP\Ship\StructType\DeleteTagRequest()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for deleteShipment operation/method
 */
if ($service->deleteShipment(new \NicholasCreativeMedia\FedExPHP\Ship\StructType\DeleteShipmentRequest()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for validateShipment operation/method
 */
if ($service->validateShipment(new \NicholasCreativeMedia\FedExPHP\Ship\StructType\ValidateShipmentRequest()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
