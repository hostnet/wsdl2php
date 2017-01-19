<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Journals;

class GetByRunCostCenter
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $CompanyId;
    /**
     * @var int
     */
    public $RunId;
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
     * @param int $val
     * @throws \Exception
     */
    public function setRunId($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->RunId = $val;
    }
}
