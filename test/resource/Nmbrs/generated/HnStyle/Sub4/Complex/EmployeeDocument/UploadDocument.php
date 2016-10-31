<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\EmployeeDocument;

class UploadDocument
{
    /**
     * @var int
     */
    public $employeeid;
    /**
     * @var string
     */
    public $strdocumentname;
    /**
     * @var base64Binary
     */
    public $body;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\guid
     */
    public $guiddocumenttype;
    /**
     * @param int $val
     * @throws Exception
     */
    public function setEmployeeId($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->employeeid = (int)$val;
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
        $this->strdocumentname = (int)$val;
    }

    /**
     * @param base64Binary $val
     * @throws Exception
     */
    public function setBody($val)
    {
        $this->body = (int)$val;
    }

    /**
     * @param guid $val
     * @throws Exception
     */
    public function setGuidDocumentType($val)
    {
        $this->guiddocumenttype = (int)$val;
    }
}
