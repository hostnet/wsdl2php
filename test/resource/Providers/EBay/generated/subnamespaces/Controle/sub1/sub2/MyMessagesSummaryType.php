<?php

namespace Controle\sub1\sub2;
/**
 * MyMessagesSummaryType
 * Summary data for a given user's alerts and messages. This includes the numbers of new alerts
 * and messages, unresolved alerts, flagged messages, and total alerts and messages.
 */
class MyMessagesSummaryType {
	/**
	 * @var \Controle\sub1\sub2\MyMessagesFolderSummaryType | Folder summary for each folder. Always returned for detail level ReturnSummary.
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
}

