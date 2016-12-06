<?php

namespace Controle;

/**
 * PictureManagerFolderType
 * A folder in the authenticated user's album. By default, all folders and their pictures are
 * returned. If a folder ID is specified, the folders' metadata and contents are returned.
 */
class PictureManagerFolderType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int | The ID of the folder.
	 */
	public $FolderID;
	/**
	 * @var string | Name of the eBay Store. The name is shown at the top of the Store page.
	 */
	public $Name;
	/**
	 * @var \Controle\PictureManagerPictureType | Indicates whether a listing has an image associated with it.
	 */
	public $Picture;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setFolderID($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->FolderID = $val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setName($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Name');
        }
        $this->Name = $val;
	}

	/**
	 * @param PictureManagerPictureType $val
	 * @throws Exception
	 */
	public function setPicture($val)
	{
        $this->Picture = $val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val)
	{
        $this->any = $val;
	}
}
