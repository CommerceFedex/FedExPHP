<?php

namespace CommerceFedEx\FedExPHP\Services;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for all operations
 * @subpackage Services
 */
class PickupService extends FedExService
{

    /**
     * RateService constructor.
     * @param array $wsdlOptions
     * @param bool $resetSoapClient
     * @param bool $beta
     */
    public function __construct(array $wsdlOptions = array(), $resetSoapClient = true, $mode = 'test')
    {
        if ($mode === false) $mode = 'test';
        if ($mode === true) $mode = 'live';
        $default_options = [
           \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => dirname(__FILE__).DIRECTORY_SEPARATOR.'wsdl-'.$mode.DIRECTORY_SEPARATOR.'PickupService_v13.wsdl',
           \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \CommerceFedEx\FedExPHP\PickupClassMap::get(),
        ];
        $options = array_merge($default_options,$wsdlOptions);
        parent::__construct($options,$resetSoapClient,$mode);

        $this->version = new \CommerceFedEx\FedExPHP\Structs\VersionId('disp',13,0,0);
    }
    /**
     * Method to call the operation originally named getPickupAvailability
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \CommerceFedEx\FedExPHP\Structs\PickupAvailabilityRequest $pickupAvailabilityRequest
     * @return \CommerceFedEx\FedExPHP\Structs\PickupAvailabilityReply|bool
     */
    public function getPickupAvailability(\CommerceFedEx\FedExPHP\Structs\PickupAvailabilityRequest $pickupAvailabilityRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->getPickupAvailability($pickupAvailabilityRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named createPickup
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \CommerceFedEx\FedExPHP\Structs\CreatePickupRequest $createPickupRequest
     * @return \CommerceFedEx\FedExPHP\Structs\CreatePickupReply|bool
     */
    public function createPickup(\CommerceFedEx\FedExPHP\Structs\CreatePickupRequest $createPickupRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->createPickup($createPickupRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named cancelPickup
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \CommerceFedEx\FedExPHP\Structs\CancelPickupRequest $cancelPickupRequest
     * @return \CommerceFedEx\FedExPHP\Structs\CancelPickupReply|bool
     */
    public function cancelPickup(\CommerceFedEx\FedExPHP\Structs\CancelPickupRequest $cancelPickupRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->cancelPickup($cancelPickupRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \CommerceFedEx\FedExPHP\Structs\CancelPickupReply|\CommerceFedEx\FedExPHP\Structs\CreatePickupReply|\CommerceFedEx\FedExPHP\Structs\PickupAvailabilityReply
     */
    public function getResult()
    {
        return parent::getResult();
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
