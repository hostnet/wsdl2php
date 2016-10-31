<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class ExternalAlertIdArrayType
{
    /**
     * @var string | An ID used by an external application to uniquely identify an alert.
     */
    public $externalalertid;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setExternalAlertID($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ExternalAlertID');
        }
        $this->externalalertid = (int)$val;
    }
}
