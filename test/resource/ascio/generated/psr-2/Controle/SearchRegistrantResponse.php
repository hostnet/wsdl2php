<?php

namespace Controle;

class SearchRegistrantResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Response
     */
    public $SearchRegistrantResult;
    /**
     * @var array \Controle\Registrant
     */
    public $registrants;
    // @codingStandardsIgnoreEnd

    /**
     * @param Response $val
     * @throws \Exception
     */
    public function setSearchRegistrantResult($val)
    {
        $this->SearchRegistrantResult = $val;
    }

    /**
     * @param ArrayOfRegistrant $val
     * @throws \Exception
     */
    public function setRegistrants($val)
    {
        $this->registrants = $val;
    }
}
