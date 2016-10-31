<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * SiteWideCharacteristicsType
 * A list of one or more characteristics sets mapped to the category, if any. Use this information
 * when working with Item Specifics (Attributes) and Pre-filled Item Information (Catalogs)
 * functionality.
 */
class SiteWideCharacteristicsType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\CharacteristicsSetType | Container for site-wide characteristics set information.
     */
    public $characteristicsset;
    /**
     * @var string | A category that does not support the specified site-wide characteristics set.
     */
    public $excludecategoryid;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    /**
     * @param CharacteristicsSetType $val
     * @throws Exception
     */
    public function setCharacteristicsSet($val)
    {
        $this->characteristicsset = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setExcludeCategoryID($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ExcludeCategoryID');
        }
        $this->excludecategoryid = (int)$val;
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
