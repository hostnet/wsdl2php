<?php

namespace Controle\sub1\sub2;

class Attachment
{
	/**
	 * @var base64Binary
	 */
	public $data;
	/**
	 * @var string
	 */
	public $filename;
	/**
	 * @param base64Binary $val
	 * @throws Exception
	 */
	public function setData($val)
	{
        $this->data = (int)$val;
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
        $this->filename = (int)$val;
	}
}
