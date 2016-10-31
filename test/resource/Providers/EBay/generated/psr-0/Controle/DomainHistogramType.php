<?php

namespace Controle;
/**
 * DomainHistogramType
 * Container for a list of Express departments, aisles, and/or products. Can contain zero,
 * one, or multiple ExpressHistogramDepartmentType objects.
 */
class DomainHistogramType {
	/**
	 * @var \Controle\ExpressHistogramDepartmentType | Contains item and product counts for a department, aisles, and/or Express product types. Only
	 * returned when HistogramDetails is configured to retrieve histogram data. Multiple Department
	 * nodes can be returned.
	 */
	public $Department;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
	/**
	 * @param ExpressHistogramDepartmentType $val
	 * @throws Exception
	 */
	public function setDepartment($val) {
		
		$this->Department = (int)$val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val) {
		
		$this->any = (int)$val;
	}

}

