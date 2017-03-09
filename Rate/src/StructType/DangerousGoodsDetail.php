<?php

namespace NicholasCreativeMedia\FedExPHP\Rate\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DangerousGoodsDetail StructType
 * @subpackage Structs
 */
class DangerousGoodsDetail extends AbstractStructBase
{
    /**
     * The Regulation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Regulation;
    /**
     * The Accessibility
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Accessibility;
    /**
     * The CargoAircraftOnly
     * Meta informations extracted from the WSDL
     * - documentation: Shipment is packaged/documented for movement ONLY on cargo aircraft.
     * - minOccurs: 0
     * @var bool
     */
    public $CargoAircraftOnly;
    /**
     * The Options
     * Meta informations extracted from the WSDL
     * - documentation: Indicates which kinds of hazardous content are in the current package.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Options;
    /**
     * The PackingOption
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether there is additional customer provided packaging enclosing the approved dangerous goods containers.
     * - minOccurs: 0
     * @var string
     */
    public $PackingOption;
    /**
     * The ReferenceId
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the configuration of this dangerous goods package. The common configuration is represented at the shipment level.
     * - minOccurs: 0
     * @var string
     */
    public $ReferenceId;
    /**
     * The Containers
     * Meta informations extracted from the WSDL
     * - documentation: Indicates one or more containers used to pack dangerous goods commodities.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Rate\StructType\DangerousGoodsContainer[]
     */
    public $Containers;
    /**
     * The Packaging
     * Meta informations extracted from the WSDL
     * - documentation: Description of the packaging of this commodity, suitable for use on OP-900 and OP-950 forms.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Rate\StructType\HazardousCommodityPackagingDetail
     */
    public $Packaging;
    /**
     * The Signatory
     * Meta informations extracted from the WSDL
     * - documentation: Name, title and place of the signatory for this shipment.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Rate\StructType\DangerousGoodsSignatory
     */
    public $Signatory;
    /**
     * The EmergencyContactNumber
     * Meta informations extracted from the WSDL
     * - documentation: Telephone number to use for contact in the event of an emergency.
     * - minOccurs: 0
     * @var string
     */
    public $EmergencyContactNumber;
    /**
     * The Offeror
     * Meta informations extracted from the WSDL
     * - documentation: Offeror's name or contract number, per DOT regulation.
     * - minOccurs: 0
     * @var string
     */
    public $Offeror;
    /**
     * The InfectiousSubstanceResponsibleContact
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the contact of the party responsible for handling the infectious substances, if any, in the dangerous goods shipment.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Rate\StructType\Contact
     */
    public $InfectiousSubstanceResponsibleContact;
    /**
     * The AdditionalHandling
     * Meta informations extracted from the WSDL
     * - documentation: Specifies additional handling information for the current package.
     * - minOccurs: 0
     * @var string
     */
    public $AdditionalHandling;
    /**
     * The RadioactivityDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the radioactivity detail for the current package, if the package contains radioactive materials.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Rate\StructType\RadioactivityDetail
     */
    public $RadioactivityDetail;
    /**
     * Constructor method for DangerousGoodsDetail
     * @uses DangerousGoodsDetail::setRegulation()
     * @uses DangerousGoodsDetail::setAccessibility()
     * @uses DangerousGoodsDetail::setCargoAircraftOnly()
     * @uses DangerousGoodsDetail::setOptions()
     * @uses DangerousGoodsDetail::setPackingOption()
     * @uses DangerousGoodsDetail::setReferenceId()
     * @uses DangerousGoodsDetail::setContainers()
     * @uses DangerousGoodsDetail::setPackaging()
     * @uses DangerousGoodsDetail::setSignatory()
     * @uses DangerousGoodsDetail::setEmergencyContactNumber()
     * @uses DangerousGoodsDetail::setOfferor()
     * @uses DangerousGoodsDetail::setInfectiousSubstanceResponsibleContact()
     * @uses DangerousGoodsDetail::setAdditionalHandling()
     * @uses DangerousGoodsDetail::setRadioactivityDetail()
     * @param string $regulation
     * @param string $accessibility
     * @param bool $cargoAircraftOnly
     * @param string[] $options
     * @param string $packingOption
     * @param string $referenceId
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\DangerousGoodsContainer[] $containers
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\HazardousCommodityPackagingDetail $packaging
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\DangerousGoodsSignatory $signatory
     * @param string $emergencyContactNumber
     * @param string $offeror
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\Contact $infectiousSubstanceResponsibleContact
     * @param string $additionalHandling
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\RadioactivityDetail $radioactivityDetail
     */
    public function __construct($regulation = null, $accessibility = null, $cargoAircraftOnly = null, array $options = array(), $packingOption = null, $referenceId = null, array $containers = array(), \NicholasCreativeMedia\FedExPHP\Rate\StructType\HazardousCommodityPackagingDetail $packaging = null, \NicholasCreativeMedia\FedExPHP\Rate\StructType\DangerousGoodsSignatory $signatory = null, $emergencyContactNumber = null, $offeror = null, \NicholasCreativeMedia\FedExPHP\Rate\StructType\Contact $infectiousSubstanceResponsibleContact = null, $additionalHandling = null, \NicholasCreativeMedia\FedExPHP\Rate\StructType\RadioactivityDetail $radioactivityDetail = null)
    {
        $this
            ->setRegulation($regulation)
            ->setAccessibility($accessibility)
            ->setCargoAircraftOnly($cargoAircraftOnly)
            ->setOptions($options)
            ->setPackingOption($packingOption)
            ->setReferenceId($referenceId)
            ->setContainers($containers)
            ->setPackaging($packaging)
            ->setSignatory($signatory)
            ->setEmergencyContactNumber($emergencyContactNumber)
            ->setOfferor($offeror)
            ->setInfectiousSubstanceResponsibleContact($infectiousSubstanceResponsibleContact)
            ->setAdditionalHandling($additionalHandling)
            ->setRadioactivityDetail($radioactivityDetail);
    }
    /**
     * Get Regulation value
     * @return string|null
     */
    public function getRegulation()
    {
        return $this->Regulation;
    }
    /**
     * Set Regulation value
     * @uses \NicholasCreativeMedia\FedExPHP\Rate\EnumType\HazardousCommodityRegulationType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Rate\EnumType\HazardousCommodityRegulationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $regulation
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\DangerousGoodsDetail
     */
    public function setRegulation($regulation = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Rate\EnumType\HazardousCommodityRegulationType::valueIsValid($regulation)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $regulation, implode(', ', \NicholasCreativeMedia\FedExPHP\Rate\EnumType\HazardousCommodityRegulationType::getValidValues())), __LINE__);
        }
        $this->Regulation = $regulation;
        return $this;
    }
    /**
     * Get Accessibility value
     * @return string|null
     */
    public function getAccessibility()
    {
        return $this->Accessibility;
    }
    /**
     * Set Accessibility value
     * @uses \NicholasCreativeMedia\FedExPHP\Rate\EnumType\DangerousGoodsAccessibilityType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Rate\EnumType\DangerousGoodsAccessibilityType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $accessibility
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\DangerousGoodsDetail
     */
    public function setAccessibility($accessibility = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Rate\EnumType\DangerousGoodsAccessibilityType::valueIsValid($accessibility)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $accessibility, implode(', ', \NicholasCreativeMedia\FedExPHP\Rate\EnumType\DangerousGoodsAccessibilityType::getValidValues())), __LINE__);
        }
        $this->Accessibility = $accessibility;
        return $this;
    }
    /**
     * Get CargoAircraftOnly value
     * @return bool|null
     */
    public function getCargoAircraftOnly()
    {
        return $this->CargoAircraftOnly;
    }
    /**
     * Set CargoAircraftOnly value
     * @param bool $cargoAircraftOnly
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\DangerousGoodsDetail
     */
    public function setCargoAircraftOnly($cargoAircraftOnly = null)
    {
        $this->CargoAircraftOnly = $cargoAircraftOnly;
        return $this;
    }
    /**
     * Get Options value
     * @return string[]|null
     */
    public function getOptions()
    {
        return $this->Options;
    }
    /**
     * Set Options value
     * @uses \NicholasCreativeMedia\FedExPHP\Rate\EnumType\HazardousCommodityOptionType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Rate\EnumType\HazardousCommodityOptionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $options
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\DangerousGoodsDetail
     */
    public function setOptions(array $options = array())
    {
        $invalidValues = array();
        foreach ($options as $dangerousGoodsDetailOptionsItem) {
            if (!\NicholasCreativeMedia\FedExPHP\Rate\EnumType\HazardousCommodityOptionType::valueIsValid($dangerousGoodsDetailOptionsItem)) {
                $invalidValues[] = var_export($dangerousGoodsDetailOptionsItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \NicholasCreativeMedia\FedExPHP\Rate\EnumType\HazardousCommodityOptionType::getValidValues())), __LINE__);
        }
        $this->Options = $options;
        return $this;
    }
    /**
     * Add item to Options value
     * @uses \NicholasCreativeMedia\FedExPHP\Rate\EnumType\HazardousCommodityOptionType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Rate\EnumType\HazardousCommodityOptionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\DangerousGoodsDetail
     */
    public function addToOptions($item)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Rate\EnumType\HazardousCommodityOptionType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \NicholasCreativeMedia\FedExPHP\Rate\EnumType\HazardousCommodityOptionType::getValidValues())), __LINE__);
        }
        $this->Options[] = $item;
        return $this;
    }
    /**
     * Get PackingOption value
     * @return string|null
     */
    public function getPackingOption()
    {
        return $this->PackingOption;
    }
    /**
     * Set PackingOption value
     * @uses \NicholasCreativeMedia\FedExPHP\Rate\EnumType\DangerousGoodsPackingOptionType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Rate\EnumType\DangerousGoodsPackingOptionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $packingOption
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\DangerousGoodsDetail
     */
    public function setPackingOption($packingOption = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Rate\EnumType\DangerousGoodsPackingOptionType::valueIsValid($packingOption)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $packingOption, implode(', ', \NicholasCreativeMedia\FedExPHP\Rate\EnumType\DangerousGoodsPackingOptionType::getValidValues())), __LINE__);
        }
        $this->PackingOption = $packingOption;
        return $this;
    }
    /**
     * Get ReferenceId value
     * @return string|null
     */
    public function getReferenceId()
    {
        return $this->ReferenceId;
    }
    /**
     * Set ReferenceId value
     * @param string $referenceId
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\DangerousGoodsDetail
     */
    public function setReferenceId($referenceId = null)
    {
        // validation for constraint: string
        if (!is_null($referenceId) && !is_string($referenceId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($referenceId)), __LINE__);
        }
        $this->ReferenceId = $referenceId;
        return $this;
    }
    /**
     * Get Containers value
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\DangerousGoodsContainer[]|null
     */
    public function getContainers()
    {
        return $this->Containers;
    }
    /**
     * Set Containers value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\DangerousGoodsContainer[] $containers
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\DangerousGoodsDetail
     */
    public function setContainers(array $containers = array())
    {
        foreach ($containers as $dangerousGoodsDetailContainersItem) {
            // validation for constraint: itemType
            if (!$dangerousGoodsDetailContainersItem instanceof \NicholasCreativeMedia\FedExPHP\Rate\StructType\DangerousGoodsContainer) {
                throw new \InvalidArgumentException(sprintf('The Containers property can only contain items of \NicholasCreativeMedia\FedExPHP\Rate\StructType\DangerousGoodsContainer, "%s" given', is_object($dangerousGoodsDetailContainersItem) ? get_class($dangerousGoodsDetailContainersItem) : gettype($dangerousGoodsDetailContainersItem)), __LINE__);
            }
        }
        $this->Containers = $containers;
        return $this;
    }
    /**
     * Add item to Containers value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\DangerousGoodsContainer $item
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\DangerousGoodsDetail
     */
    public function addToContainers(\NicholasCreativeMedia\FedExPHP\Rate\StructType\DangerousGoodsContainer $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Rate\StructType\DangerousGoodsContainer) {
            throw new \InvalidArgumentException(sprintf('The Containers property can only contain items of \NicholasCreativeMedia\FedExPHP\Rate\StructType\DangerousGoodsContainer, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Containers[] = $item;
        return $this;
    }
    /**
     * Get Packaging value
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\HazardousCommodityPackagingDetail|null
     */
    public function getPackaging()
    {
        return $this->Packaging;
    }
    /**
     * Set Packaging value
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\HazardousCommodityPackagingDetail $packaging
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\DangerousGoodsDetail
     */
    public function setPackaging(\NicholasCreativeMedia\FedExPHP\Rate\StructType\HazardousCommodityPackagingDetail $packaging = null)
    {
        $this->Packaging = $packaging;
        return $this;
    }
    /**
     * Get Signatory value
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\DangerousGoodsSignatory|null
     */
    public function getSignatory()
    {
        return $this->Signatory;
    }
    /**
     * Set Signatory value
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\DangerousGoodsSignatory $signatory
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\DangerousGoodsDetail
     */
    public function setSignatory(\NicholasCreativeMedia\FedExPHP\Rate\StructType\DangerousGoodsSignatory $signatory = null)
    {
        $this->Signatory = $signatory;
        return $this;
    }
    /**
     * Get EmergencyContactNumber value
     * @return string|null
     */
    public function getEmergencyContactNumber()
    {
        return $this->EmergencyContactNumber;
    }
    /**
     * Set EmergencyContactNumber value
     * @param string $emergencyContactNumber
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\DangerousGoodsDetail
     */
    public function setEmergencyContactNumber($emergencyContactNumber = null)
    {
        // validation for constraint: string
        if (!is_null($emergencyContactNumber) && !is_string($emergencyContactNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($emergencyContactNumber)), __LINE__);
        }
        $this->EmergencyContactNumber = $emergencyContactNumber;
        return $this;
    }
    /**
     * Get Offeror value
     * @return string|null
     */
    public function getOfferor()
    {
        return $this->Offeror;
    }
    /**
     * Set Offeror value
     * @param string $offeror
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\DangerousGoodsDetail
     */
    public function setOfferor($offeror = null)
    {
        // validation for constraint: string
        if (!is_null($offeror) && !is_string($offeror)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($offeror)), __LINE__);
        }
        $this->Offeror = $offeror;
        return $this;
    }
    /**
     * Get InfectiousSubstanceResponsibleContact value
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\Contact|null
     */
    public function getInfectiousSubstanceResponsibleContact()
    {
        return $this->InfectiousSubstanceResponsibleContact;
    }
    /**
     * Set InfectiousSubstanceResponsibleContact value
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\Contact $infectiousSubstanceResponsibleContact
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\DangerousGoodsDetail
     */
    public function setInfectiousSubstanceResponsibleContact(\NicholasCreativeMedia\FedExPHP\Rate\StructType\Contact $infectiousSubstanceResponsibleContact = null)
    {
        $this->InfectiousSubstanceResponsibleContact = $infectiousSubstanceResponsibleContact;
        return $this;
    }
    /**
     * Get AdditionalHandling value
     * @return string|null
     */
    public function getAdditionalHandling()
    {
        return $this->AdditionalHandling;
    }
    /**
     * Set AdditionalHandling value
     * @param string $additionalHandling
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\DangerousGoodsDetail
     */
    public function setAdditionalHandling($additionalHandling = null)
    {
        // validation for constraint: string
        if (!is_null($additionalHandling) && !is_string($additionalHandling)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($additionalHandling)), __LINE__);
        }
        $this->AdditionalHandling = $additionalHandling;
        return $this;
    }
    /**
     * Get RadioactivityDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\RadioactivityDetail|null
     */
    public function getRadioactivityDetail()
    {
        return $this->RadioactivityDetail;
    }
    /**
     * Set RadioactivityDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\RadioactivityDetail $radioactivityDetail
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\DangerousGoodsDetail
     */
    public function setRadioactivityDetail(\NicholasCreativeMedia\FedExPHP\Rate\StructType\RadioactivityDetail $radioactivityDetail = null)
    {
        $this->RadioactivityDetail = $radioactivityDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\DangerousGoodsDetail
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
