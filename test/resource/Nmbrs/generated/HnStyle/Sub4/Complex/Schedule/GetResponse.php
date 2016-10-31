<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Schedule;

class GetResponse
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Schedule
     */
    public $schedule_getresult;
    /**
     * @param Schedule $val
     * @throws Exception
     */
    public function setScheduleGetResult($val)
    {
        $this->schedule_getresult = (int)$val;
    }
}
