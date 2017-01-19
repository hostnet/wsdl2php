<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Employee;

class GetCurrentResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $Employee_GetCurrentResult;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setEmployeeGetCurrentResult($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Employee_GetCurrentResult');
        }
        $this->Employee_GetCurrentResult = $val;
    }
}
