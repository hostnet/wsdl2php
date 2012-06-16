<?php

namespace Controle;
class DisputeExplanationCodeType {
    const BuyerHasNotResponded = 'BuyerHasNotResponded';
    const BuyerRefusedToPay = 'BuyerRefusedToPay';
    const BuyerNotClearedToPay = 'BuyerNotClearedToPay';
    const BuyerReturnedItemForRefund = 'BuyerReturnedItemForRefund';
    const UnableToResolveTerms = 'UnableToResolveTerms';
    const BuyerNoLongerWantsItem = 'BuyerNoLongerWantsItem';
    const BuyerPurchasingMistake = 'BuyerPurchasingMistake';
    const ShipCountryNotSupported = 'ShipCountryNotSupported';
    const ShippingAddressNotConfirmed = 'ShippingAddressNotConfirmed';
    const PaymentMethodNotSupported = 'PaymentMethodNotSupported';
    const BuyerNoLongerRegistered = 'BuyerNoLongerRegistered';
    const OtherExplanation = 'OtherExplanation';
    const Unspecified = 'Unspecified';
    const CustomCode = 'CustomCode';
}

