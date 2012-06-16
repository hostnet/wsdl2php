<?php

namespace Controle;
/**
 * MyMessagesFolderSummaryType
 * Summary details for a specified My Messages folder.
 */
class MyMessagesFolderSummaryType {
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
     * @var \Controle\<anyXML>
     */
    public $any;
}

