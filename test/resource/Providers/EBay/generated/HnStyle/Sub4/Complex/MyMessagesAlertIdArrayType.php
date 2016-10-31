<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class MyMessagesAlertIdArrayType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\MyMessagesAlertIDType | An ID that uniquely identifies an alert for a given user.
     */
    public $alertid;
    /**
     * @param MyMessagesAlertIDType $val
     * @throws Exception
     */
    public function setAlertID($val)
    {
        $this->alertid = (int)$val;
    }
}
