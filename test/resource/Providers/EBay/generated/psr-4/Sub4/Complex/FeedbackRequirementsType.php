<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class FeedbackRequirementsType
{
    // @codingStandardsIgnoreStart
    /**
     * @var boolean
     */
    public $_;
    /**
     * @var string
     */
    public $minimum;
    // @codingStandardsIgnoreEnd

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function set($val)
    {
        $this->_ = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setMinimum($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for minimum');
        }
        $this->minimum = $val;
    }
}
