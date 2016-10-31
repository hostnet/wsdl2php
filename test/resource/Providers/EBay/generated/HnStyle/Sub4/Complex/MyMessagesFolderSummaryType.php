<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * MyMessagesFolderSummaryType
 * Summary details for a specified My Messages folder.
 */
class MyMessagesFolderSummaryType
{
    /**
     * @var long | The ID of the folder.
     */
    public $folderid;
    /**
     * @var string | The name of a specified My Messages folder.
     */
    public $foldername;
    /**
     * @var int | The number of new alerts that a given user has. Always returned for detail level ReturnSummary.
     */
    public $newalertcount;
    /**
     * @var int | The number of new messages that a given user has. Always returned for detail level ReturnSummary.
     */
    public $newmessagecount;
    /**
     * @var int | The total number of alerts for a given user. Always returned for detail level ReturnSummary.
     */
    public $totalalertcount;
    /**
     * @var int | The total number of messages for a given user. Always returned for detail level ReturnSummary.
     */
    public $totalmessagecount;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    /**
     * @param long $val
     * @throws Exception
     */
    public function setFolderID($val)
    {
        $this->folderid = (int)$val;
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
        $this->foldername = (int)$val;
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
        $this->newalertcount = (int)$val;
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
        $this->newmessagecount = (int)$val;
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
        $this->totalalertcount = (int)$val;
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
        $this->totalmessagecount = (int)$val;
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
