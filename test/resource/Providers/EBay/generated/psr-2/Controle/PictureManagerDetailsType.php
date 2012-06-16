<?php

namespace Controle;
class PictureManagerDetailsType {
    /**
     * @var \Controle\PictureManagerSubscriptionLevelCodeType | Subscription level (tier) for the user's eBay Store.
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
     * @var \Controle\PictureManagerFolderType | The folder requested in the album.
     */
    public $Folder;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
}

