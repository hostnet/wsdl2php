<?php

namespace Controle;

class InsertRespondentResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $InsertRespondentResult;
	/**
	 * @var string
	 */
	public $outErrorMessage;
	/**
	 * @var string
	 */
	public $outInlogCode;
	/**
	 * @var string
	 */
	public $outInlogUrl;
	/**
	 * @var string
	 */
	public $outCUGcode;
	/**
	 * @var string
	 */
	public $outMemberId;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setInsertRespondentResult($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for InsertRespondentResult');
        }
        $this->InsertRespondentResult = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setOutErrorMessage($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for outErrorMessage');
        }
        $this->outErrorMessage = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setOutInlogCode($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for outInlogCode');
        }
        $this->outInlogCode = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setOutInlogUrl($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for outInlogUrl');
        }
        $this->outInlogUrl = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setOutCUGcode($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for outCUGcode');
        }
        $this->outCUGcode = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setOutMemberId($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for outMemberId');
        }
        $this->outMemberId = $val;
	}
}
