<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class BedrijfFulltimeSchedule
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\FulltimeSchedule
     */
    public $FulltimeScheduleOne;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\FulltimeSchedule
     */
    public $FulltimeScheduleTwo;
    // @codingStandardsIgnoreEnd

    /**
     * @param FulltimeSchedule $val
     * @throws Exception
     */
    public function setFulltimeScheduleOne($val)
    {
        $this->FulltimeScheduleOne = (FulltimeSchedule)$val;
    }

    /**
     * @param FulltimeSchedule $val
     * @throws Exception
     */
    public function setFulltimeScheduleTwo($val)
    {
        $this->FulltimeScheduleTwo = (FulltimeSchedule)$val;
    }
}
