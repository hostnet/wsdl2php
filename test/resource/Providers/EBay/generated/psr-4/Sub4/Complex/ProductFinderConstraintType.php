<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * ProductFinderConstraintType
 * An attribute (constraint) that was specified in a search request that was       based on
 * a product finder query. Used to help you map each query in a batch      request to the corresponding
 * search result in the response.
 */
class ProductFinderConstraintType
{
    // @codingStandardsIgnoreStart
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
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setDisplayName($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for DisplayName');
        }
        $this->DisplayName = $val;
    }

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setDisplayValue($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for DisplayValue');
        }
        $this->DisplayValue = $val;
    }

    /**
     * @param <anyXML> $val
     * @throws \Exception
     */
    public function setAny($val)
    {
        $this->any = $val;
    }
}
