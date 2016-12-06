<?php

namespace Controle;

/**
 * MyMessagesSummaryType
 * Summary data for a given user's alerts and messages. This includes the numbers of new alerts
 * and messages, unresolved alerts, flagged messages, and total alerts and messages.
 */
class MyMessagesSummaryType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\MyMessagesFolderSummaryType | Folder summary for each folder. Always returned for detail level ReturnSummary.
     */
    public $FolderSummary;
    /**
     * @var int | The number of new alerts that a given user has. Always returned for detail level ReturnSummary.
     */
    public $NewAlertCount;
    /**
     * @var int | The number of new messages that a given user has. Always returned for detail level ReturnSummary.
     */
    public $NewMessageCount;
    /**
     * @var int | The number of alerts that are not yet resolved. Always returned for detail level ReturnSummary.
     */
    public $UnresolvedAlertCount;
    /**
     * @var int | The number of messages that have been flagged. Always returned for detail level ReturnSummary.
     */
    public $FlaggedMessageCount;
    /**
     * @var int | The total number of alerts for a given user. Always returned for detail level ReturnSummary.
     */
    public $TotalAlertCount;
    /**
     * @var int | The total number of messages for a given user. Always returned for detail level ReturnSummary.
     */
    public $TotalMessageCount;
    // @codingStandardsIgnoreEnd

    /**
     * @param MyMessagesFolderSummaryType $val
     * @throws Exception
     */
    public function setFolderSummary($val)
    {
        $this->FolderSummary = $val;
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
        $this->NewAlertCount = $val;
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
        $this->NewMessageCount = $val;
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
        $this->UnresolvedAlertCount = $val;
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
        $this->FlaggedMessageCount = $val;
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
        $this->TotalAlertCount = $val;
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
        $this->TotalMessageCount = $val;
    }
}
