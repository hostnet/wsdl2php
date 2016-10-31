<?php

namespace Controle;
/**
 * SkypeMeTransactionalEnabledDefinitionType
 * Defines the feature of adding Skype buttons to listings for transactional formats  (e.g.,
 * the Chinese auction format). If the field is present, the corresponding feature applies
 * to the category. The field is returned as an empty element (i.e., a boolean value is not
 * returned).
 */
class SkypeMeTransactionalEnabledDefinitionType {
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val) {
        
        $this->any = (int)$val;
    }

}

