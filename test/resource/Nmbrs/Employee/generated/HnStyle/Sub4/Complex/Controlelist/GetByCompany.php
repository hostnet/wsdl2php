<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Controlelist;

class GetByCompany
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $CompanyId;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Active
     */
    public $active;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setCompanyId($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->CompanyId = $val;
    }

    /**
     * @param Active $val
     * @throws \Exception
     */
    public function setActive($val)
    {
        $this->active = $val;
    }
}
