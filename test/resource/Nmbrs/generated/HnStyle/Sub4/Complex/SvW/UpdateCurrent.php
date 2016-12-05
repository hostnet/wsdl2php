<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\SvW;

class UpdateCurrent
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $CompanyId;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SVW
     */
    public $SVW;
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

    /**
     * @param SVW $val
     * @throws Exception
     */
    public function setSVW($val)
    {
        $this->SVW = (SVW)$val;
    }
}
