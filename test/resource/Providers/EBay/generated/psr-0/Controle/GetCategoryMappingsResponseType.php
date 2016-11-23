<?php

namespace Controle;

/**
 * GetCategoryMappingsResponseType
 * Returns a map of old category IDs and corresponding active category IDs defined for the
 * site to which the request was sent. Typically used to update an older item definition with
 * a new category ID prior to listing the item.
 */
class GetCategoryMappingsResponseType extends
 \Controle\AbstractResponseType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\CategoryMappingType | Mapping between an old category ID and an active category ID.               Returned when
	 * category mappings exist and the value of CategoryVersion is               different from
	 * the current version on the site.
	 */
	public $CategoryMapping;
	/**
	 * @var string | Version value assigned to the current category mapping data for the site.
	 *     Compare this value to the version value the application stored with the mappings
	 *                the last time the application executed the call. If the versions are the
	 * same,                  the data has not changed since the last time the data was retrieved
	 * and stored.
	 */
	public $CategoryVersion;
	// @codingStandardsIgnoreEnd

	/**
	 * @param CategoryMappingType $val
	 * @throws Exception
	 */
	public function setCategoryMapping($val)
	{
        $this->CategoryMapping = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setCategoryVersion($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for CategoryVersion');
        }
        $this->CategoryVersion = (int)$val;
	}
}
