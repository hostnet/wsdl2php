<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetTaxTableResponseType
 * Response to GetTaxTableRequest.
 */
class GetTaxTableResponseType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractResponseType
{
    /**
     * @var dateTime | The last time (in GMT) that the tax table was updated. Only returned if the user previously
     * created a tax table and if the site has jurisdictions. LastUpdateTime is useful for
     * synchronization. If you cache the user's tax table, you can use GetTaxTable to check
     * if it has changed and whether you need to update the cached tax table.
     */
    public $lastupdatetime;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\TaxTableType | Tax details for a jurisdiction such as a state or province. Returns empty in GetItem
     * if no tax table was used. Not applicable to Half.com.
     */
    public $taxtable;
    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setLastUpdateTime($val)
    {
        $this->lastupdatetime = (int)$val;
    }

    /**
     * @param TaxTableType $val
     * @throws Exception
     */
    public function setTaxTable($val)
    {
        $this->taxtable = (int)$val;
    }
}
