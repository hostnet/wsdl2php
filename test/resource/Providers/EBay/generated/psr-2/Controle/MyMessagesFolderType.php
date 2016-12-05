<?php

namespace Controle;

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
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = ()$val;
    }
}
