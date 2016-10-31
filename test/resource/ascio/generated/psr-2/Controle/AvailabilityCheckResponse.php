<?php

namespace Controle;

class AvailabilityCheckResponse
{
    /**
     * @var \Controle\Response
     */
    public $availabilitycheckresult;
    /**
     * @var array \Controle\AvailabilityCheckResult
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
