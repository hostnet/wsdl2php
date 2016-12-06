<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class Reviews
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $AvgCustomerRating;
    /**
     * @var string
     */
    public $TotalCustomerReviews;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\CustomerReviewArray
     */
    public $CustomerReviews;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setAvgCustomerRating($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for AvgCustomerRating');
        }
        $this->AvgCustomerRating = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setTotalCustomerReviews($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for TotalCustomerReviews');
        }
        $this->TotalCustomerReviews = $val;
    }

    /**
     * @param CustomerReviewArray $val
     * @throws Exception
     */
    public function setCustomerReviews($val)
    {
        $this->CustomerReviews = $val;
    }
}
