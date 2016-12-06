<?php

namespace Controle\sub1\sub2;

class SearchCriteria
{
	// @codingStandardsIgnoreStart
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
