<?php

namespace Controle;

class BedrijfFulltimeSchedule
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\FulltimeSchedule
     */
    public $FulltimeScheduleOne;
    /**
     * @var \Controle\FulltimeSchedule
     */
    public $FulltimeScheduleTwo;
    // @codingStandardsIgnoreEnd

    /**
     * @param FulltimeSchedule $val
     * @throws Exception
     */
    public function setFulltimeScheduleOne($val)
    {
        $this->FulltimeScheduleOne = $val;
    }

    /**
     * @param FulltimeSchedule $val
     * @throws Exception
     */
    public function setFulltimeScheduleTwo($val)
    {
        $this->FulltimeScheduleTwo = $val;
    }
}
