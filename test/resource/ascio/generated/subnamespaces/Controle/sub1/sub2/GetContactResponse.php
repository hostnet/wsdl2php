<?php

namespace Controle\sub1\sub2;

class GetContactResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\Response
	 */
	public $GetContactResult;
	/**
	 * @var \Controle\sub1\sub2\Contact
	 */
	public $contact;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setGetContactResult($val)
	{
        $this->GetContactResult = (Response)$val;
	}

	/**
	 * @param Contact $val
	 * @throws Exception
	 */
	public function setContact($val)
	{
        $this->contact = (Contact)$val;
	}
}
