<?php

namespace Controle\sub1\sub2;
/**
 * StoreFontType
 * Store font set.
 */
class StoreFontType {
	/**
	 * @var \Controle\sub1\sub2\StoreFontFaceCodeType | Font for the Store name.
	 */
	public $NameFace;
	/**
	 * @var \Controle\sub1\sub2\StoreFontSizeCodeType | Font size for the Store name.
	 */
	public $NameSize;
	/**
	 * @var string | Font color for the Store name. Specified in 6-digit Hex format. For example: F6F6C9
	 */
	public $NameColor;
	/**
	 * @var \Controle\sub1\sub2\StoreFontFaceCodeType | Font for the Store section title.
	 */
	public $TitleFace;
	/**
	 * @var \Controle\sub1\sub2\StoreFontSizeCodeType | Font size for the Store section title.
	 */
	public $TitleSize;
	/**
	 * @var string | Font color for the Store section title. Specified in 6-digit Hex format. For example: F6F6C9
	 */
	public $TitleColor;
	/**
	 * @var \Controle\sub1\sub2\StoreFontFaceCodeType | Font for the Store description.
	 */
	public $DescFace;
	/**
	 * @var \Controle\sub1\sub2\StoreFontSizeCodeType | Font size for the Store description.
	 */
	public $DescSize;
	/**
	 * @var string | Font color for the Store description. Specified in 6-digit Hex format. For example: F6F6C9
	 */
	public $DescColor;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
}

