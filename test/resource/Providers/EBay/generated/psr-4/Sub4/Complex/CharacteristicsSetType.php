<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * CharacteristicsSetType
 * A level in the eBay category hierarchy at which a particular group of items can share a
 * common set of attributes. A set of characteristics that can be used to describe similar
 * kinds of items in a standardized way.
 */
class CharacteristicsSetType
{
    // @codingStandardsIgnoreStart
    /**
     * @var string | Name of the eBay Store. The name is shown at the top of the Store page.
     */
    public $Name;
    /**
     * @var int | Numeric identifier for a characteristic set that defines the attributes            (unique
     * across all eBay sites).
     */
    public $AttributeSetID;
    /**
     * @var string | Version of the characteristics set. Not to be confused with AttributeSystemVersion,
     * which can be used to retrieve changes to attribute meta-data. In item-listing requests,
     * if you specify the version of the attribute set that you have stored locally, eBay will
     * compare it to the current version on the site and return a warning if the versions do
     * not match. If an error occurs due to invalid attribute data, this warning can be useful to
     * help determine if you might be sending outdated data. The current value of version is
     * not necessarily "greater than" the previous value.
     */
    public $AttributeSetVersion;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\CharacteristicType | A salient aspect or feature of an item. Used to describe an item in a standard way so
     * that buyers can find it more easily. An individual, standardized characteristic that
     * is common to all items within the specified characteristic set. In the context of GetProductSearchPage,
     * each characteristic identifies a single searchable attribute. A searchable attribute
     * is a product aspect or feature that can be used as a criterion in a search for catalog
     * content. For example, "Title" might be a criterion for searching the book catalog for
     * Pre- filled Item Information related to books. See the eBay Web Services guide for more
     * information.
     */
    public $Characteristics;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setName($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Name');
        }
        $this->Name = (string)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setAttributeSetID($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->AttributeSetID = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setAttributeSetVersion($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for AttributeSetVersion');
        }
        $this->AttributeSetVersion = (string)$val;
    }

    /**
     * @param CharacteristicType $val
     * @throws Exception
     */
    public function setCharacteristics($val)
    {
        $this->Characteristics = (CharacteristicType)$val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = (<anyXML>)$val;
    }
}
