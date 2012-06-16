<?php

namespace Controle;
/**
 * CharacteristicSetIDsType
 * (in) A list of one or more characteristic set IDs. In GetProductSearchResults, these IDs
 * indicate which characteristic sets to search in. If not specified, the search is conducted
 * across all characteristic sets. Only applicable when QueryKeywords is specified.
 */
class CharacteristicSetIDsType {
	/**
	 * @var string | Key you specified in ProductSearchID in the search request to distinguish between query
	 * results. Primarily useful when conducting multiple searches in the same call. If no ProductSearchID
	 * value was specified in the request, returns the array index of the search result (beginning
	 * with 0). Not applicable to GetProductFamilyMembers.
	 */
	public $ID;
}

