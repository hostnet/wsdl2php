<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class CustomerReview
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $Rating;
    /**
     * @var string
     */
    public $Summary;
    /**
     * @var string
     */
    public $Comment;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setRating($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Rating');
        }
        $this->Rating = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setSummary($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Summary');
        }
        $this->Summary = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setComment($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Comment');
        }
        $this->Comment = $val;
    }
}
