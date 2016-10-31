<?php

namespace Controle;
/**
 * NotificationEnableType
 * Specifies a notification event and whether the notification is enabled or disabled.
 */
class NotificationEnableType {
    /**
     * @var \Controle\NotificationEventTypeCodeType |      */
    public $EventType;
    /**
     * @var \Controle\EnableCodeType | Whether the event is enabled or disabled.
     */
    public $EventEnable;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
    /**
     * @param NotificationEventTypeCodeType $val
     * @throws Exception
     */
    public function setEventType($val) {
        
        $this->EventType = (int)$val;
    }

    /**
     * @param EnableCodeType $val
     * @throws Exception
     */
    public function setEventEnable($val) {
        
        $this->EventEnable = (int)$val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val) {
        
        $this->any = (int)$val;
    }

}

