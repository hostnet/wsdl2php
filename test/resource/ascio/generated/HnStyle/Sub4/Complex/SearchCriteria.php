<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class SearchCriteria
{
    // @codingStandardsIgnoreStart
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\Clause
     */
    public $Clauses;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SearchModeType
     */
    public $Mode;
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\string
     */
    public $Withoutstates;
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\string
     */
    public $Withstates;
    // @codingStandardsIgnoreEnd

    /**
     * @param ArrayOfClause $val
     * @throws \Exception
     */
    public function setClauses($val)
    {
        $this->Clauses = $val;
    }

    /**
     * @param SearchModeType $val
     * @throws \Exception
     */
    public function setMode($val)
    {
        $this->Mode = $val;
    }

    /**
     * @param ArrayOfstring $val
     * @throws \Exception
     */
    public function setWithoutstates($val)
    {
        $this->Withoutstates = $val;
    }

    /**
     * @param ArrayOfstring $val
     * @throws \Exception
     */
    public function setWithstates($val)
    {
        $this->Withstates = $val;
    }
}
