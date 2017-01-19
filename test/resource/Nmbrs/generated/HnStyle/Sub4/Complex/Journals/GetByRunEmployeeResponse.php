<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Journals;

class GetByRunEmployeeResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $Journals_GetByRunEmployeeResult;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setJournalsGetByRunEmployeeResult($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Journals_GetByRunEmployeeResult');
        }
        $this->Journals_GetByRunEmployeeResult = $val;
    }
}
