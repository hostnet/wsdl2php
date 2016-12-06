<?php

namespace Controle\sub1\sub2;

/**
 * GetDescriptionTemplatesResponseType
 * Returned after calling GetDescriptionTemplatesRequest.
 */
class GetDescriptionTemplatesResponseType extends
 \Controle\sub1\sub2\AbstractResponseType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\DescriptionTemplateType | The information for one Theme or one Layout. There can be multiple DescriptionTemplates.
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
	 * @var \Controle\sub1\sub2\ThemeGroupType | Data for one theme group. There can be multiple ThemeGroups in the response.
	 */
	public $ThemeGroup;
	/**
	 * @var int | The number of ThemeID elements in this group.
	 */
	public $ThemeTotal;
	// @codingStandardsIgnoreEnd

	/**
	 * @param DescriptionTemplateType $val
	 * @throws Exception
	 */
	public function setDescriptionTemplate($val)
	{
        $this->DescriptionTemplate = $val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setLayoutTotal($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->LayoutTotal = $val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setObsoleteLayoutID($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->ObsoleteLayoutID = $val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setObsoleteThemeID($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->ObsoleteThemeID = $val;
	}

	/**
	 * @param ThemeGroupType $val
	 * @throws Exception
	 */
	public function setThemeGroup($val)
	{
        $this->ThemeGroup = $val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setThemeTotal($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->ThemeTotal = $val;
	}
}
