<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\AbsenceXmL;

class GetResponse
{
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\AbsenceVerzuim
     */
    public $absencexml_getresult;
    /**
     * @param ArrayOfAbsenceVerzuim $val
     * @throws Exception
     */
    public function setAbsenceXMLGetResult($val)
    {
        $this->absencexml_getresult = (int)$val;
    }
}
