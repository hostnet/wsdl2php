<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * MyMessagesFolderSummaryType
 * Summary details for a specified My Messages folder.
 */
class MyMessagesFolderSummaryType
{
    // @codingStandardsIgnoreStart
    /**
     * @var long | The ID of the folder.
     */
    public $FolderID;
    /**
     * @var string | The name of a specified My Messages folder.
     */
    public $FolderName;
    /**
     * @var int | The number of new alerts that a given user has. Always returned for detail level ReturnSummary.
     */
    public $NewAlertCount;
    /**
     * @var int | The number of new messages that a given user has. Always returned for detail level ReturnSummary.
     */
    public $NewMessageCount;
    /**
     * @var int | The total number of alerts for a given user. Always returned for detail level ReturnSummary.
     */
    public $TotalAlertCount;
    /**
     * @var int | The total number of messages for a given user. Always returned for detail level ReturnSummary.
     */
    public $TotalMessageCount;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param long $val
     * @throws Exception
     */
    public function setFolderID($val)
    {
        $this->FolderID = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setFolderName($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for FolderName');
        }
        $this->FolderName = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setNewAlertCount($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->NewAlertCount = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setNewMessageCount($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->NewMessageCount = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setTotalAlertCount($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->TotalAlertCount = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setTotalMessageCount($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->TotalMessageCount = (int)$val;
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
