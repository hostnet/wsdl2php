<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class XsLfileType
{
    // @codingStandardsIgnoreStart
    /**
     * @var string | The name of the XSL file. Store this information to use it as input to the call in the
     * future.
     */
    public $FileName;
    /**
     * @var string | The version number of the XSL file. Store this information to use it            as input
     * to the call in the future.
     */
    public $FileVersion;
    /**
     * @var string | Contains a MIME base-64-encoded representation of the XSL file. See the eBay Web Services
     * Guide for information on decoding the XSL stylesheet file. If no XSL file is available
     * (or if you passed no detail level), this property is empty or not returned.
     */
    public $FileContent;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setFileName($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for FileName');
        }
        $this->FileName = $val;
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
        $this->FileVersion = $val;
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
        $this->FileContent = $val;
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
