<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\EmployeeDocument;

class UploadDocument
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $EmployeeId;
    /**
     * @var string
     */
    public $StrDocumentName;
    /**
     * @var base64Binary
     */
    public $Body;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\guid
     */
    public $GuidDocumentType;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setEmployeeId($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->EmployeeId = $val;
    }

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setStrDocumentName($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for StrDocumentName');
        }
        $this->StrDocumentName = $val;
    }

    /**
     * @param base64Binary $val
     * @throws \Exception
     */
    public function setBody($val)
    {
        $this->Body = $val;
    }

    /**
     * @param guid $val
     * @throws \Exception
     */
    public function setGuidDocumentType($val)
    {
        $this->GuidDocumentType = $val;
    }
}
