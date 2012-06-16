<?php

namespace Controle\sub1\sub2;
class SearchCriteria {
	/**
	 * @var array \Controle\sub1\sub2\Clause
	 */
	public $Clauses;
	/**
	 * @var \Controle\sub1\sub2\SearchModeType
	 */
	public $Mode;
	/**
	 * @var array \Controle\sub1\sub2\string
	 */
	public $Withoutstates;
	/**
	 * @var array \Controle\sub1\sub2\string
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

