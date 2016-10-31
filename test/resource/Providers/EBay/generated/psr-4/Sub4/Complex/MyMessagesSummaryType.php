<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * MyMessagesSummaryType
 * Summary data for a given user's alerts and messages. This includes the numbers of new alerts
 * and messages, unresolved alerts, flagged messages, and total alerts and messages.
 */
class MyMessagesSummaryType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\MyMessagesFolderSummaryType | Folder summary for each folder. Always returned for detail level ReturnSummary.
     */
    public $foldersummary;
    /**
     * @var int | The number of new alerts that a given user has. Always returned for detail level ReturnSummary.
     */
    public $newalertcount;
    /**
     * @var int | The number of new messages that a given user has. Always returned for detail level ReturnSummary.
     */
    public $newmessagecount;
    /**
     * @var int | The number of alerts that are not yet resolved. Always returned for detail level ReturnSummary.
     */
    public $unresolvedalertcount;
    /**
     * @var int | The number of messages that have been flagged. Always returned for detail level ReturnSummary.
     */
    public $flaggedmessagecount;
    /**
     * @var int | The total number of alerts for a given user. Always returned for detail level ReturnSummary.
     */
    public $totalalertcount;
    /**
     * @var int | The total number of messages for a given user. Always returned for detail level ReturnSummary.
     */
    public $totalmessagecount;
    /**
     * @param MyMessagesFolderSummaryType $val
     * @throws Exception
     */
    public function setFolderSummary($val)
    {
        $this->foldersummary = (int)$val;
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
    public function setUnresolvedAlertCount($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->unresolvedalertcount = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setFlaggedMessageCount($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->flaggedmessagecount = (int)$val;
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
}
