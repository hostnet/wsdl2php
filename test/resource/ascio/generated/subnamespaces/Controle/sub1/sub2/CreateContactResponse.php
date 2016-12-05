<?php

namespace Controle\sub1\sub2;

class CreateContactResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\Response
	 */
	public $CreateContactResult;
	/**
	 * @var \Controle\sub1\sub2\Contact
	 */
	public $contact;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setCreateContactResult($val)
	{
        $this->CreateContactResult = ()$val;
	}

	/**
	 * @param Contact $val
	 * @throws Exception
	 */
	public function setContact($val)
	{
        $this->contact = ()$val;
	}
}
