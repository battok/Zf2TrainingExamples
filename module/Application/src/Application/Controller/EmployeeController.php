<?php

namespace Application\Controller;

use Application\Models\Employee;
use Zend\Mvc\Controller\AbstractActionController;

class EmployeeController extends AbstractActionController{
	public function getEmployeeAction(){
		$employee = new Employee();

		$employee->setName('Alex');
		$employee->setTitle('Technical Coordinator');

		return array('employee' => $employee);
	}
}