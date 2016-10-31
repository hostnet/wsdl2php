<?php

namespace Controle;

class WhoisResponse
{
    /**
     * @var \Controle\Response
     */
    public $whoisresult;
    /**
     * @var string
     */
    public $whoisdata;
    /**
     * @param Response $val
     * @throws Exception
     */
    public function setWhoisResult($val)
    {
        $this->whoisresult = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setWhoisData($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for whoisData');
        }
        $this->whoisdata = (int)$val;
    }
}
