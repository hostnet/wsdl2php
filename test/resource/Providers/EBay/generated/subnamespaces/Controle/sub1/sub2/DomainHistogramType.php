<?php

namespace Controle\sub1\sub2;

/**
 * DomainHistogramType
 * Container for a list of Express departments, aisles, and/or products. Can contain zero,
 * one, or multiple ExpressHistogramDepartmentType objects.
 */
class DomainHistogramType
{
	/**
	 * @var \Controle\sub1\sub2\ExpressHistogramDepartmentType | Contains item and product counts for a department, aisles, and/or Express product types. Only
	 * returned when HistogramDetails is configured to retrieve histogram data. Multiple Department
	 * nodes can be returned.
	 */
	public $department;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	/**
	 * @param ExpressHistogramDepartmentType $val
	 * @throws Exception
	 */
	public function setDepartment($val)
	{
        $this->department = (int)$val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val)
	{
        $this->any = (int)$val;
	}
}
