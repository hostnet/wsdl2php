<?php

namespace Controle;

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
	 * @var \Controle\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param long $val
	 * @throws Exception
	 */
	public function setFolderID($val)
	{
        $this->FolderID = ()$val;
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
        $this->FolderName = ()$val;
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
        $this->NewAlertCount = ()$val;
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
        $this->NewMessageCount = ()$val;
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
        $this->TotalAlertCount = ()$val;
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
        $this->TotalMessageCount = ()$val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val)
	{
        $this->any = ()$val;
	}
}
