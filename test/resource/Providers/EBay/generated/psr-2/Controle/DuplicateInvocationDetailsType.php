<?php

namespace Controle;
/**
 * DuplicateInvocationDetailsType
 * Contains properties that provide information on duplicate uses of InvocationIDs.
 */
class DuplicateInvocationDetailsType {
    /**
     * @var \Controle\UUIDType | The duplicate InvocationID.
     */
    public $DuplicateInvocationID;
    /**
     * @var \Controle\InvocationStatusType | Indicates the user's registration/user status. To be eligible to list on Express, a
     * seller's status must be Confirmed. See "eBay Express" in the eBay Web Services guide.
     */
    public $Status;
    /**
     * @var string | The id that identifies the business item the previous API invocation created. For example,
     * the ItemID of the item created by an AddItem call.
     */
    public $InvocationTrackingID;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
}

