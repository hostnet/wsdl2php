<?php

namespace Controle;
/**
 * ProductFinderConstraintType
 * An attribute (constraint) that was specified in a search request that was       based on
 * a product finder query. Used to help you map each query in a batch      request to the corresponding
 * search result in the response.
 */
class ProductFinderConstraintType {
    /**
     * @var string | The search attribute name (e.g., Manufacturer).
     */
    public $DisplayName;
    /**
     * @var string | The search attribute value the user specified in the query             (e.g., the actual
     * name the user chose for the manufacturer).
     */
    public $DisplayValue;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
}

