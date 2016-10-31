<?php

namespace Controle;

/**
 * SetStoreCategoriesResponseType
 * Returns the status of the processing progress for changes to the category structure for
 * a store.
 */
class SetStoreCategoriesResponseType extends
 \Controle\AbstractResponseType
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
     * @var \Controle\TaskStatusCodeType | Indicates the user's registration/user status. To be eligible to list on Express, a
     * seller's status must be Confirmed. See "eBay Express" in the eBay Web Services guide.
     */
    public $status;
    /**
     * @param long $val
     * @throws Exception
     */
    public function setTaskID($val)
    {
        $this->taskid = (int)$val;
    }

    /**
     * @param TaskStatusCodeType $val
     * @throws Exception
     */
    public function setStatus($val)
    {
        $this->status = (int)$val;
    }
}
