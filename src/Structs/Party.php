<?php

namespace CommerceFedEx\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Party Structs
 * @subpackage Structs
 */
class Party extends AbstractStructBase
{
    /**
     * The AccountNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AccountNumber;
    /**
     * The Tins
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\TaxpayerIdentification[]
     */
    public $Tins;
    /**
     * The Contact
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\Contact
     */
    public $Contact;
    /**
     * The Address
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\Address
     */
    public $Address;
    /**
     * Constructor method for Party
     * @uses Party::setAccountNumber()
     * @uses Party::setTins()
     * @uses Party::setContact()
     * @uses Party::setAddress()
     * @param string $accountNumber
     * @param \CommerceFedEx\FedExPHP\Structs\TaxpayerIdentification[] $tins
     * @param \CommerceFedEx\FedExPHP\Structs\Contact $contact
     * @param \CommerceFedEx\FedExPHP\Structs\Address $address
     */
    public function __construct($accountNumber = null, array $tins = array(), \CommerceFedEx\FedExPHP\Structs\Contact $contact = null, \CommerceFedEx\FedExPHP\Structs\Address $address = null)
    {
        $this
            ->setAccountNumber($accountNumber)
            ->setTins($tins)
            ->setContact($contact)
            ->setAddress($address);
    }
    /**
     * Get AccountNumber value
     * @return string|null
     */
    public function getAccountNumber()
    {
        return $this->AccountNumber;
    }
    /**
     * Set AccountNumber value
     * @param string $accountNumber
     * @return \CommerceFedEx\FedExPHP\Structs\Party
     */
    public function setAccountNumber($accountNumber = null)
    {
        // validation for constraint: string
        if (!is_null($accountNumber) && !is_string($accountNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($accountNumber)), __LINE__);
        }
        $this->AccountNumber = $accountNumber;
        return $this;
    }
    /**
     * Get Tins value
     * @return \CommerceFedEx\FedExPHP\Structs\TaxpayerIdentification[]|null
     */
    public function getTins()
    {
        return $this->Tins;
    }
    /**
     * Set Tins value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\TaxpayerIdentification[] $tins
     * @return \CommerceFedEx\FedExPHP\Structs\Party
     */
    public function setTins(array $tins = array())
    {
        foreach ($tins as $partyTinsItem) {
            // validation for constraint: itemType
            if (!$partyTinsItem instanceof \CommerceFedEx\FedExPHP\Structs\TaxpayerIdentification) {
                throw new \InvalidArgumentException(sprintf('The Tins property can only contain items of \CommerceFedEx\FedExPHP\Structs\TaxpayerIdentification, "%s" given', is_object($partyTinsItem) ? get_class($partyTinsItem) : gettype($partyTinsItem)), __LINE__);
            }
        }
        $this->Tins = $tins;
        return $this;
    }
    /**
     * Add item to Tins value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\TaxpayerIdentification $item
     * @return \CommerceFedEx\FedExPHP\Structs\Party
     */
    public function addToTins(\CommerceFedEx\FedExPHP\Structs\TaxpayerIdentification $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \CommerceFedEx\FedExPHP\Structs\TaxpayerIdentification) {
            throw new \InvalidArgumentException(sprintf('The Tins property can only contain items of \CommerceFedEx\FedExPHP\Structs\TaxpayerIdentification, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Tins[] = $item;
        return $this;
    }
    /**
     * Get Contact value
     * @return \CommerceFedEx\FedExPHP\Structs\Contact|null
     */
    public function getContact()
    {
        return $this->Contact;
    }
    /**
     * Set Contact value
     * @param \CommerceFedEx\FedExPHP\Structs\Contact $contact
     * @return \CommerceFedEx\FedExPHP\Structs\Party
     */
    public function setContact(\CommerceFedEx\FedExPHP\Structs\Contact $contact = null)
    {
        $this->Contact = $contact;
        return $this;
    }
    /**
     * Get Address value
     * @return \CommerceFedEx\FedExPHP\Structs\Address|null
     */
    public function getAddress()
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param \CommerceFedEx\FedExPHP\Structs\Address $address
     * @return \CommerceFedEx\FedExPHP\Structs\Party
     */
    public function setAddress(\CommerceFedEx\FedExPHP\Structs\Address $address = null)
    {
        $this->Address = $address;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\Party
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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
