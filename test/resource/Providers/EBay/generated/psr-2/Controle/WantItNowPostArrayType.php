<?php

namespace Controle;
/**
 * WantItNowPostArrayType
 * Container for a list of search result items. Can contain zero, one, or multiple WantItNowPostType
 * objects, each of which contains data for a single Want It Now post found by the search.
 */
class WantItNowPostArrayType {
    /**
     * @var \Controle\WantItNowPostType | Contains data for a Want It Now post found by a search.
     */
    public $WantItNowPost;
}

