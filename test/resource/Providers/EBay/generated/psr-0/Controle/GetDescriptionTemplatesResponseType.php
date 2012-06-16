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
	/**
	 * @param DescriptionTemplateType $val
	 * @throws Exception
	 */
	public function setDescriptionTemplate($val) {
		
		$this->DescriptionTemplate = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setLayoutTotal($val) {
		if(!is_int($val)) throw new Exception('POJO Proxy need a integer');
		$this->LayoutTotal = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setObsoleteLayoutID($val) {
		if(!is_int($val)) throw new Exception('POJO Proxy need a integer');
		$this->ObsoleteLayoutID = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setObsoleteThemeID($val) {
		if(!is_int($val)) throw new Exception('POJO Proxy need a integer');
		$this->ObsoleteThemeID = (int)$val;
	}

	/**
	 * @param ThemeGroupType $val
	 * @throws Exception
	 */
	public function setThemeGroup($val) {
		
		$this->ThemeGroup = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setThemeTotal($val) {
		if(!is_int($val)) throw new Exception('POJO Proxy need a integer');
		$this->ThemeTotal = (int)$val;
	}

}

