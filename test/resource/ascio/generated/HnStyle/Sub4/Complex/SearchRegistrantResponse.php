<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class SearchRegistrantResponse
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Response
     */
    public $searchregistrantresult;
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\Registrant
     */
    public $registrants;
    /**
     * @param Response $val
     * @throws Exception
     */
    public function setSearchRegistrantResult($val)
    {
        $this->searchregistrantresult = (int)$val;
    }

    /**
     * @param ArrayOfRegistrant $val
     * @throws Exception
     */
    public function setRegistrants($val)
    {
        $this->registrants = (int)$val;
    }
}
