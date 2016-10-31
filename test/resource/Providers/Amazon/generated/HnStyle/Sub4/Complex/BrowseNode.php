<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class BrowseNode
{
    /**
     * @var string
     */
    public $browseid;
    /**
     * @var string
     */
    public $browsename;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setBrowseId($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for BrowseId');
        }
        $this->browseid = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setBrowseName($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for BrowseName');
        }
        $this->browsename = (int)$val;
    }
}
