<?php

namespace Controle;
/**
 * ReasonCodeDetailType
 * A container for VeRO reason code details.
 */
class ReasonCodeDetailType {
	/**
	 * @var string | The short description of the infringement associated with the reason code ID.
	 */
	public $BriefText;
	/**
	 * @var string | The long description of the infringement associated with the reason code ID.
	 */
	public $DetailedText;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
	/**
	 * @var long
	 */
	public $codeID;
}

