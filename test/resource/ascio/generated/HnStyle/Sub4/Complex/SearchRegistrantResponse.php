<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class SearchRegistrantResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Response
     */
    public $SearchRegistrantResult;
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\Registrant
     */
    public $registrants;
    // @codingStandardsIgnoreEnd

    /**
     * @param Response $val
     * @throws Exception
     */
    public function setSearchRegistrantResult($val)
    {
        $this->SearchRegistrantResult = (Response)$val;
    }

    /**
     * @param ArrayOfRegistrant $val
     * @throws Exception
     */
    public function setRegistrants($val)
    {
        $this->registrants = (ArrayOfRegistrant)$val;
    }
}
