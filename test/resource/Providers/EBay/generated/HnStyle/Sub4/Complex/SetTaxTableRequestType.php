<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * SetTaxTableRequestType
 * Sets the tax table for a seller on a given site.
 */
class SetTaxTableRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\TaxTableType | Tax details for a jurisdiction such as a state or province. Returns empty in GetItem
     * if no tax table was used. Not applicable to Half.com.
     */
    public $taxtable;
    /**
     * @param TaxTableType $val
     * @throws Exception
     */
    public function setTaxTable($val)
    {
        $this->taxtable = (int)$val;
    }
}
