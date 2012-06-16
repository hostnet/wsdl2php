<?php

namespace Controle;
class SearchCriteria {
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
    /**
     * @param ArrayOfClause $val
     * @throws Exception
     */
    public function setClauses($val) {
        
        $this->Clauses = (int)$val;
    }

    /**
     * @param SearchModeType $val
     * @throws Exception
     */
    public function setMode($val) {
        
        $this->Mode = (int)$val;
    }

    /**
     * @param ArrayOfstring $val
     * @throws Exception
     */
    public function setWithoutstates($val) {
        
        $this->Withoutstates = (int)$val;
    }

    /**
     * @param ArrayOfstring $val
     * @throws Exception
     */
    public function setWithstates($val) {
        
        $this->Withstates = (int)$val;
    }

}

