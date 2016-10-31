<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * SupportedEventTypesArrayType
 *
 */
class SupportedEventTypesArrayType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\NotificationEventTypeCodeType |      */
    public $eventtype;
    /**
     * @param NotificationEventTypeCodeType $val
     * @throws Exception
     */
    public function setEventType($val)
    {
        $this->eventtype = (int)$val;
    }
}
