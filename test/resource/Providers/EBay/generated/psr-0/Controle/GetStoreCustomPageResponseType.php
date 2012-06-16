<?php

namespace Controle;
/**
 * GetStoreCustomPageResponseType
 * Contains the custom page or pages for the user's Store.
 */
class GetStoreCustomPageResponseType extends \Controle\AbstractResponseType {
	/**
	 * @var \Controle\StoreCustomPageArrayType | The custom page or custom pages.
	 */
	public $CustomPageArray;
}

