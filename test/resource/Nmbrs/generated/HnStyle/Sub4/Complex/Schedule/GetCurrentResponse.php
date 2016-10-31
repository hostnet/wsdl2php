<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Schedule;

class GetCurrentResponse
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Schedule
     */
    public $schedule_getcurrentresult;
    /**
     * @param Schedule $val
     * @throws Exception
     */
    public function setScheduleGetCurrentResult($val)
    {
        $this->schedule_getcurrentresult = (int)$val;
    }
}
