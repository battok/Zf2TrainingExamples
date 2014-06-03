<?php

namespace Application\Models;

class Door{
	private $state;

	public function switchState(){
		$this->state = !$this->state;
	}

	public function isOpen(){
		return $this->state;
	}

	public function isClosed(){
		return !$this->isOpen();
	}

	public function display(){
		$closedState = '[X]';
		$openState = '[ ]';

		return ($this->isOpen()? $openState : $closedState);
	}
}