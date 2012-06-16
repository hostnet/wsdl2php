<?php

namespace Controle;
/**
 * GetRuNameResponseType
 * Contains the generated runame (unique identifier for an authentication data entry).
 */
class GetRuNameResponseType extends \Controle\AbstractResponseType {
    /**
     * @var string | A unique identifier associated with application and the combination            of URLs
     * within this authentication entry.            Unique across all applications that execute
     * eBay Web Services calls.            For convenience, you can call GetRuName to generate
     * a unique value.
     */
    public $RuName;
}
