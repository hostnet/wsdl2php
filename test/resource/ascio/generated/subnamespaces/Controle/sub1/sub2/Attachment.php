<?php

namespace Controle\sub1\sub2;

class Attachment
{
	// @codingStandardsIgnoreStart
	/**
	 * @var base64Binary
	 */
	public $Data;
	/**
	 * @var string
	 */
	public $FileName;
	// @codingStandardsIgnoreEnd

	/**
	 * @param base64Binary $val
	 * @throws Exception
	 */
	public function setData($val)
	{
        $this->Data = ()$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setFileName($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for FileName');
        }
        $this->FileName = ()$val;
	}
}
