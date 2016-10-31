<?php

namespace Controle;

/**
 * SchedulingInfoType
 * Contains information for scheduling limits for the user.
 */
class SchedulingInfoType
{
    /**
     * @var int | Maximum number of minutes that a listing may be scheduled in advance of its going live.
     *            Output only.
     */
    public $maxscheduledminutes;
    /**
     * @var int | Minimum number of minutes that a listing may be scheduled in advance of its going live.
     *            Output only.
     */
    public $minscheduledminutes;
    /**
     * @var int | Maximum number of Items that a user may schedule.            Output only.
     */
    public $maxscheduleditems;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
    /**
     * @param int $val
     * @throws Exception
     */
    public function setMaxScheduledMinutes($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->maxscheduledminutes = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setMinScheduledMinutes($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->minscheduledminutes = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setMaxScheduledItems($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->maxscheduleditems = (int)$val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = (int)$val;
    }
}
