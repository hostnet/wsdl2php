<?php

namespace Controle;

/**
 * MyMessagesFolderType
 * Details relating to a My Messages folder.
 */
class MyMessagesFolderType
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
     * @var \Controle\<anyXML>
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
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = (int)$val;
    }
}
