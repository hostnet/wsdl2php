<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Tags;

class GetResponse
{
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\DebtorTag
     */
    public $tags_getresult;
    /**
     * @param ArrayOfDebtorTag $val
     * @throws Exception
     */
    public function setTagsGetResult($val)
    {
        $this->tags_getresult = (int)$val;
    }
}
