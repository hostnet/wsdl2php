<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class Title
{
    /**
     * @var string
     */
    public $titlename;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setTitleName($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for TitleName');
        }
        $this->titlename = (int)$val;
    }
}
