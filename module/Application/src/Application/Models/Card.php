<?php

namespace Application\Models;

class Card{
	private $value;
	private $suit;

	public function getValue(){
		return $this->value;
	}

	public function setValue($in){
		$this->value = $in;
	}

	public function getSuit(){
		return $this->suit;
	}

	public function setSuit($in){
		$this->suit = $in;
	}
}