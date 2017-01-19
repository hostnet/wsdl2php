<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Schedule\GetAll;

class AllEmployeesByCompanyResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\EmployeeScheduleItem
     */
    public $Schedule_GetAll_AllEmployeesByCompanyResult;
    // @codingStandardsIgnoreEnd

    /**
     * @param ArrayOfEmployeeScheduleItem $val
     * @throws \Exception
     */
    public function setScheduleGetAllAllEmployeesByCompanyResult($val)
    {
        $this->Schedule_GetAll_AllEmployeesByCompanyResult = $val;
    }
}
