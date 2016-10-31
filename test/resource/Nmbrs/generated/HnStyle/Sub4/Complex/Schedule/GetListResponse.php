<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Schedule;

class GetListResponse
{
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\Schedule
     */
    public $schedule_getlistresult;
    /**
     * @param ArrayOfSchedule $val
     * @throws Exception
     */
    public function setScheduleGetListResult($val)
    {
        $this->schedule_getlistresult = (int)$val;
    }
}
