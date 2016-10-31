<?php

namespace Controle;

/**
 * DuplicateInvocationDetailsType
 * Contains properties that provide information on duplicate uses of InvocationIDs.
 */
class DuplicateInvocationDetailsType
{
    /**
     * @var \Controle\UUIDType | The duplicate InvocationID.
     */
    public $duplicateinvocationid;
    /**
     * @var \Controle\InvocationStatusType | Indicates the user's registration/user status. To be eligible to list on Express, a
     * seller's status must be Confirmed. See "eBay Express" in the eBay Web Services guide.
     */
    public $status;
    /**
     * @var string | The id that identifies the business item the previous API invocation created. For example,
     * the ItemID of the item created by an AddItem call.
     */
    public $invocationtrackingid;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
    /**
     * @param UUIDType $val
     * @throws Exception
     */
    public function setDuplicateInvocationID($val)
    {
        $this->duplicateinvocationid = (int)$val;
    }

    /**
     * @param InvocationStatusType $val
     * @throws Exception
     */
    public function setStatus($val)
    {
        $this->status = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setInvocationTrackingID($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for InvocationTrackingID');
        }
        $this->invocationtrackingid = (int)$val;
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
