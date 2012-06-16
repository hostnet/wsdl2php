<?php

namespace Controle;
/**
 * GetDescriptionTemplatesResponseType
 * Returned after calling GetDescriptionTemplatesRequest.
 */
class GetDescriptionTemplatesResponseType extends \Controle\AbstractResponseType {
	/**
	 * @var \Controle\DescriptionTemplateType | The information for one Theme or one Layout. There can be multiple DescriptionTemplates.
	 */
	public $DescriptionTemplate;
	/**
	 * @var int | The number of Layout templates returned (that is, the number of DescriptionTemplates for
	 * which Type is "Layout").
	 */
	public $LayoutTotal;
	/**
	 * @var int | The ID of a returned layout that is obsolete. There can be zero or more IDs.
	 */
	public $ObsoleteLayoutID;
	/**
	 * @var int | The ID of a returned theme that is obsolete. There can be zero or more IDs.
	 */
	public $ObsoleteThemeID;
	/**
	 * @var \Controle\ThemeGroupType | Data for one theme group. There can be multiple ThemeGroups in the response.
	 */
	public $ThemeGroup;
	/**
	 * @var int | The number of ThemeID elements in this group.
	 */
	public $ThemeTotal;
}

