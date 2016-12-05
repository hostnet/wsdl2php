<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class SkUarrayType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SKUType | Identifier defined and used by a seller to identify an item. The seller can use a SKU
     * to identify one item or use the same SKU for multiple items. Preferable to ApplicationData
     * for SKUs and inventory tracking. Different sellers can use the same SKUs. This element
     * can be used by sellers to track complex flows of products and information. This element
     * preserves a SKU, enabling a seller to obtain it before and after a transaction is created.
     */
    public $SKU;
    // @codingStandardsIgnoreEnd

    /**
     * @param SKUType $val
     * @throws Exception
     */
    public function setSKU($val)
    {
        $this->SKU = (SKUType)$val;
    }
}
