<?php

namespace Controle\sub1\sub2;

/**
 * SearchAttributesType
 * A product or item aspect or feature that can be used as a criterion in a search      for
 * catalog content or for listed items.      For example, "Format" might be a criterion for
 * searching the catalogs for      Pre-filled Item Information related to hardcover books.
 */
class SearchAttributesType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int | Unique identifier for the attribute within the characteristic set.            Required
	 * if SearchAttributes is specified.
	 */
	public $AttributeID;
	/**
	 * @var \Controle\sub1\sub2\DateSpecifierCodeType | Specifies the date sub-component that the attribute represents. This only applies to date
	 * attributes. Required when searching by date attributes.            Allows for separate
	 * text fields or drop-down lists to be rendered for            each sub-component. For example,
	 * the day, month, and year can be rendered as            separate drop-down lists. See DateSpecifierCodeType
	 * for possible values.
	 */
	public $DateSpecifier;
	/**
	 * @var \Controle\sub1\sub2\RangeCodeType | Indicates that the attribute represents the high or low end in a range, such as a date
	 * range or a price range. Required when searching on ranges.
	 */
	public $RangeSpecifier;
	/**
	 * @var \Controle\sub1\sub2\ValType | Container for the list of one or more valid values that the user has selected for the searchable
	 * attribute. If multiple values are specified, the search engine applies "OR" logic to the
	 * query (i.e., at least one of the specified values must match). Required if SearchAttributes
	 * is specified.
	 */
	public $ValueList;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setAttributeID($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->AttributeID = $val;
	}

	/**
	 * @param DateSpecifierCodeType $val
	 * @throws Exception
	 */
	public function setDateSpecifier($val)
	{
        $this->DateSpecifier = $val;
	}

	/**
	 * @param RangeCodeType $val
	 * @throws Exception
	 */
	public function setRangeSpecifier($val)
	{
        $this->RangeSpecifier = $val;
	}

	/**
	 * @param ValType $val
	 * @throws Exception
	 */
	public function setValueList($val)
	{
        $this->ValueList = $val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val)
	{
        $this->any = $val;
	}
}
