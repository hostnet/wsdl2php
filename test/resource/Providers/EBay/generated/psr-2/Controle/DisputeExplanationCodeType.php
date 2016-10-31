<?php

namespace Controle;

class DisputeExplanationCodeType
{
    const BUYERHASNOTRESPONDED        = 'BuyerHasNotResponded';
    const BUYERREFUSEDTOPAY           = 'BuyerRefusedToPay';
    const BUYERNOTCLEAREDTOPAY        = 'BuyerNotClearedToPay';
    const BUYERRETURNEDITEMFORREFUND  = 'BuyerReturnedItemForRefund';
    const UNABLETORESOLVETERMS        = 'UnableToResolveTerms';
    const BUYERNOLONGERWANTSITEM      = 'BuyerNoLongerWantsItem';
    const BUYERPURCHASINGMISTAKE      = 'BuyerPurchasingMistake';
    const SHIPCOUNTRYNOTSUPPORTED     = 'ShipCountryNotSupported';
    const SHIPPINGADDRESSNOTCONFIRMED = 'ShippingAddressNotConfirmed';
    const PAYMENTMETHODNOTSUPPORTED   = 'PaymentMethodNotSupported';
    const BUYERNOLONGERREGISTERED     = 'BuyerNoLongerRegistered';
    const OTHEREXPLANATION            = 'OtherExplanation';
    const UNSPECIFIED                 = 'Unspecified';
    const CUSTOMCODE                  = 'CustomCode';
}
