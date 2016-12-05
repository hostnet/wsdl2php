<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetMyMessagesRequestType
 * Used to retrieve information about the messages and alerts sent to a given user. Depending
 * on the detail level, this information can include message and alert counts, resolution and
 * flagged status, message and/or alert headers, and message and/or alert body text. <br /><br
 * /> Note that this call requires a DetailLevel in the request. Omitting the Detail Level
 * returns an error. <br /><br /> ItemID is not returned with this call. Use GetMemberMessages
 * instead.
 */
class GetMyMessagesRequestType extends
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
    /**
     * @var long | The ID of the folder.
     */
    public $FolderID;
    // @codingStandardsIgnoreEnd

    /**
     * @param MyMessagesAlertIDArrayType $val
     * @throws Exception
     */
    public function setAlertIDs($val)
    {
        $this->AlertIDs = ()$val;
    }

    /**
     * @param MyMessagesMessageIDArrayType $val
     * @throws Exception
     */
    public function setMessageIDs($val)
    {
        $this->MessageIDs = ()$val;
    }

    /**
     * @param long $val
     * @throws Exception
     */
    public function setFolderID($val)
    {
        $this->FolderID = ()$val;
    }
}
