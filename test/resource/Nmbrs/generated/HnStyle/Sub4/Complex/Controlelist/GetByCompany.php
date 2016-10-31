<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Controlelist;

class GetByCompany
{
    /**
     * @var int
     */
    public $companyid;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Active
     */
    public $active;
    /**
     * @param int $val
     * @throws Exception
     */
    public function setCompanyId($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->companyid = (int)$val;
    }

    /**
     * @param Active $val
     * @throws Exception
     */
    public function setActive($val)
    {
        $this->active = (int)$val;
    }
}
