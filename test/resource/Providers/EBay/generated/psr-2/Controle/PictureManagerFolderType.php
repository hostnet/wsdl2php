<?php

namespace Controle;
/**
 * PictureManagerFolderType
 * A folder in the authenticated user's album. By default, all folders and their pictures are
 * returned. If a folder ID is specified, the folders' metadata and contents are returned.
 */
class PictureManagerFolderType {
    /**
     * @var int | The ID of the folder.
     */
    public $FolderID;
    /**
     * @var string | Name of the eBay Store. The name is shown at the top of the Store page.
     */
    public $Name;
    /**
     * @var \Controle\PictureManagerPictureType | Indicates whether a listing has an image associated with it.
     */
    public $Picture;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
}

