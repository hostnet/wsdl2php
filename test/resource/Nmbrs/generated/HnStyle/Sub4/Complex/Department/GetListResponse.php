<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Department;

class GetListResponse
{
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\Department
     */
    public $department_getlistresult;
    /**
     * @param ArrayOfDepartment $val
     * @throws Exception
     */
    public function setDepartmentGetListResult($val)
    {
        $this->department_getlistresult = (int)$val;
    }
}
