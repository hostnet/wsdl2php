<?php

namespace Controle;
/**
 * NotificationStatisticsType
 * Summary information about notifications delivered, failed, errors, queued for a given application
 * ID and time period.
 */
class NotificationStatisticsType {
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
}

