<?php

namespace Controle;

class SearchCriteria
{
    // @codingStandardsIgnoreStart
    /**
     * @var array \Controle\Clause
     */
    public $Clauses;
    /**
     * @var \Controle\SearchModeType
     */
    public $Mode;
    /**
     * @var array \Controle\string
     */
    public $Withoutstates;
    /**
     * @var array \Controle\string
     */
    public $Withstates;
    // @codingStandardsIgnoreEnd

    /**
     * @param ArrayOfClause $val
     * @throws Exception
     */
    public function setClauses($val)
    {
        $this->Clauses = $val;
    }

    /**
     * @param SearchModeType $val
     * @throws Exception
     */
    public function setMode($val)
    {
        $this->Mode = $val;
    }

    /**
     * @param ArrayOfstring $val
     * @throws Exception
     */
    public function setWithoutstates($val)
    {
        $this->Withoutstates = $val;
    }

    /**
     * @param ArrayOfstring $val
     * @throws Exception
     */
    public function setWithstates($val)
    {
        $this->Withstates = $val;
    }
}
