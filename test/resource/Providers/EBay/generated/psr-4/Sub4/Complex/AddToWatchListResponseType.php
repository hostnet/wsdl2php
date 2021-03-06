<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class AddToWatchListResponseType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractResponseType
{
    // @codingStandardsIgnoreStart
    /**
     * @var int | (out) The current number of items in the user's watch list (after those specified in
     * the call request have been removed)
     */
    public $WatchListCount;
    /**
     * @var int | (out) The maximum number of items allowed in watch lists. Currently this value is the
     * same for all sites and all users.
     */
    public $WatchListMaximum;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setWatchListCount($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->WatchListCount = $val;
    }

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setWatchListMaximum($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->WatchListMaximum = $val;
    }
}
