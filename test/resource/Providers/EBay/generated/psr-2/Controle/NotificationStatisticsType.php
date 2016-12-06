<?php

namespace Controle;

/**
 * NotificationStatisticsType
 * Summary information about notifications delivered, failed, errors, queued for a given application
 * ID and time period.
 */
class NotificationStatisticsType
{
    // @codingStandardsIgnoreStart
    /**
     * @var int | Returns the number of notifications delivered successfully during the given time period.
     */
    public $DeliveredCount;
    /**
     * @var int | Returns the number of new notifications that were queued during the given time period.
     */
    public $QueuedNewCount;
    /**
     * @var int | Returns the number of pending notifications in the queue during the given time period.
     */
    public $QueuedPendingCount;
    /**
     * @var int | Returns the number of notifications that permanently failed during the given time period.
     */
    public $ExpiredCount;
    /**
     * @var int | Returns the number of notifications for which there were delivery errors during the
     * given time period.
     */
    public $ErrorCount;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws Exception
     */
    public function setDeliveredCount($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->DeliveredCount = $val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setQueuedNewCount($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->QueuedNewCount = $val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setQueuedPendingCount($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->QueuedPendingCount = $val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setExpiredCount($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->ExpiredCount = $val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setErrorCount($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->ErrorCount = $val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = $val;
    }
}
