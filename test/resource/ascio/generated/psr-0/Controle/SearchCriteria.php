<?php

namespace Controle;

class SearchCriteria
{
	/**
	 * @var array \Controle\Clause
	 */
	public $clauses;
	/**
	 * @var \Controle\SearchModeType
	 */
	public $mode;
	/**
	 * @var array \Controle\string
	 */
	public $withoutstates;
	/**
	 * @var array \Controle\string
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
