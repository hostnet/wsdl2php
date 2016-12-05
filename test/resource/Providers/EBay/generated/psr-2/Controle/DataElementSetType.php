<?php

namespace Controle;

/**
 * DataElementSetType
 * Container for a set of data elements (see below) that are applicable for a set of products
 * that were returned within the same response. The data elements contain supplemental information
 * that can help end users understand product search results. Usage of this information is
 * optional and may require developers to inspect the information to determine how it can be
 * applied in an application. Output only.
 */
class DataElementSetType
{
    // @codingStandardsIgnoreStart
    /**
     * @var string | An HTML snippet that specifies hints for the user, help links, help graphics, and other
     * supplemental information that varies per characteristic set. In GetProductSearchPage,
     * one DataElement value contains a hint (including an empty HTML achor element), one DataElement
     * value may contain a URL to insert into the HTML anchor as the href value, and one DataElement
     * value may contain a URL that eBay uses as a help graphic. If no value is available in
     * the meta-data, a dash ("--") is returned instead. Usage of this information is optional
     * and may require developers to inspect the information to determine how it can be applied
     * in an application. Because this is returned as a string, the HTML markup elements are
     * escaped with character entity references (e.g.,&lt;a href=""&gt;&lt;Attributes&gt;...). See
     * the appendices in the eBay Web Services guide for general information about string data
     * types.
     */
    public $DataElement;
    /**
     * @var int | Identifier for a data element. This is primarily for internal use by eBay. Developers
     * can choose to inspect this information and determine how it can be applied in their
     * applications.
     */
    public $DataElementID;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
    /**
     * @var int
     */
    public $attributeSetID;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setDataElement($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for DataElement');
        }
        $this->DataElement = (string)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setDataElementID($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->DataElementID = (int)$val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = (<anyXML>)$val;
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
        $this->attributeSetID = (int)$val;
    }
}
