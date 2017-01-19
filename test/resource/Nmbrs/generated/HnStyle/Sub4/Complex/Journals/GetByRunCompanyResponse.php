<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Journals;

class GetByRunCompanyResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $Journals_GetByRunCompanyResult;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setJournalsGetByRunCompanyResult($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Journals_GetByRunCompanyResult');
        }
        $this->Journals_GetByRunCompanyResult = $val;
    }
}
