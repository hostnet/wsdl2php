<?php

namespace Controle\sub1\sub2;

/**
 * ListingDurationReferenceType
 * Identifies the type of listing as an attribute on the ListingDuration node.
 */
class ListingDurationReferenceType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $_;
	/**
	 * @var \Controle\sub1\sub2\ListingTypeCodeType
	 */
	public $type;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function set($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->_ = $val;
	}

	/**
	 * @param ListingTypeCodeType $val
	 * @throws Exception
	 */
	public function setType($val)
	{
        $this->type = $val;
	}
}
