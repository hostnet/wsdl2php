<?php

namespace Controle\sub1\sub2;

class GetCategory2FinanceOfferResponseType extends
 \Controle\sub1\sub2\AbstractResponseType
{
	/**
	 * @var int | Count of the feedbacks received by the user for the time period prior to the call indicated
	 * in PeriodInDays. Returned if no detail level is specified.
	 */
	public $count;
	/**
	 * @var \Controle\sub1\sub2\CategoryFinanceOfferArrayType | Set of finance offers that apply to the specified category.
	 */
	public $categoryfinanceofferarray;
	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setCount($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->count = (int)$val;
	}

	/**
	 * @param CategoryFinanceOfferArrayType $val
	 * @throws Exception
	 */
	public function setCategoryFinanceOfferArray($val)
	{
        $this->categoryfinanceofferarray = (int)$val;
	}
}
