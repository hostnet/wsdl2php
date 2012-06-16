<?php

namespace Controle;
/**
 * ErrorParameterType
 * A variable that contains specific information about the context of this error. For example,
 * if you pass in an attribute set ID that does not match the specified category, the attribute
 * set ID might be returned as an error parameter. Use error parameters to flag fields that
 * users need to correct. Also use error parameters to distinguish between errors when multiple errors
 * are returned.
 */
class ErrorParameterType {
	/**
	 * @var string | Specifies the value for the property.
	 */
	public $Value;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
	/**
	 * @var string
	 */
	public $ParamID;
}

