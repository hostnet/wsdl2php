<?php
		parent::__construct($wsdl ? $wsdl : self::WSDL_FILE, $options);
	}

	/**
	 * doGetCachedPage
	 *
	 * @param $key
	 * @param $url
	 * @return base64Binary
	 */
	public function doGetCachedPage($key, $url) {
		return $this->__soapCall(
			'doGetCachedPage',
			array(
				$key,
				$url
				),
			array('uri'=>'urn:GoogleSearch')
		);
	}

	/**
	 * doSpellingSuggestion
	 *
	 * @param $key
	 * @param $phrase
	 * @return string
	 */
	public function doSpellingSuggestion($key, $phrase) {
		return $this->__soapCall(
			'doSpellingSuggestion',
			array(
				$key,
				$phrase
				),
			array('uri'=>'urn:GoogleSearch')
		);
	}

	/**
	 * doGoogleSearch
	 *
	 * @param $key
	 * @param $q
	 * @param $start
	 * @param $maxResults
	 * @param $filter
	 * @param $restrict
	 * @param $safeSearch
	 * @param $lr
	 * @param $ie
	 * @param $oe
	 * @return \Controle\sub1\sub2\GoogleSearchResult
	 */
	public function doGoogleSearch($key, $q, $start, $maxResults, $filter, $restrict, $safeSearch, $lr, $ie, $oe) {
		return $this->__soapCall(
			'doGoogleSearch',
			array(
				$key,
				$q,
				$start,
				$maxResults,
				$filter,
				$restrict,
				$safeSearch,
				$lr,
				$ie,
				$oe
				),
			array('uri'=>'urn:GoogleSearch')
		);
	}

}
