<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Journals;

class GetByRunDepartmentResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $Journals_GetByRunDepartmentResult;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setJournalsGetByRunDepartmentResult($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Journals_GetByRunDepartmentResult');
        }
        $this->Journals_GetByRunDepartmentResult = $val;
    }
}
