<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetCategoryMappingsRequestType
 * Retrieves a map of old category IDs and corresponding active category IDs defined for the
 * site to which the request is sent. Typically used to update an older item definition with
 * a new category ID prior to listing the item.
 */
class GetCategoryMappingsRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    // @codingStandardsIgnoreStart
    /**
     * @var string | Version value assigned to the current category mapping data for the site.
     *        Compare this value to the version value the application stored with the mappings
     *                  the last time the application executed the call. If the versions are
     * the same,                  the data has not changed since the last time the data was
     * retrieved and stored.
     */
    public $CategoryVersion;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setCategoryVersion($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for CategoryVersion');
        }
        $this->CategoryVersion = $val;
    }
}
