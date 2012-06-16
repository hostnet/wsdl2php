<?php

namespace Controle;
/**
 * CombinedPaymentPreferencesType
 * Defines a seller's preferences for allowing buyers to combine more than one purchase into
 * one payment.
 */
class CombinedPaymentPreferencesType {
    /**
     * @var \Controle\CalculatedShippingPreferencesType | Contains a seller's preferences for having shipping costs calculated by eBay.
     */
    public $CalculatedShippingPreferences;
    /**
     * @var \Controle\CombinedPaymentOptionCodeType | Specifies whether or not a seller wants to allow buyers to combine purchases in order
     * to receive a discount.
     */
    public $CombinedPaymentOption;
    /**
     * @var \Controle\CombinedPaymentPeriodCodeType | Specifies the period in which the user will allow buyers to combine purchases in order
     * to receive a discount.
     */
    public $CombinedPaymentPeriod;
    /**
     * @var \Controle\FlatShippingPreferencesType | Specifies a seller's preferences for flat-rate shipping.
     */
    public $FlatShippingPreferences;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
}

