<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Schedule\GetAll;

class AllEmployeesByCompanyResponse
{
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\EmployeeScheduleItem
     */
    public $schedule_getall_allemployeesbycompanyresult;
    /**
     * @param ArrayOfEmployeeScheduleItem $val
     * @throws Exception
     */
    public function setScheduleGetAllAllEmployeesByCompanyResult($val)
    {
        $this->schedule_getall_allemployeesbycompanyresult = (int)$val;
    }
}
