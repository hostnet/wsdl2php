<?php

namespace Controle\sub1\sub2;

/**
 * MyMessagesFolderType
 * Details relating to a My Messages folder.
 */
class MyMessagesFolderType
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
	 * @var \Controle\sub1\sub2\<anyXML>
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
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val)
	{
        $this->any = (int)$val;
	}
}
