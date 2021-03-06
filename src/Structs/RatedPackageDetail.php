<?php

namespace CommerceFedEx\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RatedPackageDetail Structs
 * @subpackage Structs
 */
class RatedPackageDetail extends AbstractStructBase
{
    /**
     * The TrackingIds
     * Meta informations extracted from the WSDL
     * - documentation: Echoed from the corresponding package in the rate request (if provided).
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\TrackingId[]
     */
    public $TrackingIds;
    /**
     * The GroupNumber
     * Meta informations extracted from the WSDL
     * - documentation: Used with request containing PACKAGE_GROUPS, to identify which group of identical packages was used to produce a reply item.
     * - minOccurs: 0
     * @var int
     */
    public $GroupNumber;
    /**
     * The EffectiveNetDiscount
     * Meta informations extracted from the WSDL
     * - documentation: The difference between "list" and "account" net charge.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\Money
     */
    public $EffectiveNetDiscount;
    /**
     * The AdjustedCodCollectionAmount
     * Meta informations extracted from the WSDL
     * - documentation: Ground COD is shipment level.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\Money
     */
    public $AdjustedCodCollectionAmount;
    /**
     * The OversizeClass
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $OversizeClass;
    /**
     * The PackageRateDetail
     * Meta informations extracted from the WSDL
     * - documentation: Rate data that are tied to a specific package and rate type combination.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\PackageRateDetail
     */
    public $PackageRateDetail;
    /**
     * Constructor method for RatedPackageDetail
     * @uses RatedPackageDetail::setTrackingIds()
     * @uses RatedPackageDetail::setGroupNumber()
     * @uses RatedPackageDetail::setEffectiveNetDiscount()
     * @uses RatedPackageDetail::setAdjustedCodCollectionAmount()
     * @uses RatedPackageDetail::setOversizeClass()
     * @uses RatedPackageDetail::setPackageRateDetail()
     * @param \CommerceFedEx\FedExPHP\Structs\TrackingId[] $trackingIds
     * @param int $groupNumber
     * @param \CommerceFedEx\FedExPHP\Structs\Money $effectiveNetDiscount
     * @param \CommerceFedEx\FedExPHP\Structs\Money $adjustedCodCollectionAmount
     * @param string $oversizeClass
     * @param \CommerceFedEx\FedExPHP\Structs\PackageRateDetail $packageRateDetail
     */
    public function __construct(array $trackingIds = array(), $groupNumber = null, \CommerceFedEx\FedExPHP\Structs\Money $effectiveNetDiscount = null, \CommerceFedEx\FedExPHP\Structs\Money $adjustedCodCollectionAmount = null, $oversizeClass = null, \CommerceFedEx\FedExPHP\Structs\PackageRateDetail $packageRateDetail = null)
    {
        $this
            ->setTrackingIds($trackingIds)
            ->setGroupNumber($groupNumber)
            ->setEffectiveNetDiscount($effectiveNetDiscount)
            ->setAdjustedCodCollectionAmount($adjustedCodCollectionAmount)
            ->setOversizeClass($oversizeClass)
            ->setPackageRateDetail($packageRateDetail);
    }
    /**
     * Get TrackingIds value
     * @return \CommerceFedEx\FedExPHP\Structs\TrackingId[]|null
     */
    public function getTrackingIds()
    {
        return $this->TrackingIds;
    }
    /**
     * Set TrackingIds value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\TrackingId[] $trackingIds
     * @return \CommerceFedEx\FedExPHP\Structs\RatedPackageDetail
     */
    public function setTrackingIds(array $trackingIds = array())
    {
        foreach ($trackingIds as $ratedPackageDetailTrackingIdsItem) {
            // validation for constraint: itemType
            if (!$ratedPackageDetailTrackingIdsItem instanceof \CommerceFedEx\FedExPHP\Structs\TrackingId) {
                throw new \InvalidArgumentException(sprintf('The TrackingIds property can only contain items of \CommerceFedEx\FedExPHP\Structs\TrackingId, "%s" given', is_object($ratedPackageDetailTrackingIdsItem) ? get_class($ratedPackageDetailTrackingIdsItem) : gettype($ratedPackageDetailTrackingIdsItem)), __LINE__);
            }
        }
        $this->TrackingIds = $trackingIds;
        return $this;
    }
    /**
     * Add item to TrackingIds value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\TrackingId $item
     * @return \CommerceFedEx\FedExPHP\Structs\RatedPackageDetail
     */
    public function addToTrackingIds(\CommerceFedEx\FedExPHP\Structs\TrackingId $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \CommerceFedEx\FedExPHP\Structs\TrackingId) {
            throw new \InvalidArgumentException(sprintf('The TrackingIds property can only contain items of \CommerceFedEx\FedExPHP\Structs\TrackingId, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TrackingIds[] = $item;
        return $this;
    }
    /**
     * Get GroupNumber value
     * @return int|null
     */
    public function getGroupNumber()
    {
        return $this->GroupNumber;
    }
    /**
     * Set GroupNumber value
     * @param int $groupNumber
     * @return \CommerceFedEx\FedExPHP\Structs\RatedPackageDetail
     */
    public function setGroupNumber($groupNumber = null)
    {
        // validation for constraint: int
        if (!is_null($groupNumber) && !is_numeric($groupNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($groupNumber)), __LINE__);
        }
        $this->GroupNumber = $groupNumber;
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
     * @return \CommerceFedEx\FedExPHP\Structs\RatedPackageDetail
     */
    public function setEffectiveNetDiscount(\CommerceFedEx\FedExPHP\Structs\Money $effectiveNetDiscount = null)
    {
        $this->EffectiveNetDiscount = $effectiveNetDiscount;
        return $this;
    }
    /**
     * Get AdjustedCodCollectionAmount value
     * @return \CommerceFedEx\FedExPHP\Structs\Money|null
     */
    public function getAdjustedCodCollectionAmount()
    {
        return $this->AdjustedCodCollectionAmount;
    }
    /**
     * Set AdjustedCodCollectionAmount value
     * @param \CommerceFedEx\FedExPHP\Structs\Money $adjustedCodCollectionAmount
     * @return \CommerceFedEx\FedExPHP\Structs\RatedPackageDetail
     */
    public function setAdjustedCodCollectionAmount(\CommerceFedEx\FedExPHP\Structs\Money $adjustedCodCollectionAmount = null)
    {
        $this->AdjustedCodCollectionAmount = $adjustedCodCollectionAmount;
        return $this;
    }
    /**
     * Get OversizeClass value
     * @return string|null
     */
    public function getOversizeClass()
    {
        return $this->OversizeClass;
    }
    /**
     * Set OversizeClass value
     * @uses \CommerceFedEx\FedExPHP\Enums\OversizeClassType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\OversizeClassType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $oversizeClass
     * @return \CommerceFedEx\FedExPHP\Structs\RatedPackageDetail
     */
    public function setOversizeClass($oversizeClass = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\OversizeClassType::valueIsValid($oversizeClass)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $oversizeClass, implode(', ', \CommerceFedEx\FedExPHP\Enums\OversizeClassType::getValidValues())), __LINE__);
        }
        $this->OversizeClass = $oversizeClass;
        return $this;
    }
    /**
     * Get PackageRateDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\PackageRateDetail|null
     */
    public function getPackageRateDetail()
    {
        return $this->PackageRateDetail;
    }
    /**
     * Set PackageRateDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\PackageRateDetail $packageRateDetail
     * @return \CommerceFedEx\FedExPHP\Structs\RatedPackageDetail
     */
    public function setPackageRateDetail(\CommerceFedEx\FedExPHP\Structs\PackageRateDetail $packageRateDetail = null)
    {
        $this->PackageRateDetail = $packageRateDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\RatedPackageDetail
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
