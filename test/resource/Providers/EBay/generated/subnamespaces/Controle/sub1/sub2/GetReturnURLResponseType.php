<?php

namespace Controle\sub1\sub2;
/**
 * GetReturnURLResponseType
 * Returns all the authentication and authorization preferences and related data for the application.
 */
class GetReturnURLResponseType extends \Controle\sub1\sub2\AbstractResponseType {
	/**
	 * @var string | Sets an application display name for the eBay sign-in page. Need not be set with every
	 * call. Optional.
	 */
	public $ApplicationDisplayName;
	/**
	 * @var \Controle\sub1\sub2\AuthenticationEntryArrayType | One or more sets of authentication preferences and other data that you have configured
	 * for your application (if any). Call SetReturnURL to configure this data.
	 */
	public $AuthenticationEntryArray;
}

