<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class XsLfileType
{
    /**
     * @var string | The name of the XSL file. Store this information to use it as input to the call in the
     * future.
     */
    public $filename;
    /**
     * @var string | The version number of the XSL file. Store this information to use it            as input
     * to the call in the future.
     */
    public $fileversion;
    /**
     * @var string | Contains a MIME base-64-encoded representation of the XSL file. See the eBay Web Services
     * Guide for information on decoding the XSL stylesheet file. If no XSL file is available
     * (or if you passed no detail level), this property is empty or not returned.
     */
    public $filecontent;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setFileName($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for FileName');
        }
        $this->filename = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setFileVersion($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for FileVersion');
        }
        $this->fileversion = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setFileContent($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for FileContent');
        }
        $this->filecontent = (int)$val;
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
