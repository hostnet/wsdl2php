<?php

namespace Controle\sub1\sub2;
/**
 * AttributeSetArrayType
 * Applicable for listings that include eBay's Item Specifics or Pre-filled Item Information
 * features.      A list of attribute sets. An attribute set contains a list of attributes
 *      that describe category-specific aspects or features of an item in a standardized way.
 *      See the Developer's Guide for more information. In item-listing requests,      this
 * property is required if attributes are identified as required in the      characteristics
 * set meta-data.      See the Developer's Guide for information about characteristics meta-data
 * and how to      determine when attributes are required.
 */
class AttributeSetArrayType {
	/**
	 * @var \Controle\sub1\sub2\AttributeSetType | A result containing a set of one or more product families. For GetProductSearchResults,
	 * if QueryKeywords and multiple characteristic set IDs were specified in the request, multiple
	 * AttributeSet objects can be returned. Each AttributeSet corresponds to a characteristic
	 * set ID specified in the request. See the eBay Web Services guide for more information about
	 * working with this data. For GetProductSearchResults, only returned with request version
	 * 387 and higher. For GetProductFamilyMembers, only returned with request version 415 and
	 * higher.
	 */
	public $AttributeSet;
}

