<?php

namespace Controle\sub1\sub2;

/**
 * PictureManagerFolderType
 * A folder in the authenticated user's album. By default, all folders and their pictures are
 * returned. If a folder ID is specified, the folders' metadata and contents are returned.
 */
class PictureManagerFolderType
{
	/**
	 * @var int | The ID of the folder.
	 */
	public $folderid;
	/**
	 * @var string | Name of the eBay Store. The name is shown at the top of the Store page.
	 */
	public $name;
	/**
	 * @var \Controle\sub1\sub2\PictureManagerPictureType | Indicates whether a listing has an image associated with it.
	 */
	public $picture;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setFolderID($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->folderid = (int)$val;
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
        $this->name = (int)$val;
	}

	/**
	 * @param PictureManagerPictureType $val
	 * @throws Exception
	 */
	public function setPicture($val)
	{
        $this->picture = (int)$val;
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
