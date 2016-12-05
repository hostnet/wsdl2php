<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\FileExplorer;

class UploadFile
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $CompanyId;
    /**
     * @var string
     */
    public $StrDocumentName;
    /**
     * @var string
     */
    public $StrDocumentSubFolder;
    /**
     * @var base64Binary
     */
    public $Body;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws Exception
     */
    public function setCompanyId($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->CompanyId = ()$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setStrDocumentName($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for StrDocumentName');
        }
        $this->StrDocumentName = ()$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setStrDocumentSubFolder($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for StrDocumentSubFolder');
        }
        $this->StrDocumentSubFolder = ()$val;
    }

    /**
     * @param base64Binary $val
     * @throws Exception
     */
    public function setBody($val)
    {
        $this->Body = ()$val;
    }
}
