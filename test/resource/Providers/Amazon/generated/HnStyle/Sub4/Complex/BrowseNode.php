<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class BrowseNode
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $BrowseId;
    /**
     * @var string
     */
    public $BrowseName;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setBrowseId($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for BrowseId');
        }
        $this->BrowseId = (int)$val;
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
        $this->BrowseName = (int)$val;
    }
}
