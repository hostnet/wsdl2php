<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * DeleteMyMessagesRequestType
 * Removes selected alerts and messages for a given user. Alerts that require action and have
 * not been resolved by the user cannot be deleted.
 */
class DeleteMyMessagesRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\MyMessagesAlertIDArrayType | Contains a list of up to 10 AlertID values. <br /><br /> Either AlertIDs, MessageIDs,
     * or both must be included in the request. Alerts cannot be flagged. Alerts cannot be moved
     * into a new folder until they have been resolved. <br /><br /> Resolve alerts by marking
     * Read (if no action is required), or by using ActionURL (if action is required).
     */
    public $AlertIDs;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\MyMessagesMessageIDArrayType | Contains a list of up to 10 MessageID values. <br /><br /> Either AlertIDs, MessageIDs,
     * or both must be included in the request. Messages in the Sent box cannot be moved, marked
     * as Read, or Flagged.
     */
    public $MessageIDs;
    // @codingStandardsIgnoreEnd

    /**
     * @param MyMessagesAlertIDArrayType $val
     * @throws \Exception
     */
    public function setAlertIDs($val)
    {
        $this->AlertIDs = $val;
    }

    /**
     * @param MyMessagesMessageIDArrayType $val
     * @throws \Exception
     */
    public function setMessageIDs($val)
    {
        $this->MessageIDs = $val;
    }
}
