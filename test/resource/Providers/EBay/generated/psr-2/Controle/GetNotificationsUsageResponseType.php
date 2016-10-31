<?php

namespace Controle;

/**
 * GetNotificationsUsageResponseType
 * Returns an array of notifications sent to a given application identified by the appID (comes
 * in the credentials). The result can be used by third-party developers troubleshoot issues
 * with notifications. Zero, one or many notifications can be returned in the array. The set
 * of notifications returned is limited to those that were sent between the StartTime and EndTime
 * specified in the request. If StartTime or EndTime filters were not found in the request,
 * then the response will contain the data for only one day (Now-1day). By default, maximum duration
 * is limited to 3 days (Now-3days). These min (1day) and max(3days) applies to Notifications,MarkDownMarkUpHistory
 * and NotificationStatistics.  Notifications are sent only if the ItemID is included in the
 * request. If there is no ItemID, then only Statistics and MarkDownMarkUpHistory information
 * is included.
 */
class GetNotificationsUsageResponseType extends
 \Controle\AbstractResponseType
{
    /**
     * @var dateTime | Date and time (in GMT) that a Want It Now post was added.
     */
    public $starttime;
    /**
     * @var dateTime | Time stamp (in GMT) when the listing is scheduled to end (calculated based on the values
     * of StartTime and ListingDuration) or the actual end time if the item has ended.
     */
    public $endtime;
    /**
     * @var \Controle\NotificationDetailsArrayType | List of notification objects representing the notifications sent to an application for
     * the given time period. It will only be returned if ItemID was specified in the input
     * request.
     */
    public $notificationdetailsarray;
    /**
     * @var \Controle\MarkUpMarkDownHistoryType | List of objects representing MarkUp or MarkDown history for a given appID and for given
     * StartTime and EndTime. This node will always be returned.
     */
    public $markupmarkdownhistory;
    /**
     * @var \Controle\NotificationStatisticsType | Summary information about number of notifications that were successfully delivered,
     * queued, failed, connection attempts made, connection timeouts, http errors for the given
     * appID and given time period. By default, statistics for only one day (Now-1day) is included.
     * Maximum time duration allowed is 3 days (Now-3days).
     */
    public $notificationstatistics;
    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setStartTime($val)
    {
        $this->starttime = (int)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setEndTime($val)
    {
        $this->endtime = (int)$val;
    }

    /**
     * @param NotificationDetailsArrayType $val
     * @throws Exception
     */
    public function setNotificationDetailsArray($val)
    {
        $this->notificationdetailsarray = (int)$val;
    }

    /**
     * @param MarkUpMarkDownHistoryType $val
     * @throws Exception
     */
    public function setMarkUpMarkDownHistory($val)
    {
        $this->markupmarkdownhistory = (int)$val;
    }

    /**
     * @param NotificationStatisticsType $val
     * @throws Exception
     */
    public function setNotificationStatistics($val)
    {
        $this->notificationstatistics = (int)$val;
    }
}
