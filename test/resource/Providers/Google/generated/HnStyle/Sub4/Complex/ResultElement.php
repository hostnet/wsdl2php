<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class ResultElement
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $summary;
    /**
     * @var string
     */
    public $URL;
    /**
     * @var string
     */
    public $snippet;
    /**
     * @var string
     */
    public $title;
    /**
     * @var string
     */
    public $cachedSize;
    /**
     * @var boolean
     */
    public $relatedInformationPresent;
    /**
     * @var string
     */
    public $hostName;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\DirectoryCategory
     */
    public $directoryCategory;
    /**
     * @var string
     */
    public $directoryTitle;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setSummary($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for summary');
        }
        $this->summary = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setURL($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for URL');
        }
        $this->URL = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setSnippet($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for snippet');
        }
        $this->snippet = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setTitle($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for title');
        }
        $this->title = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setCachedSize($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for cachedSize');
        }
        $this->cachedSize = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setRelatedInformationPresent($val)
    {
        $this->relatedInformationPresent = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setHostName($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for hostName');
        }
        $this->hostName = (int)$val;
    }

    /**
     * @param DirectoryCategory $val
     * @throws Exception
     */
    public function setDirectoryCategory($val)
    {
        $this->directoryCategory = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setDirectoryTitle($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for directoryTitle');
        }
        $this->directoryTitle = (int)$val;
    }
}
