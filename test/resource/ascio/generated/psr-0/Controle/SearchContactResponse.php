<?php

namespace Controle;

class SearchContactResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\Response
	 */
	public $SearchContactResult;
	/**
	 * @var array \Controle\Contact
	 */
	public $contacts;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws \Exception
	 */
	public function setSearchContactResult($val)
	{
        $this->SearchContactResult = $val;
	}

	/**
	 * @param ArrayOfContact $val
	 * @throws \Exception
	 */
	public function setContacts($val)
	{
        $this->contacts = $val;
	}
}
