<?php

namespace Controle\sub1\sub2;
/**
 * AuthenticationEntryArrayType
 * Container for a list of AuthenticationEntries. Can contain zero, one, or multiple AuthenticationEntryType
 * objects.
 */
class AuthenticationEntryArrayType {
	/**
	 * @var \Controle\sub1\sub2\AuthenticationEntryType | Contains the data properties that define one authentication entry.            Multiple
	 * AuthenticationEntry fields can be returned.
	 */
	public $AuthenticationEntry;
}

