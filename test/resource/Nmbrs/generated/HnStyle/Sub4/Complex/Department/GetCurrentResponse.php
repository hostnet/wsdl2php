<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Department;

class GetCurrentResponse
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Department
     */
    public $department_getcurrentresult;
    /**
     * @param Department $val
     * @throws Exception
     */
    public function setDepartmentGetCurrentResult($val)
    {
        $this->department_getcurrentresult = (int)$val;
    }
}
