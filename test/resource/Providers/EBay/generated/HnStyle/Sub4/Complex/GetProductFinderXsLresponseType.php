<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class GetProductFinderXsLresponseType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractResponseType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\XSLFileType | Child elements specify data related to one XSL file. See XSLFileType. Multiple XSLFile
     * objects can be returned.
     */
    public $xslfile;
    /**
     * @param XSLFileType $val
     * @throws Exception
     */
    public function setXSLFile($val)
    {
        $this->xslfile = (int)$val;
    }
}
