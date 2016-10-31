<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * NotificationEventPropertyType
 * Defines properties associated with particular event.
 */
class NotificationEventPropertyType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\NotificationEventTypeCodeType |      */
    public $eventtype;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\NotificationEventPropertyNameCodeType | Name of the eBay Store. The name is shown at the top of the Store page.
     */
    public $name;
    /**
     * @var string | Specifies the value for the property.
     */
    public $value;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    /**
     * @param NotificationEventTypeCodeType $val
     * @throws Exception
     */
    public function setEventType($val)
    {
        $this->eventtype = (int)$val;
    }

    /**
     * @param NotificationEventPropertyNameCodeType $val
     * @throws Exception
     */
    public function setName($val)
    {
        $this->name = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setValue($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Value');
        }
        $this->value = (int)$val;
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