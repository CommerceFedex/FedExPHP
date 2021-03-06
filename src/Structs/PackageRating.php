<?php

namespace CommerceFedEx\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PackageRating Structs
 * Meta informations extracted from the WSDL
 * - documentation: This class groups together for a single package all package-level rate data (across all rate types) as part of the response to a shipping request, which groups shipment-level data together and groups package-level data by package.
 * @subpackage Structs
 */
class PackageRating extends AbstractStructBase
{
    /**
     * The ActualRateType
     * Meta informations extracted from the WSDL
     * - documentation: This rate type identifies which entry in the following array is considered as presenting the "actual" rates for the package.
     * - minOccurs: 0
     * @var string
     */
    public $ActualRateType;
    /**
     * The EffectiveNetDiscount
     * Meta informations extracted from the WSDL
     * - documentation: The "list" net charge minus "actual" net charge.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\Money
     */
    public $EffectiveNetDiscount;
    /**
     * The PackageRateDetails
     * Meta informations extracted from the WSDL
     * - documentation: Each element of this field provides package-level rate data for a specific rate type.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\PackageRateDetail[]
     */
    public $PackageRateDetails;
    /**
     * Constructor method for PackageRating
     * @uses PackageRating::setActualRateType()
     * @uses PackageRating::setEffectiveNetDiscount()
     * @uses PackageRating::setPackageRateDetails()
     * @param string $actualRateType
     * @param \CommerceFedEx\FedExPHP\Structs\Money $effectiveNetDiscount
     * @param \CommerceFedEx\FedExPHP\Structs\PackageRateDetail[] $packageRateDetails
     */
    public function __construct($actualRateType = null, \CommerceFedEx\FedExPHP\Structs\Money $effectiveNetDiscount = null, array $packageRateDetails = array())
    {
        $this
            ->setActualRateType($actualRateType)
            ->setEffectiveNetDiscount($effectiveNetDiscount)
            ->setPackageRateDetails($packageRateDetails);
    }
    /**
     * Get ActualRateType value
     * @return string|null
     */
    public function getActualRateType()
    {
        return $this->ActualRateType;
    }
    /**
     * Set ActualRateType value
     * @uses \CommerceFedEx\FedExPHP\Enums\ReturnedRateType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\ReturnedRateType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $actualRateType
     * @return \CommerceFedEx\FedExPHP\Structs\PackageRating
     */
    public function setActualRateType($actualRateType = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\ReturnedRateType::valueIsValid($actualRateType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $actualRateType, implode(', ', \CommerceFedEx\FedExPHP\Enums\ReturnedRateType::getValidValues())), __LINE__);
        }
        $this->ActualRateType = $actualRateType;
        return $this;
    }
    /**
     * Get EffectiveNetDiscount value
     * @return \CommerceFedEx\FedExPHP\Structs\Money|null
     */
    public function getEffectiveNetDiscount()
    {
        return $this->EffectiveNetDiscount;
    }
    /**
     * Set EffectiveNetDiscount value
     * @param \CommerceFedEx\FedExPHP\Structs\Money $effectiveNetDiscount
     * @return \CommerceFedEx\FedExPHP\Structs\PackageRating
     */
    public function setEffectiveNetDiscount(\CommerceFedEx\FedExPHP\Structs\Money $effectiveNetDiscount = null)
    {
        $this->EffectiveNetDiscount = $effectiveNetDiscount;
        return $this;
    }
    /**
     * Get PackageRateDetails value
     * @return \CommerceFedEx\FedExPHP\Structs\PackageRateDetail[]|null
     */
    public function getPackageRateDetails()
    {
        return $this->PackageRateDetails;
    }
    /**
     * Set PackageRateDetails value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\PackageRateDetail[] $packageRateDetails
     * @return \CommerceFedEx\FedExPHP\Structs\PackageRating
     */
    public function setPackageRateDetails(array $packageRateDetails = array())
    {
        foreach ($packageRateDetails as $packageRatingPackageRateDetailsItem) {
            // validation for constraint: itemType
            if (!$packageRatingPackageRateDetailsItem instanceof \CommerceFedEx\FedExPHP\Structs\PackageRateDetail) {
                throw new \InvalidArgumentException(sprintf('The PackageRateDetails property can only contain items of \CommerceFedEx\FedExPHP\Structs\PackageRateDetail, "%s" given', is_object($packageRatingPackageRateDetailsItem) ? get_class($packageRatingPackageRateDetailsItem) : gettype($packageRatingPackageRateDetailsItem)), __LINE__);
            }
        }
        $this->PackageRateDetails = $packageRateDetails;
        return $this;
    }
    /**
     * Add item to PackageRateDetails value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\PackageRateDetail $item
     * @return \CommerceFedEx\FedExPHP\Structs\PackageRating
     */
    public function addToPackageRateDetails(\CommerceFedEx\FedExPHP\Structs\PackageRateDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \CommerceFedEx\FedExPHP\Structs\PackageRateDetail) {
            throw new \InvalidArgumentException(sprintf('The PackageRateDetails property can only contain items of \CommerceFedEx\FedExPHP\Structs\PackageRateDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PackageRateDetails[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\PackageRating
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
