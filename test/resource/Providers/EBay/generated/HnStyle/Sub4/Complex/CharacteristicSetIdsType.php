<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class CharacteristicSetIdsType
{
    /**
     * @var string | Key you specified in ProductSearchID in the search request to distinguish between query
     * results. Primarily useful when conducting multiple searches in the same call. If no
     * ProductSearchID value was specified in the request, returns the array index of the search
     * result (beginning with 0). Not applicable to GetProductFamilyMembers.
     */
    public $id;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setID($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ID');
        }
        $this->id = (int)$val;
    }
}
