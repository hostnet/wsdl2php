<?php

namespace Controle\sub1\sub2;
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
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setID($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for ID');
		$this->ID = (int)$val;
	}

}

