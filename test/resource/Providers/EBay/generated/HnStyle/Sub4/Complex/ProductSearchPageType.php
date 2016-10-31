<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * ProductSearchPageType
 *
 */
class ProductSearchPageType
{
    /**
     * @var string | Applications should remove dependencies on this element.
     */
    public $dataelements;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\CharacteristicsSetType | A list of attributes that describe the choice of search criteria          for the specified
     * characteristic set. The order in which the criteria are returned          is not significant
     * and may vary for different requests. See the eBay Web Services guide          for details
     * about how to use this data as input to GetProductSearchResults.
     */
    public $searchcharacteristicsset;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\CharacteristicsSearchCodeType | Indicates whether one attribute or multiple attributes can be used as the search keyword
     *          when calling GetProductSearchResults. Applications can ignore this data because
     *          GetProductSearchPage only supports single-attribute searches.          Use
     * GetProductFinder to determine valid multi-attribute searches.
     */
    public $searchtype;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\CharacteristicType | A product aspect or feature that can be used as a key for sorting catalog search results.
     *          This does not necessarily match a searchable attribute. For example, you might
     * be able to          search on a product's title but sort the results by the release
     * date or the manufacturer's          suggested retail price (MSRP). At least one sort
     * attribute is always returned.          Applications should ensure that only one attribute
     * is selected as a sort key from          these results (before calling GetProductSearchResults).
     * The default sort key is the one          with the lowest DisplaySequence value.
     *      The order in which the SortCharacteristics nodes are returned is not significant
     * and may vary for          different requests.          See the eBay Web Services guide
     * for details about how to use this data as input to          GetProductSearchResults.
     */
    public $sortcharacteristics;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\DataElementSetType | Contains helpful hints for the user. Usage of this information is optional.
     */
    public $dataelementset;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setDataElements($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for DataElements');
        }
        $this->dataelements = (int)$val;
    }

    /**
     * @param CharacteristicsSetType $val
     * @throws Exception
     */
    public function setSearchCharacteristicsSet($val)
    {
        $this->searchcharacteristicsset = (int)$val;
    }

    /**
     * @param CharacteristicsSearchCodeType $val
     * @throws Exception
     */
    public function setSearchType($val)
    {
        $this->searchtype = (int)$val;
    }

    /**
     * @param CharacteristicType $val
     * @throws Exception
     */
    public function setSortCharacteristics($val)
    {
        $this->sortcharacteristics = (int)$val;
    }

    /**
     * @param DataElementSetType $val
     * @throws Exception
     */
    public function setDataElementSet($val)
    {
        $this->dataelementset = (int)$val;
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