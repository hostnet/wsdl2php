<?php

namespace Controle;
/**
 * ListingDurationDefinitionsType
 * A container node for sets of durations, each set describing the durations allowed for one
 * listing type.
 */
class ListingDurationDefinitionsType {
	/**
	 * @var \Controle\ListingDurationDefinitionType | Specifies the ID of a set of default durations for a certain type of listing. The actual
	 * duration values are returned within the FeatureDefinitions node. The type of listing is
	 * named in the type attribute.
	 */
	public $ListingDuration;
	/**
	 * @var int | The version of the response payload schema. Indicates the version of the schema that eBay
	 * used to process the request. See "Standard Data for All Calls" in the eBay Web Services
	 * Guide for information on using the response version when troubleshooting "CustomCode" values
	 * that appear in the response.
	 */
	public $Version;
}

