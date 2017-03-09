<?php

namespace NicholasCreativeMedia\FedExPHP\Track\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SignatureImageDetail StructType
 * @subpackage Structs
 */
class SignatureImageDetail extends AbstractStructBase
{
    /**
     * The Image
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Image;
    /**
     * The Notifications
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Track\StructType\Notification[]
     */
    public $Notifications;
    /**
     * Constructor method for SignatureImageDetail
     * @uses SignatureImageDetail::setImage()
     * @uses SignatureImageDetail::setNotifications()
     * @param string $image
     * @param \NicholasCreativeMedia\FedExPHP\Track\StructType\Notification[] $notifications
     */
    public function __construct($image = null, array $notifications = array())
    {
        $this
            ->setImage($image)
            ->setNotifications($notifications);
    }
    /**
     * Get Image value
     * @return string|null
     */
    public function getImage()
    {
        return $this->Image;
    }
    /**
     * Set Image value
     * @param string $image
     * @return \NicholasCreativeMedia\FedExPHP\Track\StructType\SignatureImageDetail
     */
    public function setImage($image = null)
    {
        // validation for constraint: string
        if (!is_null($image) && !is_string($image)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($image)), __LINE__);
        }
        $this->Image = $image;
        return $this;
    }
    /**
     * Get Notifications value
     * @return \NicholasCreativeMedia\FedExPHP\Track\StructType\Notification[]|null
     */
    public function getNotifications()
    {
        return $this->Notifications;
    }
    /**
     * Set Notifications value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Track\StructType\Notification[] $notifications
     * @return \NicholasCreativeMedia\FedExPHP\Track\StructType\SignatureImageDetail
     */
    public function setNotifications(array $notifications = array())
    {
        foreach ($notifications as $signatureImageDetailNotificationsItem) {
            // validation for constraint: itemType
            if (!$signatureImageDetailNotificationsItem instanceof \NicholasCreativeMedia\FedExPHP\Track\StructType\Notification) {
                throw new \InvalidArgumentException(sprintf('The Notifications property can only contain items of \NicholasCreativeMedia\FedExPHP\Track\StructType\Notification, "%s" given', is_object($signatureImageDetailNotificationsItem) ? get_class($signatureImageDetailNotificationsItem) : gettype($signatureImageDetailNotificationsItem)), __LINE__);
            }
        }
        $this->Notifications = $notifications;
        return $this;
    }
    /**
     * Add item to Notifications value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Track\StructType\Notification $item
     * @return \NicholasCreativeMedia\FedExPHP\Track\StructType\SignatureImageDetail
     */
    public function addToNotifications(\NicholasCreativeMedia\FedExPHP\Track\StructType\Notification $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Track\StructType\Notification) {
            throw new \InvalidArgumentException(sprintf('The Notifications property can only contain items of \NicholasCreativeMedia\FedExPHP\Track\StructType\Notification, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Notifications[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Track\StructType\SignatureImageDetail
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
