<?php

namespace Application\Controller;
use Zend\Mvc\Controller\AbstractActionController;
use Application\Models\Door;
use Zend\Session\Container;

class DoorController extends AbstractActionController{
	
	public function indexAction(){
		return [];
	}

    public function runDoorsAction(){
        $request = $this->getRequest();
        $container = new Container();
        if($request->isPost() || $container != null){
            $post = $request->getPost();
            $number = $request->isPost() ? $post->get('doorStateIndex') : $container->doorStateIndex;

            $doorOpener = $this->getServiceLocator()->get('DoorOpener');
            $doors = $doorOpener->switchDoors($number);
            $container->doorStateIndex = $number;
        }

        return ['doors' => $doors, 'doorNumber' => $number];
    }


}