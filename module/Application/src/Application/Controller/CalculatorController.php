<?php
/**
 * Created by PhpStorm.
 * User: alex.ross
 * Date: 6/3/14
 * Time: 12:11 PM
 */

namespace Application\Controller;

use Application\Models\Equation;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\Session\Container;

class CalculatorController extends AbstractActionController {

    public function indexAction(){
        return [];
    }

    public function calculateStringAction(){
        $request = $this->getRequest();
        $equation = $this->getPreviousEquation();

        if($request->isPost() || $equation){
            $post = $request->getPost();
            if($post->get('shouldClear')){
                $this->clearPreviousEquation();
                return ['equation' => new Equation()];
            }
            $equationString = $post->get('equationInput');

            $equationFactory = $this->getServiceLocator()->get('Equation');
            if($request->isPost()){
                $equation = $equationFactory->createEquationFromString($equationString);
            }

            $calculator = $this->getServiceLocator()->get('Calculator');
            $calculator->calculate($equation);
            $this->saveEquation($equation);
        }
        return array('equation' => $equation);
    }

    private $container;
    private function getContainer(){
        if($this->container == null){
            $this->container = new Container('calculator');
        }

        return $this->container;
    }

    private function getPreviousEquation(){
        $container = $this->getContainer();
        return $container != null ? $container->equation : new Equation();
    }

    private function saveEquation($equation){
        $container = $this->getContainer();
        $container->equation = $equation;
    }

    private function clearPreviousEquation(){
        $container =$this->getContainer();
        $container->getManager()->getStorage()->clear('calculator');
    }
} 