<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * ReviseMyMessagesRequestType
 * Sets the read state for messages and alerts, the flagged state of messages, and moves alerts
 * and messages into and out of folders.
 */
class ReviseMyMessagesRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\MyMessagesMessageIDArrayType | Contains a list of up to 10 MessageID values. <br /><br /> Either AlertIDs, MessageIDs,
     * or both must be included in the request. Messages in the Sent box cannot be moved, marked
     * as Read, or Flagged.
     */
    public $messageids;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\MyMessagesAlertIDArrayType | Contains a list of up to 10 AlertID values. <br /><br /> Either AlertIDs, MessageIDs,
     * or both must be included in the request. Alerts cannot be flagged. Alerts cannot be moved
     * into a new folder until they have been resolved. <br /><br /> Resolve alerts by marking
     * Read (if no action is required), or by using ActionURL (if action is required).
     */
    public $alertids;
    /**
     * @var boolean | Whether or not a message has been viewed by a given user. Note that retrieving a message
     * with the API does not mark it as read.
     */
    public $read;
    /**
     * @var boolean | Whether or not a message has been flagged.
     */
    public $flagged;
    /**
     * @var long | The ID of the folder.
     */
    public $folderid;
    /**
     * @param MyMessagesMessageIDArrayType $val
     * @throws Exception
     */
    public function setMessageIDs($val)
    {
        $this->messageids = (int)$val;
    }

    /**
     * @param MyMessagesAlertIDArrayType $val
     * @throws Exception
     */
    public function setAlertIDs($val)
    {
        $this->alertids = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setRead($val)
    {
        $this->read = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setFlagged($val)
    {
        $this->flagged = (int)$val;
    }

    /**
     * @param long $val
     * @throws Exception
     */
    public function setFolderID($val)
    {
        $this->folderid = (int)$val;
    }
}
