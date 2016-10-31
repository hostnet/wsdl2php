<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class SearchCriteria
{
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\Clause
     */
    public $clauses;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SearchModeType
     */
    public $mode;
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\string
     */
    public $withoutstates;
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\string
     */
    public $withstates;
    /**
     * @param ArrayOfClause $val
     * @throws Exception
     */
    public function setClauses($val)
    {
        $this->clauses = (int)$val;
    }

    /**
     * @param SearchModeType $val
     * @throws Exception
     */
    public function setMode($val)
    {
        $this->mode = (int)$val;
    }

    /**
     * @param ArrayOfstring $val
     * @throws Exception
     */
    public function setWithoutstates($val)
    {
        $this->withoutstates = (int)$val;
    }

    /**
     * @param ArrayOfstring $val
     * @throws Exception
     */
    public function setWithstates($val)
    {
        $this->withstates = (int)$val;
    }
}
