<?php

namespace Application\Controller;
use Zend\Mvc\Controller\AbstractActionController;
use Application\Models\Door;

class DoorController extends AbstractActionController{
	
	public function indexAction(){
		return [];
	}

    public function runDoorsAction(){
        $request = $this->getRequest();
        $post = $request->getPost();

        $number = $post->get('doorStateIndex');
        $doorOpener = $this->getServiceLocator()->get('DoorOpener');
        $doors = $doorOpener->switchDoors($number);

        return ['doors'=>$doors];
    }


}