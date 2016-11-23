<?php

namespace Controle\sub1\sub2;

/**
 * ProductSearchPageType
 *
 */
class ProductSearchPageType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string | Applications should remove dependencies on this element.
	 */
	public $DataElements;
	/**
	 * @var \Controle\sub1\sub2\CharacteristicsSetType | A list of attributes that describe the choice of search criteria          for the specified
	 * characteristic set. The order in which the criteria are returned          is not significant
	 * and may vary for different requests. See the eBay Web Services guide          for details
	 * about how to use this data as input to GetProductSearchResults.
	 */
	public $SearchCharacteristicsSet;
	/**
	 * @var \Controle\sub1\sub2\CharacteristicsSearchCodeType | Indicates whether one attribute or multiple attributes can be used as the search keyword
	 *          when calling GetProductSearchResults. Applications can ignore this data because
	 *          GetProductSearchPage only supports single-attribute searches.          Use GetProductFinder
	 * to determine valid multi-attribute searches.
	 */
	public $SearchType;
	/**
	 * @var \Controle\sub1\sub2\CharacteristicType | A product aspect or feature that can be used as a key for sorting catalog search results.
	 *          This does not necessarily match a searchable attribute. For example, you might
	 * be able to          search on a product's title but sort the results by the release date
	 * or the manufacturer's          suggested retail price (MSRP). At least one sort attribute
	 * is always returned.          Applications should ensure that only one attribute is selected
	 * as a sort key from          these results (before calling GetProductSearchResults). The
	 * default sort key is the one          with the lowest DisplaySequence value.          The
	 * order in which the SortCharacteristics nodes are returned is not significant and may vary
	 * for          different requests.          See the eBay Web Services guide for details about
	 * how to use this data as input to          GetProductSearchResults.
	 */
	public $SortCharacteristics;
	/**
	 * @var \Controle\sub1\sub2\DataElementSetType | Contains helpful hints for the user. Usage of this information is optional.
	 */
	public $DataElementSet;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setDataElements($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for DataElements');
        }
        $this->DataElements = (int)$val;
	}

	/**
	 * @param CharacteristicsSetType $val
	 * @throws Exception
	 */
	public function setSearchCharacteristicsSet($val)
	{
        $this->SearchCharacteristicsSet = (int)$val;
	}

	/**
	 * @param CharacteristicsSearchCodeType $val
	 * @throws Exception
	 */
	public function setSearchType($val)
	{
        $this->SearchType = (int)$val;
	}

	/**
	 * @param CharacteristicType $val
	 * @throws Exception
	 */
	public function setSortCharacteristics($val)
	{
        $this->SortCharacteristics = (int)$val;
	}

	/**
	 * @param DataElementSetType $val
	 * @throws Exception
	 */
	public function setDataElementSet($val)
	{
        $this->DataElementSet = (int)$val;
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
