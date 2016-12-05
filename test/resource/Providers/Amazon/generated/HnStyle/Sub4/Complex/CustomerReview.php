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
        $this->Rating = (string)$val;
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
        $this->Summary = (string)$val;
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
        $this->Comment = (string)$val;
    }
}
