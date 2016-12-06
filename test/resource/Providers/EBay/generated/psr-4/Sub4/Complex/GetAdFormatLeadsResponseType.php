<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetAdFormatLeadsResponseType
 * Returns number of leads and contact and other information for each lead. One AdFormatLead
 * node is returned for each lead.
 */
class GetAdFormatLeadsResponseType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractResponseType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AdFormatLeadType | Contains contact and other information for one lead. One node is returned for each lead.
     * Only returned at a detail level of ReturnAll. At least one lead must be available for
     * the specified item to return AdFormatLead.
     */
    public $AdFormatLead;
    /**
     * @var int | The total number of leads returned. Only returned if you do not specify a detail level.
     */
    public $AdFormatLeadCount;
    // @codingStandardsIgnoreEnd

    /**
     * @param AdFormatLeadType $val
     * @throws Exception
     */
    public function setAdFormatLead($val)
    {
        $this->AdFormatLead = $val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setAdFormatLeadCount($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->AdFormatLeadCount = $val;
    }
}
