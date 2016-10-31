<?php

namespace Controle;
class AvailabilityCheckResponse {
    /**
     * @var \Controle\Response
     */
    public $AvailabilityCheckResult;
    /**
     * @var array \Controle\AvailabilityCheckResult
     */
    public $results;
    /**
     * @param Response $val
     * @throws Exception
     */
    public function setAvailabilityCheckResult($val) {
        
        $this->AvailabilityCheckResult = (int)$val;
    }

    /**
     * @param ArrayOfAvailabilityCheckResult $val
     * @throws Exception
     */
    public function setResults($val) {
        
        $this->results = (int)$val;
    }

}

