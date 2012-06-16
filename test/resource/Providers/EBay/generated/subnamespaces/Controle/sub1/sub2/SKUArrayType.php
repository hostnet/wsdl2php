<?php

namespace Controle\sub1\sub2;
/**
 * SKUArrayType
 * A list of stock-keeping unit (SKU) identifiers that a seller uses in listings.
 */
class SKUArrayType {
	/**
	 * @var \Controle\sub1\sub2\SKUType | Identifier defined and used by a seller to identify an item. The seller can use a SKU to
	 * identify one item or use the same SKU for multiple items. Preferable to ApplicationData
	 * for SKUs and inventory tracking. Different sellers can use the same SKUs. This element
	 * can be used by sellers to track complex flows of products and information. This element
	 * preserves a SKU, enabling a seller to obtain it before and after a transaction is created.
	 */
	public $SKU;
}

