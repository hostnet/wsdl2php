<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\CostCenter;

class Insert
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $CompanyId;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\CostCenter
     */
    public $kostenplaats;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws Exception
     */
    public function setCompanyId($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->CompanyId = $val;
    }

    /**
     * @param CostCenter $val
     * @throws Exception
     */
    public function setKostenplaats($val)
    {
        $this->kostenplaats = $val;
    }
}
