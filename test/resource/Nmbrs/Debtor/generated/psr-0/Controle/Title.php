<?php

namespace Controle;

class Title
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $TitleName;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setTitleName($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for TitleName');
        }
        $this->TitleName = $val;
	}
}
