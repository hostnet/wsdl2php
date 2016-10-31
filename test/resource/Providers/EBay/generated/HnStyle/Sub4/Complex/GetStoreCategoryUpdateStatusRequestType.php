<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetStoreCategoryUpdateStatusRequestType
 * Returns the status of the processing progress for category structure changes specified with
 * a SetStoreCategories request. Use this call to retrieve status when the SetStoreCategories
 * call is being processed asynchronously. SetStoreCategories will be processed asynchronously
 * when many listings are affected by the category structure changes.
 */
class GetStoreCategoryUpdateStatusRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    /**
     * @var long | The task ID associated with the category structure change request. If the SetStoreCategories
     * call is process synchronously, the task ID is 0. If the category structure changes affect
     * many listings, the changes will be processed asynchronously and the task ID will be
     * a positive number. Use the task ID with GetStoreCategoryUpdateStatus to monitor the
     * status of asynchronously processed changes.
     */
    public $taskid;
    /**
     * @param long $val
     * @throws Exception
     */
    public function setTaskID($val)
    {
        $this->taskid = (int)$val;
    }
}
