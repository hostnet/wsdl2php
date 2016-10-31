<?php

namespace Controle;

/**
 * CharacteristicType
 * A salient aspect or feature of an item. Used to describe an item in a        standard way
 * so that buyers can find it more easily. An individual,        standardized characteristic
 * that is common to all items within the        specified characteristics set. Applicable
 * when working with Item        Specifics (Attributes) and Pre-filled Item Information (Catalogs) functionality.
 * See the eBay Web Services guide for more information.
 */
class CharacteristicType
{
    /**
     * @var int | Unique identifier for the attribute within the characteristic set.            Required
     * if SearchAttributes is specified.
     */
    public $attributeid;
    /**
     * @var string | Applicable when working with Pre-filled Item Information (Catalogs) functionality.
     *           Returned if the characteristic is a Date data type. Specifies the pattern
     *            to use when presenting the date to a user. Possible values:            Day/Month/Year,
     * Month/Year, Year Only.            For example, the Year Only format would indicate that
     * the date            should be a value like 1999.            Output only.
     */
    public $dateformat;
    /**
     * @var string | The suggested order in which the characteristic should be presented to the user in a
     * list. Indicates the relative position of the sort key in the list of characteristics.
     * The characteristic with the lowest display sequence is considered the default sort key
     * in calls to GetProductSearchResults. Aside from that, usage of this display sequence
     * information is optional. For example, in an application with a graphical user interface,
     * a characteristic with a display sequence of 2 could be presented before one with a display
     * sequence of 3 in a drop-down list. If multiple sort characteristics are returned for
     * a characteristic set, compare their display sequence values to determine the lowest
     * available value (usually 0) and the overall sequence.
     */
    public $displaysequence;
    /**
     * @var string | Applicable when working with Pre-filled Item Information (Catalogs) functionality. The
     * unit of measure (e.g., Inch) to use when the characteristic is numeric indicates a measurement. Not
     * returned if not applicable. Output only.
     */
    public $displayuom;
    /**
     * @var \Controle\LabelType | Applicable when working with Pre-filled Item Information (Catalogs) functionality.
     *           The label to display when presenting the attribute to a user.            Not
     * necessarily the same as the attribute's label as defined in the characteristic set (i.e.,
     * the label could be overridden by the catalog).
     */
    public $label;
    /**
     * @var \Controle\SortOrderCodeType | Applicable when working with Pre-filled Item Information (Catalogs) functionality. Indicates
     * the order in which eBay's search engine will sort the results if you            pass
     * this characteristic as a sort attribute in GetProductSearchResults. You cannot change
     * the sort order of a characteristic when you perform a search. (Of course, you can change
     * the sort order when you present results in your own application.) In GetProductSearchPage,
     * if SortOrder is not returned at all, it means the results will be returned in the order
     * in which they are stored on eBay (which can be useful for international sites that use
     * ideographic characters). Output only.
     */
    public $sortorder;
    /**
     * @var \Controle\ValType | Container for the list of one or more valid values that the user has selected for the
     * searchable attribute. If multiple values are specified, the search engine applies "OR"
     * logic to the query (i.e., at least one of the specified values must match). Required
     * if SearchAttributes is specified.
     */
    public $valuelist;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
    /**
     * @param int $val
     * @throws Exception
     */
    public function setAttributeID($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->attributeid = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setDateFormat($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for DateFormat');
        }
        $this->dateformat = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setDisplaySequence($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for DisplaySequence');
        }
        $this->displaysequence = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setDisplayUOM($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for DisplayUOM');
        }
        $this->displayuom = (int)$val;
    }

    /**
     * @param LabelType $val
     * @throws Exception
     */
    public function setLabel($val)
    {
        $this->label = (int)$val;
    }

    /**
     * @param SortOrderCodeType $val
     * @throws Exception
     */
    public function setSortOrder($val)
    {
        $this->sortorder = (int)$val;
    }

    /**
     * @param ValType $val
     * @throws Exception
     */
    public function setValueList($val)
    {
        $this->valuelist = (int)$val;
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
