<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * ReasonCodeDetailType
 * A container for VeRO reason code details.
 */
class ReasonCodeDetailType
{
    /**
     * @var string | The short description of the infringement associated with the reason code ID.
     */
    public $brieftext;
    /**
     * @var string | The long description of the infringement associated with the reason code ID.
     */
    public $detailedtext;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    /**
     * @var long
     */
    public $codeid;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setBriefText($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for BriefText');
        }
        $this->brieftext = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setDetailedText($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for DetailedText');
        }
        $this->detailedtext = (int)$val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = (int)$val;
    }

    /**
     * @param long $val
     * @throws Exception
     */
    public function setCodeID($val)
    {
        $this->codeid = (int)$val;
    }
}
