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

class CalculatorController extends AbstractActionController {

    public function indexAction(){
        return [];
    }

    public function calculateStringAction(){
        $request = $this->getRequest();
        if(!$request->isPost()){
            return array('equation' => new Equation());
        }

        $post = $request->getPost();
        $equationString = $post->get('equationInput');

        $equationFactory = $this->getServiceLocator()->get('Equation');
        $equation = $equationFactory->createEquationFromString($equationString);

        $calculator = $this->getServiceLocator()->get('Calculator');
        $calculator->calculate($equation);

        return array('equation' => $equation);
    }

} 