<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Leave;

class GetListResponse
{
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\Leave
     */
    public $leave_getlistresult;
    /**
     * @param ArrayOfLeave $val
     * @throws Exception
     */
    public function setLeaveGetListResult($val)
    {
        $this->leave_getlistresult = (int)$val;
    }
}
