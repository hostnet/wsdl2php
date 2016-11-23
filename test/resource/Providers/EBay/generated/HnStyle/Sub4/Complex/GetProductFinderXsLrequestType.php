<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class GetProductFinderXsLrequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
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
        $this->FileName = (int)$val;
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
        $this->FileVersion = (int)$val;
    }
}
