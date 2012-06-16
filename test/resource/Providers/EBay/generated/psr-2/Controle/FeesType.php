<?php

namespace Controle;
/**
 * FeesType
 * Identifies a set of one or more fees that a member pays to eBay (or          an eBay company).
 * Instances of this type can hold one or more fees.
 */
class FeesType {
    /**
     * @var \Controle\FeeType | Monthly fee for the Store subscription level.
     */
    public $Fee;
}

