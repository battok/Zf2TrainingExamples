<?php

namespace Application\Models;

class Employee{
	private $name;
	private $title;
	private $salary;

	public function getName(){
		return (strlen($this->name) > 0 ? $this->name : "");
	}

	public function getTitle(){
		return (strlen($this->title) > 0 ? $this->title : "");
	}

	public function getSalary(){
		return $this->salary;
	}

	public function setName($value){
		$this->name = $value;
	}
	
	public function setTitle($value){
		return $this->title = $value;
	}

	public function setSalary($value){
		return $this->salary = $value;
	}
}