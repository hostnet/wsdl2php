<?php

namespace Controle\sub1\sub2;

/**
 * StoreFontType
 * Store font set.
 */
class StoreFontType
{
	/**
	 * @var \Controle\sub1\sub2\StoreFontFaceCodeType | Font for the Store name.
	 */
	public $nameface;
	/**
	 * @var \Controle\sub1\sub2\StoreFontSizeCodeType | Font size for the Store name.
	 */
	public $namesize;
	/**
	 * @var string | Font color for the Store name. Specified in 6-digit Hex format. For example: F6F6C9
	 */
	public $namecolor;
	/**
	 * @var \Controle\sub1\sub2\StoreFontFaceCodeType | Font for the Store section title.
	 */
	public $titleface;
	/**
	 * @var \Controle\sub1\sub2\StoreFontSizeCodeType | Font size for the Store section title.
	 */
	public $titlesize;
	/**
	 * @var string | Font color for the Store section title. Specified in 6-digit Hex format. For example: F6F6C9
	 */
	public $titlecolor;
	/**
	 * @var \Controle\sub1\sub2\StoreFontFaceCodeType | Font for the Store description.
	 */
	public $descface;
	/**
	 * @var \Controle\sub1\sub2\StoreFontSizeCodeType | Font size for the Store description.
	 */
	public $descsize;
	/**
	 * @var string | Font color for the Store description. Specified in 6-digit Hex format. For example: F6F6C9
	 */
	public $desccolor;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	/**
	 * @param StoreFontFaceCodeType $val
	 * @throws Exception
	 */
	public function setNameFace($val)
	{
        $this->nameface = (int)$val;
	}

	/**
	 * @param StoreFontSizeCodeType $val
	 * @throws Exception
	 */
	public function setNameSize($val)
	{
        $this->namesize = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setNameColor($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for NameColor');
        }
        $this->namecolor = (int)$val;
	}

	/**
	 * @param StoreFontFaceCodeType $val
	 * @throws Exception
	 */
	public function setTitleFace($val)
	{
        $this->titleface = (int)$val;
	}

	/**
	 * @param StoreFontSizeCodeType $val
	 * @throws Exception
	 */
	public function setTitleSize($val)
	{
        $this->titlesize = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setTitleColor($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for TitleColor');
        }
        $this->titlecolor = (int)$val;
	}

	/**
	 * @param StoreFontFaceCodeType $val
	 * @throws Exception
	 */
	public function setDescFace($val)
	{
        $this->descface = (int)$val;
	}

	/**
	 * @param StoreFontSizeCodeType $val
	 * @throws Exception
	 */
	public function setDescSize($val)
	{
        $this->descsize = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setDescColor($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for DescColor');
        }
        $this->desccolor = (int)$val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val)
	{
        $this->any = (int)$val;
	}
}
