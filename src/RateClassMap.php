<?php

namespace CommerceFedEx\FedExPHP;

/**
 * Class which returns the class map definition
 * @package
 */
class RateClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'AdditionalLabelsDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\AdditionalLabelsDetail',
            'Address' => '\\CommerceFedEx\\FedExPHP\\Structs\\Address',
            'AlcoholDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\AlcoholDetail',
            'AncillaryFeeAndTax' => '\\CommerceFedEx\\FedExPHP\\Structs\\AncillaryFeeAndTax',
            'BrokerDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\BrokerDetail',
            'CertificateOfOriginDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\CertificateOfOriginDetail',
            'CleansedAddressAndLocationDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\CleansedAddressAndLocationDetail',
            'ClientDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\ClientDetail',
            'CodAddTransportationChargesDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\CodAddTransportationChargesDetail',
            'CodDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\CodDetail',
            'CommercialInvoice' => '\\CommerceFedEx\\FedExPHP\\Structs\\CommercialInvoice',
            'CommercialInvoiceDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\CommercialInvoiceDetail',
            'CommitDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\CommitDetail',
            'Commodity' => '\\CommerceFedEx\\FedExPHP\\Structs\\Commodity',
            'ConfigurableLabelReferenceEntry' => '\\CommerceFedEx\\FedExPHP\\Structs\\ConfigurableLabelReferenceEntry',
            'ConsolidationKey' => '\\CommerceFedEx\\FedExPHP\\Structs\\ConsolidationKey',
            'Contact' => '\\CommerceFedEx\\FedExPHP\\Structs\\Contact',
            'ContactAndAddress' => '\\CommerceFedEx\\FedExPHP\\Structs\\ContactAndAddress',
            'ContentRecord' => '\\CommerceFedEx\\FedExPHP\\Structs\\ContentRecord',
            'CurrencyExchangeRate' => '\\CommerceFedEx\\FedExPHP\\Structs\\CurrencyExchangeRate',
            'CustomDeliveryWindowDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\CustomDeliveryWindowDetail',
            'CustomDocumentDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\CustomDocumentDetail',
            'CustomLabelBarcodeEntry' => '\\CommerceFedEx\\FedExPHP\\Structs\\CustomLabelBarcodeEntry',
            'CustomLabelBoxEntry' => '\\CommerceFedEx\\FedExPHP\\Structs\\CustomLabelBoxEntry',
            'CustomLabelDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\CustomLabelDetail',
            'CustomLabelGraphicEntry' => '\\CommerceFedEx\\FedExPHP\\Structs\\CustomLabelGraphicEntry',
            'CustomLabelPosition' => '\\CommerceFedEx\\FedExPHP\\Structs\\CustomLabelPosition',
            'CustomLabelTextBoxEntry' => '\\CommerceFedEx\\FedExPHP\\Structs\\CustomLabelTextBoxEntry',
            'CustomLabelTextEntry' => '\\CommerceFedEx\\FedExPHP\\Structs\\CustomLabelTextEntry',
            'CustomerImageUsage' => '\\CommerceFedEx\\FedExPHP\\Structs\\CustomerImageUsage',
            'CustomerReference' => '\\CommerceFedEx\\FedExPHP\\Structs\\CustomerReference',
            'CustomerSpecifiedLabelDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\CustomerSpecifiedLabelDetail',
            'CustomsClearanceDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\CustomsClearanceDetail',
            'CustomsOptionDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\CustomsOptionDetail',
            'DangerousGoodsContainer' => '\\CommerceFedEx\\FedExPHP\\Structs\\DangerousGoodsContainer',
            'DangerousGoodsDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\DangerousGoodsDetail',
            'DangerousGoodsShippersDeclarationDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\DangerousGoodsShippersDeclarationDetail',
            'DangerousGoodsSignatory' => '\\CommerceFedEx\\FedExPHP\\Structs\\DangerousGoodsSignatory',
            'DateRange' => '\\CommerceFedEx\\FedExPHP\\Structs\\DateRange',
            'DelayDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\DelayDetail',
            'DeliveryOnInvoiceAcceptanceDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\DeliveryOnInvoiceAcceptanceDetail',
            'DestinationControlDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\DestinationControlDetail',
            'Dimensions' => '\\CommerceFedEx\\FedExPHP\\Structs\\Dimensions',
            'Distance' => '\\CommerceFedEx\\FedExPHP\\Structs\\Distance',
            'DocTabContent' => '\\CommerceFedEx\\FedExPHP\\Structs\\DocTabContent',
            'DocTabContentBarcoded' => '\\CommerceFedEx\\FedExPHP\\Structs\\DocTabContentBarcoded',
            'DocTabContentZone001' => '\\CommerceFedEx\\FedExPHP\\Structs\\DocTabContentZone001',
            'DocTabZoneSpecification' => '\\CommerceFedEx\\FedExPHP\\Structs\\DocTabZoneSpecification',
            'DocumentFormatOptionsRequested' => '\\CommerceFedEx\\FedExPHP\\Structs\\DocumentFormatOptionsRequested',
            'DocumentLineItem' => '\\CommerceFedEx\\FedExPHP\\Structs\\DocumentLineItem',
            'EMailDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\EMailDetail',
            'EdtCommodityTax' => '\\CommerceFedEx\\FedExPHP\\Structs\\EdtCommodityTax',
            'EdtExciseCondition' => '\\CommerceFedEx\\FedExPHP\\Structs\\EdtExciseCondition',
            'EdtTaxDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\EdtTaxDetail',
            'EtdDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\EtdDetail',
            'ExportDeclarationDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\ExportDeclarationDetail',
            'ExportDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\ExportDetail',
            'ExpressFreightDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\ExpressFreightDetail',
            'ExpressFreightDetailContact' => '\\CommerceFedEx\\FedExPHP\\Structs\\ExpressFreightDetailContact',
            'FlatbedTrailerDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\FlatbedTrailerDetail',
            'FreightAddressLabelDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\FreightAddressLabelDetail',
            'FreightBaseCharge' => '\\CommerceFedEx\\FedExPHP\\Structs\\FreightBaseCharge',
            'FreightCommitDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\FreightCommitDetail',
            'FreightGuaranteeDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\FreightGuaranteeDetail',
            'FreightRateDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\FreightRateDetail',
            'FreightRateNotation' => '\\CommerceFedEx\\FedExPHP\\Structs\\FreightRateNotation',
            'FreightServiceCenterDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\FreightServiceCenterDetail',
            'FreightShipmentDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\FreightShipmentDetail',
            'FreightShipmentLineItem' => '\\CommerceFedEx\\FedExPHP\\Structs\\FreightShipmentLineItem',
            'FreightSpecialServicePayment' => '\\CommerceFedEx\\FedExPHP\\Structs\\FreightSpecialServicePayment',
            'GeneralAgencyAgreementDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\GeneralAgencyAgreementDetail',
            'HazardousCommodityContent' => '\\CommerceFedEx\\FedExPHP\\Structs\\HazardousCommodityContent',
            'HazardousCommodityDescription' => '\\CommerceFedEx\\FedExPHP\\Structs\\HazardousCommodityDescription',
            'HazardousCommodityInnerReceptacleDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\HazardousCommodityInnerReceptacleDetail',
            'HazardousCommodityOptionDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\HazardousCommodityOptionDetail',
            'HazardousCommodityPackagingDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\HazardousCommodityPackagingDetail',
            'HazardousCommodityPackingDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\HazardousCommodityPackingDetail',
            'HazardousCommodityQuantityDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\HazardousCommodityQuantityDetail',
            'HoldAtLocationDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\HoldAtLocationDetail',
            'HomeDeliveryPremiumDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\HomeDeliveryPremiumDetail',
            'InternationalControlledExportDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\InternationalControlledExportDetail',
            'InternationalTrafficInArmsRegulationsDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\InternationalTrafficInArmsRegulationsDetail',
            'KeyValueDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\KeyValueDetail',
            'LabelSpecification' => '\\CommerceFedEx\\FedExPHP\\Structs\\LabelSpecification',
            'LiabilityCoverageDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\LiabilityCoverageDetail',
            'LinearMeasure' => '\\CommerceFedEx\\FedExPHP\\Structs\\LinearMeasure',
            'Localization' => '\\CommerceFedEx\\FedExPHP\\Structs\\Localization',
            'Measure' => '\\CommerceFedEx\\FedExPHP\\Structs\\Measure',
            'Money' => '\\CommerceFedEx\\FedExPHP\\Structs\\Money',
            'NaftaCertificateOfOriginDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\NaftaCertificateOfOriginDetail',
            'NaftaCommodityDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\NaftaCommodityDetail',
            'NaftaProducer' => '\\CommerceFedEx\\FedExPHP\\Structs\\NaftaProducer',
            'NetExplosiveDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\NetExplosiveDetail',
            'Notification' => '\\CommerceFedEx\\FedExPHP\\Structs\\Notification',
            'NotificationDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\NotificationDetail',
            'NotificationParameter' => '\\CommerceFedEx\\FedExPHP\\Structs\\NotificationParameter',
            'Op900Detail' => '\\CommerceFedEx\\FedExPHP\\Structs\\Op900Detail',
            'PackageRateDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\PackageRateDetail',
            'PackageSpecialServicesRequested' => '\\CommerceFedEx\\FedExPHP\\Structs\\PackageSpecialServicesRequested',
            'Party' => '\\CommerceFedEx\\FedExPHP\\Structs\\Party',
            'Payment' => '\\CommerceFedEx\\FedExPHP\\Structs\\Payment',
            'Payor' => '\\CommerceFedEx\\FedExPHP\\Structs\\Payor',
            'PendingShipmentDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\PendingShipmentDetail',
            'PendingShipmentProcessingOptionsRequested' => '\\CommerceFedEx\\FedExPHP\\Structs\\PendingShipmentProcessingOptionsRequested',
            'PickupDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\PickupDetail',
            'PriorityAlertDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\PriorityAlertDetail',
            'RadioactivityDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\RadioactivityDetail',
            'RadionuclideActivity' => '\\CommerceFedEx\\FedExPHP\\Structs\\RadionuclideActivity',
            'RadionuclideDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\RadionuclideDetail',
            'RateDiscount' => '\\CommerceFedEx\\FedExPHP\\Structs\\RateDiscount',
            'RateReply' => '\\CommerceFedEx\\FedExPHP\\Structs\\RateReply',
            'RateReplyDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\RateReplyDetail',
            'RateRequest' => '\\CommerceFedEx\\FedExPHP\\Structs\\RateRequest',
            'RatedPackageDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\RatedPackageDetail',
            'RatedShipmentDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\RatedShipmentDetail',
            'Rebate' => '\\CommerceFedEx\\FedExPHP\\Structs\\Rebate',
            'RecipientCustomsId' => '\\CommerceFedEx\\FedExPHP\\Structs\\RecipientCustomsId',
            'RecommendedDocumentSpecification' => '\\CommerceFedEx\\FedExPHP\\Structs\\RecommendedDocumentSpecification',
            'RegulatoryLabelContentDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\RegulatoryLabelContentDetail',
            'RequestedPackageLineItem' => '\\CommerceFedEx\\FedExPHP\\Structs\\RequestedPackageLineItem',
            'RequestedShipment' => '\\CommerceFedEx\\FedExPHP\\Structs\\RequestedShipment',
            'ReturnAssociationDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\ReturnAssociationDetail',
            'ReturnEMailDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\ReturnEMailDetail',
            'ReturnInstructionsDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\ReturnInstructionsDetail',
            'ReturnShipmentDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\ReturnShipmentDetail',
            'Rma' => '\\CommerceFedEx\\FedExPHP\\Structs\\Rma',
            'ServiceSubOptionDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\ServiceSubOptionDetail',
            'ShipmentAuthorizationDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\ShipmentAuthorizationDetail',
            'ShipmentConfigurationData' => '\\CommerceFedEx\\FedExPHP\\Structs\\ShipmentConfigurationData',
            'ShipmentDryIceDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\ShipmentDryIceDetail',
            'ShipmentDryIceProcessingOptionsRequested' => '\\CommerceFedEx\\FedExPHP\\Structs\\ShipmentDryIceProcessingOptionsRequested',
            'ShipmentEventNotificationDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\ShipmentEventNotificationDetail',
            'ShipmentEventNotificationSpecification' => '\\CommerceFedEx\\FedExPHP\\Structs\\ShipmentEventNotificationSpecification',
            'ShipmentLegRateDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\ShipmentLegRateDetail',
            'ShipmentNotificationFormatSpecification' => '\\CommerceFedEx\\FedExPHP\\Structs\\ShipmentNotificationFormatSpecification',
            'ShipmentRateDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\ShipmentRateDetail',
            'ShipmentSpecialServicesRequested' => '\\CommerceFedEx\\FedExPHP\\Structs\\ShipmentSpecialServicesRequested',
            'ShipmentVariationOptionDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\ShipmentVariationOptionDetail',
            'ShippingDocumentDispositionDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\ShippingDocumentDispositionDetail',
            'ShippingDocumentEMailDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\ShippingDocumentEMailDetail',
            'ShippingDocumentEMailRecipient' => '\\CommerceFedEx\\FedExPHP\\Structs\\ShippingDocumentEMailRecipient',
            'ShippingDocumentFormat' => '\\CommerceFedEx\\FedExPHP\\Structs\\ShippingDocumentFormat',
            'ShippingDocumentPrintDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\ShippingDocumentPrintDetail',
            'ShippingDocumentSpecification' => '\\CommerceFedEx\\FedExPHP\\Structs\\ShippingDocumentSpecification',
            'SignatureOptionDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\SignatureOptionDetail',
            'SmartPostShipmentDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\SmartPostShipmentDetail',
            'SmartPostShipmentProcessingOptionsRequested' => '\\CommerceFedEx\\FedExPHP\\Structs\\SmartPostShipmentProcessingOptionsRequested',
            'Surcharge' => '\\CommerceFedEx\\FedExPHP\\Structs\\Surcharge',
            'Tax' => '\\CommerceFedEx\\FedExPHP\\Structs\\Tax',
            'TaxpayerIdentification' => '\\CommerceFedEx\\FedExPHP\\Structs\\TaxpayerIdentification',
            'TrackingId' => '\\CommerceFedEx\\FedExPHP\\Structs\\TrackingId',
            'TransactionDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\TransactionDetail',
            'UploadDocumentReferenceDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\UploadDocumentReferenceDetail',
            'VariableHandlingChargeDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\VariableHandlingChargeDetail',
            'VariableHandlingCharges' => '\\CommerceFedEx\\FedExPHP\\Structs\\VariableHandlingCharges',
            'Volume' => '\\CommerceFedEx\\FedExPHP\\Structs\\Volume',
            'Weight' => '\\CommerceFedEx\\FedExPHP\\Structs\\Weight',
            'WebAuthenticationDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\WebAuthenticationDetail',
            'WebAuthenticationCredential' => '\\CommerceFedEx\\FedExPHP\\Structs\\WebAuthenticationCredential',
            'VersionId' => '\\CommerceFedEx\\FedExPHP\\Structs\\VersionId',
        );
    }
}
