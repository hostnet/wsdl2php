<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Title;

class GetListResponse
{
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\Title
     */
    public $title_getlistresult;
    /**
     * @param ArrayOfTitle $val
     * @throws Exception
     */
    public function setTitleGetListResult($val)
    {
        $this->title_getlistresult = (int)$val;
    }
}
