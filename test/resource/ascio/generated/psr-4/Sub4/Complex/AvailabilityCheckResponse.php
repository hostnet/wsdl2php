<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class AvailabilityCheckResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Response
     */
    public $AvailabilityCheckResult;
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\AvailabilityCheckResult
     */
    public $results;
    // @codingStandardsIgnoreEnd

    /**
     * @param Response $val
     * @throws Exception
     */
    public function setAvailabilityCheckResult($val)
    {
        $this->AvailabilityCheckResult = (int)$val;
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
