<?php

namespace Controle;
/**
 * TaxTableType
 * Sales tax details for zero or more jurisdictions (states, provinces, etc).
 */
class TaxTableType {
    /**
     * @var \Controle\TaxJurisdictionType | Sales tax details for zero or more jurisdictions (states, provinces, etc). For GetTaxTable,
     * if DetailLevel is not specified, information is only returned for the jurisdictions
     * for which the user provided tax information. If DetailLevel is ReturnAll, tax information is
     * returned for all possible jurisdictions, whether specified by the user or not. ShippingIncludedInTax
     * and SalesTaxPercent are returned but are empty.
     */
    public $TaxJurisdiction;
}

