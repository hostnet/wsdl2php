<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class AvailabilityCheckResponse
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Response
     */
    public $availabilitycheckresult;
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\AvailabilityCheckResult
     */
    public $results;
    /**
     * @param Response $val
     * @throws Exception
     */
    public function setAvailabilityCheckResult($val)
    {
        $this->availabilitycheckresult = (int)$val;
    }

    /**
     * @param ArrayOfAvailabilityCheckResult $val
     * @throws Exception
     */
    public function setResults($val)
    {
        $this->results = (int)$val;
    }
}
