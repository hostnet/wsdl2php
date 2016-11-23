<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\RunRequest;

class Insert
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $CompanyId;
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
        $this->CompanyId = (int)$val;
    }
}