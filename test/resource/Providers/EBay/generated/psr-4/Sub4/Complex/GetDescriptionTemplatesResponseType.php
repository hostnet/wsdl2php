<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetDescriptionTemplatesResponseType
 * Returned after calling GetDescriptionTemplatesRequest.
 */
class GetDescriptionTemplatesResponseType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractResponseType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\DescriptionTemplateType | The information for one Theme or one Layout. There can be multiple DescriptionTemplates.
     */
    public $descriptiontemplate;
    /**
     * @var int | The number of Layout templates returned (that is, the number of DescriptionTemplates
     * for which Type is "Layout").
     */
    public $layouttotal;
    /**
     * @var int | The ID of a returned layout that is obsolete. There can be zero or more IDs.
     */
    public $obsoletelayoutid;
    /**
     * @var int | The ID of a returned theme that is obsolete. There can be zero or more IDs.
     */
    public $obsoletethemeid;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ThemeGroupType | Data for one theme group. There can be multiple ThemeGroups in the response.
     */
    public $themegroup;
    /**
     * @var int | The number of ThemeID elements in this group.
     */
    public $themetotal;
    /**
     * @param DescriptionTemplateType $val
     * @throws Exception
     */
    public function setDescriptionTemplate($val)
    {
        $this->descriptiontemplate = (int)$val;
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
        $this->layouttotal = (int)$val;
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
        $this->obsoletelayoutid = (int)$val;
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
        $this->obsoletethemeid = (int)$val;
    }

    /**
     * @param ThemeGroupType $val
     * @throws Exception
     */
    public function setThemeGroup($val)
    {
        $this->themegroup = (int)$val;
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
        $this->themetotal = (int)$val;
    }
}
