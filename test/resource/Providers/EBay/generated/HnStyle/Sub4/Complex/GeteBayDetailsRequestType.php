<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GeteBayDetailsRequestType
 * Retrieves eBay IDs and codes (e.g., site IDs and shipping service codes), enumerated data
 * (e.g., payment methods), and other common eBay meta-data. This call enables you to keep
 * certain data up to date in your applications without referring to the schema, the documentation,
 * or the eBay online help. Other data is returned for your reference, but you may need to
 * refer to the schema or the documentation for information about valid values and usage. <br><br>
 * In some cases, the data returned in the response will vary according to the site that you
 * use for the request.
 */
class GeteBayDetailsRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\DetailNameCodeType | A designation of what kind of information you wish returned for the specified eBay site.
     * If omitted, all details are returned. The possible values for input (the enumeration
     * values of DetailNameCodeType) are the same name as fields returned by the response.
     * See the documentation for the GeteBayDetails response to better understand the DetailName options.
     */
    public $DetailName;
    // @codingStandardsIgnoreEnd

    /**
     * @param DetailNameCodeType $val
     * @throws \Exception
     */
    public function setDetailName($val)
    {
        $this->DetailName = $val;
    }
}
