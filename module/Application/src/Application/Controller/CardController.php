<?php

namespace Application\Controller;

use Application\Models\Card;
use Zend\Mvc\Controller\AbstractActionController;

class CardController extends AbstractActionController{
	public function getCardDisplayAction(){
		$card = new Card();

		$card->setValue('King');
		$card->setSuit('Spades');

		return array('card' => $card);
	}
}