<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class PictureManagerDetailsType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\PictureManagerSubscriptionLevelCodeType | Subscription level (tier) for the user's eBay Store.
     */
    public $SubscriptionLevel;
    /**
     * @var int | The amount of storage already in use. Measured in bytes. Read-only value.
     */
    public $StorageUsed;
    /**
     * @var int | The amount of storage space remaining in the authenticated user's album. Measured in
     * bytes. Read-only value.
     */
    public $TotalStorageAvailable;
    /**
     * @var boolean | Whether to keep a copy of the original picture without resizing. Default is false. true
     * = keep originals.
     */
    public $KeepOriginal;
    /**
     * @var boolean | Whether to show the EPS watermark when photos are displayed. Default is false. true
     * = show.
     */
    public $WatermarkEPS;
    /**
     * @var boolean | Whether to show the user ID watermark when photos are displayed. Default is false. true
     * = show.
     */
    public $WatermarkUserID;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\PictureManagerFolderType | The folder requested in the album.
     */
    public $Folder;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param PictureManagerSubscriptionLevelCodeType $val
     * @throws Exception
     */
    public function setSubscriptionLevel($val)
    {
        $this->SubscriptionLevel = (PictureManagerSubscriptionLevelCodeType)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setStorageUsed($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->StorageUsed = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setTotalStorageAvailable($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->TotalStorageAvailable = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setKeepOriginal($val)
    {
        $this->KeepOriginal = (boolean)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setWatermarkEPS($val)
    {
        $this->WatermarkEPS = (boolean)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setWatermarkUserID($val)
    {
        $this->WatermarkUserID = (boolean)$val;
    }

    /**
     * @param PictureManagerFolderType $val
     * @throws Exception
     */
    public function setFolder($val)
    {
        $this->Folder = (PictureManagerFolderType)$val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = (<anyXML>)$val;
    }
}
